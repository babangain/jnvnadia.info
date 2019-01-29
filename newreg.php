<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>Student Registration</title>
      <style>
      
     
      
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


input[type=button], input[type=submit], input[type=reset] {
    background-color: #4CAF50;
    border: none;
    color: white;
    padding: 16px 32px;
    text-decoration: none;
    margin: 4px 2px;
    cursor: pointer;
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
  
        
<br/>
<br/>

<center>

<?php
require 'conn.php';


$roll=$_POST['roll'];
$pemail=$_POST['pemail'] ;
$pmob=$_POST['pmob'] ;
$cat=$_POST['cat'] ;


$adhno=$_POST['adhno'];
$admno=$_POST['admno'];
$fname=$_POST['name'];
$lname=$_POST['lname'];
$name=$fname." ".$lname;
$moname=$_POST['moname'];
$mob=$_POST['mob'];
$email=$_POST['email'];
$faname=$_POST['faname'];
$class=$_POST['class'];
$gender=$_POST['gender'];
$address=$_POST['address'];
$dob=$_POST['dob'];
$password=$_POST['password'];
if($admno==""){;}
else {
$sql4="INSERT INTO login (admno,password) VALUES ('$admno','$password')";
if (mysqli_query($conn, $sql4)) {
   
} else {
    echo "Error: " . $sql . "<br>" . mysqli_error($conn);
echo "<br/>Some error Occured. Please try later";
}
$sql = "INSERT INTO user (admno,fname,lname, name, password, faname, moname, mob, email, class, gender, address, dob,adhno, roll, pemail, pmob,cat)
VALUES ('$admno', '$fname', '$lname','$name', md5('$password'), '$faname', '$moname', '$mob', '$email', '$class', '$gender', '$address', '$dob', '$adhno' , '$roll', '$pemail', '$pmob','$cat')";


if (mysqli_query($conn, $sql)) {
    echo "Registration Successful.";
} else {
    echo "Error: " . $sql . "<br>" . mysqli_error($conn);
echo "<br/>Some error Occured. Please try later";
}


$to = $email;
$subject = "Registration Successful JNV Nadia";
$txt = "Hi, ".$fname."\nThis is from JNV Nadia.\n You have been successfully Registered at JNV Nadia's website \n".
"Here is Your Registration Details : \n".
"Admission No :  ".$admno."\n". 
"Name :  ".$name."\n". 

"Father's Name :  ".$faname."\n". 
"Mother's Name :  ".$moname."\n".
"Class :  ".$class."\n". 

"Roll No :  ".$roll."\n". 
"Category :  ".$cat."\n". 


"Mobile No :  ".$mob."\n". 

"Email :  ".$email."\n". 

"Parent's Mobile No :  ".$pmob."\n". 

"Parent's  Email :  ".$pemail."\n". 
"Gender :  ".$gender."\n". 

"DOB :  ".$dob."\n". 

"Address :  ".$address."\n". 

"Aadhar No :  ".$adhno."\n". 
"\n"."Visit http://www.jnvnadia.info \nIf there is any error. Please mail to admin@jnvnadia.info";
$headers = "From: admin@jnvnadia.info" . "\r\n";
$from="admin@jnvnadia.info";
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
 
   echo "\n Check your Email / Mobile for details<br/>";
 $sms= "Hi, ".$fname."\n".
"JNV Nadia Registration Details : \n".
"Admission No :  ".$admno."\n". "Check Email for details \n Visit www.jnvnadia.info";
    
}
}
?>

<br/><br/><center>Resize your Image, size should be less than 100 KB
<br/>
Rename your photo to       <?php echo "$admno";?>.jpg<br/>
Then Select photo and upload<br/><br/>
<form action="upload.php" method="post" enctype="multipart/form-data">
    Select image to upload:<br/>
    <input type="file" name="fileToUpload" id="fileToUpload"><br/>
    <input type="submit" value="Upload Image" name="submit">
</form>
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
   sendWay2SMS ( '7908179075' , 'A9736C' , $mob , $sms);
   sendWay2SMS ( '7908179075' , 'A9736C' , $pmob , $sms);
   ?>
</body>
</html>




