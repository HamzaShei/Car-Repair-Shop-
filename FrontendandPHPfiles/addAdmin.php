<?php
	  session_start(); //this must be the very first line on the php page, to register this page to use session variables
	$_SESSION['timeout'] = time(); ////record the time at the user login

    require_once('inc/sessionVerify.php');
	require_once "inc/util.php";
	error_reporting(E_ALL);
	//variables
				$msg = "";
				$term = "You must agree to the terms and conditions";
				//variables
				$firstName = "";
				$lastName = "";
				$email = "";
				$password = "";
				$conpassword = "";
				
				$firstNameErr = "";
				$lastNameErr = "";
				$emailErr = "";
				$passwordErr= "";
				$passwordConfirmErr= "";

				$emailok = false;
				$passwordok = false;
				
				$dbhost = "localhost";
				$dbuser = "hamsheik";
				$dbpass = "H3488she";
				$db = "hamsheik_db";
				
				
				
				
			if (isset($_POST['submit']))
			{
			//connect to db
			$con = mysqli_connect($dbhost, $dbuser, $dbpass) or die('Error connecting to the database:' . mysqli_error());	
	
		
			
				
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

			 //settings and validating email messages
			if (empty($_POST["email"])) 
			{
		    		$emailErr = "Email is Required";
		    		$email = trim($_POST['email']);
			} else {
		  	if (!filter_input(INPUT_POST, 'email',FILTER_VALIDATE_EMAIL)) 
		    	{
		    		$emailErr = "Email Invalid Format";
		    		$email = trim($_POST['email']);
		   	}
		   	else
		   	{
		   		$emailok = true;
				$email = trim($_POST['email']);
		   	}
		  }
		  
		  
		
		  
		  //password check 
		  
		  if (empty($_POST["password"])) {
			   $passwordErr = "Password is required";
			   } else {
			   $passwordok = true;
			   $password = trim($_POST["password"]);
			   }
			
			
			//confirm password
			  if (empty($_POST["conpassword"])) {
			   $passwordConfirmErr = "Password Confirm is Required";
			   } else {
			   $conpassword = trim($_POST["conpassword"]);
			   }

			   if ($conpassword != $password) {
			   $passwordConfirmErr = "Password Must Match";
			   } else {
			   $conpassword = trim($_POST["conpassword"]);
			   }
				
			//password validation
			if (!pwdValidate($password))
			 	{
					$passwordErr = "Must be at least 10 characters long with number and uppercase letter";
					$password = trim($_POST["password"]);
			 	}
				else {
					if ($password != $conpassword)
					{
						$passwordConfirmErr = "Password Must Match";
					}
					else {
						$passwordok = true;
						$password = trim($_POST["password"]);
					}
				}


				
			
				
				
				
				
				
				//if user entered valid information it will direct to the log in page
				if($emailok && $passwordok) {
					echo "New Admin Registered";
					echo "<br>";
					echo "First Name: " . $firstName;
					echo "<br>";
					echo "Last Name: " . $lastName;
					echo "<br>";
					echo "Email for Username: " . $email;
					echo "<br>";
					
				
				}
				
				mysqli_select_db($con, $db);
				$sql = "INSERT INTO ADMIN(firstName, lastname, Email, Password) VALUES ('$firstName', '$lastName', '$email','$password')";
				mysqli_query($con,$sql);
				
				mysqli_close($con);
				

			
						
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
					</ul>
				</li>
			</ul>
		</div>
	</div>
	<div id="body">
		<div class="content">
			<div class="section">
				<div class="contact">
					<h2>Register New Admin</h2>
						
			<br />
					
					<form action="addAdmin.php" method ="post">
						<label for="firstName"> <span>First Name</span>
							<input type="text" name="firstName" id="name">
							
							<?php echo $firstNameErr; ?>
						</label>
						<label for="lastName"> <span>Last Name</span>
							<input type="text" name="lastName" id="name">
							
							<?php echo $lastNameErr; ?>
						</label>
						<label for="email"> <span>email</span>
							<input type="text" name="email" id="email">
							<?php echo $emailErr; ?>
						</label>
						<label for="password"> <span>Password</span>
							<input type="password" name="password" id="subject">
							<?php echo $passwordErr; ?>
						</label>
						<label for="Conpassword"> <span>Confirm Password</span>
							<input type="password" name="conpassword" id="subject">
							<?php echo $passwordConfirmErr; ?>
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