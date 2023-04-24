<?php
defined('BASEPATH') or exit('No direct script access allowed');

class mdl_register extends CI_Model
{
    public function __construct()
    {
        parent::__construct();
    }

    //     public function insert_data_login()
    //     {

    //     }
    public function get_data_register()
    {
        // $q_check_staff = $this->db->select('*')->from('staff');
        // $q_staff = $q_check_staff->get();
        // $staff = $q_staff->result();


        // foreach ($staff as $rows) {

        $query = $this->db->select('employee.*')
            ->from('employee')
            ->join('staff', 'employee.id=staff.employee_id', 'left')
            ->where('staff.employee_id is null');
        // echo $this->db->get_compiled_select();
        // ->where('(id !=' . $rows->EMPLOYEE_ID . ' and status = 1)')
        $get =     $query->get();
        $result =  $get->result();

        //echo "<pre>";
        // print_r($result);
        return $result;
        // }
    }
}
