<!DOCTYPE html>
<html>
<head>
     <script async src="//pagead2.googlesyndication.com/pagead/js/adsbygoogle.js"></script>
<script>
  (adsbygoogle = window.adsbygoogle || []).push({
    google_ad_client: "ca-pub-6804483019724727",
    enable_page_level_ads: true
  });
</script>
    <meta charset="UTF-8">
    <title>Teacher</title>
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
<body text="white" style="background-color:black">
<img src="logo.jpg" height=50px; width=10%;></img>
<img src="jnvfront.jpg"  height=50px; width=79%;></img>
<img src="logo.jpg" height=50px; width=10%;></img>
<table style="width:100%" id="navbar"     >
<tr>

    <th><a href="index.php">Home</a></th>
    <th><a href="about.php">About</a></th>
    <th><a href="notice.php">Notices</a></th>
    <th><a href="academics.php">Academics</a></th>
    <th><a href="admission.php">Admission</a></th>
    <th><a href="CCA.php">CCA</a></th>
    <th><a href="teachers.php">Teachers</a></th>
    
    <th><a href="contactus.html">Contact Us</a></th>
<th><a href="login.php"> Sign In</a></th></tr></table>

<center>
<h1>Teachers List</h1>
  
</center>
<?php
require 'conn.php';
?><br/>

<center>
<div style="overflow-x:auto;">
<table class="teacher" width="100%">
 <tr>
    <th>Sl No </th>
    <th>Designation</th> 
    <th>First Name </th>
    <th>Name</th>
    <th>DOB</th> 
    <th>DOJ </th>
    <th>Sex </th>
    <th>Category</th> 
    <th>Home Dist. </th>
    <th>mobile 1</th>
    <th>mobile 2</th> 
    <th>email </th>
  </tr>

<?php
$sql = "SELECT * FROM teacher ";
$res = mysqli_query($conn, $sql);

if (mysqli_num_rows($res) > 0) {
    // output data of each row
    while($row = mysqli_fetch_assoc($res)) {

 echo "<tr><td>$row[slno]</td>" ;

echo "<td>$row[desig]</td>" ;

echo "<td>$row[fname]</td>" ;

echo "<td>$row[name]</td>" ;
echo "<td>$row[dob]</td>" ;

echo "<td>$row[doj]</td>" ;
echo "<td>$row[sex]</td>" ;

echo "<td>$row[category]</td>" ;
echo "<td>$row[dist]</td>" ;

echo "<td>$row[mob]</td>" ;

echo "<td>$row[mob2]</td>" ;

echo "<td>$row[email]</td>" ;
echo "</tr>";







} 
}

?>










</div>




<script async src="//pagead2.googlesyndication.com/pagead/js/adsbygoogle.js"></script>
<!-- jnvnadia -->
<ins class="adsbygoogle"
     style="display:block"
     data-ad-client="ca-pub-6804483019724727"
     data-ad-slot="4519764986"
     data-ad-format="auto"></ins>
<script>
(adsbygoogle = window.adsbygoogle || []).push({});
</script>



<script>
  (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
  (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
  m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
  })(window,document,'script','https://www.google-analytics.com/analytics.js','ga');

  ga('create', 'UA-101541954-1', 'auto');
  ga('send', 'pageview');

</script>







</body>
</html>




