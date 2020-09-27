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

    /* SMTP parameters. */
   $mail->isSMTP();
    //From email settings in device connection
   $mail->Host = 'mail.rofikasteel.com';
   $mail->SMTPAuth = TRUE;
    //From email settings in device connection
   $mail->SMTPSecure = 'tls';
   $mail->Username = 'info@rofikasteel.co.za';
   $mail->Password = 'aaaaaaaaaaaaa';
    //From email settings in device connection
   $mail->Port = 587;
 
    $mail->send();

    /* Finally send the mail. */
    // if(!$mail->send()){
    //     echo $mail->ErrorInfo;
    // };
?>