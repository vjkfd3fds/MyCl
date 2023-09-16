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
            echo '<script>This user does not exists</script>';
        } else {
            if ($result->num_rows === 1) {
                $row = $result->fetch_assoc();
                $id = $row['id'];
                setcookie("id", $id, time() + 3600, "/");
                header('Location: ../../php-project/student-dashboard.php');
                exit();
            } else {
                echo "Invalid email or password.";
            }
        }
        $stmt->close();
        $result->close();
    } 
?>
