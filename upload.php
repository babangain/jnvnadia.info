<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>Student Registration</title>
      <style>
      
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
  
      
<br/><br/>
<center>
<?php
$target_dir = "login/users/images/";
$target_file = $target_dir . basename($_FILES["fileToUpload"]["name"]);
$uploadOk = 1;
$imageFileType = pathinfo($target_file,PATHINFO_EXTENSION);
// Check if image file is a actual image or fake image
if(isset($_POST["submit"])) {
    $check = getimagesize($_FILES["fileToUpload"]["tmp_name"]);
    if($check !== false) {
       
        $uploadOk = 1;
    } else {
        echo "File is not an image.";
        $uploadOk = 0;
    }
}
// Check if file already exists
if (file_exists($target_file)) {
    echo "Sorry, file already exists.";
    $uploadOk = 0;
}
// Check file size
if ($_FILES["fileToUpload"]["size"] > 500000) {
    echo "Sorry, your file is too large.";
    $uploadOk = 0;
}
// Allow certain file formats
if($imageFileType != "jpg" && $imageFileType != "png" && $imageFileType != "jpeg"
&& $imageFileType != "gif" ) {
    echo "Sorry, only JPG, JPEG, PNG & GIF files are allowed.";
    $uploadOk = 0;
}
// Check if $uploadOk is set to 0 by an error
if ($uploadOk == 0) {
    echo "Sorry, your file was not uploaded.";
// if everything is ok, try to upload file
} else {
    if (move_uploaded_file($_FILES["fileToUpload"]["tmp_name"], $target_file)) {
        echo "The file ". basename( $_FILES["fileToUpload"]["name"]). " has been uploaded.<br/> You can log In Now";
    } else {
        echo "Sorry, there was an error uploading your file.";
    }
}
?>
    
</center>
</body>
</html>




