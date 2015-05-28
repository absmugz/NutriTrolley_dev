<div class="container">
    <div class="row">
        <div class="col-sm-12">
            <h1>Step 2</h1>
            <?php echo form_open("membership/step_3", 'class="form-horizontal"'); ?>
            <div class="row">


                <div class="col-sm-8">
                    <div class="form-group">

                        <label for="gender">Gender <span class="required">*</span></label>
                        <?php echo form_error('gender'); ?>
                        <br />
                        <?php // Change or Add the radio values/labels/css classes to suit your needs ?>
                        <input id="gender" name="gender" type="radio" class="radio-inline" value="male" <?php echo $this->form_validation->set_radio('gender', 'male'); ?> />
                        <label for="gender" class="">Male</label>

                        <input id="gender" name="gender" type="radio" class="radio-inline" value="female" <?php echo $this->form_validation->set_radio('gender', 'female'); ?> />
                        <label for="gender" class="">Female</label>


                    </div>
                    <div class="form-group">

                        <label for="year_of_birth">Year of birth <span class="required">*</span></label>
                        <?php echo form_error('year_of_birth'); ?>

                        <?php // Change the values in this array to populate your dropdown as required ?>
                        <?php
                        $options = array(
                            '' => 'Please Select',
                            'example_value1' => 'example option 1'
                        );
                        ?>

                        <br /><?php echo form_dropdown('year_of_birth', $options, set_value('year_of_birth')) ?>


                    </div>
                    <div class="form-group">
                        <label for="current_weight">Current weight <span class="required">*</span></label>
                        <?php echo form_error('current_weight'); ?>
                        <br /><input id="current_weight" type="text" name="current_weight"  value="<?php echo set_value('current_weight'); ?>"  />
                    </div>
                    <div class="form-group">
                        <label for="height">Height <span class="required">*</span></label>
                        <?php echo form_error('height'); ?>
                        <br /><input id="height" type="text" name="height"  value="<?php echo set_value('height'); ?>"  />


                    </div>
                    <div class="form-group">
                        <label for="my_body_fat">My body fat <span class="required">*</span></label>
                        <?php echo form_error('my_body_fat'); ?>
                        <br /><input id="my_body_fat" type="text" name="my_body_fat"  value="<?php echo set_value('my_body_fat'); ?>"  />
                    </div>
                    <div class="form-group">

                        <label for="how_active">How active <span class="required">*</span></label>
                        <?php echo form_error('how_active'); ?>
                        <br />

                        <div class="radio">

                            <?php // Change or Add the radio values/labels/css classes to suit your needs  ?>
                            <input id="how_active" name="how_active" type="radio" class="" value="option1" <?php echo $this->form_validation->set_radio('how_active', 'option1'); ?> />
                            <label for="how_active" class="">Radio option 1</label>
                        </div>
                        <div class="radio">
                            <input id="how_active" name="how_active" type="radio" class="" value="option2" <?php echo $this->form_validation->set_radio('how_active', 'option2'); ?> />
                            <label for="how_active" class="">Radio option 2</label></div>
                    </div>


                    <div class="form-group">
                        <label for="top_activity_1">top_activity_1 <span class="required">*</span></label>
                        <?php echo form_error('top_activity_1'); ?>

                        <?php // Change the values in this array to populate your dropdown as required ?>
                        <?php
                        $options = array(
                            '' => 'Please Select',
                            'example_value1' => 'example option 1'
                        );
                        ?>

                        <br /><?php echo form_dropdown('top_activity_1', $options, set_value('top_activity_1')) ?>

                    </div>

                    <div class="form-group">
                        <label for="top_activity_2">top_activity_2 <span class="required">*</span></label>
                        <?php echo form_error('top_activity_2'); ?>

                        <?php // Change the values in this array to populate your dropdown as required ?>
                        <?php
                        $options = array(
                            '' => 'Please Select',
                            'example_value1' => 'example option 1'
                        );
                        ?>

                        <br /><?php echo form_dropdown('top_activity_2', $options, set_value('top_activity_2')) ?>

                    </div>

                    <div class="form-group">
                        <label for="top_activity_3">top_activity_3 <span class="required">*</span></label>
                        <?php echo form_error('top_activity_3'); ?>

                        <?php // Change the values in this array to populate your dropdown as required ?>
                        <?php
                        $options = array(
                            '' => 'Please Select',
                            'example_value1' => 'example option 1'
                        );
                        ?>

                        <br /><?php echo form_dropdown('top_activity_3', $options, set_value('top_activity_3')) ?>

                    </div>



                    <p>
                        <?php echo form_submit('submit', 'next'); ?>
                    </p>

                    <?php echo form_close(); ?>
                </div> 
                <div class="col-sm-4"></div>

            </div>
            <?php echo form_close(); ?>

        </div>
    </div>
</div>
