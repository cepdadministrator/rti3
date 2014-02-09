<?php
error_reporting(E_ALL);
ini_set('display_errors', True);
?>

<!DOCTYPE html>
<html lang="en">
<head>
  
  <title><?php echo html($site->title()) ?> - <?php echo html($page->title()) ?></title>
  <meta charset="utf-8" />
	<meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=no">
	<meta name="apple-mobile-web-app-capable" content="yes" />
	
	<meta name="apple-mobile-web-app-title" content="RTi3">

	<meta name="apple-mobile-web-app-status-bar-style" content="black" />

	<meta name="description" content="<?php echo html($site->description()) ?>" />
	<meta name="keywords" content="<?php echo html($site->keywords()) ?>" />
	<meta name="robots" content="index, follow" />


    <link rel="apple-touch-icon-precomposed" href="<?php echo url('assets/icons/RTi3-76.png') ?>" />
	<link rel="apple-touch-icon" href="<?php echo url('assets/icons/RTi3-120.png') ?>"/>
	<link rel="apple-touch-icon" sizes="76x76" href="<?php echo url('assets/icons/RTi3-76.png') ?>" />
	<link rel="apple-touch-icon" sizes="120x120" href="<?php echo url('assets/icons/RTi3-120.png') ?>" />

	<link rel="icon" type="image/png" href="<?php echo url('assets/icons/RTi3-76.png') ?>">
	
	<!-- Le HTML5 shim, for IE6-8 support of HTML5 elements -->
	<!--[if lt IE 9]>
		<script src="js/html5shiv.js"></script>
		<link href="css/ie_styles.css" rel="stylesheet" media="screen">
	<![endif]-->

	<!-- Fonts dot com -->
	<link type="text/css" rel="stylesheet" href="http://fast.fonts.net/cssapi/8faefaa6-968f-41bd-871f-8f3ee12abb1e.css"/>

	<?php echo css('assets/styles/application.css') ?>
	
	<?php echo js('assets/js/modernizr.custom.js') ?>


	<style type="text/css">
		.thumbnail {
			border: none;
		}
	</style>
	
	

</head>

<body>
	<div data-role="page" id="index">