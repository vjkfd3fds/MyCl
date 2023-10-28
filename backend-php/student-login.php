<?php 

    include('connect.php');

    if ($_SERVER['REQUEST_METHOD'] == 'POST') {

        $email = $_POST['email'];
        $password = $_POST['password'];

        $sql = "SELECT email, password, id FROM registered_users WHERE email = ? AND password = ?";
        $stmt = $conn->prepare($sql);

        $stmt->bind_param("ss", $email, $password);
        $stmt->execute();
        $result = $stmt->get_result();
        if ($result->num_rows === 0) {
            echo 'This user does not exists';
        } else {
            if ($result->num_rows === 1) {
                $row = $result->fetch_assoc();
                $id = $row['id'];
                setcookie("id", $id, time() + 3600, "/");
                echo '<script>alert("Successfully logged into your account");</script>';
				echo '<script>document.location.href="../../MyCl/students/student-dashboard.php";</script>';
                exit();
            } else {
                echo "Invalid email or password.";
            }
        }
        $stmt->close();
        $result->close();
    } 
?>
