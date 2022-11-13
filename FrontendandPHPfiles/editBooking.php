<?php
	session_start(); //this must be the very first line on the php page, to register this page to use session variables
	$_SESSION['timeout'] = time(); ////record the time at the user login
    require_once'inc/sessionVerify.php';
	require_once 'inc/dbconnect.php';
    
	require_once "inc/util.php";
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
				$address1 = "";
				$city = "";
				$zip = "";
				$state = "";
				$schedule = "";
				$brand = "";
				$model = "";
				$year = "";
				$confirm = "";
				$message2= "";
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
				$message2Err = "";
				

				$emailok = false;
				
				$dbhost = "localhost";
				$dbuser = "hamsheik";
				$dbpass = "H3488she";
				$db = "hamsheik_db";
				
				
				
				
				
			if (isset($_POST['submit']))
			{
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
			 	$message2Err = "Message required";
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
					
			
				
						
						
					if(!empty($firstName) && !empty($lastName)  && !empty($email3)  &&!empty($phone)&&!empty($address1)&&!empty($city)&&!empty($zip)&&!empty($brand)&&!empty($model)&&!empty($year)&&!empty($confirm)) {
			
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
	</div>
	<div id="body">
		<div class="content">
			<div class="section">
				<div class="booking">
					<h2>Edit appointment</h2>
						<form action="editBooking.php"
                method="POST"
                 <?php
				$dbhost = "localhost";
				$dbuser = "hamsheik";
				$dbpass = "H3488she";
				$db = "hamsheik_db";
				$con = mysqli_connect($dbhost, $dbuser, $dbpass) or die('Error connecting to the database:' . mysqli_error());
				mysqli_select_db($con, $db);
				
                        $currentUser = $_SESSION['email'];
                        $sql = "SELECT * FROM APPOINTMENT WHERE Email ='$currentUser'";

                        $gotResuslts = mysqli_query($con,$sql);

                        if($gotResuslts){
                            if(mysqli_num_rows($gotResuslts)>0){
                                while($row = mysqli_fetch_array($gotResuslts)){		
                             ?>		
					  
					<p>
							Change account details by entering new Information in the field then click send message 
							<a href="login.php">Click here to log back in to see changes</a>
					</p>	
						<h4>fill in your contact details</h4>
						<div class="form1">
							<label for="fname"> <span>first name</span>
								<input type="text" name="firstName" id="fname"value="<?php echo $row['firstName']; ?>">
								<?php echo $firstNameErr; ?>
							</label>
							<label for="lname"> <span>last name</span>
								<input type="text" name="lastName" id="lname"value="<?php echo $row['lastName']; ?>">
								<?php echo $lastNameErr; ?>
							</label>
							<label for="email3"> <span>email address</span>
								<input type="text" name="email3" id="email3"value="<?php echo $row['Email']; ?>">
								<?php echo $emailErr; ?>
							</label>
							<label for="phone"> <span>phone number</span>
								<input type="phone" name="phone" id="phone"value="<?php echo $row['Phone']; ?>">
								<?php echo $phoneErr; ?>
							</label>
							<label for="address1"> <span>address </span>
								<input type="text" name="address1" id="address1"value="<?php echo $row['Address']; ?>">
								<?php echo $addressErr; ?>
							</label>
							<div>
								<label for="city"> <span>city</span>
									<input type="text" name="city" id="city"value="<?php echo $row['City']; ?>">
									<?php echo $cityErr; ?>
								</label>
								<label for="state"> <span>state</span>
									<select name="state" id="state">
											<option><?php echo $row['State'];?></option>
											<option value="AL">Alabama</option>
											<option value="AK">Alaska</option>
											<option value="AZ">Arizona</option>
											<option value="AR">Arkansas</option>
											<option value="CA">California</option>
											<option value="CO">Colorado</option>
											<option value="CT">Connecticut</option>
											<option value="DE">Delaware</option>
											<option value="DC">District Of Columbia</option>
											<option value="FL">Florida</option>
											<option value="GA">Georgia</option>
											<option value="HI">Hawaii</option>
											<option value="ID">Idaho</option>
											<option value="IL">Illinois</option>
											<option value="IN">Indiana</option>
											<option value="IA">Iowa</option>
											<option value="KS">Kansas</option>
											<option value="KY">Kentucky</option>
											<option value="LA">Louisiana</option>
											<option value="ME">Maine</option>
											<option value="MD">Maryland</option>
											<option value="MA">Massachusetts</option>
											<option value="MI">Michigan</option>
											<option value="MN">Minnesota</option>
											<option value="MS">Mississippi</option>
											<option value="MO">Missouri</option>
											<option value="MT">Montana</option>
											<option value="NE">Nebraska</option>
											<option value="NV">Nevada</option>
											<option value="NH">New Hampshire</option>
											<option value="NJ">New Jersey</option>
											<option value="NM">New Mexico</option>
											<option value="NY">New York</option>
											<option value="NC">North Carolina</option>
											<option value="ND">North Dakota</option>
											<option value="OH">Ohio</option>
											<option value="OK">Oklahoma</option>
											<option value="OR">Oregon</option>
											<option value="PA">Pennsylvania</option>
											<option value="RI">Rhode Island</option>
											<option value="SC">South Carolina</option>
											<option value="SD">South Dakota</option>
											<option value="TN">Tennessee</option>
											<option value="TX">Texas</option>
											<option value="UT">Utah</option>
											<option value="VT">Vermont</option>
											<option value="VA">Virginia</option>
											<option value="WA">Washington</option>
											<option value="WV">West Virginia</option>
											<option value="WI">Wisconsin</option>
											<option value="WY">Wyoming</option>
									</select>
								</label>
							</div>
							<label for="zip"> <span>zipcode</span>
								<input type="text" name="zip" id="zip"value="<?php echo $row['Zip']; ?>">
								<?php echo $zipErr; ?>
							</label>
							<label for="schedule"> <span>When Do You Prefer Us To Call?  (We only call during weekdays and Saturdays)</span>
								<select name="schedule" id="schedule">
									<option value="">In the morning (Between 9am - 12nn)</option>
									<option value="">In the afternoon (Between 1pm - 5pm)</option>
									<option value="">In the evening (Between 6pm-7pm)</option>
								</select>
							</label>
						</div>
						<h4>fill in details about your vehicle</h4>
						<div class="form2">
							<div>
								<label for="brand"> <span>brand</span>
									<input type="text" name="brand" id="brand"value="<?php echo $row['Make']; ?>">
									<?php echo $brandErr; ?>
								</label>
								<label for="model"> <span>model</span>
									<input type="text" name="model" id="model"value="<?php echo $row['Model']; ?>">
									<?php echo $modelErr; ?>
								</label>
								
								<label for="year"> <span>year</span>
									<input type="text" name="year" id="year"value="<?php echo $row['Year']; ?>">
									<?php echo $yearErr; ?>
								</label>
								<label for="mileage"> <span>Select Service Type</span>
									        <select name="service" id="state">
											<option><?php echo $row['serviceName']; ?></option>
											<option value="Engine">Engine</option>
											<option value="Wheel Alignment">Wheel Alignment</option>
											<option value="Air Conditioning">Air Conditioning</option>
									</select>
								</label>
							</div>
							<label for="confirm" id="confirm2"> <span>If needed, are you ok with leaving your vehicle for the day?</span>
								<input type="text" name="confirm" id="confirm"value="<?php echo $row['Confirm']; ?>">
								<?php echo $confirmErr; ?>
							</label>
							<label for="message2"> <span>Leave us a short message regarding your concerns and needs.</span>
								<textarea name="message2" id="message2" cols="30" rows="10"><?php echo $row['Message']; ?></textarea>
								<?php echo $message2Err; ?>
							</label>
						</div>
						<input type="submit" name="submit" id="send2" value="">
						<h2>Click Below to remove info from the Database</h2>
						<input type="submit" name="submitBtn" id="send2" value="">
                                    <?php
									
                                }
                            }
                        }
				   if (isset($_POST['submit'])) {
						$currentUser = $_SESSION['email'];
                        $sql = "UPDATE APPOINTMENT SET firstName = '$firstName',lastName = '$lastName', Email = '$email3', Phone = '$phone',Address = '$address1',City = '$city',Zip = '$zip',State= '$state', Make = '$brand',Model = '$model',Year = '$year',serviceName = '$service',Confirm = '$confirm',Message = '$message2' WHERE Email = '$currentUser'";
                        $results = mysqli_query($con,$sql);
						
					}
					
					 if (isset($_POST['submitBtn'])) {
						$currentUser = $_SESSION['email'];
                        $sql = "DELETE FROM APPOINTMENT WHERE Email = '$currentUser'";
                        $results = mysqli_query($con,$sql);
						
					
						
					}
				 
                    ?>
                
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