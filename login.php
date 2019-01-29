<?php
session_start();
require 'conn.php';

 $myusername = $_POST['admno']; $mypassword = $_POST['password'];
 if($myusername==""){;}
 else {
 
$sql = "SELECT admno FROM user where admno='$myusername' and password=md5('$mypassword')";  
$result = mysqli_query($conn, $sql) or die(mysqli_error($connection));
$count = mysqli_num_rows($result);
if ($count == 1){
$_SESSION['admno'] = $_POST['admno'];
header("location:login/home.php");
exit();
} 



}





if ($count ==0){
if ($myusername==""){;} 
else {
echo "<script>alert('Wrong Adm No. / Password');</script>" ;
} 
}

?>



<!DOCTYPE HTML> 
<html> 
<head>
     <meta charset="UTF-8">
    <meta content="JNV Nadia, JNV Kalyani, JNv Nadi, Jnv Nad">
    <meta name="description" content="JNV Nadia, jnv nadia, jnv nadia, jnv nadia">
<link rel="icon" href="favicon.ico" 
    type="image/gif" sizes="16x16">
  
 <title>JNV Nadia Student Log In Portal</title>
 
 <style>
h1 {
color:red;
align:center;
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

     
div#login {
text-align: center;
height: 500px;
width: 500 px;
align:center;
} input[type=text], input[type=password]  {
    width: 40%;
    padding: 12px 20px;
    margin: 8px 0;
    box-sizing: border-box;
border: 2px solid red;
align:center;
    border-radius: 4px;
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
  
        
<div id="login">
<h1> Student Login</h1>
 
<form method="POST" action=""> 
<h4>Admission No : </h4>
<input type="text" name="admno" size="40"><br> 
<h4>Password </h4><input type="password" name="password" size="40"><br> 
<input id="button" type="submit" name="submit" value="Log In"> </form> 
<?php
require 'browser.php';
date_default_timezone_set('Asia/Calcutta');
 $date = date('Y-m-d H:i:s');
if ($myusername==""){;} 
else {
$sql4="INSERT INTO loginattempt (admno,password,date,ip,browser,version,os) VALUES ('$myusername','$mypassword','$date','$ip','$browser','$version','$os')";
if (mysqli_query($conn, $sql4)) {
   
} else {
    echo "Error: " . $sql . "<br>" . mysqli_error($conn);
echo "<br/>Some error Occured. Please try later";
}
}
?>


<a href="newreg.html" style="color:green">Create New Account </a> <br/>


<a href="forgot.php" style="color:red">Forgot Password ???  </a> 
<br/>
<br/>
<a href="/Cpanel/" style="color:red">Control Panel  </a> 
<br/><br/>



</div> </body> </html> 

