<?php defined('BASEPATH') OR exit('No direct script access allowed');

class MY_Controller extends CI_Controller
{

  function __construct()
  {
    parent::__construct();
  }
}

class Admin_Controller extends MY_Controller
{
  public function __construct() {
        parent::__construct();

        // Check if the user is already logged in		
        if (!$this->ion_auth->logged_in()) {
            // If not, we send him to the login Page
            redirect('admin/user/login', 'refresh');
        }
    }
}

class Public_Controller extends MY_Controller
{
  function __construct()
  {
    parent::__construct();
  }
}
