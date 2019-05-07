<html>
<head>
    <title>Upload Form</title>
    <base href="<?php echo site_url();?>">
</head>
<body>

<?php //echo $error;?>

<form action="http://localhost/bishe/project/test2/do_upload2" method="post" enctype="multipart/form-data" accept-charset="utf-8">

<input type="file" name="userfile" size="20" />

<br /><br />

<input type="submit" value="upload" />

</form>
</body>
</html>