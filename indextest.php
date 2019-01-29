<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">

    <title>Welcome to Jawahar Navodaya Vodyalaya Kalyani Nadia</title>
      <style>
#map {
height:280px;
width:80%;
background-color: grey;
float:right;
border:1px;
right:12px;
padding:10px 10px;
} 
      
     .mySlides {display:none;}
div#mcontent {
    height: 300px;
    width: 65%;
    background-color:red ;
color:white;
float:left;
border-radius: 1 1 1 1;
}
div#sidebar {
    height: 300px;
    width: 35%;
    background-color: red;
float:right;
border-radius: 0 0 1 1;

}   
div#centre {
    height: 300px;
    width: 65%;
    background-color: white;
color:green;
border-radius: 0 0 1 1;
float:left;
}     

div#right {
    height: 300px;
    width: 35%;
    background-color: white;
color:green;
border-radius: 0 0 1 1;
float:right;

} 
 div#centre2 {
    height: 300px;
    width: 65%;
    background-color: green;
color:black;
border-radius: 0 0 1 1;
float:left
}     

div#right2 {
    height: 300px;
    width: 35%;
    background-color: green;
color:black;
float:right;
border-radius: 0 0 1 1;

} 
  
        ul#menu {
        padding: 0;
        }

        ul#menu li {
        display: inline;
        }

        ul#menu li a {
        background-color: green;
        color: white;
        padding: 17px 22px;
        text-decoration: none;
        border-radius: 0 0 0 0;
        }

        ul#menu li a:hover {
        background-color: orange;
        }
    </style>
</head>
<body text="white" style="background-color:black; margin:0" ;> 
<img src="logo.jpg" height=50px; width=10%;></img>
<img src="jnvfront.jpg"  height=50px; width=78%;></img>
<img src="logo.jpg"  height=50px; width=10%;></img>
<ul id="menu">
    <li><a href="#">Home</a></li>
    <li><a href="about.php">About</a></li>
    <li><a href="notice.php">Notices</a></li>
    <li><a href="academics.php">Academics</a></li>
    <li><a href="admission.php">Admission</a></li>
    <li><a href="CCA.php">CCA</a></li>
    <li><a href="teachers.php">Teachers</a></li>
    
    <li><a href="contactus.html">Contact Us</a></li>
<li><a href="login.php"> Sign  In   </a></li>
</ul>
<img src="home.jpg" width=100% height=400px></img>
<div id="mcontent">
<h2><a href="notice.php" style="color:black">  Notices & News</a></h1>
<marquee>
Class VI to X FA-1 starts on 22/8/2017  <a href=examroutine.html>See Examination Schedule</a></marquee>
<marquee>Class XI to XII Unit test-1 starts on 22/8/2017<a href=examroutine.html>See Examination Schedule</a></marquee>
<ul><li><a href="#" style="color:white">Parents Teachers Meeting on 12/08/2017</a></li>
<li><a href="admission.html" style="color:white">Admission Form Available. Last date of Submission 25/11/2017</a></li>
<li>Hajajja</li>
<li>dhdjjdjd</li>
<li>hdjsj</li>
</ul>
<center><a href="notice.php" style="color:white">Click to view all notices</a>
</div>

<div id="sidebar"><center>
<h2><a href="teachers.php" style="color:black">Principal</a></h2></center>
<center><img src="principal.jpg" height=170px; width=200px;></img><p>Sri Ramesh Kumar Sarraf</p>

</div>
<div id="centre">
<img src="middle.jpg" height=300px; width=100%;></img>


</div>
<div id="right">
<div id="map"></div>
    <script>
      function initMap() {
        var uluru = {lat: 22.9602227, lng: 88.4442087};
        var map = new google.maps.Map(document.getElementById('map'), {
          zoom: 13,
          center: uluru
        });
        var marker = new google.maps.Marker({
          position: uluru,
          map: map
        });
      }
    </script>

<script async defer
    src="https://maps.googleapis.com/maps/api/js?key=AIzaSyC5tgrgEYo-UTHHbPDoFDMK6w5ao8Jf2xE&callback=initMap">
    </script>
 </div>
<div id="centre2"    style="text-align:center;" ><h2><a href="about.html" style="color:black";>About School</a></h2>
<p> Jawahar Navodaya Vidyalaya, Kalyani, Nadia is a Central Govt. run English Medium High School affiliated to CBSE.</p>
 <p>We are focused on providing good quality modern education to the talented children predominantly from the rural areas without regard to their economic conditions. 
We also ensure that all students of Jawahar Navodaya Vidyalayas attain a reasonable level of competence in three language formula. </p></div>
<div id="right2" >   <h2><u><center>External Links<center></u></h2>
<ul>
<li><a href="http://cbse.nic.in" target="_blank">www.cbse.nic.in</a></li>
<li><a href="http://cbseresults.nic.in" target="_blank">www.cbseresults.nic.in</a></li>

<li><a href="http://navodaya.nic.in" target="_blank">www.navodaya.nic.in</a></li>
<li><a href="http://nvshq.org" target="_blank">www.nvshq.org</a></li>

<li><a href="http://nvspatna.bih.nic.in" target="_blank">NVS RO Patna</a></li>


</ul>
</div>
</body>
</html>





