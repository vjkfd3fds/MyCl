<?php 
    include('connect.php');
    $email = $password = "";
    $error = " ";

    if ($_SERVER['REQUEST_METHOD'] == 'POST') {
        $email = $_POST['email'];
        $password = $_POST['password'];

        // Use double equal signs (==) for comparison, not single equal sign (=)
        if ($email == 'thushar17223@gmail.com' && $password == 'thushar123') {
            $sql = "SELECT * FROM administration WHERE email = ? AND passwords = ?";
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
                header('Location: ../../php-project/home.html');
                exit();
            } 

            $stmt->close();
            $result->close();
        } else {
            echo "Invalid email or password."; // The credentials do not match the hardcoded values
        }
    } 
?>
