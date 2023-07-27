<?php 
  include('connect.php');

  $firstname = $lastname = $email = $password = $conform = "";



  if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $firstname = $_POST['firstname'];
    $lastname = $_POST['lastname'];
    $email = $_POST['email'];
    $password = $_POST['password'];
    $conform = $_POST['conform'];

    $sql = "INSERT INTO registerd_users (first_name, last_name, email_adress, password, confirm_password) VALUES ('$firstname', '$lastname', '$email', '$password', '$conform')";
    if ($conn->query($sql) === TRUE) {
      header('Location: ././home.html');
    } else {
      echo "Error: " . $sql . "<br>" . $conn->error;
    }
  }
?>