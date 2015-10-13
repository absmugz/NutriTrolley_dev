<?php
/*
class Thumbnailcrop_model extends CI_Model {
	function __construct()
	{
		parent::__construct();
	}
	function SaveForm($form_data)
	{
		$this->db->insert('thumbnailcrop_table', $form_data);
		if ($this->db->affected_rows() == '1')
		{
			return TRUE;
		}
		return FALSE;
	}
}*/

class User_profile_picture_model extends MY_Model { 
    public $_table = 'users_profile_picture';
}
?>