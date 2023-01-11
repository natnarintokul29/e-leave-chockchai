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
     * * 
     * login staff
     * 
     */

     public function check_login()
	{
        $result = array();
        if ($this->input->server('REQUEST_METHOD') == 'POST') {

            $result = $this->mdl_login->check_login();
        } 

        echo json_encode($result);
	}

}
