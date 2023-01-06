<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Ctl_login extends MY_Controller {

    public function __construct()
    {
        parent::__construct();
        $this->load->helper('url', 'form');
        $this->load->model('mdl_login');
    }

	public function index()
	{
       	
        $this->load->view('login');
	}

    /**
     * 
     * * CRUD
     * register staff
     * 
     */
	public function insert_data_staff()
	{
        /* <pre>Array
            (
                [data] => position=programmer&name_eng=&lastname_eng=&name_th=&lastname_th=&input_username=lll&input_password=2555
            ) */
            echo "<pre>";
            print_r($this->input->post('data'));
echo "<br>";
// $url_components = parse_url($this->input->post('data'));
// parse_str($url_components['query'], $params);

$test = urldecode(http_build_query($this->input->post()));
            echo "test=";
            print_r($test);

            $request = $this->input->post('data');
            echo $request['position']."==position";
            die;
        if ($this->input->server('REQUEST_METHOD') == 'POST') {

            // $returns = $this->mdl_login->insert_data_staff();
            
            


            echo $returns;
        } else {
            echo "no";
        }
	}
	public function update_data()
	{
        if ($this->input->server('REQUEST_METHOD') == 'POST') {

            $returns = $this->mdl_login->update_data_login();

            echo $returns;
        } else {
            echo "no";
        }
	}
	public function delete_data()
	{
        if ($this->input->server('REQUEST_METHOD') == 'POST') {

            $returns = $this->mdl_login->delete_data_login();

            echo $returns;
        } else {
            echo "no";
        }
	}
}
