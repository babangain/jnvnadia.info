<?php
require 'conn.php';
?>
<html>
<head><title>Delete Student</title>
</head>
<body bgcolor=cyan>
<center><a href="index.php">Control Panel Home</a></center><br/><br/></center>
<center>
<h1> Delete Student </h1><br/>
<form method="post" action="" >
Admission No :<br/>
<input type="text" id="admno" name="admno">
</input>
<br/>
<input type="submit" id="submit" name="submit" value="Delete Student"></input>
</form>
<?php


require 'conn.php';
$admno=$_POST['admno'];
if($admno==""){;}
else {
$sql = "DELETE FROM user WHERE admno='$admno'";

if (mysqli_query($conn, $sql)) {
    echo "<script> alert('User Deleted');</script>";
} else {
    echo "Error deleting record: " . mysqli_error($conn);
}
}
mysqli_close($conn);
?>
</body>
</html>
