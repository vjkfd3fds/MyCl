<?php
$name = $email = $phone = $message = "";
$to = 'thushar17223@gmail.com';

if ($_SERVER['REQUEST_METHOD'] == "POST") {
    $name = $_POST['name'];
    $email = $_POST['email'];
    $phone = $_POST['phone'];
    $message = $_POST['message'];
}

if (sendEmail($to, "Contact Form Submission", $message)) {
    echo "Email sent successfully!";
} else {
    echo "Failed to send the email.";
}

// Send mail function custom-made.
function sendEmail($to, $subject, $text) {
    // Sanitize the input to prevent email header injection
    $to = filter_var($to, FILTER_SANITIZE_EMAIL);
    $subject = htmlspecialchars($subject, ENT_QUOTES, 'UTF-8');

    // You can customize the email headers based on your requirements
    $headers = "From: $to\r\n"; // Use $to variable for the sender's email
    $headers .= "Reply-To: $to\r\n";
    $headers .= "MIME-Version: 1.0\r\n";
    $headers .= "Content-Type: text/plain; charset=utf-8\r\n";

    // Sending the email
    if (mail($to, $subject, $text, $headers)) {
        return true; // Email sent successfully
    } else {
        return false; // Failed to send the email
    }
}
?>
