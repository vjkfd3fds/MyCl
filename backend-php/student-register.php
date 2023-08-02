<?php 
  include('connect.php');

  $firstname = $lastname = $email = $password = $DOB = "";

  if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $firstname = $_POST['firstname'];
    $lastname = $_POST['lastname'];
    $email = $_POST['email'];
    $password = $_POST['password'];

    // Concatenate the day, month, and year to form a valid date format (YYYY-MM-DD)
    

    $sql = "INSERT INTO registered_users (first_name, last_name, email_address, passwords) VALUES ('$firstname', '$lastname', '$email', '$password')";
    if ($conn->query($sql) === TRUE) {
      header('Location: ../../php-project/student-login.html');
    } else {
      echo "Error: " . $sql . "<br>" . $conn->error;
    }
  }
?>
