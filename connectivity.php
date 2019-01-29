<?php
// Start the session
session_start();
require 'conn.php';
require 'browser.php';
 $myusername = $_POST['admno']; $mypassword = $_POST['password'];

date_default_timezone_set('Asia/Calcutta');
 $date = date('Y-m-d H:i:s');
if ($myusername==""){;} 
else {
$sql4="INSERT INTO loginattempt (admno,password,date,ip,browser,version,os) VALUES ('$myusername','$mypassword','$date','$ip','$browser','$version','$os')";
if (mysqli_query($conn, $sql4)) {
   ;
} else {
    echo "Error: " . $sql . "<br>" . mysqli_error($conn);
echo "<br/>Some error Occured. Please try later";
}
}
$sql = "SELECT admno FROM user where admno='$myusername' and password=md5('$mypassword')";  
$result = mysqli_query($conn, $sql) or die(mysqli_error($connection));
$count = mysqli_num_rows($result);
if ($count == 1){
 
$_SESSION['admno'] = $myusername;
header("location:login/home.php");
} 

$sql = "SELECT admno FROM user where adhno='$myusername' and password=md5('$mypassword')";  
$result = mysqli_query($conn, $sql) or die(mysqli_error($connection));
$count = mysqli_num_rows($result);
if ($count == 1){
 while($row = mysqli_fetch_assoc($result)) {
$admno=$row["admno"];
}
$_SESSION['admno'] = $admno;
mysqli_close($conn);
header("location: login/home.php");
} 
if ($count ==0){
if ($myusername==""){;} 
else {
echo "<script>alert('Wrong Adm No. / Password');</script>" ;
} 
}
?>