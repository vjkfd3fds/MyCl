<?php 
    include('connect.php');
    $email = $password = "";

    if ($_SERVER['REQUEST_METHOD'] == 'POST') {
        $email = $_POST['email'];
        $password = $_POST['password'];

        $sql = "SELECT * FROM registerd_users WHERE email_adress = ? AND password = ?";
        $stmt = $conn->prepare($sql);

        if (!$stmt) {
            echo "Error: " . $conn->error;
            exit();
        }

        $stmt->bind_param("ss", $email, $password);
        $stmt->execute();
        $result = $stmt->get_result();

        if ($result->num_rows === 1) {
            // User exists, redirect to home.html
            header('Location: test.html');
            exit();
        } else {
            // User does not exist or wrong credentials
            echo "Invalid email or password.";
        }

        $stmt->close();
        $result->close();
    } 
?>
