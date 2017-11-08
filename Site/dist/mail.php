<?php
/*
$firstName = $_POST['firstName'];
$lastName = $_POST['lastName'];
$email = $_POST['email'];
$phone = $_POST['phone'];
$message = $_POST['message'];
$formcontent="From: $name \n Message: $message";
$recipient = "kaz@starmenusa.com.com";
$subject = "Contact Form";
$mailheader = "From: $email \r\n";
mail($recipient, $subject, $formcontent, $mailheader) or die("Error!");
echo "Thank You!";
*/
?>



<?php

    $name    = $_POST['name'];
    $email   = $_POST['email'];
    $message = $_POST['message'];

    $to      = "kaz@starmenusa.com";
    $subject = "";
    $message = "";
    $headers = "From: $email";

    if( mail($to,$subject,$message,$headers) )
    {
        echo "<h2>Thank you for your comment</h2>";
         
        
    }
    else
    {
        echo "<h2>Sorry, there has been an error</h2>";
    }

?>