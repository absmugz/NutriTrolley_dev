<fieldset><legend>recipe</legend>
<?php   
$attributes = array('class' => 'form-horizontal', 'id' => '');
echo form_open_multipart('recipe_controller', $attributes); ?>
<div class="control-group">
    <label for="recipe_name" class="control-label">recipe name <span class="required">*</span></label>
	<div class='controls'>
       <input id="recipe_name" type="text" name="recipe_name" maxlength="255" value="<?php echo set_value('recipe_name'); ?>"  />
		 <?php echo form_error('recipe_name'); ?>
	</div>
</div><div class="control-group">
    <label for="thumbnail" class="control-label">thumbnail <span class="required">*</span></label>
	<div class='controls'>
        <input id="thumbnail" type="file" name="thumbnail" />
		<?php echo form_error('thumbnail'); ?>
	</div>
</div><div class="control-group">
    <label for="main_image_1" class="control-label">main image 1 <span class="required">*</span></label>
	<div class='controls'>
        <input id="main_image_1" type="file" name="main_image_1" />
		<?php echo form_error('main_image_1'); ?>
	</div>
</div><div class="control-group">
    <label for="main_image_2" class="control-label">main image 2</label>
	<div class='controls'>
        <input id="main_image_2" type="file" name="main_image_2" />
		<?php echo form_error('main_image_2'); ?>
	</div>
</div><div class="control-group">
    <label for="main_image_3" class="control-label">main image 3 <span class="required">*</span></label>
	<div class='controls'>
        <input id="main_image_3" type="file" name="main_image_3" />
		<?php echo form_error('main_image_3'); ?>
	</div>
</div><div class="control-group">
    <label for="no_of_servings" class="control-label">No. of servings <span class="required">*</span>
</label>
<div class="controls"><?php $options = array(''  => 'Please Select','example_value1'    => 'example option 1'); ?>

<?php echo form_dropdown('no_of_servings', $options, $this->input->post('no_of_servings'))?>
		<?php echo form_error('no_of_servings'); ?>
	</div>
</div><div class="control-group">
    <label for="preparation_time" class="control-label">Preparation time <span class="required">*</span></label>
	<div class='controls'>
       <input id="preparation_time" type="text" name="preparation_time" maxlength="255" value="<?php echo set_value('preparation_time'); ?>"  />
		 <?php echo form_error('preparation_time'); ?>
	</div>
</div><div class="control-group">
    <label for="cooking_time" class="control-label">Cooking time <span class="required">*</span></label>
	<div class='controls'>
       <input id="cooking_time" type="text" name="cooking_time" maxlength="255" value="<?php echo set_value('cooking_time'); ?>"  />
		 <?php echo form_error('cooking_time'); ?>
	</div>
</div><div class="control-group">
    <label for="ready_to_eat_in" class="control-label">Ready to eat in <span class="required">*</span></label>
	<div class='controls'>
       <input id="ready_to_eat_in" type="text" name="ready_to_eat_in" maxlength="255" value="<?php echo set_value('ready_to_eat_in'); ?>"  />
		 <?php echo form_error('ready_to_eat_in'); ?>
	</div>
</div><div class="control-group">
    <label for="difficulty_level" class="control-label">Difficulty level <span class="required">*</span>
</label>
<div class="controls"><?php $options = array(''  => 'Please Select','example_value1'    => 'example option 1'); ?>

<?php echo form_dropdown('difficulty_level', $options, $this->input->post('difficulty_level'))?>
		<?php echo form_error('difficulty_level'); ?>
	</div>
</div><div class="control-group">
    <label for="ingredients" class="control-label">Ingredients <span class="required">*</span></label>
<div class='controls'>
	<?php echo form_textarea( array( 'name' => 'ingredients', 'rows' => '5', 'cols' => '80', 'value' => set_value('ingredients') ) )?>
	<?php echo form_error('ingredients'); ?>
</div>
</div>
<div class="control-group">
    <label for="ingredients_excluded" class="control-label">Ingredients excluded <span class="required">*</span></label>
<div class='controls'>
	<?php echo form_textarea( array( 'name' => 'ingredients_excluded', 'rows' => '5', 'cols' => '80', 'value' => set_value('ingredients_excluded') ) )?>
	<?php echo form_error('ingredients_excluded'); ?>
</div>
</div>
<div class="control-group">
    <label for="shopping" class="control-label">shopping <span class="required">*</span>
</label>
<div class="controls"><?php $options = array(''  => 'Please Select','example_value1'    => 'example option 1'); ?>

<?php echo form_dropdown('shopping', $options, $this->input->post('shopping'))?>
		<?php echo form_error('shopping'); ?>
	</div>
</div><div class="control-group">
    <label for="shopping_date" class="control-label">shopping_date <span class="required">*</span></label>
	<div class='controls'>
       <input class="datepicker" type="text" name="shopping_date"  value="<?php echo set_value('shopping_date'); ?>"  />
	   <?php echo form_error('shopping_date'); ?>
	</div>
</div><div class="control-group">
    <label for="directions" class="control-label">Directions <span class="required">*</span></label>
<div class='controls'>
	<?php echo form_textarea( array( 'name' => 'directions', 'rows' => '5', 'cols' => '80', 'value' => set_value('directions') ) )?>
	<?php echo form_error('directions'); ?>
</div>
</div>
<div class="control-group">
    <label for="chefs_notes" class="control-label">Chef’s notes: <span class="required">*</span></label>
<div class='controls'>
	<?php echo form_textarea( array( 'name' => 'chefs_notes', 'rows' => '5', 'cols' => '80', 'value' => set_value('chefs_notes') ) )?>
	<?php echo form_error('chefs_notes'); ?>
</div>
</div>

<div class="control-group">
	<label></label>
	<div class='controls'>
        <?php echo form_submit( 'submit', 'Submit'); ?>
	</div>
</div>
<?php echo form_close(); ?></fieldset>