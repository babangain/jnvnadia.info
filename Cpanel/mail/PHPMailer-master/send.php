<?php
/**
* This example shows making an SMTP connection with authentication.
*/

//SMTP needs accurate times, and the PHP timezone MUST be set
//This should be done in your php.ini, but this is how to do it if you don't have access to that
date_default_timezone_set('Etc/UTC');

require 'PHPMailerAutoload.php';
//Create a new PHPMailer instance
$mail = new PHPMailer;

//Tell PHPMailer to use SMTP
$mail->isSMTP();
//Enable SMTP debugging
// 0 = off (for production use)
// 1 = client messages
// 2 = client and server messages
$mail->SMTPDebug = 0;
//Ask for HTML-friendly debug output
$mail->Debugoutput = 'html';

//Set the hostname of the mail server
$mail->Host = "mail.jnvme.cf";
//Set the SMTP port number - likely to be 25, 465 or 587
$mail->Port = 25;
//Whether to use SMTP authentication
$mail->SMTPAuth = true;
//Username to use for SMTP authentication
$mail->Username = "admin@jnvme.cf";
//Password to use for SMTP authentication
$mail->Password = "Baban1234";
//Set who the message is to be sent from
$mail->setFrom('admin@jnvme.cf', 'JNV Nadia');
//Set who the message is to be sent to
$mail->addAddress('gainbaban@gmail.com', 'Baban Gain');

//Set the subject line
$mail->Subject = 'Password Reset JNV Nadia';
//if you want to include text in the body. 
$mail->Body    = "Hi,Baban
This is from JNV Nadia. Use the OTP to change Password :

580487";

//send the message, check for errors
if (!$mail->send()) {
   echo "Mailer Error: " . $mail->ErrorInfo;
} else {
   echo "Message sent!";
}
?>