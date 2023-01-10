<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Mdl_user extends CI_Model

{

    public function __construct()
    {
        parent::__construct();
    }

    public function get_data_staff()
    {
        $query = $this->db->select('*')
            ->where('verify', '1')
            ->get('staff');

        return $query->result();
    }

    public function get_user()
    {
        $id = $this->input->get('id');

        $query = $this->db->select('*')
            ->where('id', $id)

            ->get('staff');

        return $query->row();
    }

    public function update_user()
    {
        $data_array = array(
            'ID' => $this->input->post('id'),
            'POSITION' => $this->input->post('position'),
            'NAME' => $this->input->post('name'),
            'LASTNAME' => $this->input->post('lastname'),
        );

        if ($this->input->post('id')) {
            $id = $data_array['ID'];

            $this->db->where('id', $id);
            $this->db->update('staff', $data_array);
        }

        return true;
    }
}
