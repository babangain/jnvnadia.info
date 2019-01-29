<html>
<head><title>Contact Us</title>
<style>
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


.teacher td, th, tr {
border: 1px solid green;
} 
.teacher th{
color:red;
} 




    </style>
</head>
<body bgcolor=cyan><?php
require 'conn.php';
?><br/>
<center><a href="index.php">Control Panel Home</a></center><br/><br/>
<center><a href="updatedesc.html"> Update Description</a>
</center>
<center>
<table class="teacher" width="100%">
 <tr>
     <th>Sl No</th>
    <th>Name</th>
    <th>Mobile</th> 
    <th>Email</th>
    <th>Message</th>
    <th>Date</th> 
    <th>Description</th>
    
  </tr>

<?php
$sql = "SELECT * FROM contactus order by slno desc ";
$res = mysqli_query($conn, $sql);

if (mysqli_num_rows($res) > 0) {
    // output data of each row
    while($row = mysqli_fetch_assoc($res)) {
echo "<tr><td>$row[slno]</td>" ;
 echo "<td>$row[name]</td>" ;

echo "<td>$row[mob]</td>" ;

echo "<td>$row[email]</td>" ;

echo "<td>$row[msg]</td>" ;


echo "<td>$row[date]</td>" ;
echo "<td>$row[description]</td>" ;
echo "</tr>";







} 
}

?>



























</body>
</html>




