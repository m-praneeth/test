
<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <title>WordPress</title>
        <!-- Tell the browser to be responsive to screen width -->
        <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
        <!-- <link rel="icon" type="image/jpg" href="img/favicon.png"> -->

        <!-- css pages -->
				<link href="<?php echo get_bloginfo( 'template_directory' );?>/blog.css" rel="stylesheet">
        <link rel="stylesheet" href="css/bootstrap.min.css">
        <link rel="stylesheet" href="css/font-awesome.min.css">
        <link rel="stylesheet" href="css/animate.min.css">
        <!-- Custom css pages -->
        <link rel="stylesheet" href="css/common.css">
	<?php wp_head();?>
    </head>
    <body>