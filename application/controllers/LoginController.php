<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class LoginController extends CI_Controller {

	// Constructor
	function __construct()								
	{
		parent::__construct();
		$this->load->library('form_validation'); 
		$this->load->helper('url', 'form');
		$this->load->model('LoginModel');
		$this->load->library('session');
		error_reporting(E_ALL);

		// $this->load->model('LoginModel');
	}

	public function index()
	{
		$this->load->view('pages/login');
	}

	// User login function
	function login()										
	{
		$email = $this->input->post('email');
		$pass = md5($this->input->post('password'));
		$this->form_validation->set_rules('password', 'Password', 'trim|required|min_length[5]|max_length[25]','required');
		$this->form_validation->set_rules('email', 'Email', 'trim|required|valid_email','required');
		if ($email != "" && $pass != "")
		{
			if ($this->form_validation->run() == FALSE)
			{
					
				redirect(site_url('LoginController'));

			}
			$res = $this->LoginModel->login_user($email, $pass);
		
			if ($res)
			{
				// adding data to session
				$sessiondata = array( 
					'firstname' => $res['first_name'],
					'lastname'  => $res['last_name'],
					'email'     => $res['email'],
					'usertype'  => $res['role_type']==1?'Admin':'User',
					'user_id'   => $res['id'],
					'logged_in' => TRUE
				 );  
				 
				 $this->session->set_userdata($sessiondata);
				redirect(site_url('DashboardController'));
			}
			else
			{
				$this->session->set_flashdata('login_error', 'Incorrect Username or Password!');
				redirect(site_url('LoginController'));
			}
		}
		else
		{
			$this->session->set_flashdata('login_error', 'Username or Password is Blank!');
			echo '<script>console.log("blank username or password")</script>';
			redirect(site_url('LoginController'));
		}
	}
	
// Logout function
	function logout()										
	{
		session_destroy();
		redirect(site_url('LoginController'));
	}
}
