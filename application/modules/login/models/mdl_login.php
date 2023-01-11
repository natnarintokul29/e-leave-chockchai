<?php
defined('BASEPATH') or exit('No direct script access allowed');

class mdl_login extends CI_Model
{
    public function __construct()
    {
        parent::__construct();
    }

    public function check_login()
    {
        if (trim($this->input->post('user_name')) && trim($this->input->post('user_password'))) {
            $user_name = trim($this->input->post('user_name'));
            $user_password = md5(trim($this->input->post('user_password')));

            //trim เช็คห้ามมีช่องว่างคำ

            $sql = $this->db->from('staff')
                ->where('username', $user_name)
                ->where('password', $user_password)
                ->where('verify', 1)
                ->where('status', 1)
                ->get();

            $number = $sql->num_rows();

            if ($number == 1) {
                $row = $sql->row();
                if (strnatcmp($user_name, $row->USERNAME) == 0) {
                    $result = array(
                        'error' => 0,
                        'data' => $sql->row()
                    );
                } else {
                    $result = array(
                        'error' => 0,
                        'text' => 'ชื่อผู้ใช้ ไม่ถูกต้อง',
                        'data' => $sql->row()
                    );
                }
            } else {
                $result = array(
                    'error' => 1,
                    'text' => 'ไม่พบข้อมูล',
                    'data' => ''
                );
            }
        } else {
            $result = array(
                'error' => 1,
                'text' => 'กรุณากรอกข้อมูลให้ครบ',
                'data' => ''
            );
        }

        return $result;
    }
}
