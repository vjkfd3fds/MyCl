<?php 
	
	$name = $email = $phone = $message = "";

	if ($_SERVER['REQUEST_METHOD'] == "POST") {
		$name = $_POST['name'];
		$email = $_POST['email'];
		$phone = $_POST['phone'];
		$message = $_POST['message'];
	}

	//my email

	$to = "thushar17223@gmail.com";
	$subject = "this is an important mail if you ask me!";

	$txt = "Name: " . $name . "Email: " . $email . "Phone: " . $phone . "Message: " . $message;

	$headers = "From: noreply@demosite.com" . "\r\n" . "CC: somebodyelse@example.com";

	if ($email != NULL) {
		mail($to, $subject, $txt);
	} 

	header("Location:home.html");

	
	

?>