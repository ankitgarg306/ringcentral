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
		$this->load->view('body/userheader');
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

	public function import_csv() {
        $this->load->library('Csvimport');
        //Check file is uploaded in tmp folder
        if (is_uploaded_file($_FILES['file']['tmp_name'])) {
            //validate whether uploaded file is a csv file
            $csvMimes = array('text/x-comma-separated-values', 'text/comma-separated-values', 'application/octet-stream', 'application/vnd.ms-excel', 'application/x-csv', 'text/x-csv', 'text/csv', 'application/csv', 'application/excel', 'application/vnd.msexcel', 'text/plain');
            $mime = get_mime_by_extension($_FILES['file']['name']);
            $fileArr = explode('.', $_FILES['file']['name']);
            $ext = end($fileArr);
            if (($ext == 'csv') && in_array($mime, $csvMimes)) {
                $file = $_FILES['file']['tmp_name'];
                $csvData = $this->csvimport->get_array($file);
                $headerArr = array("Name", "Email", "Phone", "Patient","Mrn","Status");
                if (!empty($csvData)) {
                    //Validate CSV headers
                    $csvHeaders = array_keys($csvData[0]);
                    $headerMatched = 1;
                    foreach ($headerArr as $header) {
                        if (!in_array(trim($header), $csvHeaders)) {
                            $headerMatched = 0;
                        }
                    }
                    if ($headerMatched == 0) {
                        $this->session->set_flashdata("error_msg", "CSV headers are not matched.");
                        // redirect('Employees_Controller/listing'); // redirectpage
                    } else {
                        foreach ($csvData as $row) {
                            $patient_data = array(
                                "name" => $row['Name'],
                                "email" => $row['Email'],
                                "phone_no" => $row['Phone'],
                                "patient_id" => $row['Patient'],
                                "mrn_no" => $row['Mrn'],
                                "status" => $row['Status'],
                                "created_on" => date('Y-m-d H:i:s'),
                                "modified_on" => date('Y-m-d H:i:s')
                            );
                            $this->ContactModel->save($patient_data);
                        }
                        $this->session->set_flashdata("success_msg", "CSV File imported successfully.");
                        redirect('ContactController'); // redirectpage
                    }
                }
            } else {
                $this->session->set_flashdata("error_msg", "Please select CSV file only.");
				redirect('ContactController'); // redirectpage

            }
        } else {
            $this->session->set_flashdata("error_msg", "Please select a CSV file to upload.");
			redirect('ContactController'); // redirectpage

        }
    }

}
