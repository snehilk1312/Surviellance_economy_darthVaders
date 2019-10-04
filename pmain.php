<?php
session_start();
include 'database2.php';
if (isset($_GET['submit3'])){
$khoj =$_GET['khoj'];
if($khoj!=""){
  $query=mysql_query("SELECT * from company_data where website like '%".$khoj."%' ");
  $n=mysql_num_rows($query);
// echo $n;
  $row=mysql_fetch_assoc($query);
header("refresh:1;url=pcbresult.php");
$_SESSION['khoj']=$khoj;
$_SESSION['info']=$row['info'];
$_SESSION['img']=$row['img'];
$_SESSION['des']=$row['des'];
}}

 ?>
<!DOCTYPE html>
<html>
<div style="background-color:#008080">
<head>
  <h1  style="background-color:#008080"><i><center>Data Analytics Private Ltd.</center></i>
    <form  action="<?php echo $_SERVER['PHP_SELF'];?>" method="get" style="margin-left:1200px">
      <input style="border-radius: 10px;height:35px;width:200px;background-color:#00ff7f;border:solid" type="text" placeholder="enter website name or tag or keyword" name="khoj">
      <button style="border-radius: 10px;height:35px;background-color:grey;border:solid" type="submit" name="submit3">search</button></form></h1>
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <style>
  body, html {
  height: 100%;
  margin: 0;
  font-family: Arial, Helvetica, sans-serif;
}

* {
  box-sizing: border-box;
}
.bg-image {
  /* The image used */
  background-image: url("0981185001534673496-1000x500.jpg");

  /* Add the blur effect */
  filter: blur(8px);
  -webkit-filter: blur(8px);

  /* Full height */
  height: 100%;

  /* Center and scale the image nicely */
  background-position: center;
  background-repeat: no-repeat;
  background-size: cover;
}

/* Position text in the middle of the page/image */
.bg-text {
  background-color: rgb(0,0,0); /* Fallback color */
  background-color: rgba(0,0,0, 0.4); /* Black w/opacity/see-through */
  color: white;
  font-weight: bold;
  border: 3px solid #f1f1f1;
  position: absolute;
  top: 50%;
  left: 50%;
  transform: translate(-50%, -50%);
  z-index: 2;
  width: 80%;
  padding: 20px;
  text-align: center;
}
  li {
  display:inline;
}

.card {
  box-shadow: 0 4px 8px 0 rgba(0,0,0,0.2);
  transition: 0.3s;
  width: 100%;
  border-radius: 10px;
}

.card:hover {
  box-shadow:0 8px 16px 0 rgba(0,0,0,0.2);
}

img {
  border-radius: 5px 5px 0 0;
}

.container {
  padding: 2px 16px;
}
p{
  color:white;
}
/* Style the navbar */
#navbar {
 overflow: hidden;
 background-color: #333;
}

/* Navbar links */
#navbar a {
 float: left;
 display: block;
 color: #f2f2f2;
 text-align: center;
 padding: 14px;
 text-decoration: none;
}

/* Page content */
.content {
 padding: 16px;
}

/* The sticky class is added to the navbar with JS when it reaches its scroll position */
.sticky {
 position: fixed;
 top: 0;
 width: 100%;
}

/* Add some top padding to the page content to prevent sudden quick movement (as the navigation bar gets a new position at the top of the page (position:fixed and top:0) */
.sticky + .content {
 padding-top: 60px;
}
  </style>
</head>
<body background="images.jpg">

</div>
<div id="navbar">
 <a href="#home">Home</a>
 <a href="#news">News</a>
 <a href="#about">About </a>
 <a href="#contact">Contact</a>
</div>

<table class="card">
    <tr><th><a href="amaz.php"><img src="amazon.png" alt="Avatar" class="container" style="width:100% "></a>
      <h4><b>Amazon</b></h4>
      <p>E-Commerce site</p></th>
<th> <a href="apple.php">   <img src="apple.png" alt="Avatar" class="container" style="width:90% "></a>
      <h4><b>Apple</b></h4>
      <p>Closed System</p></th>
      <th> <a href="fb.php">   <img src="fb.jpg" alt="Avatar" class="container" style="width:80% "></a>
            <h4><b>Facebook</b></h4>
            <p>One of the 1st social media platform,now a big privacy concern</p></th>
            <th> <a href="google.php">   <img src="gogle.jpg" alt="Avatar" class="container" style="width:110% "></a>
                  <h4><b>Google</b></h4>
                  <p>World's Biggest search engine</p></th>
                  <th>    <img src="pornhub.jpg" alt="Avatar" class="container" style="width:100% ">
                        <h4><b>PornHub</b></h4>
                        <p>World's Biggest Porn Site</p></th>
                        <th>    <img src="insta.jpg" alt="Avatar" class="container" style="width:80% ">
                              <h4><b>Instagram</b></h4>
                              <p>Facebook's Adopted site,Evil to same extent</p></th>
                              <th>   <a href="spotify.php"> <img src="spotify.jpg" alt="Avatar" class="container" style="width:100% "></a>
                                    <h4><b>Spotify</b></h4>
                                    <p>World's biggest music streaming site</p></th>
</tr>
<tr>
  <th>  <a href="netflix.php">  <img src="netflix.jpg" alt="Avatar" class="container" style="width:100% "></a>
        <h4 ><b>Netflix</b></h4>
        <p>Best streaming service,but collects massive data</p></th><th>
    <a href="microsoft.php">         <img src="microsoft.png" alt="Avatar" class="container" style="width:85% "></a>
              <h4><b>Microsoft</b></h4>
              <p>Once it was a Big Brother,now also a big power in os</p></th>
              <th> <a href="twitter.php">   <img src="twitter.jpg" alt="Avatar" class="container" style="width:100% "></a>
                    <h4><b>Twitter</b></h4>
                    <p>Now a times,fool's tool</p></th>
                    <th> <a href="intel.php">   <img src="intel.png" alt="Avatar" class="container" style="width:100% "></a>
                          <h4><b>Intel</b></h4>
                          <p>Almost Behind every major chip technology.</p></th>
                          <th>  <a href="uber.php">  <img src="uber.png" alt="Avatar" class="container" style="width:100% "></a>
                                <h4><b>Uber</b></h4>
                                <p>Knows your location better than you</p></th>
                                <th>  <a href="linkedin.php">  <img src="linkedin.png" alt="Avatar" class="container" style="width:95% "></a>
                                      <h4><b>LinkedIn</b></h4>
                                      <p>The Professional Social Network</p></th>
                                      <th>    <img src="xvideo.jpg" alt="Avatar" class="container" style="width:100% ">
                                            <h4><b>Xvideo</b></h4>
                                            <p>Another Big pornographic site</p></th>
</tr>
</table>
</body>
</html>
