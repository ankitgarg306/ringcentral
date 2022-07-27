<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class ContactController extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		error_reporting(E_ALL);
		$this->load->model('ContactModel');
	}
	
	public function index()
	{ 
		$data['all_contacts'] = $this->ContactModel->get_all();
		$this->load->view('include/header');
		$this->load->view('contact',$data);
		$this->load->view('include/footer');
	}
}
