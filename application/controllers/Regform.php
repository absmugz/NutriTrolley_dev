<?php
class Regform extends CI_Controller {
	private $custom_errors = array();
	function __construct()
	{
 		parent::__construct();
		$this->load->library('form_validation');
		$this->load->database();
		$this->load->helper('form');
		$this->load->helper('url');
		$this->load->model('myform_model');
	}	
	function index()
	{			
		$this->form_validation->set_rules('first_name', 'first_name', 'required|max_length[255]');			
		$this->form_validation->set_rules('surname', 'surname', 'required|max_length[255]');			
		$this->form_validation->set_rules('username', 'username', 'required|max_length[255]');			
		$this->form_validation->set_rules('your_email', 'your_email', 'required|max_length[255]');			
		$this->form_validation->set_rules('password', 'password', 'required|max_length[255]');			
		$this->form_validation->set_rules('select_1', 'select_1', 'required|max_length[255]');			
		$this->form_validation->set_rules('select_2', 'select_2', 'max_length[255]');			
		$this->form_validation->set_rules('select_3', 'select_3', 'max_length[255]');
			$this->profile_pic="";
		if(@$_FILES['profile_pic']['name']!=""){
			$config['upload_path'] = './uploads//';
			$config['allowed_types'] = 'jpeg|png|gif';
			$config['encrypt_name'] = FALSE;
			$config['remove_spaces'] = TRUE;
			$config['max_size']	= '2048';
			$this->upload_file($config,'profile_pic');
			$this->form_validation->set_rules('profile_pic', 'profile_pic', 'callback_check_file[profile_pic]');
		}
			
		$this->form_validation->set_error_delimiters('<br /><span class="error">', '</span>');
	
		if ($this->form_validation->run() == FALSE) // validation hasn't been passed
		{
			$this->load->view('header');
			$this->load->view('reg_form');
			$this->load->view('footer');
		}
		else // passed validation proceed to post success logic
		{
		 	// build array for the model
			
			$form_data = array(
					       	'first_name' => $this->input->post('first_name'),
					       	'surname' => $this->input->post('surname'),
					       	'username' => $this->input->post('username'),
					       	'your_email' => $this->input->post('your_email'),
					       	'password' => $this->input->post('password'),
					       	'select_1' => $this->input->post('select_1'),
					       	'select_2' => $this->input->post('select_2'),
					       	'select_3' => $this->input->post('select_3'),
					       	'profile_pic' => $this->profile_pic
						);
					
			// run insert model to write data to db
		
			if ($this->myform_model->SaveForm($form_data) == TRUE) // the information has therefore been successfully saved in the db
			{
				redirect('Regform/success');   // or whatever logic needs to occur
			}
			else
			{
			echo 'An error occurred saving your information. Please try again later';
			// Or whatever error handling is necessary
			}
		}
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