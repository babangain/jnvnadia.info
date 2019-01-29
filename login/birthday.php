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
 
        ul#menu {
        padding: 0;
        }

        ul#menu li {
        display: inline;
        }

        ul#menu li a {
        background-color: green;
        color: white;
        padding: 17px 33px;
        text-decoration: none;
        border-radius: 5 5 5 5;
        }

        ul#menu li a:hover {
        background-color: orange;
        }


</style>
</head>

<body style="background-color:cyan">


<?php
session_start();
$servername = "localhost";
$username = "u642224624_user";
$password = "baban0000";
$dbname = "u642224624_user";

// Create connection
$conn = mysqli_connect($servername, $username, $password, $dbname);
// Check connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}

$admno=$_SESSION['admno'];

$sql = "SELECT name, class, roll FROM user where admno='$admno'";
$result = mysqli_query($conn, $sql);

if (mysqli_num_rows($result) > 0) {
    // output data of each row
    while($row = mysqli_fetch_assoc($result)) {
        $name= $row["name"];
        $class=$row["class"] ;
$roll=$row["roll"];
    
} 
} else {
    echo "0 results";
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


 alt="logo.jpg"   height="100" width="100" align="right" ></img>
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
<ul id="menu">
    <li><a href="home.php">Home</a></li>
    <li><a href="<?php
echo "$class" ;?>result.php">Result</a></li>
    <li><a href="<?php
echo "$class" ;?>routine.php">Routine</a></li>
    <li><a href="<?php
echo "$class" ;?>ebooks.php">E-books</a></li>
 <li><a href="<?php
echo "$class" ;?>syllabus.php">Syllabus</a></li>
   
    <li><a href="changepassword.php">Change Password</a></li>
    <li><a href="logout.php">Log out</a></li>
    
</ul>
<br/>
<?php

  $query = mysql_query( "SELECT * FROM user WHERE dob BETWEEN CURDATE() - INTERVAL 1 WEEK AND CURDATE() + INTERVAL 1 WEEK" );
  while ($rows = mysql_fetch_array($query, MYSQL_NUM)) {
    $retrieveBirthdays = $rows;
  }
  foreach ($retrieveBirthdays as $retrieveBirthday) {
    echo $retrieveBirthday;
  }
?>


?>

</body>
</html>