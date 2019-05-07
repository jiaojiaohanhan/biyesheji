<html>
<head>
    <title>Upload Form</title>
    <base href="<?php echo site_url();?>">
</head>
<body>

<?php echo $error;?>

<?php echo form_open_multipart('test2/do_upload');?>

<input type="file" name="userfile" size="20" />

<br /><br />

<input type="submit" value="upload" />

</form>

</body>
</html>