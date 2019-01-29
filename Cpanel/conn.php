<?php
$servername = "localhost";
$username = "jnvnadi1_prin";
$password = "Baban1234";
$dbname = "jnvnadi1_user";

// Create connection
$conn = mysqli_connect($servername, $username, $password, $dbname);
// Check connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}
?>