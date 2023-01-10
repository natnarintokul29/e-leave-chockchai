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
            ->get('staff');

        return $query->result();
    }

    public function update_verify()
    {
        $result = '';
        if($this->input->post('id')){
            $data_update = array(
                'verify' => 1,
            );
            $this->db->where('id', $this->input->post('id'));
            $this->db->update('staff', $data_update);

            $result = $this->input->post('id');
        }

        return $result;
    }
}
