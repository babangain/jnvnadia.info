<html>
<body bgcolor=cyan>

<center><a href="index.php">Control Panel Home</a></center><br/><br/></center>
<?php

$description=$_POST['description'];
$slno=$_POST['slno'];
  include('sms/way2sms-api.php');

require 'conn.php';
$query  =  "UPDATE contactus SET description='$description' where slno='$slno'";
 $result  =  mysqli_query($conn,  $query) 
or  die('Error  querying  database.'); 


echo "<center>Description Updated</center";

?>

