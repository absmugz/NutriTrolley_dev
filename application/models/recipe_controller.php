<?php
class Recipe_controller extends CI_Controller {
	private $custom_errors = array();
	function __construct()
	{
 		parent::__construct();
		$this->load->library('form_validation');
		$this->load->database();
		$this->load->helper('form');
		$this->load->helper('url');
		$this->load->model('recipe_model');
	}	
	function index()
	{			
		$this->form_validation->set_rules('recipe_name', 'recipe name', 'required|trim|xss_clean|max_length[255]');
			$this->thumbnail="";
		if(@$_FILES['thumbnail']['name']!=""){
			$config['upload_path'] = './uploads/';
			$config['allowed_types'] = 'jpeg|png|gif';
			$config['encrypt_name'] = FALSE;
			$config['remove_spaces'] = TRUE;
			$config['max_size']	= '2048';
			$this->upload_file($config,'thumbnail');
			$this->form_validation->set_rules('thumbnail', 'thumbnail', 'callback_check_file[thumbnail]');
		}
			$this->main_image_1="";
		if(@$_FILES['main_image_1']['name']!=""){
			$config['upload_path'] = './uploads/';
			$config['allowed_types'] = 'jpeg|png|gif';
			$config['encrypt_name'] = FALSE;
			$config['remove_spaces'] = TRUE;
			$config['max_size']	= '2048';
			$this->upload_file($config,'main_image_1');
			$this->form_validation->set_rules('main_image_1', 'main_image_1', 'callback_check_file[main_image_1]');
		}
			$this->main_image_2="";
		if(@$_FILES['main_image_2']['name']!=""){
			$config['upload_path'] = './uploads/';
			$config['allowed_types'] = 'jpeg|png|gif';
			$config['encrypt_name'] = FALSE;
			$config['remove_spaces'] = TRUE;
			$config['max_size']	= '2048';
			$this->upload_file($config,'main_image_2');
			$this->form_validation->set_rules('main_image_2', 'main_image_2', 'callback_check_file[main_image_2]');
		}
			$this->main_image_3="";
		if(@$_FILES['main_image_3']['name']!=""){
			$config['upload_path'] = './uploads/';
			$config['allowed_types'] = 'jpeg|png|gif';
			$config['encrypt_name'] = FALSE;
			$config['remove_spaces'] = TRUE;
			$config['max_size']	= '2048';
			$this->upload_file($config,'main_image_3');
			$this->form_validation->set_rules('main_image_3', 'main_image_3', 'callback_check_file[main_image_3]');
		}			
		$this->form_validation->set_rules('no_of_servings', 'No. of servings', 'required|trim|xss_clean|max_length[255]');			
		$this->form_validation->set_rules('preparation_time', 'Preparation time', 'required|trim|xss_clean|is_numeric|max_length[255]');			
		$this->form_validation->set_rules('cooking_time', 'Cooking time', 'required|trim|xss_clean|is_numeric|max_length[255]');			
		$this->form_validation->set_rules('ready_to_eat_in', 'Ready to eat in', 'required|trim|xss_clean|is_numeric|max_length[255]');			
		$this->form_validation->set_rules('difficulty_level', 'Difficulty level', 'required|trim|xss_clean|max_length[255]');			
		$this->form_validation->set_rules('ingredients', 'Ingredients', 'required|trim|xss_clean');			
		$this->form_validation->set_rules('ingredients_excluded', 'Ingredients excluded', 'required|trim|xss_clean');			
		$this->form_validation->set_rules('shopping', 'shopping', 'required|trim|xss_clean|max_length[255]');			
		$this->form_validation->set_rules('shopping_date', 'shopping_date', 'required|trim|xss_clean');			
		$this->form_validation->set_rules('directions', 'Directions:', 'required|trim|xss_clean|max_length[255]');			
		$this->form_validation->set_rules('chefs_notes', 'Chef’s notes:', 'required|trim|xss_clean');
			
		$this->form_validation->set_error_delimiters('<br /><span class="error">', '</span>');
	
		if ($this->form_validation->run() == FALSE) // validation hasn't been passed
		{
			$this->load->view('header');
			$this->load->view('recipe');
			$this->load->view('footer');
		}
		else // passed validation proceed to post success logic
		{
		 	// build array for the model
			
			$form_data = array(
					       	'recipe_name' => @$this->input->post('recipe_name'),
					       	'thumbnail' => @$this->thumbnail,
					       	'main_image_1' => @$this->main_image_1,
					       	'main_image_2' => @$this->main_image_2,
					       	'main_image_3' => @$this->main_image_3,
					       	'no_of_servings' => @$this->input->post('no_of_servings'),
					       	'preparation_time' => @$this->input->post('preparation_time'),
					       	'cooking_time' => @$this->input->post('cooking_time'),
					       	'ready_to_eat_in' => @$this->input->post('ready_to_eat_in'),
					       	'difficulty_level' => @$this->input->post('difficulty_level'),
					       	'ingredients' => @$this->input->post('ingredients'),
					       	'ingredients_excluded' => @$this->input->post('ingredients_excluded'),
					       	'shopping' => @$this->input->post('shopping'),
					       	'shopping_date' => @$this->input->post('shopping_date'),
					       	'directions' => @$this->input->post('directions'),
					       	'chefs_notes' => @$this->input->post('chefs_notes')
						);
					
			// run insert model to write data to db
		
			if ($this->recipe_model->SaveForm($form_data) == TRUE) // the information has therefore been successfully saved in the db
			{
				redirect('recipe_controller/success');   // or whatever logic needs to occur
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