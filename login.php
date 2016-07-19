<html>
	<title>Wing academy</title>
	<head>
	<link rel="stylesheet" type="text/css" href="style.css">
	</head>
	<body>
	
<?php
function renderForm($error)
{
//if there are any errors,display them
if($error !='')
{echo $error;
}
}
?>
	 <?php
error_reporting('E_ALL ^ E_NOTICE');
$localhost1='localhost';
 $username='root';
 $password='';
 $con = mysql_connect($localhost1,$username,$password) 
          or
    exit('could not connect.............');

mysql_select_db('wing') or exit('could not connect to records ka db');

if(isset($_POST['submit']))
{
$id=$_POST['id'];
$pass=$_POST['pass'];
$result=mysql_query("SELECT * from wing where userid='$id' && password=HEX('$pass')");
$count=mysql_num_rows($result);

  if($count==1)
 {
 session_start();
$_SESSION['myusername']=$id;
header("location: index1.php");
 }
else
{
echo"wrong Username or Password";
}

 }
 mysql_close($con);


?>
	
	<div class="header">
	<a href="index.html"><h1>WING ACADEMY</h1></a>
		<ul class="header-link">
			<li><a href="index.html"><button id="button0">Home</button></a></li>
			<li><a href="about.html"><button id="button1">About</button></a></li>
			<li><a href="courses.html"><button id="button2">Courses</button></a></li>
			<li><a href="contactus.html"><button id="button3">Contact us</button></a></li>
			<li><a href="login.php"><button id="button4">Log In</button></a></li>
		</ul>
	</div>
	<div class="loginback">
		<div id="login">
		<h2 class="signb">SIGN IN!</h2>
		
			<div class="logform">
			
			<form action="" method = "POST" align="center">


<table align="center">
<tr>
<td><font size="4" face="verdana">User ID :</font></td> <td><input type="text"  name="id"></td></tr>
<tr>
<td><font size="4" face="verdana">Password:</font></td> <td> <input type="password" name="pass"></td></tr>
</table>
<input type= "submit" value="Login" id="submit" name="submit" >
<br><br>
</form>
			
			<a href="signup.php" class="myButton4">Sign up</a>	
			</div>
		</div>
		
		
		<div class="logimg">
		<h2>Or Sign In with</h2>
			<div class="licon1">
				<a href="http://www.facebook.com" target="_blank"><img src="facebook.png"/></a>
			</div>
			<div class="licon2">
				<a href="http://www.google.com" target="_blank"><img src="google_plus.png"/></a>
			</div>
			<div class="licon3">
				<a href="http://www.twitter.com" target="_blank"><img src="twitter.png"/></a>
			</div>
		</div>
	</div>
	
	<div class="footer">
		<div class="footer1">
			<ul>
				<li><a href="index.html">Home</a></li>
				<li><a href="courses.html">Courses</a></li>
				<li><a href="about.html">About Us</a></li>
				<li><a href="contactus.html">Contact Us</a></li>
			</ul>

		</div>
		<div class="footer2">
			<p>Today, we have a strong presence<br /> with 75 coaching centers,<br />
				supported by over 500 well<br /> educated & experienced tutors.</p>
		</div>
		<div class="footer3">
			<h2>Wing Academy</h2>
			<ul class="footimg">
				<li><a href="http://www.facebook.com" target="_blank"><img src="facebook.png"/></a></li>
				<li><a href="http://www.google.com" target="_blank"><img src="google_plus.png"/></a></li>
				<li><a href="http://www.twitter.com" target="_blank""><img src="twitter.png"/></a></li>
				
			</ul>
		</div>
		<div class="footer4">
			<p> &copy; Copyright 2015 wingacademy.com • All rights reserved • Designed by Rohit</p>
		</div>
	</div>

	</body>	
</html>