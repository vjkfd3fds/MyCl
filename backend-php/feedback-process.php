<?php 

    include('connect.php');


    if ($_SERVER['REQUEST_METHOD'] == 'POST') {
        $name = $_POST['name'];
        $message = $_POST['message'];

        $sql = "INSERT INTO feedback (name, message) VALUES ('$name', '$message')";

        if ($conn->query($sql) === TRUE) {
            header('Location: ../../php-project/feedback-form.php');
          } else {
            echo "Error: " . $sql . "<br>" . $conn->error;
          }

        conn->close();
    }
?>