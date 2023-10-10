<?php 
    include('connect.php');


    if ($_SERVER['REQUEST_METHOD'] == 'POST') {
        $email = $_POST['email'];
        $password = $_POST['password'];

        $sql = "SELECT cid, email, password FROM college_users WHERE email = ? AND password = ?";
        $stmt = $conn->prepare($sql);

        if (!$stmt) {
            echo "Error: " . $conn->error;
            exit();
        }

        $stmt->bind_param("ss", $email, $password);
        $stmt->execute();
        $result = $stmt->get_result();

        if ($result->num_rows === 1) {
            $rows = $result->fetch_assoc();
            $cid = $rows['cid'];
            setcookie("cid", $cid, time() + 3600, "/");
            header('Location: ../../php-project/college/college-details-process.php');
            exit();
        } else {
            // User does not exist or wrong credentials
            echo "Invalid email or password.";
        }

        $stmt->close();
        $result->close();
    } 
?>
