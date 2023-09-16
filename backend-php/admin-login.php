<?php 
    
    include('connect.php');
    $username = $password = "";
    $error = " ";

    if ($_SERVER['REQUEST_METHOD'] == 'POST') {
        $username = $_POST['username'];
        $password = $_POST['password'];

        if ($username == 'admin' && $password == 'adm123') {
            $sql = "SELECT * FROM administration WHERE username = ? AND password = ?";
            $stmt = $conn->prepare($sql);

            if (!$stmt) {
                echo "Error: " . $conn->error;
                exit();
            }

            $stmt->bind_param("ss", $username, $password);
            $stmt->execute();
            $result = $stmt->get_result();

            if ($result->num_rows === 1) {
                // User exists, redirect to home.html
                setcookie("username", $username, time() + 3600, "/");
                header('Location: ../../php-project/admin-dashboard.php');
                exit();
            } 

            $stmt->close();
            $result->close();
        } else {
            echo "Invalid email or password."; // The credentials do not match the hardcoded values
        }
    } 
    
?>
