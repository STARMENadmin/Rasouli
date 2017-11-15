<?php
// form code
require_once './vendor/autoload.php';

$helperLoader = new SplClassLoader('Helpers', './vendor');
$helperLoader->register();

use Helpers\Config;

$config = new Config;
$config->load('./config/config.php');

?>

   <?php include("partials/page-titles.php"); ?>

<!doctype html>
<html>
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

       
        <link rel="stylesheet" href="js/vendor/slick/slick.css">
         <link rel="stylesheet" href="css/main.css">

         <link rel="stylesheet" href="https://ajax.googleapis.com/ajax/libs/jqueryui/1.12.1/themes/smoothness/jquery-ui.css">
    </head>
    

	       
	       