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
        
function viewall(){
$this->load->model('thumbnailcrop_model', 'thumbnailcrop');	
  $viewall = $this->thumbnailcrop->get_all();   
  
  var_dump($viewall);die();
}
        
        	function thumbnailCropped()
	{
		//$thumbnailCropped = json_decode($this->input->post('profile_pic_values'));
        
$error					= false;

$absolutedir			= dirname(dirname(dirname(__FILE__)));

 
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

$this->load->model('thumbnailcrop_model', 'thumbnailcrop');

$this->thumbnailcrop->insert(array(
    'profile_picture' => $fname
));
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

    /* My_Model tutorial
     *  Setup:

1) download the library from the link above and put it in your /core directory

2) create a table with this:

CREATE TABLE IF NOT EXISTS `articles` (
 `body` text,
 `title` varchar(250) DEFAULT NULL,
 `id` int(11) NOT NULL AUTO_INCREMENT,
 PRIMARY KEY (`id`),
 FULLTEXT KEY `body` (`body`,`title`)
) ENGINE=MyISAM  


--
-- Dumping data for table `articles`
--

 INSERT INTO `articles` (`body`, `title`, `id`) VALUES
 ('bears are fuzzy and cute - but don''t try to pet them!', 'Something about bears', 1),
 ('Fuzzy Wuzzy was a bear; Fuzzy Wuzzy had no hair. Fuzzy Wuzzy wasn''t very fuzzy, was he?', 'Fuzzy Wuzzy', 2),
 ('This is dumb and boring', 'Dumb and boring post', 3),
 ('This is dumb and boring, too.', 'Dumb and boring post', 4);

 

3) create a model called article_model.php (no "s")

class Article_model extends MY_Model
{

}

4) last, make a test controller to run all your queries from. Here is a fairly complete list of all of the functions available to you, each one given by an example with the output you should expect (if you run them one at a time in order), as well as the actual sql generated. My thought is this will be all you need to get going. All of this code should go in your controller. Don't forget to start with:

$this->load->model('article_model');

 

$row = $this->article_model->get(2);		
//stdClass Object ( [body] => Fuzzy Wuzzy was a bear; Fuzzy Wuzzy had no hair. Fuzzy Wuzzy wasn't very fuzzy, was he? [title] => Fuzzy Wuzzy [id] => 2 ) 
//SELECT * FROM (`articles`) WHERE `id` = 2

$row = $this->article_model->get_by('title', 'Fuzzy Wuzzy');
//stdClass Object ( [body] => Fuzzy Wuzzy was a bear; Fuzzy Wuzzy had no hair. Fuzzy Wuzzy wasn't very fuzzy, was he? [title] => Fuzzy Wuzzy [id] => 2 ) 
//SELECT * FROM (`articles`) WHERE `title` = 'Fuzzy Wuzzy'
// NOTE: if more than 1, returns first

$result = $this->article_model->get_many(array(1,3,4));
//Array ( [0] => stdClass Object ( [body] => bears are fuzzy and cute - but don't try to pet them! [title] => Something about bears [id] => 1 ) [1] => stdClass Object ( [body] => This is dumb and boring [title] => Dumb and boring post [id] => 3 ) [2] => stdClass Object ( [body] => This is dumb and boring, too. [title] => Dumb and boring post [id] => 4 ) ) 
//SELECT * FROM (`articles`) WHERE `id` IN (1, 3, 4)  

$result = $this->article_model->get_many_by('title', 'Dumb and boring post');
//Array ( [0] => stdClass Object ( [body] => This is dumb and boring [title] => Dumb and boring post [id] => 3 ) [1] => stdClass Object ( [body] => This is dumb and boring, too. [title] => Dumb and boring post [id] => 4 ) ) 
//SELECT * FROM (`articles`) WHERE `title` = 'Dumb and boring post'

$result = $this->article_model->get_all();
//Array ( [0] => stdClass Object ( [body] => bears are fuzzy and cute - but don't try to pet them! [title] => Something about bears [id] => 1 ) [1] => stdClass Object ( [body] => Fuzzy Wuzzy was a bear; Fuzzy Wuzzy had no hair. Fuzzy Wuzzy wasn't very fuzzy, was he? [title] => Fuzzy Wuzzy [id] => 2 ) [2] => stdClass Object ( [body] => This is dumb and boring [title] => Dumb and boring post [id] => 3 ) [3] => stdClass Object ( [body] => This is dumb and boring, too. [title] => Dumb and boring post [id] => 4 ) [4] => stdClass Object ( [body] => Ain't no sunshine [title] => When she's gone [id] => 13 ) [5] => stdClass Object ( [body] => Woot! [title] => My thoughts [id] => 11 ) [6] => stdClass Object ( [body] => Hello [title] => I must be going [id] => 12 ) ) 
//SELECT * FROM (`articles`)

$count = $this->article_model->count_by('title', 'Dumb and boring post');
//2
//SELECT COUNT(*) AS `numrows` FROM (`articles`) WHERE `title` = 'Dumb and boring post'

$count = $this->article_model->count_all();
//4
//SELECT COUNT(*) AS `numrows` FROM `articles`

$insert_id = $this->article_model->insert(array('body'=>'Woot!', 'title'=>'My thoughts'), FALSE);
//5
//INSERT INTO `articles` (`body`, `title`) VALUES ('Woot!', 'My thoughts')


$insert_array = array(
		array('body'=>'Hello', 'title'=>'I must be going'),
		array('body'=>"When she's gone", 'title'=>"Ain't no sunshine" ),
	);
$insert_ids = $this->article_model->insert_many($insert_array, FALSE);	
//Array ( [0] => 16 [1] => 17 ) //1
//INSERT INTO `articles` (`body`, `title`) VALUES ('When she\'s gone', 'Ain\'t no sunshine')


$update_id = $this->article_model->update(4, array('body'=>'This is dumber and more boring', 'title'=>'Dumber and boringer'));
//1
//UPDATE `articles` SET `body` = 'This is dumber and more boring', `title` = 'Dumber and boringer' WHERE `id` = 4

$update_id = $this->article_model->update_by(array('title'=>'My thoughts'), array('body'=>'Having deeper thoughts'));
//1
//UPDATE `articles` SET `body` = 'Having deeper thoughts' WHERE `title` = 'My thoughts'	

$update_id = $this->article_model->update_many(array(3,4,5), array('body'=>"Oh! I've been updated...and I feel MARVELOUS!"));
//1
//UPDATE `articles` SET `body` = 'Oh! I\'ve been updated...and I feel MARVELOUS!' WHERE `id` IN (3, 4, 5) 	

$update_id = $this->article_model->update_all( array('title'=>"Another dumb title"));
//1
//UPDATE `articles` SET `title` = 'Another dumb title' 	

$delete_id = $this->article_model->delete( 7);
//1
//DELETE FROM `articles` WHERE `id` = 7 

$delete_id = $this->article_model->delete_by( array('body'=>'Hello'));
//1
//DELETE FROM `articles` WHERE `body` = 'Hello' 

$delete_id = $this->article_model->delete_many( array(3,4,5));
//1
//DELETE FROM `articles` WHERE `id` IN (3, 4, 5) 

//// Utilities ////

// dropdown - automatically picks the primary key if only one value passed
$dropdown_array = $this->article_model->dropdown( 'title');
//Array ( [1] => Another dumb title [2] => Another dumb title ) 
//SELECT `id`, `title` FROM (`articles`)


// otherwise, give it a key, value pair to build on (my data is bad for example at this point)
$dropdown_array = $this->article_model->dropdown( 'title', 'body');
//Array ( [Another dumb title] => Fuzzy Wuzzy was a bear; Fuzzy Wuzzy had no hair. Fuzzy Wuzzy wasn't very fuzzy, was he? ) 
//SELECT `title`, `body` FROM (`articles`)

 

Finally, a couple of common tasks you might be after (this code goes in article_model.php ):

#1 - I only want certain fields

Create a new function to make your select function call, but then stick to the parent get()

function select($fields)
{ 
        $this->db->select($fields); 
        return $row = $this->get(2); 
}

//SELECT `title` FROM (`articles`) WHERE `id` = 2

#2 - I want to validate my insert

Create all the validation rules you might need for anything on this table at the top of your class. NOTICE it is an array of arrays (check the user guide http://codeigniter.com/user_guide/libraries/form_validation.html#rulereference for rules)

protected $validate = array(array('title'=>'required'));

That should get you started down the road to happy MY_Model usage :-)  Come to the Codeigniter forums and ask if you run into trouble.

Use Trello to manage your client projects? Spending too much time writing weekly update emails - or not enough?

Check out my latest project - Trellup and keep your clients happy while you spend your time on billable tasks.


Contact me

    email: Jeff Madsen
    linked in: Jeff Madsen
    twitter: codebyjeff
    github: codebyjeff


     */
?>