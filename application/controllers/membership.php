<?php

class Membership extends CI_Controller {

    public function __construct() {
        parent::__construct();
// Load form helper library
//$this->load->helper('form');
// Load form validation library
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
        //var_dump($data);
        //loads the second form
        $data['main_content'] = 'membership/step_2';
        $this->load->view('includes/template', $data);
    }

//function that loads form2
    public function step_3() {

        //loads the third form
        $data['main_content'] = 'membership/step_3';
        $this->load->view('includes/template', $data);
    }

    public function step_4() {
        //loads the forth form
        $data['main_content'] = 'membership/step_4';
        $this->load->view('includes/template', $data);
    }

    public function step_5() {


        //loads the fifth form
        $data['main_content'] = 'membership/step_5';
        $this->load->view('includes/template', $data);
    }

}
