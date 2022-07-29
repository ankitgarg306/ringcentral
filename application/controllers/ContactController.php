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
		$this->load->view('body/sidebar');

		$this->load->view('contact',$data);
		$this->load->view('include/footer');
	}

	// get table for ajax serverside datatable
	function getDataTable($flag = 'x')
	{
		// storing  request (ie, get/post) global array to a variable
		$requestData = $_REQUEST;
		$totalData = 0;
		$totalFiltered = 0;

		
		$data = $this->ContactModel->get_all();
		$json_data = array(
			"draw" => intval($requestData['draw']) , 
			"recordsTotal" => intval($totalData) , 
			"recordsFiltered" => intval($totalFiltered) ,
			"records" => $data
		);
        // send data as json data for ajax request
		echo json_encode($json_data); 
	}

}
