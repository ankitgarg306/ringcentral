<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class ChatController extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		error_reporting(E_ALL);
	}
	
	public function index()
	{ 	$this->load->view('include/header');
		$this->load->view('body/sidebar');
		$this->load->view('body/userheader');
		$this->load->view('chat');
		$this->load->view('include/footer');
	
	}

}
