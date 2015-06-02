<?php
        class Myform extends CI_Controller {
            // Constructor
            function __construct()
            {
                    parent::__construct();
                    $this->load->library(array('form_validation', 'fileup'));
                    $this->load->helper(array('form'));
                    $this->load->model('myform_model');
            }
            
            // Form Myform
            public function index()
            {
                // Init
                $data = array();
                // If form sended
                if(!empty($_POST)) {
                    // Delimitors
                    $this->form_validation->set_error_delimiters('<p class="error">', '</p>');
                    
                    // Validation rules
                    $this->form_validation->set_rules('thumbnail', 'thumbnail', '');
                $this->form_validation->set_rules('image_1', 'Main image 1', '');
                $this->form_validation->set_rules('image_2', 'Main image 2', '');
                $this->form_validation->set_rules('image_3', 'Main image 3', '');
                $this->form_validation->set_rules('cooking_time', 'Cooking time', '');
                $this->form_validation->set_rules('ready_to_eat_in', 'Ready to eat in', '');
                $this->form_validation->set_rules('difficulty_level', 'Difficulty level', 'required');
                $this->form_validation->set_rules('ingredients', 'Ingredients', '');
                $this->form_validation->set_rules('ingredients_excluded', 'Ingredients excluded', '');
                $this->form_validation->set_rules('directions', 'directions', '');
                $this->form_validation->set_rules('chefs_notes', 'Chefs notes', '');
                $this->form_validation->set_rules('submit', '', '');
                

                        // Files validation
                $errorfile["thumbnail"] = $this->fileup->checkErrorUpload($_FILES["thumbnail"], array("jpg","jpeg","gif","png"), 1);
                    $errorfile["image_1"] = $this->fileup->checkErrorUpload($_FILES["image_1"], array("jpg","jpeg","gif","png"), 1);
                    $errorfile["image_2"] = $this->fileup->checkErrorUpload($_FILES["image_2"], array("jpg","jpeg","gif","png"), 1);
                    $errorfile["image_3"] = $this->fileup->checkErrorUpload($_FILES["image_3"], array("jpg","jpeg","gif","png"), 1);
                    
                        
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
                    $insertTab["thumbnail"] = $_POST["thumbnail"];
                    $insertTab["image_1"] = $_POST["image_1"];
                    $insertTab["image_2"] = $_POST["image_2"];
                    $insertTab["image_3"] = $_POST["image_3"];
                    $insertTab["cooking_time"] = $_POST["cooking_time"];
                    $insertTab["Ready_to_eat_in"] = $_POST["Ready_to_eat_in"];
                    $insertTab["difficulty_level"] = $_POST["difficulty_level"];
                    $insertTab["ingredients"] = $_POST["ingredients"];
                    $insertTab["ingredients_excluded"] = $_POST["ingredients_excluded"];
                    $insertTab["Directions"] = $_POST["Directions"];
                    $insertTab["chefs_notes"] = $_POST["chefs_notes"];
                    
                    // Save to bdd
                    if (!$this->myform_model->save($insertTab) == true) {
                         // Save error
                        $data["error"] = "save";
                    } 
                }
                            
                        // Redirect to success page
                        redirect('myform/success'); 
                    }
                    else {
                        // Validation error 
                        $data["error"] = "validation";
                        
                    }
                }
                // Load view
                $this->load->view('myform', $data);  
            } 
            
            // Success
            public function success() {
                // Load view
                $this->load->view('myform_success');
            }

        }
        ?>