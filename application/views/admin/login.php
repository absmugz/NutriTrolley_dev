<div class="container">

 
            
           
           
       
    <?php echo $this->session->flashdata('message');?>
    <?php echo form_open('',array('class'=>'form-signin'));?>
              <h2 class="form-signin-heading center-block">Login</h2>
     
        <?php form_label('Username','identity');?>
        <?php echo form_error('identity');?>
        <?php
        
        $Unsername = array(
              'name'        => 'identity',
              'placeholder' => 'Username',
              'class'=> 'form-control' 
            );

echo form_input($Unsername);

        
        ;?>
   
        <?php form_label('Password','password');?>
        <?php echo form_error('password');?>
        <?php
         
        $Password = array(
              'name'        => 'password',
              'placeholder' => 'Password',
              'class'=> 'form-control',
              'type'=>'password'
            );

echo form_input($Password);
        
                
         ;?>
   
     
              
              <div class="checkbox">
           <label>
          <?php echo form_checkbox('remember','1',FALSE);?> Remember me
        </label>
                  <a href="#" class="pull-right need-help">Forgot password? </a><span class="clearfix"></span>
        </div>
              
      <?php echo form_submit('submit', 'Log in', 'class="btn btn-lg btn-primary btn-block"');?>
    <?php echo form_close();?>
 


    </div>




 

                
              
              
         