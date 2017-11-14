<?php
// form code
require_once './vendor/autoload.php';

$helperLoader = new SplClassLoader('Helpers', './vendor');
$helperLoader->register();

use Helpers\Config;

$config = new Config;
$config->load('./config/config.php');

// page titles
$title = 'Rasouli Spine | Home';

if (stripos($_SERVER['REQUEST_URI'], 'thepractice.php')){
	$title = 'Rasouli Spine | The Practice';
}

if (stripos($_SERVER['REQUEST_URI'], 'theconditions.php')){
	$title = 'Rasouli Spine | The Conditions';
}

if (stripos($_SERVER['REQUEST_URI'], 'theprocedures.php')){
	$title = 'Rasouli Spine | The Procedures';
}

if (stripos($_SERVER['REQUEST_URI'], 'the-outpaient-revolution.php')){
	$title = 'Rasouli Spine | The Outpatient Revolution';
}

if (stripos($_SERVER['REQUEST_URI'], 'contact.php')){
	$title = 'Rasouli Spine | Contact';
}

if (stripos($_SERVER['REQUEST_URI'], 'testimonials.php')){
	$title = 'Rasouli Spine | Testimonials';
}

if (stripos($_SERVER['REQUEST_URI'], 'patient-resources.php')){
	$title = 'Rasouli Spine | Patient Resources';
}



?>

<!doctype html>
<html class="no-js" lang="en">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="x-ua-compatible" content="ie=edge">
        <title><?php echo $title; ?></title>
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        
        
        <link rel="apple-touch-icon" sizes="76x76" href="/favicons/apple-touch-icon.png">
		<link rel="icon" type="image/png" sizes="32x32" href="/favicons/favicon-32x32.png">
		<link rel="icon" type="image/png" sizes="16x16" href="/favicons/favicon-16x16.png">
		<link rel="manifest" href="/favicons/manifest.json">
		<link rel="mask-icon" href="/favicons/safari-pinned-tab.svg" color="#5bbad5">
		<meta name="theme-color" content="#ffffff">
        <!-- Place favicon.ico in the root directory -->

       
        <link rel="stylesheet" href="js/vendor/slick/slick.css">
         <link rel="stylesheet" href="css/main.css">
<!--          <link rel="stylesheet" href="css/jquery-ui.css"> -->
         <link rel="stylesheet" href="https://ajax.googleapis.com/ajax/libs/jqueryui/1.12.1/themes/smoothness/jquery-ui.css">
    </head>
    
    <div class="onLoadFadeIn"></div>
      <?php include("partials/book-pop-up.php"); ?>
	      <?php include("partials/nav.php"); ?>
	       <?php include("partials/nav-static.php"); ?>
	       
	       