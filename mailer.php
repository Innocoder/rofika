<?php

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

require 'PHPMailer/Exception.php';
require 'PHPMailer/PHPMailer.php';
require 'PHPMailer/SMTP.php';
 
$mail = new PHPMailer(true);

try {

    $first_name = $_POST['name']; // required
    $email = $_POST['email']; // required
    $number = $_POST['number']; // required
    $service = $_POST['service']; // required
    $message = $_POST['message']; // required


    /* SMTP parameters. */
   $mail->SMTPDebug = 2;
   $mail->isSMTP();
    //From email settings in device connection
   $mail->Host = 'smtp.gmail.com';
   $mail->SMTPAuth = TRUE;
    //From email settings in device connection
   $mail->SMTPSecure = 'ssl';
   $mail->Username = 'mailrofika@gmail.com';
   $mail->Password = 'rofika229288I';
    //From email settings in device connection
   $mail->Port = 465;

    $mail->isHTML(true); // Set to HTML
    /* Set the mail sender. */
    $mail->setFrom($email, $first_name);
    /* Add a recipient. */
    $mail->addAddress('info@rofikasteel.co.za', 'Rofika Projects Website');
    $mail->addReplyTo($email, $first_name);
    /* Set the subject. */
    $mail->Subject = "Rofika Projects Website - ".$service;
    /* Set the mail message body. */
    $mail->Body    = "Message from Rofika Website <br /> <br /> Name: ".$first_name."<br />Email Address: ".$email."<br />Cell Number: ".$number."<br />Service: ".$service."<br /><br />Message: ".$message."<br /><br />";
 

    // message that will be displayed when everything is OK :)
    $okMessage = 'Thank you for your message. We will get back to you soon!';

    // If something goes wrong, we will display this message.
    $errorMessage = 'There was an error. Please try again later!';

    if($mail->send()){
        $_POST = array();
       header("Location:success.html"); //redirects to a page named index.html;
       echo 'Message has been sent';
    }
     
     //$responseArray = array('type' => 'success', 'message' => $okMessage);
    

   

} catch (Exception $e) {
   echo 'Message could not be sent.';
   header("Location:error.html"); //redirects to a page named index.html;
   echo 'Mailer Error: ' . $mail->ErrorInfo;
}catch (Error $e) {
    // should log the fatal
    header("Location:error.html"); //redirects to a page named index.html;
    echo 'Fatal error not be sent.';
}



?>