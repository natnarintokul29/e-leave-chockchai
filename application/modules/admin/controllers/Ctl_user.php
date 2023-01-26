<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Ctl_user extends MY_Controller
{
    public $test;

    public function __construct()
    {
        parent::__construct();

        $this->load->model('mdl_user');

        $this->middleware();
        
    }

    public function index()
    {
        $sql_owner = $this->db->from('employee')->where('status', 1)->get();

        $data = array(
            'sql_owner' => $sql_owner->result()
        );

        $this->template->set_layout('admin_users_layouts');
        $this->template->title('ผู้ใช้งาน');
        $this->template->build('users',$data);
    }

    public function insert_data_staff()
	{
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
                    'verify' => 1
                );
                $this->db->insert('staff',$data_insert);
                $new_id = $this->db->insert_id();
                if($new_id){
                    $result = array(
                        'error' => 0,
                        'txt'   => 'ลงทะเบียนสำเร็จ'
                    );
                 
                    log_data(array('insert','insert',''));

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

    public function delete_user()
    {
        $data = $this->mdl_user->delete_user();
       $result = array(
        'data' => $data
       );
       
       echo json_encode($result);
    }

}
