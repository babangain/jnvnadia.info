<?php
require 'conn.php';
?>
<html>
<head><title>Delete Teacher</title>
</head>
<body bgcolor=cyan>

<center><a href="index.php">Control Panel Home</a></center><br/><br/></center>
<center>
<h1> Delete Teacher </h1><br/>
<form method="post" action="" >
Teacher Id :<br/>
<input type="text" id="tid" name="tid">
</input>
<br/>
<input type="submit" id="submit" name="submit" value="Delete Teacher"></input>
</form>
<?php



$tid=$_POST['tid'];
if($tid==""){;}
else {
$sql = "DELETE FROM teacher WHERE tid='$tid'";

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
