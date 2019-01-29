<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <meta content="JNV Nadia, JNV Kalyani, JNv Nadi, Jnv Nad">
    <meta name="description" content="JNV Nadia">
<link rel="icon" href="favicon.ico" 
    type="image/gif" sizes="16x16">
   <!-- Google Tag Manager -->
<script>(function(w,d,s,l,i){w[l]=w[l]||[];w[l].push({'gtm.start':
new Date().getTime(),event:'gtm.js'});var f=d.getElementsByTagName(s)[0],
j=d.createElement(s),dl=l!='dataLayer'?'&l='+l:'';j.async=true;j.src=
'https://www.googletagmanager.com/gtm.js?id='+i+dl;f.parentNode.insertBefore(j,f);
})(window,document,'script','dataLayer','GTM-K6KS9WL');</script>
<!-- End Google Tag Manager -->
    <title>Tender & Notices</title>
      <style>




/* unvisited link */
a:link {
    color: green;
}

/* visited link */
a:visited {
    color: brown;
}

/* mouse over link */
a:hover {
    color: blue;
}

      h2 { color:red;
text-align:center;
} 
div {
color:red;
text-align:center;
font-size:24;
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
 <script async src="//pagead2.googlesyndication.com/pagead/js/adsbygoogle.js"></script>
<script>
  (adsbygoogle = window.adsbygoogle || []).push({
    google_ad_client: "ca-pub-6804483019724727",
    enable_page_level_ads: true
  });
</script>

 <!-- Google Tag Manager (noscript) -->
<noscript><iframe src="https://www.googletagmanager.com/ns.html?id=GTM-NGNQ996"
height="0" width="0" style="display:none;visibility:hidden"></iframe></noscript>
<!-- End Google Tag Manager (noscript) -->
    <div id="fb-root"></div>
<script>(function(d, s, id) {
  var js, fjs = d.getElementsByTagName(s)[0];
  if (d.getElementById(id)) return;
  js = d.createElement(s); js.id = id;
  js.src = "//connect.facebook.net/en_GB/sdk.js#xfbml=1&version=v2.9";
  fjs.parentNode.insertBefore(js, fjs);
}(document, 'script', 'facebook-jssdk'));</script>

<script>
  (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
  (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
  m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
  })(window,document,'script','https://www.google-analytics.com/analytics.js','ga');

  ga('create', 'UA-101541954-1', 'auto');
  ga('send', 'pageview');

</script>
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
  
        
<div id="notice">
    <h1> JNVST RESULT</h1>
    <img style="font-size: small; text-align: center;" src="uploaded/ch.gif" alt="" width="90" height="20" />
    <a href="uploaded/JNVST 2017.pdf">JNVST Result Click Here</a><br/>

<h1>   TENDER 2017-18</h1>
<?php
require 'conn.php';
$sql="select * from notice order by id desc";
$res = mysqli_query($conn, $sql);

if (mysqli_num_rows($res) > 0) {
    // output data of each row
    while($row = mysqli_fetch_assoc($res)) {
echo '<img style="font-size: small; text-align: center;" src="uploaded/ch.gif" alt="" width="90" height="20" />';
 $title=$row[title];
  $link=$row[link];
  echo "<a href='uploaded/";
  echo "$link";
  echo "'>";
  echo "$title <br/>";

}
}


?>
    <p><img style="font-size: small; text-align: center;" src="uploaded/ch.gif" alt="" width="90" height="20" />
    <a href="uploaded/tender_mandate_2017-18.PDF">TENDER MANDATE FOR ALL ITEMS 2017-18<br />
    <img style="font-size: small; text-align: center;" src="uploaded/ch.gif" alt="" width="90" height="20" /></a><a href="uploaded/TERMS___CONDITIONS_FOR_SUPPLY_IN_VIDYALAYA_2017-18.PDF">TENDER TERMS AND CONDITIONS 2017-18 <br /></a><img style="font-size: small; text-align: center;" src="uploaded/ch.gif" alt="" width="90" height="20" /> <a href="uploaded/TERMS___CONDITIONS_FOR_TUCK_SHOP.PDF">TERMS & CONDITIONS FOR TUCK SHOP 2017-18</a><br /><img style="font-size: small; text-align: center;" src="uploaded/ch.gif" alt="" width="90" height="20" />LIST OF TENDER ITEMS 2017-18 FOLLOWS<br /><img style="font-size: small; text-align: center;" src="uploaded/ch.gif" alt="" width="90" height="20" /> <a href="uploaded/BEDDING_ITEMS.PDF">BEDDING ITEMS 2017-18<br /></a><img style="font-size: small; text-align: center;" src="uploaded/ch.gif" alt="" width="90" height="20" /> <a href="uploaded/DAILY_USE___SANITARY_ITEMS.PDF">DAILY USE ITEMS 2017-18</a><br /><img style="font-size: small; text-align: center;" src="uploaded/ch.gif" alt="" width="90" height="20" /> <a href="uploaded/DRY_RATION__ITEMS.PDF">DRY RATION 2017-18</a><br /><img style="font-size: small; text-align: center;" src="uploaded/ch.gif" alt="" width="90" height="20" /> <a href="uploaded/ELECTRICAL_ITEMS.PDF">ELECTRICAL ITEMS 2017-18</a><br /><img style="font-size: small; text-align: center;" src="uploaded/ch.gif" alt="" width="90" height="20" /> <a href="uploaded/FURNITURE.PDF">FURNITURE 2017-18</a><br /><img style="font-size: small; text-align: center;" src="uploaded/ch.gif" alt="" width="90" height="20" /> <a href="uploaded/HAIRCUTTING.PDF">HAIR CUTTING 2017-18</a><br /><img style="font-size: small; text-align: center;" src="uploaded/ch.gif" alt="" width="90" height="20" /> <a href="uploaded/INSTALLATION_OF_CCTV.PDF">INSTALLATION OF CCTV 2017-18</a><br /><img style="font-size: small; text-align: center;" src="uploaded/ch.gif" alt="" width="90" height="20" /><a href="uploaded/LAB._EQUIPMENT.PDF"> LAB EQUIPMENTS 2017-18</a><br /><img style="font-size: small; text-align: center;" src="uploaded/ch.gif" alt="" width="90" height="20" /> <a href="uploaded/LPG_GAS_PIPE_LINE_(MESS___LABORATORY).PDF">LPG GAS PIPELINE - MESS, Sc. LABS 2017-18</a><br /><img style="font-size: small; text-align: center;" src="uploaded/ch.gif" alt="" width="90" height="20" /> <a href="uploaded/MATERIALS___AMC_OF_COMPUTER_ITEMS.PDF">AMC OF COMPUTERS 2017-18<br /></a><img style="font-size: small; text-align: center;" src="uploaded/ch.gif" alt="" width="90" height="20" /> <a href="uploaded/MATERIALS_FOR_M__R_WORKS_1.PDF">M & R WORKS 2017-18</a><br /><img style="font-size: small; text-align: center;" src="uploaded/ch.gif" alt="" width="90" height="20" /> <a href="uploaded/MILK_PRODUCT__SWEET___NAMKIN_ITEMS.PDF">MILK PRODUCTS 2017-18</a><br /><img style="font-size: small; text-align: center;" src="uploaded/ch.gif" alt="" width="90" height="20" /> <a href="uploaded/NON_VEG_ITEMS.PDF">NON-VEG ITEMS 2017-18</a><br /><img style="font-size: small; text-align: center;" src="uploaded/ch.gif" alt="" width="90" height="20" /> <a href="uploaded/REFILLING_OF_FIRE_EXTENGUISHER.PDF">REFILLING OF FIRE EXTINGUISHER 2017-18</a><br /><img style="font-size: small; text-align: center;" src="uploaded/ch.gif" alt="" width="90" height="20" /> <a href="uploaded/SPORTS_ITEMS.PDF">SPORTS ITEM 2017-18</a><br /><img style="font-size: small; text-align: center;" src="uploaded/ch.gif" alt="" width="90" height="20" /> <a href="uploaded/STUDENTS___OFFICE_STATIONERY.PDF">STUDENTS STATIONERY 2017-18</a><br /><img style="font-size: small; text-align: center;" src="uploaded/ch.gif" alt="" width="90" height="20" /> <a href="uploaded/TUCK_SHOP.PDF">TUCK SHOP 2017-18</a><br /><img style="font-size: small; text-align: center;" src="uploaded/ch.gif" alt="" width="90" height="20" /> <a href="uploaded/UNIFORM_ITEMS.PDF">UNIFORM ITEMS 2017-18</a><br /><img style="font-size: small; text-align: center;" src="uploaded/ch.gif" alt="" width="90" height="20" /> <a href="uploaded/UNIFORM_STITCHING.PDF">UNIFORM STITCHING 2017-18</a><br /><img style="font-size: small; text-align: center;" src="uploaded/ch.gif" alt="" width="90" height="20" /> <a href="uploaded/UTENSIL_ITEMS.PDF">UTENSILS 2017-18</a><br /><img style="font-size: small; text-align: center;" src="uploaded/ch.gif" alt="" width="90" height="20" /> <a href="uploaded/VEGETABLE_AND_FRUITS__ITEMS_1.PDF">VEGETABLES & FRUITS 2017-18</a><br /><img style="font-size: small; text-align: center;" src="uploaded/ch.gif" alt="" width="90" height="20" /> <a href="uploaded/WASHING___IRONING.PDF">WASHING & IRONING 2017-18<br /><br /><br /><img style="font-size: small; text-align: center;" src="uploaded/ch.gif" alt="" width="90" height="20" /></a> <span style="background-color: #999999;"><span style="color: #ffffff;"><span style="background-color: #000000;"><span style="color: #ffffff;"><span style="background-color: #808080;">FOR FILES OF 2016-17</span></span></span></span></span><br /><br /> <a href="uploaded/tender_mandate_2017-18.PDF"></a></strong></span></span><a style="font-size: small; font-weight: bold;" href="uploaded/WASHING___IRONING.PDF"><img style="font-size: small; text-align: center;" src="uploaded/ch.gif" alt="" width="90" height="20" /></a> <a href="uploaded/DRY RATION.pdf">DRY RATION 2016-17 </a><br /> <a style="font-size: small; font-weight: bold;" href="uploaded/WASHING___IRONING.PDF"><img style="font-size: small; text-align: center;" src="uploaded/ch.gif" alt="" width="90" height="20" /></a><a href="uploaded/COMPARATIVE VEGETABLES AND FRUITS 2016-17.pdf"> COMPARATIVE VEG & FRUITS 2016-17</a><br /> <a style="font-size: small; font-weight: bold;" href="uploaded/WASHING___IRONING.PDF"><img style="font-size: small; text-align: center;" src="uploaded/ch.gif" alt="" width="90" height="20" /></a> <a href="uploaded/M & R.pdf">M & R 2016-17</a><br /> <a style="font-size: small; font-weight: bold;" href="uploaded/WASHING___IRONING.PDF"><img style="font-size: small; text-align: center;" src="uploaded/ch.gif" alt="" width="90" height="20" /></a> <a href="uploaded/ELECTRICAL.pdf">ELECTRICAL 2016-17</a><br /> <a style="font-size: small; font-weight: bold;" href="uploaded/WASHING___IRONING.PDF"><img style="font-size: small; text-align: center;" src="uploaded/ch.gif" alt="" width="90" height="20" /></a> <a href="uploaded/STUDENTS STAT.pdf">STUDENT'S STAT.2016-17</a><br /> <a style="font-size: small; font-weight: bold;" href="uploaded/WASHING___IRONING.PDF"><img style="font-size: small; text-align: center;" src="uploaded/ch.gif" alt="" width="90" height="20" /></a> <a href="uploaded/bedding 1.pdf">BEDDING 2016-17</a><br /> <a style="font-size: small; font-weight: bold;" href="uploaded/WASHING___IRONING.PDF"><img style="font-size: small; text-align: center;" src="uploaded/ch.gif" alt="" width="90" height="20" /></a> <a href="uploaded/TOILET ITEMS.pdf">TOILET ITEMS 2016-17</a><br /> <a style="font-size: small; font-weight: bold;" href="uploaded/WASHING___IRONING.PDF"><img style="font-size: small; text-align: center;" src="uploaded/ch.gif" alt="" width="90" height="20" /></a> <a href="uploaded/UNIFORM.pdf">UNIFORM 2016-17<br /></a> <a style="font-size: small; font-weight: bold;" href="uploaded/WASHING___IRONING.PDF"><img style="font-size: small; text-align: center;" src="uploaded/ch.gif" alt="" width="90" height="20" /></a> <a href="uploaded/UNIFORM STITCHING.pdf">UNIFORM STICHING 2016-17 </a><br /> <a style="font-size: small; font-weight: bold;" href="uploaded/WASHING___IRONING.PDF"><img style="font-size: small; text-align: center;" src="uploaded/ch.gif" alt="" width="90" height="20" /></a> <a href="uploaded/utensil.pdf">UTENSILS 2016-17<br /></a> <a style="font-size: small; font-weight: bold;" href="uploaded/WASHING___IRONING.PDF"><img style="font-size: small; text-align: center;" src="uploaded/ch.gif" alt="" width="90" height="20" /></a><a href="uploaded/VMC N VAC MEETING.pdf">VMC AND VAC 2016-17</a><br /></p> 






</div>
<script>
  (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
  (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
  m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
  })(window,document,'script','https://www.google-analytics.com/analytics.js','ga');

  ga('create', 'UA-101541954-1', 'auto');
  ga('send', 'pageview');

</script>
<div id="ad">
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
</div>
</body>
</html>




