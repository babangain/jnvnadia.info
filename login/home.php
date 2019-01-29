<!doctype html>
<html>
<head><title>Student Home </title>
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

div#midleft {
width:40%;
height:auto;
float:left;
text-align:center;
}
div#middle {
width:25%;
height:auto;
float:left;
text-align:center;
text-decoration-color: chocolate;
}
div#midright {
width:30%;
height:auto;
float:right;
}
 div#bdaystd {
width:30%;
height:auto;
float:right;
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



  table#detail      th, td {
padding:12px;
border: 1px solid black;
   text-align: center;
color:red;
background-color:lightgreen;
}
table#bdaystud {
float:right;
background-color:blue;
width:100%;
}
table#bdaytr {
float:right;
background-color:blue;
width:100%;
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
$sql = "SELECT * from user where admno='$admno'";
$result = mysqli_query($conn, $sql);

if (mysqli_num_rows($result) > 0) {
    // output data of each row
    while($row = mysqli_fetch_assoc($result)) {
        $name= $row["name"];
        $class=$row["class"] ;
$roll=$row["roll"];
$mob=$row["mob"];
$faname= $row["faname"];
$moname= $row["moname"];
$email= $row["email"];
$pmob= $row["pmob"];
$pemail= $row["pemail"];
$address= $row["address"];
$adhno= $row["adhno"];
$gender= $row["gender"];
$dob= $row["dob"];
$cat= $row["cat"];
$fname= $row["fname"];
    date_default_timezone_set('Asia/Calcutta');
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
  <th>  <a href="home.php">Home</a></th>
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
    
</tr></table>
<div id="midleft" ><h2>  Your Details</h2>
<table id="detail" class="w3-table-all w3-hoverable" width="95%">
<?php 
echo "<tr><td>Admission No :</td><td>$admno</td></tr>";
echo "<tr><td>Name :</td><td>$name</td></tr>";

echo "<tr><td>Class :</td><td>$class</td></tr>";

echo "<tr><td>Roll:</td><td>$roll</td></tr>";

echo "<tr><td>Father's Name :</td><td>$faname</td></tr>";

echo "<tr><td>Mother's Name :</td><td>$moname</td></tr>";

echo "<tr><td>Mobile No :</td><td>$mob</td></tr>";
echo "<tr><td>Parent's Mobile :</td><td>$pmob</td></tr>";
echo "<tr><td>Email :</td><td>$email</td></tr>";
echo "<tr><td>Parent's Email :</td><td>$pemail</td></tr>";
echo "<tr><td>Adhaar No :</td><td>$adhno</td></tr>";
echo "<tr><td>Address:</td><td>$address</td></tr>";
echo "<tr><td>Gender :</td><td>$gender</td></tr>";
echo "<tr><td>DOB :</td><td>$dob</td></tr>";
echo "<tr><td>Category :</td><td>$cat</td></tr>";








?></table></div>
<div id="middle"><center><h2><img src="hi5.gif"></img><?php echo "    $fname   ";?><img src="hello.gif"></img></h2>
<?php 
$today=date("d");
$month=date("m");
$dobcheck="select *
from user 
where admno='$admno' and month(dob) = '$month'  and day(dob) = '$today' ;";
$result = mysqli_query($conn, $dobcheck);

if (mysqli_num_rows($result) > 0) {
$rand=(rand(1,10));
echo "<h2>Hey Dear $fname,<br/>It's your Birthday today...<br/></h2><img src='bday/$rand.jpg' height='30%' width='100%'></img>";
}
/* This sets the $time variable to the current hour in the 24 hour clock format */
date_default_timezone_set('Asia/Calcutta');
    $time = date("H");
$rand=(rand(1,10));
    /* If the time is less than 1200 hours, show good morning */
    if ($time < "12" && $time >= "5") {
        echo "<h3>Good Morning  ".$fname."</h3>";
      echo "<img src='morning/$rand.jpg' height='20%' width='100%'></img>";
    } else
    /* If the time is grater than or equal to 1200 hours, but less than 1700 hours, so good afternoon */
    if ($time >= "12" && $time < "17") {
        echo "<h3>Good Afternoon  ".$fname."</h3>";
echo "<img src='afternoon/$rand.jpg' height='20%' width='100%'></img>";
    } else
    /* Should the time be between or equal to 1700 and 1900 hours, show good evening */
    if ($time >= "17" && $time <= "23") {
        echo "<h3>Good Evening  ".$fname."</h3>";
echo "<img src='evening/$rand.jpg' height='20%' width='100%'></img>";
    } else
    /* Finally, show good night if the time is greater than or equal to 1900 hours */
    if ($time > "23" or $time < "5") {
        echo "Hey dear ".$fname.", What are you Doing?<br/>I am feeling sleepy. Good Night";
echo "<img src='night/$rand.jpg' height='20%' width='100%'></img>";
    }
echo "<h3>Todays Thought</h3>";

echo "<img src='thought/$today.jpg' height='30%' width='100%'></img>";
?>
<h3>
    
<a href="changepassword.php">CHANGE PASSWORD</a><br/>
<a href="changemob.php">CHANGE MOBILE NO</a><br/>
<a href="changeemail.php">CHANGE Email</a><br/>
<a href="changepmob.php">CHANGE Parent's MOBILE NO</a><br/>
<a href="changepemail.php">CHANGE Parent's Email</a><br/>
<a href="changeaddress.php">CHANGE Address</a><br/></h3>
<?php
require 'browser.php';
echo "<br/>Your Browser : ".$browser."  ".$version;
echo "<br/>Your Operating System : ".$os;
echo "<br/>Your IP Address : ".$ip;

 $date = date('Y-m-d H:i:s');

$sql6="INSERT INTO home (admno,password,date,ip,browser,version,os) VALUES ('$admno','$admno','$date','$ip','$browser','$version','$os')";
if (mysqli_query($conn, $sql6)) {
   
} else {
    echo "Error: " . $sql . "<br>" . mysqli_error($conn);
echo "<br/>Some error Occured. Please try later";
}






?>


</center>
</div>
<div id="midright">

<center><h2> Birthdays Today </h2></center>








<table id="bdaytr" >
<th>Name</th>
<th>Desig</th>
<th>DOB</th>
<?php
date_default_timezone_set('Asia/Calcutta');
$bday="select name,desig,dob
from teacher 
where month(dob) = '$month'  and day(dob) = '$today' ;";
$result = mysqli_query($conn, $bday);

if (mysqli_num_rows($result) > 0) {
    // output data of each row
    while($row = mysqli_fetch_assoc($result)) {
        $bname= $row["name"];
        $bdesig=$row["desig"] ;
$bdob=$row["dob"];
echo "<tr><td>$bname</td><td>$bdesig</td><td>$bdob</td></tr>";
}
}
?>
<tr></tr>
</table><br/><br/>
<table id="bdaystud">
<tr><th>Name</th>
<th>Class</th>
<th>DOB</th></tr>
<?php
$bday="select name,class,dob
from user 
where month(dob) = '$month'  and day(dob) = '$today' ;";
$result = mysqli_query($conn, $bday);

if (mysqli_num_rows($result) > 0) {
    // output data of each row
    while($row = mysqli_fetch_assoc($result)) {
        $bname= $row["name"];
        $bclass=$row["class"] ;
$bdob=$row["dob"];
echo "<tr><td>$bname</td><td>$bclass</td><td>$bdob</td></tr>";
}
}
?>
</table>
</div>
</body>
</html>