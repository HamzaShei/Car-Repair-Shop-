<?php
	require_once "inc/util.php";
	//variables
				$msg = "";
				$term = "You must agree to the terms and conditions";
				//variables
				$serviceName = "";
				$description = "";
				
				
				$serviceErr = "";
				$descriptionErr = "";
				
				
			
				
				
				
				
			if (isset($_POST['submit']))
			{
				
	
		
			
				
				//checks to see if use entered the information correctly 
			if (empty($_POST["serviceName"])) 
			{
	    			$serviceErr = "Enter Service Name";
	  		} else {
	  			$serviceName = trim($_POST["serviceName"]);
	 		}

			if (empty($_POST["description"])) 
			{
			 	$descriptionErr = "Enter description";
			 } else {
			 	$description = trim($_POST["description"]);
			 }
			 
			 //if user entered valid information it will display on the screen
				 if(!empty($serviceName) && !empty($description)) {
					echo "Product Added";
					
					echo "Service Type: " ,$serviceName;
					echo "<br>";
					echo "Description : " ,$description;
					
					
					
				
				}


			
						
			}
		?>



<!DOCTYPE HTML>
<!-- Hamza Sheikh 
	9 September 2022
	lab2.php 
	Registration page to take user information to direct to the login page-->

<html>
<head>
	<meta charset="UTF-8">
	<title>Registration</title>
	<link rel="stylesheet" href="css/style.css" type="text/css">
	<!--[if lt IE 9]>
		<link rel="stylesheet" type="text/css" href="css/ie.css">
	<![endif]-->
</head>
<body>
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
						<li>
							<a href="editService.php">edit Service</a>
						</li>
					</ul>
				</li>
			</ul>
		</div>
	</div>
	<div id="body">
		<div class="content">
			<div class="section">
				<div class="contact">
					<h2>add New Service</h2>
						
			<br />
					
					<form action="addProduct.php" method ="post">
						<label for="serviceName"> <span>Service type </span>
							<input type="text" name="serviceName" id="name">
							
							<?php echo $serviceErr; ?>
						</label>
						<label for="description"> <span>Service Description</span>
							<input type="text" name="description" id="name">
							
							<?php echo $descriptionErr; ?>
						</label>
						<input type="submit" name="submit" id="send" value="">
					</form>
				</div>
			</div>
			<div class="sidebar">
				<div class="contact">
					<div>
						<a href="gallery.php"><img src="images/lava2.jpg" alt=""></a>
					</div>
					<h4>contact information</h4>
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