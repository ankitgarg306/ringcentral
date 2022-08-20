<?php
/*
 Author  		: Shaikh Khamaroddin 
 Start Date 	: 20 Aug 2022
 Last Modified 	: 20 Aug 2022
 File Name 		: TemplateMdel.php 
 Purpose 		: Model for message template.			 
*/

defined('BASEPATH') OR exit('No direct script access allowed');

class TemplateModel extends CI_Model
{
	function __construct()
	{

		// Call the Model constructor
		parent::__construct();
		$this->load->database();
		if (session_id() == "") session_start();
		
	}
   // Get all template messages
   function get_template_messages($limit=NULL,$offset=NULL)                      
   {
       $this->db->select('id,name,message');
       $this->db->from(TBL_MESSAGE_TEMPLATE);
       $query = $this->db->get();
       $data = $query->result_array();
       return $data;
   }
   // add message template
   function insert($row){
       $query = $this->db->insert(TBL_MESSAGE_TEMPLATE, $row);
       return ($this->db->affected_rows() > 0);
       }
}	// End of model 'TemplateModel