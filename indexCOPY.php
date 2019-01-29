<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">

    <title>Welcome to Jawahar Navodaya Vidyalaya Kalyani Nadia</title>
      <style>
* {box-sizing:border-box}

/* Slideshow container */
.slideshow-container {
  max-width: 100%;
  position: relative;
  margin: auto;
}

.mySlides {
    display: none;
}

/* Next & previous buttons */
.prev, .next {
  cursor: pointer;
  position: absolute;
  top: 50%;
  width: auto;
  margin-top: -22px;
  padding: 16px;
  color: white;
  font-weight: bold;
  font-size: 18px;
  transition: 0.6s ease;
  border-radius: 0 3px 3px 0;
}

/* Position the "next button" to the right */
.next {
  right: 0;
  border-radius: 3px 0 0 3px;
}

/* On hover, add a black background color with a little bit see-through */
.prev:hover, .next:hover {
  background-color: rgba(0,0,0,0.8);
}

/* Caption text */
.text {
  color: #f2f2f2;
  font-size: 15px;
  padding: 8px 12px;
  position: absolute;
  bottom: 8px;
  width: 100%;
  text-align: center;
}

/* Number text (1/3 etc) */
.numbertext {
  color: #f2f2f2;
  font-size: 12px;
  padding: 8px 12px;
  position: absolute;
  top: 0;
}

/* The dots/bullets/indicators */
.dot {
  cursor:pointer;
  height: 13px;
  width: 13px;
  margin: 0 2px;
  background-color: #bbb;
  border-radius: 50%;
  display: inline-block;
  transition: background-color 0.6s ease;
}

.active, .dot:hover {
  background-color: #717171;
}

/* Fading animation */
.fade {
  -webkit-animation-name: fade;
  -webkit-animation-duration: 1.5s;
  animation-name: fade;
  animation-duration: 1.5s;
}

@-webkit-keyframes fade {
  from {opacity: .4} 
  to {opacity: 1}
}

@keyframes fade {
  from {opacity: .4} 
  to {opacity: 1}
}



		  a#right2 {color: red;
		  }
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
<img src="jnvfront.jpg"  height=50px; width=77%;></img>
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
  
        
<div class="slideshow-container" height="200px">
  <div class="mySlides fade">
    <div class="numbertext">1 / 3</div>
    <img src="home.jpg" style="width:100%">
    <div class="text">Caption Text</div>
  </div>

  <div class="mySlides fade">
    <div class="numbertext">2 / 3</div>
    <img src="home.jpg" style="width:100%">
    <div class="text">Caption Two</div>
  </div>

  <div class="mySlides fade">
    <div class="numbertext">3 / 3</div>
    <img src="home.jpg" style="width:100%">
    <div class="text">Caption Three</div>
  </div>

  <a class="prev" onclick="plusSlides(-1)">&#10094;</a>
  <a class="next" onclick="plusSlides(1)">&#10095;</a>
</div>
<br>

<div style="text-align:center">
  <span class="dot" onclick="currentSlide(1)"></span> 
  <span class="dot" onclick="currentSlide(2)"></span> 
  <span class="dot" onclick="currentSlide(3)"></span> 
</div>   

<script> var slideIndex = 0;
showSlides();

function showSlides() {
    var i;
    var slides = document.getElementsByClassName("mySlides");
    for (i = 0; i < slides.length; i++) {
        slides[i].style.display = "none"; 
    }
    slideIndex++;
    if (slideIndex> slides.length) {slideIndex = 1} 
    slides[slideIndex-1].style.display = "block"; 
    setTimeout(showSlides, 2000); // Change image every 2 seconds
}
</script>



<div id="mcontent">
<h2><a href="notice.php" style="color:black">  Notices & News</a></h1>


<marquee>
Class VI to X FA-1 starts soon <!--   <a href=examroutine.html>See Examination Schedule</a>    --></marquee>
<marquee>Class XI to XII Unit test-1 starts on soon<!--  <a href=examroutine.html>See Examination Schedule</a>  --></marquee>
<ul><li><a href="#" style="color:white">Parents Teachers Meeting Will be held soon</a></li>
<li><a href="admission.php" style="color:white">Admission Form Available. Click to Visit</a></li>
<li>Notice 3</li>
<li>notice 4</li>
<li>Notice 4</li>
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
<ul><h2>
<li><a href="http://cbse.nic.in" target="_blank" style="color: orange">www.cbse.nic.in</a></li>
<li><a href="http://cbseresults.nic.in" target="_blank" style="color: orange">www.cbseresults.nic.in</a></li>

<li><a href="http://navodaya.nic.in" target="_blank" style="color: orange">www.navodaya.nic.in</a></li>
<li><a href="http://nvshq.org" target="_blank" style="color: orange">www.nvshq.org</a></li>

<li><a href="http://nvspatna.bih.nic.in" target="_blank" style="color: orange">NVS RO Patna</a></li>

	</h2>
</ul>
</div>
<script async src="//pagead2.googlesyndication.com/pagead/js/adsbygoogle.js"></script>
<!-- abc -->
<ins class="adsbygoogle"
     style="display:block"
     data-ad-client="ca-pub-6804483019724727"
     data-ad-slot="5945633230"
     data-ad-format="auto"></ins>
<script>
(adsbygoogle = window.adsbygoogle || []).push({});
</script>
</body>
</html>





