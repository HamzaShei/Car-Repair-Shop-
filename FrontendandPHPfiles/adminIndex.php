<!DOCTYPE HTML>
<!-- Website Template by freewebsitetemplates.com -->
<html>
<head>
	<meta charset="UTF-8">
	<title>Car Repair Shop Website Template</title>
	<link rel="stylesheet" href="css/style.css" type="text/css">
	<!--[if lt IE 9]>
		<link rel="stylesheet" type="text/css" href="css/ie.css">
	<![endif]-->
</head>
<body>
<?php
	 session_start(); //this must be the very first line on the php page, to register this page to use session variables
	$_SESSION['timeout'] = time(); ////record the time at the user login
	require_once "inc/util.php";
	require_once( 'inc/dbconnect.php');
?>

	<div id="header">
		<div>
			<a href="adminIndex.php" class="logo"><img src="images/logo.png" alt=""></a>
			<form action="adminIndex.php">
				<input type="text" name="search" id="search" value="">
				<input type="submit" name="searchBtn" id="searchBtn" value="">
			</form>
		</div>
		<div class="navigation">
			<ul>
				<li class="selected">
					<a href="adminIndex.php">home</a>
				</li>
				<li>
					<a href="addAdmin.php">Add Admin</a>
				</li>
				<li>
					<a href="addService.php">Add Service</a>
				</li>
				<li>
					<a href="users.php">User Details</a>
					<ul>
						<li>
							<a href="appointment.php">User Appointment</a>
						</li>
					</ul>
				</li>
				<li>
					<a href="admins.php">Admin Details</a>
					<ul>
						<li>
							<a href="editAdmin.php">edit Admin</a>
						</li>
					</ul>
				</li>
			</ul>
		</div>
	</div>
	<div id="body">
		<div class="header">
			<ul>
				<li>
					<a href="addService.php" class="figure"><img src="images/credit-card.png" alt=""></a>
					<div>
						<h3><a href="appointment.php">See Appointments</a></h3>
						<p>
							Welcome Admin <a href="appointment.php">Click here to see appointments.</a>
						</p>
					</div>
				</li>
				<li>
					<a href="addService.php" class="figure"><img src="images/service.png" alt=""></a>
					<div>
						<h3><a href="addService.php">Add Services</a></h3>
						<p>
							You can remove any link to our website from this website template, you're free to use this website template without linking back to us.
						</p>
					</div>
				</li>
				<li>
					<a href="addService.php" class="figure"><img src="images/warranty.png" alt=""></a>
					<div>
						<h3><a href="addAdmin.php">Add Admin</a></h3>
						<p>
							the <a href="addAdmin.php">Click here to add new Admin</a>.
						</p>
					</div>
				</li>
			</ul>
		</div>
		<div class="body">
			<img src="images/repairs.jpg" alt="">
			<div>
				<h1>lorem ipsum <span>dolor sit amet</span></h1>
				<p>
					Consectetur adipiscing elit. Morbi luctus iaculis congue. Suspendisse vel faucibus sapien. Phasellus eu vulputate risus. Sed id enim sit amet ante gravida tincidunt iaculis eget tortor. Nullam tempor ultrices risus at rutrum. Integer metus nunc, convallis a posuere eget, placerat mollis ante
				</p>
				<a href="appointment.php">See Appointments</a>
			</div>
		</div>
		<div class="footer">
			<div>
				<h2><span>Add Services</span></h2>
				<ul>
					<li>
						<a href="addService.php" class="figure"><img src="images/engine-maintenace.png" alt=""></a>
						<div>
							<h3><a href="addService.php">engine maintenance</a></h3>
							<p>
								Nulla sagittis viverra erat id placerat. Aenean interdum erat urna. Nam lectus quam, dictum a vehicula ut, congue ac arcu.
							</p>
						</div>
					</li>
					<li>
						<a href="addService.php" class="figure"><img src="images/condition-services.png" alt=""></a>
						<div>
							<h3><a href="addService.php">air condition services</a></h3>
							<p>
								Nulla sagittis viverra erat id placerat. Aenean interdum erat urna. Nam lectus quam, dictum a vehicula ut, congue ac arcu.
							</p>
						</div>
					</li>
					<li>
						<a href="addService.php" class="figure"><img src="images/wheel-alignment.png" alt=""></a>
						<div>
							<h3><a href="addService.php">wheel alignment</a></h3>
							<p>
								Nulla sagittis viverra erat id placerat. Aenean interdum erat urna. Nam lectus quam, dictum a vehicula ut, congue ac arcu.
							</p>
						</div>
					</li>
					<li>
						<a href="addService.php" class="figure"><img src="images/transmission-repair.png" alt=""></a>
						<div>
							<h3><a href="addService.php">transmission repair and replacement</a></h3>
							<p>
								Nulla sagittis viverra erat id placerat. Aenean interdum erat urna. Nam lectus quam, dictum a vehicula ut, congue ac arcu.
							</p>
						</div>
					</li>
				</ul>
			</div>
		</div>
	</div>
	<div id="footer">
		<div>
			<div class="contact">
				<h3>contact information</h3>
				<ul>
					<li>
						<b>address:</b> <span>426 Grant Street Pine Hill, TX 75652</span>
					</li>
					<li>
						<b>phone:</b> <span>903-889-6313</span>
					</li>
					<li>
						<b>fax:</b> <span>903-889-6313</span>
					</li>
					<li>
						<b>email:</b> <span><a href="http://www.freewebsitetemplates.com/misc/contact">info@carrepairshop.com</a></span>
					</li>
				</ul>
			</div>
			<div class="tweets">
				<h3>recent tweets</h3>
				<ul>
					<li>
						<a href="#">Fusce ut massa magna, quis aliquam justo. In hac habitasse platea dictumst.<span>1 day ago</span></a>
					</li>
					<li>
						<a href="#">Fusce ut massa magna, quis aliquam justo.<span>2 days ago</span></a>
					</li>
				</ul>
			</div>
			<div class="posts">
				<h3>recent blog post</h3>
				<ul>
					<li>
						<a href="#">Fusce Ut Massa Magna</a>
					</li>
					<li>
						<a href="#">Quis Aliquam Justo</a>
					</li>
					<li>
						<a href="#">In Hac Habitasse Platea</a>
					</li>
					<li>
						<a href="#">Vestibulum Volutpat Turpis Eu Leo Eleifend Et Adipiscing </a>
					</li>
				</ul>
			</div>
			<div class="connect">
				<h3>stay in touch</h3>
				<p>
					Donec tempor, ipsum quis imperdiet, sapien sapien iaculis elit, at malesuada nulla nibh vel eros.
				</p>
				<ul>
					<li id="facebook">
						<a href="http://freewebsitetemplates.com/go/facebook/">facebook</a>
					</li>
					<li id="twitter">
						<a href="http://freewebsitetemplates.com/go/twitter/">twitter</a>
					</li>
					<li id="googleplus">
						<a href="http://freewebsitetemplates.com/go/googleplus/">googleplus</a>
					</li>
				</ul>
			</div>
		</div>
		<div class="section">
			<p>
				&copy; this is the copyright area
			</p>
			<ul>
				<li>
					<a href="adminIndex.php">home</a>
				</li>
				<li>
					<a href="addAdmin.php">Add Admin</a>
				</li>
				<li>
					<a href="addService.php">Add Service</a>
				</li>
				<li>
					<a href="appointment.php">See Apointments</a>
				</li>
			</ul>
		</div>
	</div>
</body>
</html>