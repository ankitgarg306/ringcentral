<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class ChatController extends CI_Controller {

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
		$this->load->view('body/sidebar');
		$this->load->view('body/userheader');
		$this->load->view('chat',$data);
		$this->load->view('include/footer');
	}

}
