<html>
<head>
<title>Upload Form</title>
</head>
<body>


<?php echo form_open_multipart('upload/do_upload');?>

<input type="file" name="userfile1" size="20" />

<input type="file" name="userfile2" size="20" />

<input type="file" name="userfile3" size="20" />

<input type="file" name="userfile4" size="20" />

<br /><br />

<input type="submit" value="upload" />

</form>

</body>
</html>