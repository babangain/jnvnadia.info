<html>
<body bgcolor=cyan>

<center><a href="index.php">Control Panel Home</a></center><br/><br/></center>
<?php
 $name  =  $row['name']; 
$subject=$_POST['subject'];

$txt="Hi, "."\n".$_POST['msg'];
date_default_timezone_set('Etc/UTC');
require 'conn.php';
require 'mail/PHPMailer-master/PHPMailerAutoload.php';
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
$mail->Host = "mail.jnvnadia.info";
//Set the SMTP port number - likely to be 25, 465 or 587
$mail->Port = 25;
//Whether to use SMTP authentication
$mail->SMTPAuth = true;
//Username to use for SMTP authentication
$mail->Username = "admin@jnvnadia.info";
//Password to use for SMTP authentication
$mail->Password = "Baban1234";
//Set who the message is to be sent from
$mail->setFrom('admin@jnvnadia.info', 'JNV Nadia');
$query  =  "SELECT  *  FROM  teacher";
 $result  =  mysqli_query($conn,  $query) 
or  die('Error  querying  database.'); 
while($row  =  mysqli_fetch_array($result)){
   


$to=$row['email'];




//Set who the message is to be sent to
$mail->addAddress("$to");

//Set the subject line
$mail->Subject = $subject;
//if you want to include text in the body. 
$mail->Body    = "$txt";

//send the message, check for errors
if (!$mail->send()) {
   echo "Mailer Error: " . $mail->ErrorInfo;
} else {
 
   echo "Mail sent to $to<br/>";

}
} 
?>