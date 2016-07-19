<! doctype html>
<html>
<meta charset="UTF-8">
<head>
	<title>Wing academy</title>
		<link  rel="stylesheet" type="text/css" href="style.css" >
		
</head>
<body>
<?php 
 $localhost1='localhost';
 $username='root';
 $password='';
 error_reporting('E_ALL ^ E_NOTICE');
 $con=mysql_connect($localhost1,$username,$password) or exit('could not connect to server');
mysql_select_db('wing') or exit('could not connect to db');


if(isset($_POST['submit']))
{

$name=$_POST['id'];
$gender=$_POST['gender'];
$email=$_POST['email'];
$userid=$_POST['user'];
$password=$_POST['pass'];

if($email==null||$email==""||$gender==null||$gender==""||$name==null||$name==""||$userid==null||$userid==""||$password==null||$password=="")
{ $error='ERROR :PLEASE ENTER ALL DETAILS';
 //if either field is blank,display the form again
 renderForm($error);
}
else
{
 $str = '<h2><big> You have registered please login</big></h2>';
echo strtoupper($str);

 mysql_query("INSERT wing SET name='$name',gender='$gender',email='$email',userid='$userid',password=HEX('$password')");
}
}


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
	
	<div class="signupback">
		<div id="signup">
		<h2 class="signub">SIGN UP!</h2>
		<h2 class="signub"></h2>
			<div class="signupform">
			
				<form id="form" name="form" method="post" action="" align="center" >
<br>
<table align="center">
<tr>
<td><font size="4" face="verdana">Name:</font></td><td><input type="text" name="id" ></td></tr>
<td><font size="4" face="verdana">Gender:</font></td><td><input type="radio" name="gender" value="male" >Male<br>
 <input type="radio" name="gender" value="female" >Female </td></tr>
<td><font size="4" face="verdana">Email ID:</font></td><td><input type="email" name="email" ></td></tr>
<td><font size="4" face="verdana">userID:</font></td>
  <td><input type="text" name="user" ></td></tr>
     

 
  <td><font size="4" face="verdana">Password :</font></td> 
   <td><input type="password" name="pass" ></td></tr>
</table>

<input type="submit" name="submit" value="Register" >
</form>
			
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