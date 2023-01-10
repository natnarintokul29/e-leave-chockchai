<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Ctl_register extends MY_Controller
{

    public function __construct()
    {
        parent::__construct();

        $this->load->model('mdl_register');
    }

    public function index()
    {
        $this->template->set_layout('admin_register_layouts');
        $this->template->title('ลงทะเบียน');
        $this->template->build('register');
    }

    public function fetch_data()
    {
        $data = $this->mdl_register->get_data_staff();

        $data_result = [];

        if ($data) {
            foreach ($data as $row) {
                $sub_data = [];

                $sub_data['ID'] = $row->ID;
                $sub_data['POSITION'] = $row->POSITION;
                $sub_data['NAME'] = $row->NAME;
                $sub_data['LASTNAME'] = $row->LASTNAME;
                $sub_data['USERNAME'] = $row->USERNAME;
                $sub_data['DATE_START'] = $row->DATE_START;
                $sub_data['VERIFY'] = $row->VERIFY;

                $data_result[] = $sub_data;
            }
        }

        $result = array(
            "recordsTotal"      =>     count($data),
            "recordsFiltered"   =>     count($data),
            "data"              =>     $data_result
        );

        echo json_encode($result);
    }

    public function update_verify()
    {
        $verify = $this->mdl_register->update_verify();
        if ($verify) {
            $error = 0;
            $message = 'ยืนยันตัวตนแล้ว ';
        } else {
            $error = 1;
            $message = 'ไม่พบ ID ';
        }
        $result = array(
            'error' => $error,
            'message' => $message
        );
        echo json_encode($result);
    }
}
