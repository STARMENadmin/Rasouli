<?php
require_once './vendor/autoload.php';

$helperLoader = new SplClassLoader('Helpers', './vendor');
$mailLoader   = new SplClassLoader('SimpleMail', './vendor');

$helperLoader->register();
$mailLoader->register();

use Helpers\Config;
use SimpleMail\SimpleMail;

$config = new Config;
$config->load('./config/config.php');

$errors = array();
$data   = array();

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $name    	= stripslashes(trim($_POST['name']));
/*
    $nameLast   = stripslashes(trim($_POST['nameLast']));
    $date   = stripslashes(trim($_POST['date']));
*/
    $email   	= stripslashes(trim($_POST['email']));
    $subject 	= stripslashes(trim($_POST['subject']));
    $message 	= stripslashes(trim($_POST['message']));
    $pattern 	= '/[\r\n]|Content-Type:|Bcc:|Cc:/i';

    if (preg_match($pattern, $name) || preg_match($pattern, $email) || preg_match($pattern, $subject)) {
        die("Header injection detected");
    }

/*
    if (empty($name)) {
        $errors['name'] = $config->get('messages.validation.emptyname');
    }
    if (empty($nameLast)) {
        $errors['nameLast'] = $config->get('messages.validation.emptynameLast');
    }

    if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
        $errors['email'] = $config->get('messages.validation.emptyemail');
    }

    if (empty($subject)) {
        $errors['subject'] = $config->get('messages.validation.emptysubject');
    }

    if (empty($message)) {
        $errors['message'] = $config->get('messages.validation.emptymessage');
    }
*/

    if (!empty($errors)) {
        $data['success'] = false;
        $data['errors']  = $errors;
    } else {
        $mail = new SimpleMail();

        $mail->setTo($config->get('emails.to'));
        $mail->setFrom($config->get('emails.from'));
        $mail->setSender($name);
//         $mail->setSender($nameLast);
//         $mail->setSender($date);
        $mail->setSenderEmail($email);
        $mail->setSubject($config->get('subject.prefix'));
        


        $body = "<!DOCTYPE html PUBLIC \"-//W3C//DTD XHTML 1.0 Transitional//EN\" \"http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd\">"
        		."<html><head><meta http-equiv=\"Content-Type\" content=\"text/html; charset=utf-8\" /></head><body>"
					."<p>Name:<strong>{$name}</p>"
// 					."<p><strong> {$nameLast}</p>"
					."<p><strong> {$email}</p>"
// 					."<p><strong>{$date}</p>"
					."<p><strong>{$subject}</p>"
					."<p><strong>{$message}</p>"
				."</body></html>";

        $mail->setHtml($body);
        $mail->send();
        

        $data['success'] = true;
        $data['message'] = $config->get('messages.success');
    }
      

    echo json_encode($data);
    
}