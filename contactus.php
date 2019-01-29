<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>Contact Us</title>
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




        ul#menu {
        padding: 0;
        }

        ul#menu li {
        display: inline;
        }

        ul#menu li a {
        background-color: green;
        color: white;
        padding: 17px 22px;
        text-decoration: none;
        border-radius: 0 0 0 0;
        }

        ul#menu li a:hover {
        background-color: orange;
        }
    </style>
</head>
<body text="white" style="background-color:black" ;> 
<img src="logo.jpg" height=50px; width=10%;></img>
<img src="jnvfront.jpg"  height=50px; width=79%;></img>
<img src="logo.jpg" border=1px; height=50px; width=10%;></img>
<table style="width:100%" id="navbar"     >
<tr>

    <th><a href="home.php">Home</a></th>
    <th><a href="about.php">About</a></th>
    <th><a href="notice.php">Notices</a></th>
    <th><a href="academics.php">Academics</a></th>
    <th><a href="admission.php">Admission</a></th>
    <th><a href="CCA.php">CCA</a></th>
    <th><a href="teachers.php">Teachers</a></th>
    
    <th><a href="contactus.html">Contact Us</a></th>
<th><a href="login.php"> Sign In</a></th></tr></table>
  
        
<?php
require 'conn.php';
date_default_timezone_set("Asia/Kolkata");
 $name = $_POST['name']; 
$mob = $_POST['mob'];
$email =$_POST['email'];
$msg=$_POST['contactus'];
 $date = date('Y-m-d H:i:s');
$ip = $_SERVER['HTTP_CLIENT_IP']?$_SERVER['HTTP_CLIENT_IP']:($_SERVER['HTTP_X_FORWARDED_FOR']?$_SERVER['HTTP_X_FORWARDED_FOR']:$_SERVER['REMOTE_ADDR']);
$sql = "INSERT INTO contactus (name, mob, email, msg, ip, date) VALUES ('$name', '$mob', '$email', '$msg', '$ip', '$date' )"  ;          

if (mysqli_query($conn, $sql)) {
    echo "<center><br/><br/>Thanks for Contacting Us. Your Request has been Submitted. <br/>We will Contact You Soon</center>" ;
} else {
    echo "Error: " . $sql . "<br>" . mysqli_error($conn);
echo "An Error Occured!! Please try later." ;
}

mysqli_close($conn);



?>
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










