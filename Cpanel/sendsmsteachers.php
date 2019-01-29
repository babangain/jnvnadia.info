<html>
<body bgcolor=cyan>

<center><a href="index.php">Control Panel Home</a></center><br/><br/></center>
<?php
 $name  =  $row['name']; 
$subject=$_POST['subject'];
  include('sms/way2sms-api.php');

$txt="Hi, ". $name."\n".$_POST['msg'];
date_default_timezone_set('Etc/UTC');
require 'conn.php';
$query  =  "SELECT  *  FROM  teacher";
 $result  =  mysqli_query($conn,  $query) 
or  die('Error  querying  database.'); 
while($row  =  mysqli_fetch_array($result)){
   


$mob=$row['mob'];

   sendWay2SMS ( '7908179075' , 'A9736C' , $mob , $txt);
  echo "Sms Sent to $mob <br/>";
}
?>

