<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class ChatController extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		error_reporting(E_ALL);
		$this->load->model('ContactModel');
		$this->load->model('MessageModel');

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

	public function insert()
	{ 
		$message = $_POST;
		$insertFlag = $this->MessageModel->insert($message);
		if($insertFlag!=true){
			die('error in save');
		}
		die('success save');

	}

	public function loadmessages()
	{ 
		$sender_id = $_POST['sender_id'];
		$user_id = $_POST['user_id'];
		$data = $this->MessageModel->get_messages($sender_id,$user_id);
		//add the header here
		header('Content-Type: application/json');
		echo json_encode($data);

	}
}