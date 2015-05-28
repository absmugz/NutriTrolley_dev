<div class="container">
    <div class="row">
        <div class="col-sm-12">
            <h1>Step 3</h1>
            <?php echo form_open("membership/step_4", 'class="form-horizontal"'); ?>
            <div class="row">


                <div class="col-sm-8">
                    <div class="form-group">

                       
                    
                        <?php echo form_error('halaal'); ?>
                        <label for="halaal" class="checkbox checkbox-inline">
		<input type="checkbox" id="halaal" name="halaal" value="enter_value_here" class="" <?php echo set_checkbox('halaal', 'enter_value_here'); ?>>
		Halaal</label>
                        
                        <?php echo form_error('kosher'); ?>
                        <label for="kosher" class="checkbox checkbox-inline">
		<input type="checkbox" id="kosher" name="kosher" value="enter_value_here" class="" <?php echo set_checkbox('kosher', 'enter_value_here'); ?>>
		Kosher</label>	
                        
                        
                        <?php echo form_error('vegan'); ?>
                        
                        <label for="vegan" class="checkbox checkbox-inline">
		<input type="checkbox" id="vegan" name="vegan" value="enter_value_here" class="" <?php echo set_checkbox('vegan', 'enter_value_here'); ?>>
		Vegan</label>

                        
                        <?php echo form_error('vegetarian'); ?>
<label for="vegetarian" class="checkbox checkbox-inline">
		<input type="checkbox" id="vegetarian" name="vegetarian" value="enter_value_here" class="" <?php echo set_checkbox('vegetarian', 'enter_value_here'); ?>>
		Vegetarian</label>		
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
