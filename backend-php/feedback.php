<?php 

    include('connect.php');


    if ($_SERVER['REQUEST_METHOD'] == 'POST') {
        $name = $_POST['name'];
        $email = $_POST['email'];
        $message = $_POST['message'];

        $sql = "INSERT INTO feedbacks (name, email, message) VALUES ('$name', '$email', '$message')";

        if ($conn->query($sql) === TRUE) {
            header('Location: ../../php-project/feedback-form.php');
          } else {
            echo "Error: " . $sql . "<br>" . $conn->error;
          }

        conn->close();
    }
?>s