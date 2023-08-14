<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>MyCl | Register</title>

	<!-- bootstrap core css -->
	<link rel="stylesheet" type="text/css" href="css/bootstrap.css" />

	<!-- fonts style -->
	<link href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;500;700;900&display=swap" rel="stylesheet">

	<!-- font awesome style -->
	<link href="css/font-awesome.min.css" rel="stylesheet" />

	<!-- Custom styles for this template -->
	<link href="css/style.css" rel="stylesheet" />
	<!-- responsive style -->
	<link href="css/responsive.css" rel="stylesheet" />
</head>

<body>
	<header class="bg-light">
		<div class="d-flex justify-content-center pt-3 p-1">
			<a href="student.html">
				<h4 style="font-size: x-large; cursor: pointer; color: black;">my<span
						style="font-size: xxx-large ;">c</span>l</h4>
			</a>
		</div>
	</header>

	<section class="bg-light">
		<div class="container">
			<div class="d-flex justify-content-center ">
				<div class="card " style="width: 28rem; height: 34em; margin-top: 2em; border-radius: 0.5em; ">
					<div class="card-body">
						<div class="d-flex justify-content-center">
							<h3
								style="font-family: SFProDisplay-Bold, Helvetica, Arial, sans-serif; font-weight: bold;">
								Create an account</h3>
						</div>
						<div class="d-flex justify-content-center">
							<p style="font-family: SFProDisplay-Bold, Helvetica, Arial, sans-serif;">sign up,let's
								begin
							</p>
						</div>

						<form action="student-register.php" method="post" id="signup-form"
							onsubmit="return validateForm()">
							<div class="d-flex justify-content-between mr-2">
								<div class="form-group" style="float: left;">
									<input type="text" class="form-control" id="exampleInputEmail1"
										aria-describedby="emailHelp" placeholder="First Name" style="width: 12em;"
										name="firstname">
								</div>
								<div class="form-group" style="float: left;">
									<input type="text" class="form-control"
										aria-describedby="emailHelp" placeholder="Last Name" style="width: 12em;"
										name="lastname">
								</div>
							</div>

							<div>
								<div class="form-group">
									<input type="email" class="form-control" id="exampleInputEmail2"
										aria-describedby="emailHelp" placeholder="Mobile number or Email address"
										style="width: 25em;" name="email">
								</div>
							</div>

							<div class="d-flex justify-content-between mr-2">
								<div class="form-group" style="float: left;">
									<input type="password" class="form-control" id="exampleInputPassword1"
										aria-describedby="emailHelp" placeholder="Password" style="width: 12em;"
										name="password">
								</div>
								<div class="form-group" style="float: left;">
									<input type="password" class="form-control" id="exampleInputConfirmPassword1"
										aria-describedby="emailHelp" placeholder="Confirm Password"
										style="width: 12em;" name="conform">
								</div>
							</div>

							<div class="pl-1" style="text-align: center;">
								<label
									style="font-weight: lighter; font-family: SFProDisplay-Bold, Helvetica, Arial, sans-serif;;"
									for="">Date of birth</label>
							</div>
							<div class="d-flex justify-content-center">
								<div class="form-group" style="width: 10em;">
									<input type="date" class="form-control" name="dob" style="height: 2.2em;">
								</div>
							</div>
							


							<div class="pl-1" style="text-align: center;">
								<label
									style="font-weight: lighter; font-family: SFProDisplay-Bold, Helvetica, Arial, sans-serif;;"
									for="">Gender</label>
							</div>

							<div class="d-flex justify-content-center mr-2">
								<div>
									<div class="form-check">
										<input class="form-check-input" type="radio" name="gender"
											id="flexRadioDefault1" value="female">
										<label class="form-check-label text-dark" for="flexRadioDefault1">Female</label>
									</div>
								</div>
								<div style="margin-left: 1.5em;">
									<div class="form-check">
										<input class="form-check-input" type="radio" name="gender"
											id="flexRadioDefault2" value="male">
										<label class="form-check-label text-dark" for="flexRadioDefault2">Male</label>
									</div>
								</div>
								<div style="margin-left: 1.5em;">
									<div class="form-check">
										<input class="form-check-input" type="radio" name="gender"
											id="flexRadioDefault3" value="other">
										<label class="form-check-label text-dark" for="flexRadioDefault3">Other</label>
									</div>
								</div>
							</div>

							<br>

							<div class="d-flex justify-content-center">
								<button type="submit" class="btn btn-success" form="signup-form">Sign Up</button>
							</div>

							<br>

							<div class="d-flex justify-content-center">
								<a href="student-login.html">Already have an account? </a>
							</div>
						</form>
					</div>
				</div>
			</div>
		</div>
	</section>

		<?php 
			include('backend-php/connect.php');

			$firstname = $lastname = $email = $password = $dob = "";

			if ($_SERVER['REQUEST_METHOD'] == 'POST') {
			$firstname = $_POST['firstname'];
			$lastname = $_POST['lastname'];
			$email = $_POST['email'];
			$password = $_POST['password'];
			$dob = $_POST['dob'];

		//formatting syntax for date and time
			$formattedDob = date('Y-m-d', strtotime($_POST['dob']));
			$checkingEmail = $_POST['email'];

			$sql = "SELECT * FROM registered_users WHERE email = '$checkingEmail'";
			$result = $conn->query($sql);
			if (!$result) {
			echo $conn->error;
			} else {
				$rowcount = $result->num_rows;
				
			if ($rowcount > 0) {
			$err = '<script>alert("The email is already in use. Please try another one.")</script>';
			echo $err;
			} else {
			$sql = "INSERT INTO registered_users (firstname, lastname, email, password, dob) VALUES ('$firstname', '$lastname', '$email', '$password', '$formattedDob')";
			if ($conn->query($sql) === TRUE) {
				header('Location: ../../php-project/student-login.html');
			} else {
				echo "Error: " . $sql . "<br>" . $conn->error;
			}
			}
		}
	}
	?>


	<!-- jQery -->
	<script src="js/jquery-3.4.1.min.js"></script>
	<!-- bootstrap js -->
	<script src="js/bootstrap.js"></script>
	<!-- custom js -->
	<script src="js/custom.js"></script>

	<script src="https://kit.fontawesome.com/3cb1958bfd.js" crossorigin="anonymous"></script>

	<script>
		function validateForm() {
			var name = document.getElementById("exampleInputEmail1").value;
			var email = document.getElementById("exampleInputEmail2").value;
			var password = document.getElementById("exampleInputPassword1").value;
			var confirmPassword = document.getElementById("exampleInputConfirmPassword1").value;

			if (name.length < 4) {
				alert("Username should be more than 3 letters.");
				return false;
			}

			if (!email.endsWith("@gmail.com")) {
				alert("Email should end with @gmail.com.");
				return false;
			}

			if (name.trim() === "" || email.trim() === "") {
				alert("Username and Email cannot be empty.");
				return false;
			}

			if (password.length < 8) {
				alert("Password should be more than 8 characters.");
				return false;
			}

			if (password !== confirmPassword) {
				alert("Password and Confirm Password do not match.");
				return false;
			}
			 // If all conditions are met, the form will be submitted
			return true;
		}
	</script>
</body>

</html>
