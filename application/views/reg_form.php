<fieldset><legend>reg_form</legend>
<?php   
$attributes = array('class' => 'form-horizontal', 'id' => '');
echo form_open_multipart('Regform', $attributes); ?>
<div class="control-group">
    <label for="first_name" class="control-label">first_name <span class="required">*</span></label>
	<div class='controls'>
       <input id="first_name" type="text" name="first_name" maxlength="255" value="<?php echo set_value('first_name'); ?>"  />
		 <?php echo form_error('first_name'); ?>
	</div>
</div><div class="control-group">
    <label for="surname" class="control-label">surname <span class="required">*</span></label>
	<div class='controls'>
       <input id="surname" type="text" name="surname" maxlength="255" value="<?php echo set_value('surname'); ?>"  />
		 <?php echo form_error('surname'); ?>
	</div>
</div><div class="control-group">
    <label for="username" class="control-label">username <span class="required">*</span></label>
	<div class='controls'>
       <input id="username" type="text" name="username" maxlength="255" value="<?php echo set_value('username'); ?>"  />
		 <?php echo form_error('username'); ?>
	</div>
</div><div class="control-group">
    <label for="your_email" class="control-label">your_email <span class="required">*</span></label>
	<div class='controls'>
       <input id="your_email" type="text" name="your_email" maxlength="255" value="<?php echo set_value('your_email'); ?>"  />
		 <?php echo form_error('your_email'); ?>
	</div>
</div><div class="control-group">
    <label for="password" class="control-label">password <span class="required">*</span></label>
	<div class='controls'>
       <input id="password" type="text" name="password" maxlength="255" value="<?php echo set_value('password'); ?>"  />
		 <?php echo form_error('password'); ?>
	</div>
</div><div class="control-group">
    <label for="select_1" class="control-label">select_1 <span class="required">*</span>
</label>
<div class="controls"><?php $options = array(''  => 'Please Select','example_value1'    => 'example option 1'); ?>

<?php echo form_dropdown('select_1', $options, $this->input->post('select_1'))?>
		<?php echo form_error('select_1'); ?>
	</div>
</div><div class="control-group">
    <label for="select_2" class="control-label">select_2
</label>
<div class="controls"><?php $options = array(''  => 'Please Select','example_value1'    => 'example option 1'); ?>

<?php echo form_dropdown('select_2', $options, $this->input->post('select_2'))?>
		<?php echo form_error('select_2'); ?>
	</div>
</div><div class="control-group">
    <label for="select_3" class="control-label">select_3
</label>
<div class="controls"><?php $options = array(''  => 'Please Select','example_value1'    => 'example option 1'); ?>

<?php echo form_dropdown('select_3', $options, $this->input->post('select_3'))?>
		<?php echo form_error('select_3'); ?>
	</div>
</div><div class="control-group">
    <label for="profile_pic" class="control-label">profile_pic</label>
	<div class='controls'>
        <input id="profile_pic" type="file" name="profile_pic" />
		<?php echo form_error('profile_pic'); ?>
	</div>
</div>
<div class="control-group">
	<label></label>
	<div class='controls'>
        <?php echo form_submit( 'submit', 'Submit'); ?>
	</div>
</div>
<?php echo form_close(); ?></fieldset>