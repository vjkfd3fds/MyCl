<?php 
  include('connect.php');

  $firstname = $lastname = $email = $password = $dob = "";

  if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $firstname = $_POST['firstname'];
    $lastname = $_POST['lastname'];
    $email = $_POST['email'];
    $password = $_POST['password'];
    $dob = $_POST['dob'];
    $formattedDob = date('Y-m-d', strtotime($_POST['dob']));

    // Concatenate the day, month, and year to form a valid date format (YYYY-MM-DD)
    

    $sql = "INSERT INTO registered_users (firstname, lastname, email, password, dob) VALUES ('$firstname', '$lastname', '$email', '$password', '$formattedDob')";
    if ($conn->query($sql) === TRUE) {
      header('Location: ../../php-project/student-login.html');
    } else {
      echo "Error: " . $sql . "<br>" . $conn->error;
    }
  }
?>
