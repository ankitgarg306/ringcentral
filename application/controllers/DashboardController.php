<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class DashboardController extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		if(!$this->session->userdata('email')){
			redirect(site_url('login'), 'refresh');
		}
	}
	
	public function index()
	{
		$data['viewFile']='pages/dashboard';
		$this->load->view('container',$data);
	}
}
