	
	
	
	<?php
		 session_start(); //this must be the very first line on the php page, to register this page to use session variables
	$_SESSION['timeout'] = time(); ////record the time at the user login

    require_once('inc/sessionVerify.php');
	require_once "inc/util.php";
	error_reporting(E_ALL);
	//variables
				$msg = "";
				$term = "You must agree to the terms and conditions";
				$name = "";
				$email = "";
				$gender = "";
				$status = "";
				$department = "";
				//variables
				$firstName = "";
				$lastName = "";
				$email3 = "";
				$phone = "";
				$address = "";
				$city = "";
				$zip = "";
				$state = "";
				$schedule = "";
				$brand = "";
				$model = "";
				$year = "";
				$confirm = "";
				$service = "";
				
				$firstNameErr = "";
				$lastNameErr = "";
				$emailErr = "";
				$phoneErr = "";
				$addressErr = "";
				$cityErr = "";
				$zipErr = "";
				$brandErr = "";
				$modelErr = "";
				$yearErr = "";
				$confirmErr = "";
				$messageErr = "";
				

				$emailok = false;
				
				$dbhost = "localhost";
				$dbuser = "hamsheik";
				$dbpass = "H3488she";
				$db = "hamsheik_db";
				
				
				
				
				
				
				
			if (isset($_POST['submit']))
			{
				
			
				
				//checks to see if use entered the information correctly 
					if (empty($_POST["firstName"])) 
			{
	    			$firstNameErr = "First Name is required";
	  		} else {
	  			$firstName = trim($_POST["firstName"]);
	 		}
			
			if (empty($_POST["lastName"])) 
			{
			 	$lastNameErr = "Last Name is required";
			 } else {
			 	$lastName = trim($_POST["lastName"]);
			 }
			 
			 if (empty($_POST["phone"])) 
			{
			 	$phoneErr = "Phone is required";
			 } else {
			 	$phone = trim($_POST["phone"]);
			 }
			 
			 if (empty($_POST["address1"])) 
			{
			 	$addressErr = "Address is required";
			 } else {
			 	$address1 = trim($_POST["address1"]);
			 }
			 
			 if (empty($_POST["city"])) 
			{
			 	$cityErr = "city is required";
			 } else {
			 	$city = trim($_POST["city"]);
			 }

			if (empty($_POST["zip"])) 
			{
			 	$zipErr = "Zipcode is required";
			 } else {
			 	$zip = trim($_POST["zip"]);
			 }
			 
			if (empty($_POST["brand"])) 
			{
			 	$brandErr = "Brand is required";
			 } else {
			 	$brand = trim($_POST["brand"]);
			 }
			 
			 if (empty($_POST["model"])) 
			{
			 	$modelErr = "Model is required";
			 } else {
			 	$model = trim($_POST["model"]);
			 }
			 
			 if (empty($_POST["year"])) 
			{
			 	$yearErr = "year is required";
			 } else {
			 	$year = trim($_POST["year"]);
			 }
			 
			 if (empty($_POST["confirm"])) 
			{
			 	$confirmErr = "confirm required";
			 } else {
			 	$confirm = trim($_POST["confirm"]);
			 }
			 
			 if (empty($_POST["message2"])) 
			{
			 	$messageErr = "Message required";
			 } else {
			 	$message2 = trim($_POST["message2"]);
			 }
			 
			
			
		

			 //settings and validating email messages
			if (empty($_POST["email3"])) 
			{
		    		$emailErr = "Email is Required";
		    		$email3 = trim($_POST['email3']);
			} else {
		  	if (!filter_input(INPUT_POST, 'email3',FILTER_VALIDATE_EMAIL)) 
		    	{
		    		$emailErr = "Email Invalid Format";
		    		$email3 = trim($_POST['email3']);
		   	}
		   	else
		   	{
		   		$emailok = true;
				$email3 = trim($_POST['email3']);
		   	}
		  }
		  
		  if (!phoneValidate($phone)){
			 	
					$phoneErr = "please enter correct format with 10 numbers ";
			 	
				 } else {
					$phone = trim($_POST["phone"]);
			
				 }

		
		 
			
				//department
				
					$state = ($_POST['state']);
				
				
				
				//status
					
					$service = ($_POST['service']);
					$schedule = ($_POST['schedule']);
				
				
				
				
				
				
				//if user entered valid information it will direct to the log in page
				if(!empty($firstName) && !empty($lastName)  && !empty($email3)  &&!empty($phone)&&!empty($address1)&&!empty($city)&&!empty($zip)&&!empty($brand)&&!empty($model)&&!empty($year)&&!empty($confirm)) {
					echo "Thank you for registering your info is";
					echo "<br>";
					echo "Name: " . $firstName;
					echo "<br>";
					echo "Name: " . $lastName;
					echo "<br>";
					echo "Email: " . $email3;
					echo "<br>";
					echo "Phone: " .  $phone;
					echo "<br>";
					echo "Phone: " .  $address1;
					echo "<br>";
					echo "City: " . $city;
					echo "<br>";
					echo "Zipcode: " . $zip;
					echo "<br>";
					echo "State: " . $state;
					echo "<br>";
					echo "Schedule: " . $schedule;
					echo "<br>";
					echo "Brand: " . $brand;
					echo "<br>";
					echo "Model: " . $model;
					echo "<br>";
					echo "Year: " . $year;
					echo "<br>";
					echo "Leaving vehicle: " . $confirm;
					echo "<br>";
					echo "Service: " . $service;
					
				
				}
			
				
			
			}				
			
		?>
<!DOCTYPE HTML>
<!-- Website Template by freewebsitetemplates.com -->
<html>
<head>
	<meta charset="UTF-8">
	<title>Book An Apppointment - Car Repair Shop Website Template</title>
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
					</ul>
				</li>
			</ul>
		</div>
	</div>
	<div id="body">
		<div class="content">
			<div class="section">
				<div class="booking">
					<h2>Admins</h2>
					<form action="booking.php" method ="post">
						<h4>Admin Details</h4>
					<?php	
				$dbhost = "localhost";
				$dbuser = "hamsheik";
				$dbpass = "H3488she";
				$db = "hamsheik_db";

				// Create connection
				$con = mysqli_connect($dbhost, $dbuser, $dbpass, $db );
				// Check connection
				if (!$con) {
					die("Connection failed: " . mysqli_connect_error());
				}

					$sql = "SELECT * FROM ADMIN";
					$result = mysqli_query($con, $sql);

				if ($result->num_rows > 0) {
					echo "<table><tr><th>firstName</th><th>lastName</th><th>Email</th><th>Password</th></tr>";
					// output data of each row
				while($row = $result->fetch_assoc()) {
					echo "<tr><td>".$row["firstName"]."</td><td>".$row["lastName"]." </td><td>".$row["Email"]." </td><td>".$row["Password"]." </td></tr>";
					}
					echo "</table>";
				} else {
					echo "0 results";
				}

				mysqli_close($con);
			
			?>
		
						
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
				<div class="featured">
					<h3>featured services</h3>
					<ul>
						<li>
							<a href="services.php">engine maintenance</a>
						</li>
						<li>
							<a href="services.php">wheel alignment</a>
						</li>
						<li>
							<a href="services.php">air condition services</a>
						</li>
						<li>
							<a href="services.php">transmission</a>
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