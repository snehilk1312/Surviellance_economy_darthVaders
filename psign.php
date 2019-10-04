<?php
session_start();
include 'database2.php';
if (isset($_POST['submit']))
{
  $email=$_POST['email'];
  $password=$_POST['password'];
  $cpassword=$_POST['cpassword'];
  $country=$_POST['country'];
  $gender=$_POST['gender'];
  $employment=$_POST['employment'];
  if($password==$cpassword){
    $query=mysql_query("SELECT email from projectform where email='$email'");
    $n=mysql_num_rows($query);
    if($n==0)
    {
      $q=mysql_query("INSERT into projectform(email,password,country,gender,employment) VALUES('$email','$password','$country','$gender','$employment')");
      if($q)
      {
        echo "Account Created";
        $_SESSION['email']=$email;
      }
      else {
        echo "fail";
      }}
      else{
        $q=mysql_query("UPDATE projectform set password='$password',gender='$gender',country='$country',employment='$employment' where email='$email'");

  		if ($q)
  		{
  			echo "updated";

  		}

  		else
  		{
  			echo "update failed";
  		}
    }
    }
    else{
      echo "password doesn't match";
    }
  }
  ?>
  <!DOCTYPE html>
<html>
<head>
  <style>
  body{
    font-size:30px;
    background-image: url("signup.jpg");
 background-size:cover;
 font-family:Arial,Helvetica,san-serif;
  }
  .column {
    float: left;
    width: 50%;
  /*  padding: 10px;*/
    height: 600px; /* Should be removed. Only for demonstration */
  }

  /* Clear floats after the columns */
  .row:after {
    content: "";
    display: table;
    clear: both;
  }
</style>
  </head>
<center><body>
    <h1 style="background-color:;"><i><marquee>JOIN US TO EXPLORE MORE</marquee></i></h1>
  <div class="row">
    <div>
    <form action="<?php echo $_SERVER['PHP_SELF'];?>" method="post" >
      <table style="width:100%">
        <tr>
          <th style="text-align:left" >Sign Up credentials</th>
          <th style="text-align:left">Your Info</th>
        </tr>
        <tr><b>
          <td>Email:</td>
          <td><input type="email" required placeholder="Enter a valid e-mail id" name="email" size="35" style="border-radius: 10px;height:25px;border:solid" ></td>
        </tr>
        <tr>
          <td>Country:</td>
          <td><font size="10"><select name="country" style="border-radius: 10px;height:25px;border:solid" >
              <option value="" >select country</option>
              <option value="india">India</option>
              <option value="america">America</option>
              <option value="britain">Britain</option>
              <option value="pakistan">Pakistan</option>
              <option value="canada">Canada</option>
              <option value="restofworld">Rest Of World</option>
            </select></font></td>
        </tr>
        <tr>
          <td>Employment:</td>
          <td> <font size="10"> <select name="employment" style="border-radius: 10px;height:25px;border:solid" >
              <option value="" >select your choice</option>
              <option value="Student">Student</option>
              <option value="Engineer">Engineer</option>
              <option value="Doctor">Doctor</option>
              <option value="Scientist">Scientist</option>
              <option value="Analytics">Analytics</option>
              <option value="Self Employed">Self Employed</option>
            </select></font></td>
        </tr>
        <tr>
          <td>Gender:</td>
          <td> <font size="10"> <select name="gender" style="border-radius: 10px;height:25px;border:solid">
              <option value="" >select Gender</option>
              <option value="male">Male</option>
              <option value="female">Female</option>
              <option value="disclose">Rather Not Say</option>
            </select></font></td>
        </tr>
        <tr>
          <td>Password:</td>
          <td><font size="10"><input type="password" required placeholder="Enter your password" name="password"size="35" style="border-radius: 10px;height:25px;border:solid"></td>
        </tr></font>
    <tr>
          <td>Confirm Password:</td>
          <td><font size="10"><input type="password" placeholder="Confirm Password" id="confirm_password" name="cpassword" required size="35" style="border-radius: 10px;height:25px;border:solid"></td>
        </tr></font>
      </table>
  <center><h1><button type="submit" name="submit" size="20px"><b><font size="20">Submit</font></b></button></h1></center>
</form>
</div>
</body></center>
</html>
