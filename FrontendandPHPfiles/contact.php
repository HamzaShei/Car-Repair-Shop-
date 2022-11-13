<?php
    session_start(); //this must be the very first line on the php page, to register this page to use session variables
	$_SESSION['timeout'] = time(); ////record the time at the user login
    require_once'inc/sessionVerify.php';
	require_once 'inc/dbconnect.php';

	require_once "inc/util.php";
	//variables
				$firstName = "";
				$lastName = "";
				$email = "";
				$phone = "";
				$subject = "";
				$comment = "";
				$firstNameErr = "";
				$lastNameErr = "";
				$emailErr = "";
				$phoneErr= "";
				$subjectErr = "";
				$commentErr = "";
				$emailok = false;
				$passwordok = false;
				$agreeok = false;
				
				$dbhost = "localhost";
				$dbuser = "hamsheik";
				$dbpass = "H3488she";
				$db = "hamsheik_db";
				
			if (isset($_POST['submit']))
			{
				//connect to db
				$con = mysqli_connect($dbhost, $dbuser, $dbpass) or die('Error connecting to the database:' . mysqli_error());
				//checks to see if use entered the information correctly 
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
			 
			 if (empty($_POST["subject"])) 
			{
			 	$subjectErr = "Subject is required";
			 } else {
			 	$subject = trim($_POST["subject"]);
			 }
			 
			 if (empty($_POST["comment"])) 
			{
			 	$commentErr = "comment is required";
			 } else {
			 	$comment = trim($_POST["comment"]);
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

			 if (empty($_POST["phone"])) 
			{
			 	$phoneErr = "Phone is required";
			 } else {
			 	$phone = trim($_POST["phone"]);
			 }
			 
			  if (!phoneValidate($phone)){
			 	
					$phoneErr = "please enter correct format with 10 numbers ";
			 	
				 } else {
					$phone = trim($_POST["phone"]);
			
				 }

				//if user entered valid information it will display on the screen
				 if(!empty($firstName) && !empty($lastName)  && !empty($email)  &&!empty($subject)&&!empty($subject)) {
					echo "Thank you for contacting your info is ";
					
					echo "Email: " ,$email;
					echo "<br>";
					echo "First Name : " ,$firstName;
					echo "<br>";
					echo "Last Name : " ,$lastName;
					echo "<br>";
					echo "Subject: " ,$subject;
					echo "<br>";
					echo "Comments: " ,$comment;
					
					
				
				}
				
				mysqli_select_db($con, $db);
				$sql = "INSERT INTO SUBJECT(Subject) VALUES ('$subject')";
				mysqli_query($con,$sql);
				$lastid=mysqli_insert_id($con);
				
			
				
				$sql2 = "INSERT INTO CONTACT(firstName, lastname, Email,Phone, Subject,Comment,subject_ID) VALUES ('$firstName', '$lastName', '$email','$phone','$subject', '$comment','$lastid')";
				mysqli_query($con,$sql2);
			


				mysqli_close($con);				

			
						
			}
		?>


<!DOCTYPE HTML>
<!-- Website Template by freewebsitetemplates.com -->
<html>
<head>
	<meta charset="UTF-8">
	<title>Contact - Car Repair Shop Website Template</title>
	<link rel="stylesheet" href="css/style.css" type="text/css">
	<!--[if lt IE 9]>
		<link rel="stylesheet" type="text/css" href="css/ie.css">
	<![endif]-->
</head>
<body>
	<div id="header">
		<div>
			<a href="index.php" class="logo"><img src="images/logo.png" alt=""></a>
			<form action="index.php">
				<input type="text" name="search" id="search" value="">
				<input type="submit" name="searchBtn" id="searchBtn" value="">
			</form>
		</div>
		<div class="navigation">
						<ul>
				<li class="selected">
					<a href="index.php">home</a>
				</li>
				<li>
					<a href="about.php">about</a>
					<ul>
						<li>
							<a href="team.php">the team</a>
						</li>
						<li>
							<a href="testimonials.php">testimonials</a>
						</li>
						<li>
							<a href="gallery.php">gallery</a>
						</li>
						<li>
					      <a href="blog.php">blog</a>
				        </li>
						<li>
					      <a href="viewTestimonials.php">viewTestimonials</a>
				        </li>
					</ul>
				</li>
				<li>
					<a href="services.php">services</a>
					<ul>
						<li>
							<a href="services.php">engine maintenance</a>
						</li>
						<li>
							<a href="services.php">wheel allignment</a>
						</li>
						<li>
							<a href="services.php">air condition services</a>
						</li>
						<li>
							<a href="services.php">transmission</a>
						</li>
						<li>
							<a href="promo.php">promos &amp; discounts</a>
						</li>
					</ul>
				</li>
				<li>
					<a href="accountDetails.php">Account</a>
					<ul>
						<li>
							<a href="accountDetails.php">Edit Account</a>
						</li>
						<li>
							<a href="editContact.php">Edit Contact</a>
						</li>
						<li>
							<a href="editTestimonial.php">Edit Testimonial</a>
						</li>
						<li>
					      <a href="editBooking.php">Edit Booking</a>
				        </li>
					</ul>
				</li>
				<li>
					<a href="contact.php">contact</a>
				</li>
				<li class="booking">
					<a href="booking.php">Book</a>
				</li>
			</ul>
		</div>
	</div>
	<div id="body">
		<div class="content">
			<div class="section">
				<div class="breadcrumb">
					<span>You are here:</span>
					<ul>
						<li>
							<a href="index.php">home</a>
						</li>
						<li>
							<a href="about.php">about us</a>
						</li>
						<li>
							<a href="testimonails.php">testimonials</a>
						</li>
					</ul>
		</div>
	</div>
	<div id="body">
		<div class="content">
			<div class="section">
				<div class="contact">
						<h2>Contact us!</h2>
			
			<br />
					<p>
						Contact Us about any questions or problems that needs to addressed our company takes pride in our customer service.
					</p>
					<form action="contact.php" method ="post">
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
						<label for="phone"> <span>phone</span>
							<input type="text" name="phone" id="phone">
							<?php echo $phoneErr; ?>
						</label>
						<label for="subject"> <span>Subject</span>
							<input type="text" name="subject" id="email">
							<?php echo $subjectErr; ?>
						</label>
						<label for="message"> <span>comment</span>
							<textarea name="comment" id="message"></textarea>
							<?php echo $commentErr; ?>
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
					<a href="index.php">home</a>
				</li>
				<li>
					<a href="about.php">about</a>
				</li>
				<li>
					<a href="services.php">services</a>
				</li>
				<li>
					<a href="blog.php">blog</a>
				</li>
				<li>
					<a href="contact.php">contact</a>
				</li>
				<li>
					<a href="booking.php">book an appointment</a>
				</li>
			</ul>
		</div>
	</div>
</body>
</html>