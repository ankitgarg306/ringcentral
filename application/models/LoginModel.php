<?php
/*
 Author  		: Shaikh Khamaroddin 
 Start Date 	: 17 Aug 2022
 Last Modified 	: 17 Aug 2022
 File Name 		: LoginModel.php 
 Purpose 		: Model for user authentication.			 
*/
class LoginModel extends CI_Model
{
// Schoolmodel for school data CRUD
	function __construct()
	{

		// Call the Model constructor
		parent::__construct();
		$this->load->database();
		if (session_id() == "") session_start();
		
	}

// Login function for user authentication
	function login_user($email, $pass)				
	{
		$array = array(
			'email' => $email,
            'password' => $pass
		);
		$this->db->select('id,last_name,email,first_name,role_type,status');
		$this->db->from(TBL_USERS);
		$this->db->where($array);
		$query = $this->db->get()->row_array();
		if (!empty($query))
		{
			if ($query['status'] ==1 )
			{
				return $query;
			}
			else
			{
				return FALSE;
			}
		}
	}
	
// Function to Check auth for user access
	function checkAuth()					
	{
	
		if ($this->session->userdata('email'))
		{
			return True;
		}
		else
		{
			
			redirect(site_url('LoginController'));
		}
	}
}	// End of model 'LoginModel'