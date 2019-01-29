<!DOCTYPE HTML> 
<html> 
<head>
 <title>Password Reset</title>
 <style>
h1 {
color:red;
align:center;
} 
           table#navbar      th, td {
padding:15px;  
background-color:green;
}
  table#navbar th a {
        background-color: green;
        color: white;
        padding: 1px 1px;
        text-decoration: none;
        border-radius: 0 0 0 0;
        }
        table#navbar th:hover {
        background-color: orange;
        }
table#navbar th a:hover {
        background-color: orange;
        }
 </style>
</head>
<body text="white" style="background-color:black">
<img src="logo.jpg" height=50px; width=10%;></img>
<img src="jnvfront.jpg"  height=50px; width=79%;></img>
<img src="logo.jpg" height=50px; width=10%;></img>
<table style="width:100%" id="navbar"     >
<tr>
   <th><a href="index.php">Home</a></th>
    <th><a href="about.php">About</a></th>
    <th><a href="notice.php">Notices</a></th>
    <th><a href="academics.php">Academics</a></th>
    <th><a href="admission.php">Admission</a></th>
    <th><a href="CCA.php">CCA</a></th>
    <th><a href="teachers.php">Teachers</a></th>
    
    <th><a href="contactus.html">Contact Us</a></th>
<th><a href="login.php"> Sign In</a></th></tr></table>
  
<div id="login"><center>
<h1> Password Reset </h1>
<?php
require 'conn.php';
$admno=$_POST['admno'] ;
	$sql = "SELECT * FROM user WHERE admno='$admno'";
	$res = mysqli_query($conn,$sql);
	$count = mysqli_num_rows($res);
	if($count >0){
		
	}else{
		echo "User name does not exist in database";
	}

$r = mysqli_fetch_assoc($res);
$password = $r['password'];
$to = $r['email'];
$name=$r['fname'];
$mob=$r['mob'];
$subject = "Password Reset JNV Nadia";

$headers = "From: nadiajnv@gmail.com" . "\r\n";

$from="nadiajnv@gmail.com";

$str = '';
for($i=6;$i>0;$i--){
    $str =$str.(rand(0,9)); 

    /*  The above line concatenates one character at a time for
        seven iterations within the ASCII range mentioned.
        So, we get a seven characters random OTP comprising of
        all small alphabets. 
    */
}
$txt = "Hi,".$name."\nThis is from JNV Nadia. Use the OTP to change Password :"."\n\n".$str;


/**
* This example shows making an SMTP connection with authentication.
*/

//SMTP needs accurate times, and the PHP timezone MUST be set
//This should be done in your php.ini, but this is how to do it if you don't have access to that
date_default_timezone_set('Etc/UTC');

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
 
   echo "Enter OTP Sent to your Email/Mobile<br/>";
    
session_start();
$_SESSION['loggedinuser'] = $admno;
$_SESSION['secretpassword'] = $str;

}
















?>
<form method="POST" action="otpprocess.php">
Enter OTP : <br/>
<input id="otp" name="otp" type="text"></input><br/>
<input type="submit" value="SUBMIT"></form>
<script>
  (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
  (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
  m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
  })(window,document,'script','https://www.google-analytics.com/analytics.js','ga');

  ga('create', 'UA-101541954-1', 'auto');
  ga('send', 'pageview');

</script>
<?php
 include('sms/way2sms-api.php');
   sendWay2SMS ( '7908179075' , 'A9736C' , $mob , $txt);
   ?>








