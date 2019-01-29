<!DOCTYPE HTML> 
<html> 
<head>
 <title>Routine sender</title>
</head>

<?php
require 'conn.php';
date_default_timezone_set("Asia/Kolkata");
$day=date("l");
	$sql = "SELECT * FROM routinesem4cse WHERE day='$day'";
	$res = mysqli_query($conn,$sql);
	$count = mysqli_num_rows($res);
	if($count >0){
		
	}else{
	    echo "Today Is Holiday";
		exit();
	}

$r = mysqli_fetch_assoc($res);
$first = $r['first'];
$second=$r['second'];
$practical=$r['practical'];
$subject = "Today's Class";

$headers = "From: nadiajnv@gmail.com" . "\r\n";

$from="nadiajnv@gmail.com";


$txt = "Hi,\nToday's Class  : \n\nFirst : ".$first."\n\nSecond : ".$second."\n\nPractical : ".$practical."\n\nThanks";
//echo "$txt";


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
$mail->setFrom('admin@jnvnadia.info', 'Class Routine');
//Set who the message is to be sent to


//Set the subject line
$mail->Subject = $subject;
//if you want to include text in the body. 
$mail->Body    = "$txt";
 include('sms/way2sms-api.php');


	$sql = "SELECT * FROM sms";
	 $result  =  mysqli_query($conn,  $sql) 
or  die('Error  querying  database.'); 
while($row  =  mysqli_fetch_array($result)){
   
    $to=$row['email'];
    $mob=$row['mob'];
    
    
    
    
    //Set who the message is to be sent to
    $mail->addAddress("$to");
    
    
    
    }
     
   
 //send the message, check for errors
    if (!$mail->send()) {
       echo "Mailer Error: " . $mail->ErrorInfo;
    } else {
     
       echo "Mail sent to $to<br/>";
    }
     if(sendWay2SMS ( '7908179075' , 'A9736C' , '9851581510,9609775499' , $txt))
    {
           echo "SMS SENT <br/>";
    }
   ?>