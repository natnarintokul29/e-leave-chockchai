<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Event_calendars extends MY_Controller {

    public function __construct()
    {
        parent::__construct();
        $this->load->helper('url', 'form');
        $this->load->model('mdl_calendar');
        $this->load->library('image');

        $this->middleware();
    }

	public function index()
	{
        // echo "<pre>";
        // print_r($this->session->userdata());
        $data['leave_type'] = $this->mdl_calendar->get_data_leave_type();
        $data['time_s_e'] = $this->mdl_calendar->get_data_time_s_e();    
        $data['emp'] = $this->mdl_calendar->get_data_emp();
        $data['leave'] = $this->mdl_calendar->get_data_leave();
        $data['calendar'] = $this->mdl_calendar->get_data_calendar_user_staff();


		$this->template->set_layout('calendar_layouts');
        $this->template->title('ใบลาออนไลน์');	
        $this->template->build('calendar', $data);
	}

    public function get_data()
    {
        $result = $this->mdl_calendar->get_data_calendar();

        $data = [
            "result" => $result,

        ];
        // echo "<pre>";
        // echo print_r($data);
        echo json_encode($data);
    }


    public function insert_data()
    {
        if ($this->input->server('REQUEST_METHOD') == 'POST') {

            $returns = $this->mdl_calendar->insert_data_calendar();

            echo $returns;
        } else {
            echo "no";
        }
    }

    public function update_data()
    {
        # code...
        if ($this->input->server('REQUEST_METHOD') == 'POST') {
            // print_r($this->input->post());die;
            $returns = $this->mdl_calendar->update_data_calendar();

            echo $returns;   //จะส่งค่ากลับไปที่ view->table_data  ตรงส่วนนี้ jquery .then(res => res.json())  
        } else {
            echo "no";
        }
    }

    public function delete_data()
    {
        # code...
        if ($this->input->server('REQUEST_METHOD') == 'POST') {
            // print_r($this->input->post());die;
            $returns = $this->mdl_calendar->delete_data_calendar();

            echo $returns;   //จะส่งค่ากลับไปที่ view->table_data  ตรงส่วนนี้ jquery .then(res => res.json())  
        } else {
            echo "no";
        }
    }
    public function delete_image_data()
    {
        # code...
        if ($this->input->server('REQUEST_METHOD') == 'POST') {
            // print_r($this->input->post());die;
            $returns = $this->mdl_calendar->delete_image_data();

            echo $returns;   //จะส่งค่ากลับไปที่ view->table_data  ตรงส่วนนี้ jquery .then(res => res.json())  
        } else {
            echo "no";
        }
    }
}
