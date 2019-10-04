<?php
session_start();
include 'database2.php';
if(isset($_POST['submission'])){
  $website=$_POST['website'];
//  $info=$_POST['info'];
$des=$_POST['des'];
$img=$_FILES['img']['name'];
$info=$_FILES['info']['name'];
$query=mysql_query("SELECT website from company_data where website='$website'");
$n=mysql_num_rows($query);
  //$ram=mysql_error();using mysql_error() was very helpful.
//  echo $ram;
$temp=$_FILES['info']['tmp_name'];
$temp1=$_FILES['info']['tmp_name'];
if($n==0)
 {
    $q=mysql_query("INSERT into company_data(website,info,img,des) VALUES('$website','$info','$img','$des')");
    if($q)
    {
      $dir="./$website";
    mkdir($dir,0777,true);
      move_uploaded_file($temp,"./$website/$info");
      $dir1="./profile/$website/img/";
    mkdir($dir1,0777,true);
      move_uploaded_file($temp1,"./profile/$website/img/$img");
      echo "<img src='profile/$website/img/$img'>";

  }
    else {
      echo "fail!";
    }}
    else{
    /* $q=mysql_query("UPDATE company_data set website='$website',info='$info'");
echo mysql_error();
    if ($q)
    {
      echo "updated";

    else
    {
      echo "update failed";
    }
  }*/
  echo "data already available in database.";}
}
 ?>
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
  /* The image used */
  background-image: url("truth.jpg");

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
  top: 40%;
  left: 50%;
  bottom:0%;
  transform: translate(-50%, -50%);
  z-index: 2;
  width: 80%;
  padding: 20px;
  text-align: center;
}
</style>
</head>

<body>
  <div class="bg-image"></div>
  <div class="bg-text">
<h1>You can enter the details of your reasearch here.</h1>
<h3><i>It is purely confedential and we assure you that.</i></h3>
<form  action="<?php echo $_SERVER['PHP_SELF'];?>" method="post" enctype="multipart/form-data">
  <label>Website:<input type="text" name="website" placeholder="enter the website" style="border-radius: 100px;height:25px;border:solid;padding:20px;margin-bottom:20px"></label><br>
Info File:<label ><input type="file" name="info" style="border-radius: 10px;height:25px;border:solid;margin-bottom:20px"></label><br>
Image    : <label ><input type="file" name="img" style="border-radius: 10px;height:25px;border:solid;margin-bottom:20px"></label><br>
<label>Description:<input type="text" name="des" placeholder="enter the website description" style="border-radius: 100px;height:25px;border:solid;padding:20px;margin-bottom:20px"></label><br>
<button type="submit" name="submission" size="10px" style="margin-right:-600px;margin-top:20px"><b><font size="5">Submit</font></b></button>
</form></div>
</body>
</html>
