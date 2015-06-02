<?php
        class Testform extends CI_Controller {
            // Constructor
            function __construct()
            {
                    parent::__construct();
                    $this->load->library(array('form_validation', 'fileup'));
                    $this->load->helper(array('form'));
                    $this->load->model('testform_model');
            }
            
            // Form Testform
            public function index()
            {
                // Init
                $data = array();
                // If form sended
                if(!empty($_POST)) {
                    // Delimitors
                    $this->form_validation->set_error_delimiters('<p class="error">', '</p>');
                    
                    // Validation rules
                    $this->form_validation->set_rules('test', 'test', '');
                $this->form_validation->set_rules('submit', '', '');
                

                        // Files validation
                $errorfile["test"] = $this->fileup->checkErrorUpload($_FILES["test"], array("jpg","jpeg","gif","png"), 1);
                    
                        
                    // To block database insertion if we have file errors
                    $valid = true;

                    // Check for file errors
                    if(isset($errorfile)) {
                        // Create file errors for view
                        foreach($errorfile as $name => $errorf) {
                            if($errorf != false) {
                                $data["errorfile"][$name] = $errorf;
                                $valid = false;
                            }    
                        }
                    }

                    if ($this->form_validation->run() == true) {
                        // Insert in bdd
                        
                // If valid
                if($valid == true) {
                    $insertTab["test"] = $_POST["test"];
                    
                    // Save to bdd
                    if (!$this->testform_model->save($insertTab) == true) {
                         // Save error
                        $data["error"] = "save";
                    } 
                }
                            
                        // Redirect to success page
                        redirect('testform/success'); 
                    }
                    else {
                        // Validation error 
                        $data["error"] = "validation";
                        
                    }
                }
                // Load view
                $this->load->view('testform', $data);  
            } 
            
            // Success
            public function success() {
                // Load view
                $this->load->view('testform_success');
            }

        }
        ?>