<fieldset><legend>thumbnailcrop</legend>
<?php   
$attributes = array('class' => 'form-horizontal', 'id' => '');
echo form_open_multipart('thumbnailcrop_controller/thumbnailCropped', $attributes); ?>
<div class="control-group">
    <?php echo form_error('profile_picture'); ?>
    <label for="profile_picture" class="control-label">profile picture</label>
    
    <div class="dropzone controls" data-width="200" data-height="200" data-resize="true" data-ghost="false"  data-ajax="false" style="width: 100%;">
   <input id="profile_picture" type="file" name="profile_pic" />
</div>
    

 
</div>
    
<div class="control-group">
	<label></label>
	<div class='controls'>
        <?php echo form_submit( 'submit', 'Submit'); ?>
	</div>
</div>
<?php echo form_close(); ?></fieldset>