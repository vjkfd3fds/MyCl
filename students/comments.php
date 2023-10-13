<?php 

	include( "../backend-php/connect.php");

	$sql = "SELECT * FROM college_details";

	$result = $conn->query($sql);
?>

<?php
// Check if the form was submitted
if (isset($_POST['post'])) {
    // Form was submitted, proceed to process the data
    include_once "../backend-php/connect.php";

    // Sanitize and retrieve form data
    $email = mysqli_real_escape_string($conn, $_POST['email']);
    $selected = mysqli_real_escape_string($conn, $_POST['selected']);
    $message = mysqli_real_escape_string($conn, $_POST['message']);

    // Check if $selected is a valid college name
    // You should have a validation mechanism here to ensure it's a valid option

    // Insert data into the database
    $sql = "INSERT INTO review (institution, comments, email) VALUES ('$selected', '$message', '$email')";

    if ($conn->query($sql) === TRUE) {
        echo '<script>alert("Successfully posted your feedback!");</script>';
    } else {
        echo 'Something went wrong ' . $conn->error;
    }

    $conn->close();
}
?>



<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title></title>
	<style>
		.styled-select {
		  background-color: #fff;
		  padding: 1rem;
		  font-size: 0.875rem;
		  line-height: 1.25rem;
		  width: 100%;
		  border: 1px solid #e5e7eb;
		  border-radius: 0.5rem;
		  box-shadow: 0 1px 2px 0 rgba(0, 0, 0, 0.05);
		  outline: none;
		  -webkit-appearance: none; 
		  -moz-appearance: none; 
		  appearance: none; 
		}

		.styled-select::after {
		  content: '\25BC';
		  position: absolute;
		  top: 50%;
		  right: 1rem;
		  transform: translateY(-50%);
		  pointer-events: none; 
		}

		body {
			display: flex;
			justify-content: center;
			align-items: center;
			min-height: 100vh;
			margin: 0;
		}

		.form {
		  background-color: #fff;
		  display: block;
		  padding: 1rem;
		  max-width: 350px;
		  border-radius: 0.5rem;
		  box-shadow: 0 10px 15px -3px rgba(0, 0, 0, 0.1), 0 4px 6px -2px rgba(0, 0, 0, 0.05);
		}

		.form-title {
		  font-size: 1.25rem;
		  line-height: 1.75rem;
		  font-weight: 600;
		  font-family: monospace;
		  text-align: center;
		  color: #000;
		}

		.input-container {
		  position: relative;
		}

		.input-container input, .form button {
		  outline: none;
		  border: 1px solid #e5e7eb;
		  margin: 8px 0;
		}

		.input-container input {
		  background-color: #fff;
		  padding: 1rem;
		  padding-right: 3rem;
		  font-size: 0.875rem;
		  line-height: 1.25rem;
		  width: 300px;
		  border-radius: 0.5rem;
		  box-shadow: 0 1px 2px 0 rgba(0, 0, 0, 0.05);
		}

		.input-container span {
		  display: grid;
		  position: absolute;
		  top: 0;
		  bottom: 0;
		  right: 0;
		  padding-left: 1rem;
		  padding-right: 1rem;
		  place-content: center;
		}

		.input-container span svg {
		  color: #9CA3AF;
		  width: 1rem;
		  height: 1rem;
		}

		.submit {
		  display: block;
		  padding-top: 0.75rem;
		  padding-bottom: 0.75rem;
		  padding-left: 1.25rem;
		  padding-right: 1.25rem;
		  background-color: #4F46E5;
		  color: #ffffff;
		  font-size: 0.875rem;
		  line-height: 1.25rem;
		  font-weight: 500;
		  width: 100%;
		  border-radius: 0.5rem;
		  text-transform: uppercase;
		}

		.signup-link {
		  color: #6B7280;
		  font-size: 0.875rem;
		  line-height: 1.25rem;
		  text-align: center;
		}

		.signup-link a {
		  text-decoration: underline;
		}
	</style>
</head>
<body>

	<form class="form" method="POST" action="comments.php">
		<p class="form-title">Post your feedback</p>
		<div class="input-container">
			<input placeholder="Enter email" type="email" name="email">
			<span>
				<svg stroke="currentColor" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
					<path d="M16 12a4 4 0 10-8 0 4 4 0 008 0zm0 0v1.5a2.5 2.5 0 005 0V12a9 9 0 10-9 9m4.5-1.206a8.959 8.959 0 01-4.5 1.207" stroke-width="2" stroke-linejoin="round" stroke-linecap="round"></path>
				</svg>
			</span>
		</div>
		<div class="input-container">
			<input placeholder="Enter your message" type="text" name="message">
		</div>
		<div class="input-container">
			<select class="styled-select" name="selected">
				<option>College Name</option>
			<?php
        		while ($row = $result->fetch_assoc()) {
            		echo '<option value="' . $row['institution'] . '">' . $row['institution'] . '</option>';
        		}
        	?>
        											
        		</option>
			</select>
		</div>

		<input value="Post" class="submit" type="submit" style="margin-top: 20px;" name="post">
	</form>

</body>
</html>
