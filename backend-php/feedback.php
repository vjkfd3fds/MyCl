<?php 

    include('connect.php');


    if ($_SERVER['REQUEST_METHOD'] == 'POST') {
        $name = $_POST['name'];
        $email = $_POST['email'];
        $message = $_POST['message'];

        $stmt = $conn->prepare("INSERT INTO feedbacks (name, email, message) VALUES (?, ?, ?)");
        $stmt->bind_param("sss", $name, $email, $message);
        if ($stmt->execute() === TRUE) {
          header('Location: ../../php-project/pages/feedback-form.php');
        } else {
          echo "error: " . $conn->error;
        }

        $conn->close();
    }
?>