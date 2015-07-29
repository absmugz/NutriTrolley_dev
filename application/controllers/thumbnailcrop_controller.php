<?php
class Thumbnailcrop_controller extends CI_Controller {
	private $custom_errors = array();
	function __construct()
	{
 		parent::__construct();
		$this->load->library('form_validation');
		$this->load->database();
		$this->load->helper('form');
		$this->load->helper('url');
		$this->load->model('thumbnailcrop_model');
	}	
	function index()
	{
            
            $data['main_content'] = 'thumbnailcrop';
            $this->load->view('includes/template', $data);
            
            /*
			$this->profile_picture="";
		if(@$_FILES['profile_picture']['name']!=""){
			$config['upload_path'] = './uploads/';
			$config['allowed_types'] = 'jpeg|png|gif';
			$config['encrypt_name'] = FALSE;
			$config['remove_spaces'] = TRUE;
			$config['max_size']	= '2048';
			$this->upload_file($config,'profile_picture');
			$this->form_validation->set_rules('profile_picture', 'profile_picture', 'callback_check_file[profile_picture]');
		}
			
		$this->form_validation->set_error_delimiters('<br /><span class="error">', '</span>');
	
		if ($this->form_validation->run() == FALSE) // validation hasn't been passed
		{
			//$this->load->view('header');
			//$this->load->view('thumbnailcrop');
			//$this->load->view('footer');
                        
                        $data['main_content'] = 'thumbnailcrop';
        $this->load->view('includes/template', $data);
		}
		else // passed validation proceed to post success logic
		{
		 	// build array for the model
			
			$form_data = array(
					       	'profile_picture' => @$this->profile_picture
						);
					
			// run insert model to write data to db
		
			if ($this->thumbnailcrop_model->SaveForm($form_data) == TRUE) // the information has therefore been successfully saved in the db
			{
				redirect('thumbnailcrop_controller/success');   // or whatever logic needs to occur
			}
			else
			{
			echo 'An error occurred saving your information. Please try again later';
			// Or whatever error handling is necessary
			}
		}*/
	}
        
        	function thumbnailCropped()
	{
		//$thumbnailCropped = json_decode($this->input->post('profile_pic_values'));
        
$error					= false;

$absolutedir			= dirname(__FILE__);
$dir					= '/uploads/';
$serverdir				= $absolutedir.$dir;
$filename				= array();

$json				= json_decode($this->input->post('profile_pic_values'));
$tmp					= explode(',',$json->data);
$imgdata 				= base64_decode($tmp[1]);
	
$extensiontempvar = explode('.',$json->name);
$extension				= strtolower(end($extensiontempvar));
$fname					= substr($json->name,0,-(strlen($extension) + 1)).'.'.substr(sha1(time()),0,6).'.'.$extension;
	
	
$handle					= fopen($serverdir.$fname,'w');
fwrite($handle, $imgdata);
fclose($handle);
	
$filename[]				= $fname;
var_dump($fname);die();
                
}
        
        
	public  function check_file($field,$field_value)
	{
		if(isset($this->custom_errors[$field_value]))
		{
			$this->form_validation->set_message('check_file', $this->custom_errors[$field_value]);
			unset($this->custom_errors[$field_value]);
			return FALSE;
		}
		return TRUE;
	}
	function upload_file($config,$fieldname)
	{
		$this->load->library('upload');
		$this->upload->initialize($config);
		$this->upload->do_upload($fieldname);
		$error = $this->upload->display_errors();
		if(empty($error))
		{
			$data = $this->upload->data();
			$this->$fieldname = $data['file_name'];
		}
		else
		{
			$this->custom_errors[$fieldname] = $error;
		}
	}
	
	function success()
	{
		$this->load->view("header");
		$this->load->view("success");
		$this->load->view("footer");
	}
        
        
}
?>