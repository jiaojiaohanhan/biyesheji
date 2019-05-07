<html>
<head>
    <title>Upload Form</title>
    <base href="<?php echo site_url();?>">
</head>
<body>

<h3>Your file was successfully uploaded!</h3>

<ul>
    <?php foreach ($upload_data as $item => $value):?>
        <li><?php echo $item;?>: <?php echo $value;?></li>
    <?php endforeach; ?>
</ul>

<p><?php echo anchor('test2', 'Upload Another File!'); ?></p>

</body>
</html>