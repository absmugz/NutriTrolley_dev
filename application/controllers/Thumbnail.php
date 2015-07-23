<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
class Thumbnail extends CI_Controller {
    
  function __construct()
  {
    parent::__construct();
    
  }
  

    //the function that loads the first form<br><br>
    public function index() {
        
        

        $data['main_content'] = 'thumbnail_scroller';
        //$data['output'] = 'test';
        $this->load->view('includes/template', $data);
    }
    
 
    
}