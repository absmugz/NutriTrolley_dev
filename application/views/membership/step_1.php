<div class="container">

    <div class="row">
        <div class="col-md-12">
            <h1>Step 1</h1>
            <?php echo form_open("membership/step_2", 'class="form-horizontal"'); ?>
            <div class="row">
                <div class="col-sm-2">Profile pic</div>

                <div class="col-sm-6">
                    <div class="form-group">
                        <?php echo form_error('first_name'); ?><br />
                        <label for="first_name" class="col-sm-4 control-label">First name <span class="required">*</span></label>
                        <div class="col-sm-8">
                            <input id="first_name" type="text" name="first_name" maxlength="32" class="form-control" placeholder="First name" value="<?php echo set_value('first_name'); ?>"  />
                        </div>
                    </div>
                    <div class="form-group">
                        <?php echo form_error('surname'); ?><br />

                        <label for="surname" class="col-sm-4 control-label">Surname <span class="required">*</span></label>
                        <div class="col-sm-8">
                            <input id="surname" type="text" name="surname" maxlength="32" class="form-control" placeholder="Surname" value="<?php echo set_value('surname'); ?>"  />
                        </div>

                    </div>
                    <div class="form-group">
                        <?php echo form_error('username'); ?><br />

                        <label for="username" class="col-sm-4 control-label">Username <span class="required">*</span></label>
                        <div class="col-sm-8">
                            <input id="username" type="text" name="username" maxlength="32" class="form-control" placeholder="Username" value="<?php echo set_value('username'); ?>"  />
                        </div>

                    </div>
    <div class="form-group">
                        <?php echo form_error('password'); ?><br />

                        <label for="password" class="col-sm-4 control-label">Password <span class="required">*</span></label>
                        <div class="col-sm-8">
                            <input id="password" type="password" name="password" maxlength="32" class="form-control" placeholder="Password" value="<?php echo set_value('password'); ?>"  />
                        </div>

                    </div>
                 
                    
                    


                    <div class="form-group">
                        <?php echo form_error('your_email'); ?><br />
                        <label for="your_email" class="col-sm-4 control-label">Email <span class="required">*</span></label>
                        
         <div class="col-sm-8">               
             <input class="form-control" id="your_email" placeholder="Email" type="text" name="your_email"  value="<?php echo set_value('your_email'); ?>"  /></div>
                     </div>


                    <p>
                        <?php echo form_submit('submit', 'Submit'); ?>
                    </p>

                    <?php echo form_close(); ?>
                </div> 

                <div class="col-sm-4">Find us on Facebook</div>
            </div>
            <?php echo form_close(); ?>

        </div>
    </div>
</div>

