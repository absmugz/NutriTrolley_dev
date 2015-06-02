<?php
    class Myform_model extends CI_Model {

        private $table;
        
        // Constructor
        function __construct() {

            parent::__construct();
            $this->table = "myform";
        }
        
        /**
        * Insert datas in myform
        * 
        * @param array $data
        * @return bool
        */
        function save($data = array()) {
            // Insert
            $this->db->insert($this->table, $data);
            
            // If error return false, else return inserted id
            if (!$this->db->affected_rows()) {
	        return false;
            } else {
		return $this->db->insert_id();
            }
        }
        
    }
    ?>