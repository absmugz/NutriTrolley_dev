<?php echo form_open_multipart("membership/step_2", 'class="form-horizontal form-horizontal-membership"'); ?>
<div class="container">
    <div class="row">
        <div class="col-xs-12">
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
                    <div class="col-xs-9 reg_left">
                        <div class="row">
                            <div class="col-xs-2">
                                <input type="file" name="userfile" size="20" />
                            </div>

                            <div class="col-xs-10">
                                <div class="form-group form-group-membership">
                                    <?php echo form_error('first_name'); ?><br />
                                    <label for="first_name" class="col-xs-4 control-label control-label-membership">First name <span class="required">*</span></label>
                                    <div class="col-xs-8">
                                        <input id="first_name" type="text" name="first_name" maxlength="32" class="form-control form-control-membership" placeholder="First name" value="<?php echo set_value('first_name'); ?>"  />
                                    </div>
                                </div>
                                <div class="form-group form-group-membership">
                                    <?php echo form_error('surname'); ?><br />

                                    <label for="surname" class="col-xs-4 control-label control-label-membership">Surname <span class="required">*</span></label>
                                    <div class="col-xs-8">
                                        <input id="surname" type="text" name="surname" maxlength="32" class="form-control form-control-membership" placeholder="Surname" value="<?php echo set_value('surname'); ?>"  />
                                    </div>

                                </div>
                                <div class="form-group form-group-membership">
                                    <?php echo form_error('username'); ?><br />

                                    <label for="username" class="col-xs-4 control-label control-label-membership">Username <span class="required">*</span></label>
                                    <div class="col-xs-8">
                                        <input id="username" type="text" name="username" maxlength="32" class="form-control form-control-membership" placeholder="Username" value="<?php echo set_value('username'); ?>"  />
                                    </div>

                                </div>




                                <div class="form-group form-group-membership">
                                    <?php echo form_error('your_email'); ?><br />
                                    <label for="your_email" class="col-xs-4 control-label control-label-membership">Email <span class="required">*</span></label>

                                    <div class="col-xs-8">               
                                        <input class="form-control form-control-membership" id="your_email" placeholder="Email" type="text" name="your_email"  value="<?php echo set_value('your_email'); ?>"  /></div>
                                </div>

                                <div class="form-group form-group-membership">
                                    <?php echo form_error('password'); ?><br />

                                    <label for="password" class="col-xs-4 control-label control-label-membership">Password <span class="required">*</span></label>
                                    <div class="col-xs-8">
                                        <input id="password" type="password" name="password" maxlength="32" class="form-control form-control-membership" placeholder="Password" value="<?php echo set_value('password'); ?>"  />
                                    </div>

                                </div>

                                <div class="form-group form-group-membership">
                                    <?php echo form_error('password'); ?><br />

                                    <label for="password" class="col-xs-4 control-label control-label-membership">Confirm password <span class="required">*</span></label>
                                    <div class="col-xs-8">
                                        <input id="password" type="password" name="password" maxlength="32" class="form-control form-control-membership" placeholder="Password" value="<?php echo set_value('password'); ?>"  />
                                    </div>

                                </div>


                            </div> 


                        </div>

                        <div class="row">
                            <div class="col-xs-12">
                                <hr>
                                <h3>Where do I live?</h3>
                                <div class="row">
                                    <div class="col-xs-6">
                                        <div class="row">
                                            <div class="col-xs-4">I live in</div>
                                            <div class="col-xs-8"><select class="form-control selectpicker">
                                                    <option>1</option>
                                                    <option>2</option>
                                                    <option>3</option>
                                                    <option>4</option>
                                                    <option>5</option>
                                                </select></div>
                                        </div>


                                    </div>
                                    <div class="col-xs-3"><select class="form-control selectpicker">
                                            <option>1</option>
                                            <option>2</option>
                                            <option>3</option>
                                            <option>4</option>
                                            <option>5</option>
                                        </select>
                                    </div>
                                    <div class="col-xs-3"><select class="form-control selectpicker">
                                            <option>1</option>
                                            <option>2</option>
                                            <option>3</option>
                                            <option>4</option>
                                            <option>5</option>
                                        </select></div>
                                </div>
                                <hr>

                                <div class="row">

                                    
                                    <div class="col-xs-5"><strong>Security Verification</strong><br>
                                        These security checks help
                                        us prevent unauthorizes
                                        access to your account</div>
                                    <div class="col-xs-7">
                                        <div class="g-recaptcha" data-sitekey="6LfaPwgTAAAAACk2OhIa-XpM2QBJP_sH81wAyanh"></div>
                                    </div>

                                    
                                </div>
                                <hr>
                                    <div class="checkbox"><label><input type="checkbox">I have read and agreed to the Terms of Use and Privacy. Read it here.</label></div>
                            </div>

                           
                            
                        </div>
                        <div class="col-xs-3 reg_right"></div>
                    </div>



                    <!-- another version - flat style with animated hover effect --> 

                </div>
            </div>
        </div>
        <div class="row">
                    <div class="col-xs-12 col-reg-no-padding">
                        <div id="membership_bottom">
                            
                            <div class="row">
  <div class="col-xs-8"></div>
  <div class="col-xs-2"> <?php echo anchor('#', 'Cancel', 'class="btn btn-default" title="Home"' ); ?></div>
  <div class="col-xs-2"><?php echo form_submit('submit', 'Next', 'class="btn btn-success"'); ?></div>
</div>
                         </div>
                    </div>
                </div>
    </div>
        
    </div></div>

<?php echo form_close(); ?>


