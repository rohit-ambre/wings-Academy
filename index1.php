<html>
<meta charset="UTF-8">
<head>
	<title>Wing academy</title>
		<link  rel="stylesheet" type="text/css" href="style.css" >
		
</head>
<body>
	<div class="header">
	<a href="index.html"><h1>WING ACADEMY</h1></a>
		<ul class="header-link">
		<li> <h2>  <?php     
         session_start();
         $name=$_SESSION['myusername'];     
         echo'Welcome  '. $name.'';
		 
         ?></h2></li>
			<li><a href="index1.php"><button id="button0">Home</button></a></li>
			<li><a href="about1.html"><button id="button1">About</button></a></li>
			<li><a href="courses1.html"><button id="button2">Courses</button></a></li>
			<li><a href="contactus1.html"><button id="button3">Contact us</button></a></li>
			<li><a href="logout.php"><button id="button4">Log Out</button></a></li>
		</ul>
	</div>
	<div class="wordnimage">
		<img class="home" src="home11.jpg"/>
	</div>
	<div id="master"><strong>We prepare Masters!</strong></div>
	<div id="1stpara"><p>We are one of the leading education service institution,<br /> 
	rendering educational coaching across Maharashtra and Gujarat.<br />
	We provide a wide range of services from coaching to training, in the field of education,<br />
	through a dedicated effort of professionals, devoted to ensuring success <br />and growth of students.
	We have been catering to <br />the educational coaching needs of school
	and college students since the year 2000.<br /> Today, we have a strong presence with 75 coaching centers,<br />
	supported by over 500 well educated & experienced tutors. <br />
	We have grown to coaching around 15,000 students every year over the last decade,<br />
	and have shaped the future of more than 85,000 alumni.</p></div>
	
	<div class="teacher">
		<img src="teacher.jpg"/>
	</div>
	<p> We are one of the leading education service institution,
	rendering educational coaching across<br /> Maharashtra and Gujarat.
	through a dedicated effort of professionals, devoted to ensuring success 
	and growth of students. We have been catering to<br />	 
	the educational coaching needs of school and college students since the year 2000.
	Today,<br /> we have a strong presence with 75 coaching centers,
	supported by over 500 well educated & experienced tutors.<br /> 
	We have grown to coaching around 15,000 students every year over the last decade,
	and have shaped the future of more than 85,000 alumni.</p>
	<p> We are one of the leading education service institution,
	rendering educational coaching across Maharashtra and Gujarat.
	through a dedicated effort of professionals, devoted to ensuring success 
	and growth of students. We have been catering to	 
	the educational coaching needs of school and college students since the year 2000.
	Today, we have a strong presence with 75 coaching centers,
	supported by over 500 well educated & experienced tutors. 
	We have grown to coaching around 15,000 students every year over the last decade,
	and have shaped the future of more than 85,000 alumni.</p>

	<div class="footer">
		<div class="footer1">
			<ul>
				
				<li><a href="index1.php">Home</a></li>
				<li><a href="courses1html">Courses</a></li>
				<li><a href="about1.html">About Us</a></li>
				<li><a href="contactus1.html">Contact Us</a></li>
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
	
	
	<!--<div class="footer">
		<div class="footlink">
			<div class="footsection">
				<h4>TUTORIALS</h4>
				<ul>
					<li><a href="#" title="How to set far future expire headers on RackSpace CDN?">How to set far future expire headers <br>on RackSpace CDN?</a></li>
				</ul>
				<h4>THE BEST OF</h4>
				<ul>
					<li><a href="#" title="The Best Free Software">The Best Free Software</a></li>
					<li><a href="#" title="The Best Online Services">The Best Online Services</a></li>
				</ul>
			</div>
			<div class="footsection">
				<h4>ABOUT</h4>
				<ul>
					<li><a href="#" title="Advertise here">Advertise here</a></li>
					<li><a href="#" title="Contact">Contact me</a></li>
					<li><a href="#" title="Privacy Poliy">Privacy Policy</a></li>
					<li><a href="#" title="Sitemap">Sitemap</a></li>
				</ul>
			</div>
		</div>

	</div>-->

</body>

</html>