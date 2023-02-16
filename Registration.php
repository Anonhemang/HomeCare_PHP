<?php
include('connection.php');
error_reporting(0);
?>



<!DOCTYPE html>
<html>
<head>
	<title>Registration</title>
	<link rel="shortcut icon" type="img/jpg" href="img/logo.jpg">
	<link rel="stylesheet" type="text/css" href="registration.css">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
</head>
<body>


	<img src="img/MyHomecareLogo.png" alt="HomeCare.in" class="l" style="width: 19%">
	
	<form>
		<h1 style="text-align: center;">Create Account</h1>
		<section>
			<label><strong>Your name</strong></label><br>
		
			<div class="padd">
				<input type="textbox" name="CustomerName" required="" autocomplete="off" placeholder="First name and Last name" class="w">
			</div>
		</section>

		<section>
				<label><strong>Mobile Number</strong></label><br>
			<div class="padd">	
				<select>
				<option>+91</option>
				<option>+1</option>
				<option>+93</option>
				<option>+355</option>
				<option>+213</option>
				<option>+376</option>
				<option>+244</option>
				<option>+54</option>
				<option>+374</option>
				<option>+297</option>
				<option>+61</option>
				<option>+501</option>
				<option>+229</option>
				<option>+55</option>
				<option>+86</option>
				<option>+53</option>
				</select>  <input type="Tel" name="PhoneNumber" placeholder="Mobile Number" autocomplete="off"
				required="" maxlength="10" minlength="10" class="mn">
			</div>
		</section>

		<section>
				<label><strong>E-mail</strong></label><br>
			<div class="padd">
				<input type="email" name="mail" placeholder="E-mail" autocomplete="off" required="" class="w">
			</div>
		</section>

		<section>
			<div class="padd">
				<label><strong>Password</strong></label><br>
				<input type="Password" name="pswd" minlength="6" autocomplete="off" required="" placeholder="Enter Atleast 6 Character" class="w"><img src="img/info.png" class="i" alt="info">
				<samp>Password must be atleast 6 character</samp>
			</div>
		</section>

		<section>
			<h5>By enrolling your mobile phone number, you consent to receive automated security notifications via E-mail from HomeCare.</h5>
		</section>

		<section>
			<button type="submit" value="Continue" style="width: 100%"><strong>Continue</strong></button>
		</section>

		<section>
			<img src="img/divide.png" alt="line" class="line">
		</section>

		<section>
			<p>Already Have An Account?  <a href="Login.php" title="Click Here To Login">Login</a></p>
		</section>
	</form>
</body>
</html>







<?php
$name = $_GET['CustomerName'];
$mob = $_GET['PhoneNumber'];
$mail = $_GET['mail'];
$pswd = $_GET['pswd'];


$query = "insert into login values ('$name','$mob','$mail','$pswd')";
$data = mysqli_query($conn,$query)
?>