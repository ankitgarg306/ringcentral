<?php

    class MessageModel extends CI_Model {    
		 function __construct()
		{
		    // Call the Model constructor
		    parent::__construct();
		    $this->load->database();
		}
        // Get all messages
        function get_messages($sender_id,$user_id,$limit=NULL,$offset=NULL)                      
        {
            $where = "(sender_id={$sender_id} AND user_id={$user_id} AND msg_type=1) OR (user_id={$sender_id} AND sender_id={$user_id} AND msg_type=2)";
            $this->db->select('sender_id,user_id,msg_type,message,created_on');
            $this->db->from(TBL_MESSAGE_LOG); 
            $this->db->where($where);
            // $this->db->where('sender_id=', $sender_id);
            // $this->db->where('user_id=', $user_id);
            $this->db->limit($limit, $offset);
            $this->db->order_by("created_on", "asc");
            $query = $this->db->get();
            $data = $query->result();
            return $data;
        }
        function insert($row){
            
            // $this->db->set($data);
            // $this->db->insert(TBL_CONTACT,$row);
            $query = $this->db->insert(TBL_MESSAGE_LOG, $row);
            return ($this->db->affected_rows() > 0);
            }
            
            // Get all messages
        function get_chat_users($sender_id,$limit=NULL,$offset=NULL)                      
        {
            // $where = "(sender_id={$sender_id} AND  (msg_type=1 OR msg_type=2))";
            $SQL = "(SELECT contact.id, contact.patient_id,contact.firstname,contact.lastname, message, MAX(message_log.created_on) AS CreationDate FROM message_log 
            INNER JOIN contact ON contact.id = message_log.user_id
            WHERE sender_id={$sender_id} 
            GROUP BY user_id ORDER BY CreationDate DESC)";
            $query = $this->db->query($SQL);
            $data = $query->result();
            return $data;
        }
    }
       
    ?>