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
        
            $this->db->select('id,firstname,lastname,patient_id,mrn_no,phone_no,status');
            $this->db->from(TBL_CONTACT); 
            $this->db->limit($limit, $offset);
            $query = $this->db->get();
            $data = $query->result();
            return $data;
        }
        function save($row){
            // $this->db->set($data);
            // $this->db->insert(TBL_CONTACT,$row);
            $insert_query = $this->db->insert_string(TBL_CONTACT, $row);
            $insert_query = str_replace('INSERT INTO','INSERT IGNORE INTO',$insert_query);
            $this->db->query($insert_query);
            return ($this->db->affected_rows() > 0);
            }
    }
       
    ?>