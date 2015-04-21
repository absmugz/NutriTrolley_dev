<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
class Dashboard extends Admin_Controller {
    
  function __construct()
  {
    parent::__construct();
    
  }
  

    //the function that loads the first form<br><br>
    public function index() {
        
        

        $data['main_content'] = 'admin/dashboard';
        //$data['output'] = 'test';
        $this->load->view('admin/includes/template', $data);
    }
    
 
    
}

