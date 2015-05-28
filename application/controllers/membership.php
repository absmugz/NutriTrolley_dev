<?php

class Membership extends CI_Controller {

    public function __construct() {
        parent::__construct();
// Load form helper library
//$this->load->helper('form');
// Load form validation library
        //$this->load->helper('bootstrapped');
        $this->load->library('form_validation');

// Load session library
//$this->load->library('session');
// Load database
        //$this->load->model('multistep_model');
    }

    //the function that loads the first form<br><br>
    public function index() {

        $data['main_content'] = 'membership/step_1';
        $this->load->view('includes/template', $data);
    }

//in your form1 use form_open('author/submit_step1') to access the second function
    public function step_2() {
        //load your model here and a method to save these items
        //redirect to the same controller but the second method that loads the second form

        $data = array(
            'first_name' => $this->input->post('first_name'),
            'surname' => $this->input->post('surname'),
            'username' => $this->input->post('username')
        );

        $this->session->set_userdata($data);

        //$this->load->view('sales/new_blank_order_lines', $this->session->all_userdata());

        var_dump($this->session->all_userdata());
        //loads the second form
        $data['main_content'] = 'membership/step_2';
        $this->load->view('includes/template', $data);
    }

//function that loads form2
    public function step_3() {
        $this->form_validation->set_rules('gender', 'gender', 'required|trim');
        //$this->form_validation->set_rules('year_of_birth', 'Year of birth', 'required|trim|is_numeric');
        $this->form_validation->set_rules('year_of_birth', 'Year of birth', 'required|trim');
        $this->form_validation->set_rules('current_weight', 'Current weight', 'required|trim|is_numeric');
        $this->form_validation->set_rules('height', 'Height', 'required|is_numeric');
        $this->form_validation->set_rules('my_body_fat', 'My body fat', 'required|trim|is_numeric');
        $this->form_validation->set_rules('how_active', 'How active', 'required|trim');
        //$this->form_validation->set_rules('activity', 'activity', 'required|trim');

        $this->form_validation->set_rules('top_activity_1', 'top_activity_1', 'required|trim');
        $this->form_validation->set_rules('top_activity_2', 'top_activity_2', 'required|trim');
        $this->form_validation->set_rules('top_activity_3', 'top_activity_3', 'required|trim');

        $this->form_validation->set_error_delimiters('<br /><span class="error">', '</span>');

        if ($this->form_validation->run() == FALSE) { // validation hasn't been passed
            $data['main_content'] = 'membership/step_2';
            $this->load->view('includes/template', $data);
        } else {

            $data = array(
                'gender' => set_value('gender'),
                'year_of_birth' => set_value('year_of_birth'),
                'current_weight' => set_value('current_weight'),
                'height' => set_value('height'),
                'my_body_fat' => set_value('my_body_fat'),
                'how_active' => set_value('how_active'),
                //'activity' => set_value('activity')
                'top_activity_1' => set_value('top_activity_1'),
                'top_activity_2' => set_value('top_activity_2'),
                'top_activity_3' => set_value('top_activity_3')
            );

            $this->session->set_userdata($data);



            var_dump($this->session->all_userdata());
            $data['main_content'] = 'membership/step_3';
            $this->load->view('includes/template', $data);
        }
        //loads the third form
    }

    public function step_4() {
        
        $this->form_validation->set_rules('halaal', 'Halaal', 'max_length[255]');			
		$this->form_validation->set_rules('kosher', 'Kosher', 'max_length[255]');			
		$this->form_validation->set_rules('vegan', 'Vegan', 'max_length[255]');			
		$this->form_validation->set_rules('vegetarian', 'Vegetarian', 'max_length[255]');
                
                $this->form_validation->set_error_delimiters('<br /><span class="error">', '</span>');
                
                if ($this->form_validation->run() == FALSE) { // validation hasn't been passed
            $data['main_content'] = 'membership/step_3';
            $this->load->view('includes/template', $data);
        } else {

       
            
            $data = array(
					       	'halaal' => @$this->input->post('halaal'),
					       	'kosher' => @$this->input->post('kosher'),
					       	'vegan' => @$this->input->post('vegan'),
					       	'vegetarian' => @$this->input->post('vegetarian')
						);

            $this->session->set_userdata($data);



            var_dump($this->session->all_userdata());
           $data['main_content'] = 'membership/step_4';
        $this->load->view('includes/template', $data);
        }
        //loads the forth form
        
    }

    public function step_5() {


        //loads the fifth form
        $data['main_content'] = 'membership/step_5';
        $this->load->view('includes/template', $data);
    }

}
