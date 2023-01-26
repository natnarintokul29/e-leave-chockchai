<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Mdl_register extends CI_Model

{

    public function __construct()
    {
        parent::__construct();
    }

    public function get_data_staff()
    {
        $query = $this->db->select('*')
            ->where('verify is null')
            ->where('status', 1)
            ->get('staff');

        return $query->result();
    }

    public function update_verify()
    {
        $result = '';
        if ($this->input->post('id')) {
            

            $sql = $this->db->select('ID')
                ->from('employee')
                ->where('NAME', $this->input->post('name'))
                ->where('LASTNAME', $this->input->post('lastname'));
            $q = $sql->get();

            $num = $q->num_rows();

            if ($num) {
                $r = $q->row();
                $result = array(
                    'error' => 0,
                    'text' =>  "รายชื่อถูกต้อง",
                );

                $data_update = array(
                    'verify' => 1,
                    'employee_id' => $r->ID	,
                );
                $this->db->where('id', $this->input->post('id'));
                $this->db->update('staff', $data_update);

                // keep log
                log_data(array('update', 'update', $this->db->last_query()));
            } else {
                $result = array(
                    'error' => 1,
                    'text' =>  "ไม่มีรายชื่อนี้ในระบบ",
                );
            }


            return $result;
        }
    }
}
