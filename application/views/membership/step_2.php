<?php echo form_open_multipart("membership/step_3", 'class="form-horizontal form-horizontal-membership"'); ?>
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
                        <div class="breadcrumb"> <a href="#">My Account<br>Details</a> <a href="#" class="active">About<br>My Body</a> <a href="#">About<br>My Diet</a> <a href="#">My Shopping<br>Behaviour</a> <a id="start_eating_healthily" href="#">Start eating<br>healthily!</a> </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-xs-12 col-reg-no-padding">
                        <div id="my_acc_details"><span>About my body: <span>(Update your weight & body fat % regularly to keep our feedback accurate)</span></span></div>
                    </div>
                </div>
              

                <div class="row">
                    <div class="col-xs-9 reg_left">
                        <div class="row">
                            <div class="col-xs-2">
                              
                            </div>

                            <div class="col-xs-10">
                                <div class="form-group form-group-membership">
                                    <div class="col-xs-4"></div>
                                <div class="col-xs-8"><label class="checkbox-inline">
  <input type="checkbox" id="inlineCheckbox1" value="option1">Male
</label>
<label class="checkbox-inline">
  <input type="checkbox" id="inlineCheckbox2" value="option2">Female
</label></div>
                                </div>

                                 
                                <div class="row">
                                            <div class="col-xs-4"><label class="control-label control-label-membership pull-right">Year of birth<span class="required">*</span></label></div>
                                            
                                            <div class="col-xs-2"><select class="form-control selectpicker">
                                                    <option>1</option>
                                                    <option>2</option>
                                                    <option>3</option>
                                                    <option>4</option>
                                                    <option>5</option>
                                                </select></div>
                                        </div>
                                     
                                
                                <div class="form-group form-group-membership">
                                    <?php echo form_error('weight'); ?><br />
                                    <label for="weight" class="col-xs-4 control-label control-label-membership">Current weight<span class="required">*</span></label>
                                    <div class="col-xs-4">
                                        <input id="first_name" type="text" name="weight" maxlength="32" class="form-control form-control-membership" placeholder="Weight" value="<?php echo set_value('first_name'); ?>"  />
                                    </div>
                                </div>
                                <div class="form-group form-group-membership">
                                    <?php echo form_error('Height'); ?><br />

                                    <label for="Height" class="col-xs-4 control-label control-label-membership">Height<span class="required">*</span></label>
                                    <div class="col-xs-4">
                                        <input id="surname" type="text" name="Height" maxlength="32" class="form-control form-control-membership" placeholder="Height" value="<?php echo set_value('surname'); ?>"  />
                                    </div>

                                </div>
                                <div class="form-group form-group-membership">
                                    <?php echo form_error('fat'); ?><br />

                                    <label for="fat" class="col-xs-4 control-label control-label-membership">My body fat % <span class="required">*</span></label>
                                    <div class="col-xs-4">
                                        <input id="username" type="text" name="fat" maxlength="32" class="form-control form-control-membership" placeholder="My body fat" value="<?php echo set_value('username'); ?>"  />
                                    </div>

                                </div>

                            </div> 


                        </div>

                        <div class="row">
                            <div class="col-xs-12">
                                <hr>
                                <h3>How active am I?</h3>
                                <div class="row">
                                    <div class="col-xs-12">
                                        <div class="checkbox">
  <label>
    <input type="checkbox" value=""><strong>Sedentary</strong><br>Sedentary is very physically inactive, inactive in both work and leisure.
  </label>
<label>
    <input type="checkbox" value=""><strong>Lightly active</strong><br>Lightly active means the daily routine includes some walking, or intense exercise once
or twice per week.
  </label>
                                            <label>
    <input type="checkbox" value=""><strong>Moderately active</strong><br>Moderately active means intense exercise lasting 20-45 minutes at least three time per week,
or a job with a lot of walking, or a moderate intensity job.
  </label>
                                                                                        <label>
    <input type="checkbox" value=""><strong>Very Active</strong><br>Very active means intense exercise lasting at least an hour per day, or a heavy physical job,
such as a mail carrier or an athlete in training.
  </label>
                                            
                                             <label>
    <input type="checkbox" value=""><strong>Extremely active</strong><br>Extremely active means an athlete on an unstoppable training schedule or a very demanding
job, such as working in the armed forces or shoveling coal.
  </label>
</div>


                                    </div>
                                    
                                    
                                </div>
                                <hr>
                                
                                 <h3>What do you do when you are active?</h3>

                                <div class="row">

                                    <div class="col-xs-1"><strong>1</strong></div>
                                    <div class="col-xs-7"><strong>Your top 3 exercises or activities?</strong></div>
                                    <div class="col-xs-4">
                                        <select class="form-control selectpicker">
                                                    <option>1</option>
                                                    <option>2</option>
                                                    <option>3</option>
                                                    <option>4</option>
                                                    <option>5</option>
                                                </select>
                                    </div>
                                </div>
                                 
                                      <div class="row">

                                    <div class="col-xs-1"><strong>2</strong></div>
                                    <div class="col-xs-7"><strong>Your top 3 exercises or activities?</strong></div>
                                    <div class="col-xs-4">
                                        <select class="form-control selectpicker">
                                                    <option>1</option>
                                                    <option>2</option>
                                                    <option>3</option>
                                                    <option>4</option>
                                                    <option>5</option>
                                                </select>
                                    </div>
                                </div>
                                 
                                      <div class="row">

                                    <div class="col-xs-1"><strong>3</strong></div>
                                    <div class="col-xs-7"><strong>Your top 3 exercises or activities?</strong></div>
                                    <div class="col-xs-4">
                                        <select class="form-control selectpicker">
                                                    <option>1</option>
                                                    <option>2</option>
                                                    <option>3</option>
                                                    <option>4</option>
                                                    <option>5</option>
                                                </select>
                                    </div>
                                </div>
                                 
                                
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
                                <div class="col-xs-12"><div class="pull-right reg-button-container"><?php echo anchor('membership', 'Back', 'class="btn btn-default reg-btn" title="Home"' ); ?><?php echo form_submit('submit', 'Next', 'class="btn btn-success"'); ?></div></div>

</div>
                         </div>
                    </div>
                </div>
    </div>
        
    </div></div>

<?php echo form_close(); ?>


