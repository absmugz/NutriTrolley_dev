<fieldset><legend>upload</legend>
<?php   
$attributes = array('class' => 'form-horizontal', 'id' => '');
echo form_open_multipart('upload_controller', $attributes); ?>
<div class="control-group">
    <label for="thumbnail" class="control-label">thumbnail</label>
	<div class='controls'>
        <input id="thumbnail" type="file" name="thumbnail" />
		<?php echo form_error('thumbnail'); ?>
	</div>
</div><div class="control-group">
    <label for="main_image_1" class="control-label">Main image 1</label>
	<div class='controls'>
        <input id="main_image_1" type="file" name="main_image_1" />
		<?php echo form_error('main_image_1'); ?>
	</div>
</div><div class="control-group">
    <label for="main_image_2" class="control-label">Main image 2</label>
	<div class='controls'>
        <input id="main_image_2" type="file" name="main_image_2" />
		<?php echo form_error('main_image_2'); ?>
	</div>
</div><div class="control-group">
    <label for="main_image_3" class="control-label">Main image 3</label>
	<div class='controls'>
        <input id="main_image_3" type="file" name="main_image_3" />
		<?php echo form_error('main_image_3'); ?>
	</div>
</div>
<div class="control-group">
	<label></label>
	<div class='controls'>
        <?php echo form_submit( 'submit', 'Submit'); ?>
	</div>
</div>
<?php echo form_close(); ?></fieldset>