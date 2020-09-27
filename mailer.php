<?php
    echo 'Message has been sent';

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

require 'PHPMailer/Exception.php'
require 'PHPMailer/PHPMailer.php'
require 'PHPMailer/SMTP.php'
 
$email = new PHPMailer();
    $first_name = $_POST['name']; // required
    $email = $_POST['email']; // required
    $number = $_POST['number']; // required
    $service = $_POST['service']; // required
    $message = $_POST['message']; // required

    /* Set the mail sender. */
    $mail->setFrom($email, $first_name);
 
    /* Add a recipient. */
    $mail->addAddress('info@rofikasteel.co.za', 'Rofika Projects');
 
    /* Set the subject. */
    $mail->Subject = $service;
 
    /* Set the mail message body. */
    $mail->Body = $message;
 
    $mail->send();

    /* Finally send the mail. */
    // if(!$mail->send()){
    //     echo $mail->ErrorInfo;
    // };


?>