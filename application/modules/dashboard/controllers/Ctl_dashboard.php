<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Ctl_dashboard extends MY_Controller {

	public function __construct()
    {
        parent::__construct();

        $this->middleware();
		
    }

	public function index()
	{
		$this->template->set_layout('dashboard_layouts');
        $this->template->title('ใบลาออนไลน์');	
        $this->template->build('dashboard');
	}
}
