<html>
<head><title>Ebooks Class VI </title>
<style>
div#topleft {
width:40%;
height:100px;
float:left;
text-align:center;
}
h2, h3 {
align:center;
} 
div#topright {
width:40%;
height:100px;
float:right;
text-align:center;
}
div#img {
width:20%;
height:100px;
margin:auto;
float:left;
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

<body style="background-color:cyan">


<?php
session_start();

require 'conn.php';

$admno=$_SESSION['admno'];
if ($admno=="") {
echo "<center>Sorry You Are not Logged In<br/> 
<a href='/../login.php'>Log In Here</a><center>";
exit();
}

$sql = "SELECT name, class, roll FROM user where admno='$admno'";
$result = mysqli_query($conn, $sql);

if (mysqli_num_rows($result) > 0) {
    // output data of each row
    while($row = mysqli_fetch_assoc($result)) {
        $name= $row["name"];
        $class=$row["class"] ;
$roll=$row["roll"];
    
} 
} 





?>
<div id="main"><div id="topleft">

<h1><?php
echo "  Name :  $name" ;
echo "<br/>Admission No : $admno" ;
?></h1></div>
<div id="img">
<img src="<?php
$path1 = "users/images/$admno.jpg";
  $path2 = "users/images/logo.jpg";

  echo file_exists($path1) ? $path1 : $path2; 
  ?>" 


 alt="logo.jpg"   height="120" width="150" align="right" ></img>
</div>
<div id="topright">

<h1><?php
echo "  CLASS :  $class" ;
echo "<br/>ROLL NO : $roll" ;
?></h1>
</div>
<br style="clear: left;" />
</div>
<br/>
<table id="navbar" style="width:100%"><tr>
    <th><a href="home.php">Home</a></th>
    <th><a href="<?php
echo "$class" ;?>result.php">Result</a></th>
    <th><a href="<?php
echo "$class" ;?>routine.php">Routine</a></th>
    <th><a href="<?php
echo "$class" ;?>ebooks.php">E-books</a></th>
 <th><a href="<?php
echo "$class" ;?>syllabus.php">Syllabus</a></th>
   
    <th><a href="changepassword.php">Change Password</a></th>
    <th><a href="logout.php">Log out</a></th>
    
</tr></table> <center>
<br/>
<h3><a href="http://ncert.nic.in/textbook/pdf/hhvs1dd.zip" style="color:red"> Hindi - Vasant </a>
</h3>

<h3><a href="http://ncert.nic.in/textbook/pdf/hhdv1dd.zip" style="color:red"> Hindi - Durva </a>
</h3>


<h3><a href="http://ncert.nic.in/textbook/pdf/hhvk1dd.zip" style="color:red"> Hindi - Bharat Ki Khoj </a>
</h3>

<h3><a href="http://ncert.nic.in/textbook/pdf/hehd1dd.zip" style="color:red"> English - Honeydew </a>
</h3>





<h3><a href="http://ncert.nic.in/textbook/pdf/heih1dd.zip" style="color:red"> English - It So Happened </a>
</h3>



<h3><a href="http://ncert.nic.in/textbook/pdf/hemh1dd.zip" style="color:red"> Mathematics </a>
</h3>



<h3><a href="http://ncert.nic.in/textbook/pdf/hess1dd.zip" style="color:red"> History : Our Past - I</a>
</h3>

<h3><a href="http://ncert.nic.in/textbook/pdf/hess2dd.zip" style="color:red"> History : Our Past - II</a>
</h3>
<h3><a href="http://ncert.nic.in/textbook/pdf/hess4dd.zip" style="color:red"> Resource and Development </a>
</h3>



<h3><a href="http://ncert.nic.in/textbook/pdf/hess3dd.zip" style="color:red"> Social and Political Life </a>
</h3>




<h3><a href="http://ncert.nic.in/textbook/pdf/hesc1dd.zip" style="color:red"> Science </a>
</h3>


<center>
</body>
</html>