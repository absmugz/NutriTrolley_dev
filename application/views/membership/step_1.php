<div class="container">
    <div class="row">
        <div class="row">
            <div class="col-xs-12">logo</div>
        </div>
        <div class="row">
            <div class="col-xs-12 sign_up_container">
                <div class="row">
                    <div class="col-xs-12">
                        <h3>Registration</h3>
                    </div>
                </div>
                <div class="row row-reg-no-padding">
                    <div class="col-xs-12 col-reg-no-padding"> 
                        <!-- a simple div with some links -->
                        <div class="breadcrumb"> <a href="#" class="active">My Account<br>Details</a> <a href="#">About<br>My Body</a> <a href="#">About<br>My Diet</a> <a href="#">My Shopping<br>Behaviour</a> <a id="start_eating_healthily" href="#">Start eating<br>healthily!</a> </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-xs-12 col-reg-no-padding">
                        <div id="my_acc_details"><span>My Account details:</span></div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-xs-12 col-reg-no-padding">
                        <div id="already_have_a_acc"><span>Already have an account?</span><a href="">Log in here</a></div>
                    </div>
                </div>

                <div class="row">
                    <div class="col-xs-9 reg_left"><?php echo form_open_multipart("membership/step_2", 'class="form-horizontal"'); ?>
                        <div class="row">
                            <div class="col-xs-2">
                                <input type="file" name="userfile" size="20" />
                            </div>

                            <div class="col-xs-6">
                                <div class="form-group">
                                    <?php echo form_error('first_name'); ?><br />
                                    <label for="first_name" class="col-xs-4 control-label">First name <span class="required">*</span></label>
                                    <div class="col-xs-8">
                                        <input id="first_name" type="text" name="first_name" maxlength="32" class="form-control" placeholder="First name" value="<?php echo set_value('first_name'); ?>"  />
                                    </div>
                                </div>
                                <div class="form-group">
                                    <?php echo form_error('surname'); ?><br />

                                    <label for="surname" class="col-xs-4 control-label">Surname <span class="required">*</span></label>
                                    <div class="col-xs-8">
                                        <input id="surname" type="text" name="surname" maxlength="32" class="form-control" placeholder="Surname" value="<?php echo set_value('surname'); ?>"  />
                                    </div>

                                </div>
                                <div class="form-group">
                                    <?php echo form_error('username'); ?><br />

                                    <label for="username" class="col-xs-4 control-label">Username <span class="required">*</span></label>
                                    <div class="col-xs-8">
                                        <input id="username" type="text" name="username" maxlength="32" class="form-control" placeholder="Username" value="<?php echo set_value('username'); ?>"  />
                                    </div>

                                </div>
                                <div class="form-group">
                                    <?php echo form_error('password'); ?><br />

                                    <label for="password" class="col-xs-4 control-label">Password <span class="required">*</span></label>
                                    <div class="col-xs-8">
                                        <input id="password" type="password" name="password" maxlength="32" class="form-control" placeholder="Password" value="<?php echo set_value('password'); ?>"  />
                                    </div>

                                </div>





                                <div class="form-group">
                                    <?php echo form_error('your_email'); ?><br />
                                    <label for="your_email" class="col-xs-4 control-label">Email <span class="required">*</span></label>

                                    <div class="col-xs-8">               
                                        <input class="form-control" id="your_email" placeholder="Email" type="text" name="your_email"  value="<?php echo set_value('your_email'); ?>"  /></div>
                                </div>


                                <p>
                                    <?php echo form_submit('submit', 'Submit'); ?>
                                </p>

                                <?php echo form_close(); ?>
                            </div> 


                        </div>
                        <?php echo form_close(); ?>
                    </div>
                    <div class="col-xs-3 reg_right"></div>
                </div>

                <!-- another version - flat style with animated hover effect --> 

            </div>
        </div>
    </div>
</div>


