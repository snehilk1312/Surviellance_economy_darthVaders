<!DOCTYPE html>
<html>
<head>
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
  /* Full height */
  height: 50%; 
  
  /* Center and scale the image nicely */
  background-position: center;
  background-repeat: no-repeat;
  background-size: cover;
}

/* Images used */
.img1 { background-image: url("5.jpg"); }
.img2 { background-image: url("12.jpg"); }
.img3 { background-image: url("4.jpg"); }
.img4 { background-image: url("6.jpg"); }
.img5 { background-image: url("2.jpg"); }
.img6 { background-image: url("1.jpg"); }

/* Position text in the middle of the page/image */
.bg-text1 {
  background-color: rgb(0,0,0); /* Fallback color */
  background-color: rgba(0,0,0, 0.4); /* Black w/opacity/see-through */
  color: white;
  font-weight: bold;
  border: 10px solid #f1f1f1;
  border-radius:50px;
  position: fixed;
  top: 30%;
  left: 25%;
  transform: translate(-50%, -50%);
  z-index: 2;
  width: 300px;
  padding: 10px;
  text-align: center;
}
.bg-text2 {
  background-color: rgb(0,0,0); /* Fallback color */
  background-color: rgba(0,0,0, 0.4); /* Black w/opacity/see-through */
  color: white;
  font-weight: bold;
  border: 10px solid #f1f1f1;
  position: fixed;
  top: 30%;
  left: 75%;
  transform: translate(-50%, -50%);
  z-index: 2;
  width: 300px;
  padding: 10px;
  text-align: center;
}
.bg-text3 {
  background-color: rgb(0,0,0); /* Fallback color */
  background-color: rgba(0,0,0, 0.4); /* Black w/opacity/see-through */
  color: white;
  font-weight: bold;
  border: 10px solid #f1f1f1;
  position:fixed;
  top: 50%;
  left: 20%;
  transform: translate(-50% -50%);
  z-index: 2;
  width: 700px;
  padding: 10px;
  text-align:centre,sticky;
}
a {
  color: white;
}
</style>
</head>
<body>

<div class="bg-image img1"></div>
<div class="bg-image img2"></div>
<div class="bg-image img3"></div>
<div class="bg-image img4"></div>
<div class="bg-image img5"></div>
<div class="bg-image img6"></div>

<div class="bg-text1"><font size=20><a href="http://localhost/plogin.php">Login</a></font><br>
<font size=3>Good to See You</font>
</div> 
<div class="bg-text2"><font size=20><a href="http://localhost/psign.php">Signup</a></font><br>
<font size=3>To Explore More </font> 
</div> 
<div class="bg-text3">
<font size=06>
"Your life is your business. Not ours."<br>
"There is a way to protect your privacy."<br> 
"When it comes to privacy, talk is cheap."<br>
"Technology with respect and honesty.  Here’s how we do it."<br>
"There is a way to protect your privacy."<br> 
"This is a informative website to protect user from cookie based privacy thief"<br>
</font> </div>




</body>
</html>