<?php
// Start the session
session_start();

// Clear all session variables
session_unset();

// Destroy the session
session_destroy();

// Redirect to the login page or any other desired page
header("Location: ../../php-project/student-login.html");
exit();
?>
