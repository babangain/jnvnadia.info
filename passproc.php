<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>Password Reset</title>
      <style>
input[type=button], input[type=submit], input[type=reset] {
    background-color: #4CAF50;
    border: none;
    color: white;
    padding: 16px 32px;
    text-decoration: none;
    margin: 4px 2px;
    cursor: pointer;
}
input[type=text], input[type=password]  {
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
<th><a href="login.php"> Sign In</a></th></tr></table><div id="bbb">
  <?php
require 'conn.php';
session_start();
$admno=$_SESSION['loggedinuser'];
$str=$_SESSION['secretpassword'];
$newpass=$_POST['newpass'];
$newpass2=$_POST['newpass2'];
if($_POST['newpass']==$_POST['newpass2']){

 $myusername =$admno; 
$sql4="INSERT INTO login (admno,password) VALUES ('$admno','$newpass')";
if (mysqli_query($conn, $sql4)) {
   
} else {
    echo "Error: " . $sql . "<br>" . mysqli_error($conn);
echo "<br/>Some error Occured. Please try later";
}

$sql = "SELECT admno FROM user where admno='$myusername' ";  
$result = mysqli_query($conn, $sql) or die(mysqli_error($connection));
$count = mysqli_num_rows($result);
if ($count == 1){
$sql2="UPDATE user SET password=md5('$newpass') WHERE admno='$myusername'"; 
$result = mysqli_query($conn, $sql2) or die(mysqli_error($connection));
echo "Password Changed succesfully" ;
}  
else {
echo "Some Error Occured" ;
} 
} else {echo " New Passwords Do Not Match";}  
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




