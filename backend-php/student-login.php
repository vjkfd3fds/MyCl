<?php 

    include('connect.php');
    $email = $password = "";

    if ($_SERVER['REQUEST_METHOD'] == 'POST') {
        $email = $_POST['email'];
        $password = $_POST['password'];
        $sql = "SELECT email, password, id FROM registered_users WHERE email = ? AND password = ?";
        $stmt = $conn->prepare($sql);

        $stmt->bind_param("ss", $email, $password);
        $stmt->execute();
        $result = $stmt->get_result();

        if ($result->num_rows === 1) {
            $row = $result->fetch_assoc();
            $id = $row['id'];
            // User exists, redirect to home.html
            setcookie("id", $id, time() + 3600, "/");
            header('Location: ../../php-project/students/student-dashboard.php');
            exit();
        } else {
            // User does not exist or wrong credentials
            echo "Invalid email or password.";
        }

        $stmt->close();
        $result->close();
    } 
?>
