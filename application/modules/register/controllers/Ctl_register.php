<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Ctl_register extends MY_Controller {

    public function __construct()
    {
        parent::__construct();
        $this->load->helper('url', 'form');
        $this->load->model('mdl_register');
    }

	public function index()
	{
       	
        $this->load->view('register');
	}

    /**
     * 
     * * CRUD
     * register staff
     * 
     */
	public function insert_data_staff()
	{
        /* position: 
        programmer
        name: 
        ออม
        lastname: 
        โตกุล
        input_username: 
        ออม
        input_password: 
        12345 */
        $array_text_error = array(
            'position'  => 'ตำแหน่ง',
            'name'  => 'ชื่อ',
            'lastname'  => 'นามสกุล',
            'input_username'  => 'ชื่อรหัสผ่าน',
            'input_password'  => 'รหัสผ่าน'
        );
        
        if ($this->input->server('REQUEST_METHOD') == 'POST') {
            $request = $this->input->post();

            $count_array = count($request);
            // echo "<pre>";
            // print_r($count_array);die;
            if($count_array){

                // ตรวจสอบ error
                foreach($request as $key => $value){
                    if(!$value){
                        $result = array(
                            'error' => 1,
                            'txt'   => 'โปรดระบุ '. $array_text_error[$key],
                        );

                        echo json_encode($result);
                        exit;  //จะใช้  exit; หรือ die; ก็ได้  (หยุดทำงาน)
                    }
                }

                // ตรวจสอบ username
                $sql = $this->db->from('staff')
                ->where('username',trim($request['input_username']))
                ->get();
                $num = $sql->num_rows();
                if($num){
                    $result = array(
                        'error' => 1,
                        'txt'   => 'ไม่สามารถใช้ชื่อรหัสนี้ได้'
                    );

                    echo json_encode($result);
                    exit;
                }

                // นำค่าลงฐานข้อมูล
                $data_insert = array(
                    'position'  => trim($request['position']),
                    'name'      => trim($request['name']),
                    'lastname'  => trim($request['lastname']),
                    'username'  => trim($request['input_username']),
                    'password'  => md5(trim($request['input_password'])),
                );
                $this->db->insert('staff',$data_insert);
                $new_id = $this->db->insert_id();
                if($new_id){
                    $result = array(
                        'error' => 0,
                        'txt'   => 'ลงทะเบียนสำเร็จ'
                    );

                    echo json_encode($result);
                    exit;
                }
            }
            


            $result = array(
                'error' => 1,
                'txt'   => 'ไม่พบข้อมูล'
            );

            echo json_encode($result);
            exit;

        }
	}
	public function update_data()
	{
        if ($this->input->server('REQUEST_METHOD') == 'POST') {

            $returns = $this->mdl_register->update_data_login();

            echo $returns;
        } else {
            echo "no";
        }
	}
	public function delete_data()
	{
        if ($this->input->server('REQUEST_METHOD') == 'POST') {

            $returns = $this->mdl_register->delete_data_login();

            echo $returns;
        } else {
            echo "no";
        }
	}
}
