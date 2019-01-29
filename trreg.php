<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>Index</title>
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







    </style>
</head>
<body text="white" style="background-color:black">
<img src="logo.jpg" height=50px; width=10%;></img>
<img src="jnvfront.jpg"  height=50px; width=77%;></img>
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



<?php
require 'conn.php';
$tid=$_POST['tid'];
$desig=$_POST['desig'];
$fname=$_POST['fname'];
$name=$_POST['name'];
$dob=$_POST['dob'];
$doj=$_POST['doj'];
$sex=$_POST['sex'];
$category=$_POST['category'];
$dist=$_POST['dist'];
$ws=$_POST['ws'];
$mob=$_POST['mob'];

$mob2=$_POST['mob2'];
$email=$_POST['email'];
$address=$_POST['address'];

$adhno=$_POST['adhno'];






$password=$_POST['password'];



$sql = "INSERT INTO teacher (slno,tid,desig, fname, name, dob, doj, sex, category, ws, mob,mob2, email, 
address, adhno, password, dist)
VALUES ('$slno',  '$tid', '$desig',  '$fname', '$name', '$dob', '$doj', '$sex', '$category', '$ws', '$mob', '$mob2','$email', '$address', '$adhno' , '$password', '$dist' )";


if (mysqli_query($conn, $sql)) {
    echo "Registration Successful.";
} else {
    echo "Error: " . $sql . "<br>" . mysqli_error($conn);
echo "<br/>Some error Occured. Please try later";
}

mysqli_close($conn);
?>