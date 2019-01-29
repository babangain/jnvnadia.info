<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>Index</title>
    <style>
      input[type=button], input[type=submit], input[type=reset] {
    background-color: #4CAF50;
    border: none;
    color: white;
    padding: 16px 32px;
    text-decoration: none;
    margin: 4px 2px;
    cursor: pointer;
}

     
div#contact {
text-align: center;
height: 500px;
width: 500 px;
align:center;
} input[type=text] {
    width: 40%;
    padding: 12px 20px;
    margin: 8px 0;
    box-sizing: border-box;
border: 2px solid red;
align:center;
    border-radius: 4px;
}
      
        table#navbar      th, td {
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







    </style>
</head>
<body text="white" style="background-color:black">
<img src="/../logo.jpg" height=50px; width=10%;></img>
<img src="/../jnvfront.jpg"  height=50px; width=77%;></img>
<img src="/../logo.jpg" height=50px; width=10%;></img>
<table style="width:100%" id="navbar"     >
<tr>

    <th><a href="/../index.php">Home</a></th>
    <th><a href="/../about.php">About</a></th>
    <th><a href="/../notice.php">Notices</a></th>
    <th><a href="/../academics.php">Academics</a></th>
    <th><a href="/../admission.php">Admission</a></th>
    <th><a href="/../CCA.php">CCA</a></th>
    <th><a href="/../teachers.php">Teachers</a></th>
    
    <th><a href="/../contactus.html">Contact Us</a></th>
<th><a href="/../login.php"> Sign In</a></th></tr></table>
  
        
<div id="contact"><h1 style="color:red">FA - 1 Marks Entry Page</h1>
<form action="" method="POST" >
 Admission No :<br/>
 <input id="admno" type="text" name="admno" required ><br/>

 Bengali :<br/>
 <input id="bengali"  type="text"    name="bengali"    ><br/>

 Englsih : <br/>
 <input id="english"  required  type="text"   name="english"><br/>
 Hindi : <br/>
 <input id="hindi"   type="text"    name="hindi"><br/>
 Science : <br/>
 <input id="science"    required type="text"   name="science"><br/>
 Social Science : <br/>
 <input id="ssc"   required  type="text"   name="ssc"><br/>
Math : <br/>
<input id="math" required type="text" name="math"><br/>
 
 <input type="submit" name="submit" id="submit" value="SUBMIT" class="button">
</form>
</div>


<?php
require 'conn.php';



$admno=$_POST['admno'];
$bengali=$_POST['bengali'];
$english=$_POST['english'];
$hindi=$_POST['hindi'];
$science=$_POST['science'];
$ssc=$_POST['ssc'];
$math=$_POST['math'];
$total=$bengali + $english + $hindi + $science + $ssc + $math;
$sql = "UPDATE fa1result SET bengali='$bengali', english='$english', hindi='$hindi', ssc='$ssc', science='$science', 
math='$math', total='$total' WHERE admno='$admno'" ;
if (mysqli_query($conn, $sql)) {
if($admno==0){;}
else {echo "<script>
alert('Entry Successful.') ;
</script>";} 
} else {
    echo "Error: " . $sql . "<br>" . mysqli_error($conn);
echo "<br/>Some error Occured. Please try later";
}

mysqli_close($conn);
?>



</body>
</html>



