<?php
require 'phpmailer.php';

$mail = new PHPMailer;

//$mail->SMTPDebug = 3;                               // Enable verbose debug output

$mail->isSMTP();                                      // Set mailer to use SMTP
$mail->Host = 'smtp.gmail.com';  // Specify main and backup SMTP servers
$mail->SMTPAuth = true;                               // Enable SMTP authentication
$mail->Username = 'nadiajnv@gmail.com';                 // SMTP username
$mail->Password = 'baban0000';                           // SMTP password
$mail->SMTPSecure = 'tls';                            // Enable TLS encryption, `ssl` also accepted
$mail->Port = 465;                                    // TCP port to connect to

$mail->setFrom('nadiajnv@gmail.com', 'Mailer');
$mail->addAddress('gainbaban@gmail.com', 'Joe User');     // Add a recipient
$mail->addAddress('baban8282@yahoo.in');               // Name is optional
$mail->addReplyTo('nadiajnv@gmail.com', 'Information');
$mail->addCC('nadiajnv@gmail.com');
$mail->addBCC('kameliakhatun7@example.com');


$mail->isHTML(true);                                  // Set email format to HTML

$mail->Subject = 'Here is the subject';
$mail->Body    = 'This is the HTML message body <b>in bold!</b>';
$mail->AltBody = 'This is the body in plain text for non-HTML mail clients';

if(!$mail->send()) {
    echo 'Message could not be sent.';
    echo 'Mailer Error: ' . $mail->ErrorInfo;
} else {
    echo 'Message has been sent';
}