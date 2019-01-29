<?php
require 'conn.php';
session_start();
$admno=$_SESSION['loggedinuser'];
$str=$_SESSION['secretpassword'];
$otp=$_POST['otp'];
if($str==$otp){
header("location:passresetfinal.php");
}
else {
;
}
?>
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
<h1>Wrong OTP</h1>
<script>
  (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
  (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
  m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
  })(window,document,'script','https://www.google-analytics.com/analytics.js','ga');

  ga('create', 'UA-101541954-1', 'auto');
  ga('send', 'pageview');

</script>
</body>
</html>







