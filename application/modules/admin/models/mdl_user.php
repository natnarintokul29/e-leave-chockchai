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
            ->where('status', 1)
            ->get('staff');

        return $query->result();
    }

    public function get_user()
    {
        $id = $this->input->get('id');

        $query = $this->db->select('*')
            ->where('id', $id)
            ->where('status', 1)
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
            'DATE_UPDATE' =>   date('Y-m-d H:i:s'),
            'USER_UPDATE' =>   null,
        );
        $result = array();

        if ($this->input->post('id')) {
            $id = $data_array['ID'];
            $status = $data_array['STATUS'];

            $this->db->where('id', $id);
            $this->db->update('staff', $data_array);

            $result = array(
                'position' =>   $data_array['POSITION'],
                'name' =>   $data_array['NAME'],
                'last_name' =>   $data_array['LASTNAME'],

            );
        }

        return $result;
    }

    public function delete_user()
    {
        $data_array = array(
            'ID' => $this->input->post('id'),
            'DATE_UPDATE' =>   date('Y-m-d H:i:s'),
            'STATUS' =>   '0',
          
        );

        if ($this->input->post('id')) {
            $id = $data_array['ID'];

            $this->db->where('id', $id);
            // $this->db->update('staff', $data_array);

            $result = array(
                'error' =>   0,
                'text' => 'ลบสำเร็จแล้ว',
                'id' => $data_array['ID'],
            );
        }else{
            $result = array(
                'error' =>   1,
                'text' => 'ไม่พบ ID',
                'id' => null,
            );
        }

        return $result;
    }
}
