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
 
        th#navbar {
padding:15px;
   
background-color:green;
}
table#navbar th{
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


table#marks td, th {border: 1px solid green;
padding:0;
align:center;
align:center;
text-align:center;

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
    
</tr></table>
</ul><center>
<h2> FA-1 Marks </h2></center>
<center>
<table id="marks" class="marks" style="width:80%">
 <tr>
    <th>BENGALI </th>
    <th>ENGLISH </th> 
    <th>HINDI </th>
<th>S.Sc</th>
    <th>SCIENCE </th> 
    <th>MATH </th>
<th>TOTAL</th>
<th>PERC</th>
<th>RANK</th>

  </tr>

<?php
$sql = "SELECT * FROM fa1result where admno='$admno'";
$res = mysqli_query($conn, $sql);

if (mysqli_num_rows($res) > 0) {
    // output data of each row
    while($row = mysqli_fetch_assoc($res)) {
        echo "<tr><td>$row[bengali]</td>" ;

echo "<td>$row[english]</td>" ;

echo "<td>$row[hindi]</td>" ;

echo "<td>$row[ssc]</td>" ;
echo "<td>$row[science]</td>" ;

echo "<td>$row[math]</td>" ;
echo "<td>$row[total]</td>" ;
echo "<td>$row[perc]</td>" ;
echo "<td>$row[rank]</td>" ;

} 
}

?>
</center>



</body>
</html>