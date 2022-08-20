<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class TemplateController extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
        error_reporting(E_ALL);		
        $this->load->library('form_validation'); 
		$this->load->helper('url', 'form');
		$this->load->model('TemplateModel');

	}
	
	public function index()
	{ 
		$data['all_templates'] = $this->TemplateModel->get_template_messages();
		$data['viewFile']='pages/template';
		$this->load->view('container',$data);
	}

	public function insert()
	{ 
        $template_name = $this->input->post('template_name');
		$template_message = $this->input->post('template_message');

		$this->form_validation->set_rules('template_message', 'Template Name', 'trim|required|min_length[5]|max_length[200]','required');
		$this->form_validation->set_rules('template_name', 'Template Message', 'trim|required','required');
		if ($template_name != "" && $template_message != "")
		{
			if ($this->form_validation->run() == FALSE)
			{
					
				redirect(site_url('TemplateController'));

			}
            $row =array(
                'name' =>$template_name,
                'message' => $template_message,
                "created_on" => date('Y-m-d H:i:s'),
                "modified_on" => date('Y-m-d H:i:s')
            );
			$insertFlag = $this->TemplateModel->insert($row);
		
			if ($insertFlag)
			{
				$this->session->set_flashdata('template_success', 'Template added successfully');
				redirect(site_url('TemplateController'));
			}
		}
        else
        {
            $this->session->set_flashdata('template_error', 'Template name or message is Blank!');
            echo '<script>console.log("blank Template name or message ")</script>';
            redirect(site_url('TemplateController'));
        }

	}

	public function get_templates()     // ajax request
	{ 
		$data = $this->TemplateModel->get_template_messages();
		//add the header here
		header('Content-Type: application/json');
		echo json_encode($data);

	}
}