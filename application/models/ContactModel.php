<?php

    class ContactModel extends CI_Model {    
		 function __construct()
		{
		    // Call the Model constructor
		    parent::__construct();
		    $this->load->database();
		}
        // Get all records for list page
        function get_all($limit=NULL,$offset=NULL)                      
        {
        
            $this->db->select('id,name,patient_id,mrn_no,phone_no,status');
            $this->db->from(TBL_CONTACT); 
            $this->db->limit($limit, $offset);
            $query = $this->db->get();
            $data = $query->result();
            return $data;
        }
        function save($row){
            // $this->db->set($data);
            $this->db->insert(TBL_CONTACT,$row);
            if($this->db->affected_rows() > 0)
            return 1;
            else
            return 0;
        }
    }
       
    ?>