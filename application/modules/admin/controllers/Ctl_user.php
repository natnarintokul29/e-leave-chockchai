<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Ctl_user extends MY_Controller
{

    public function __construct()
    {
        parent::__construct();

        $this->load->model('mdl_user');
    }

    public function index()
    {
        $this->template->set_layout('admin_users_layouts');
        $this->template->title('ผู้ใช้งาน');
        $this->template->build('users');
    }

    public function fetch_data()
    {
        $data = $this->mdl_user->get_data_staff();
        $data_result= [];
        if($data){
            foreach($data as $row){
                $sub_data = [];

                $sub_data['ID'] = $row->ID;
                $sub_data[] = $row->POSITION;
                $sub_data[] = $row->NAME;
                $sub_data[] = $row->LASTNAME;
                $sub_data[] = $row->USERNAME;
                $sub_data[] = $row->DATE_START;
                $sub_data[] = $row->VERIFY;

                $data_result[] = $sub_data;
            }
        }
       $result = array(
        'data' => $data_result
       );

       echo json_encode($result);
    }

    public function get_user()
    {
        $data = $this->mdl_user->get_user();
       $result = array(
        'data' => $data
       );
       echo json_encode($result);
    }

    public function update_user()
    {
        $data = $this->mdl_user->update_user();
       $result = array(
        'data' => $data
       );
       
       echo json_encode($result);
    }

}
