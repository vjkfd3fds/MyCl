<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>MyCl | User Account</title>
</head>
<body>
    <?php 
        include('backend-php/connect.php');

        if (isset($_COOKIE['email'])) {
            $email = $_COOKIE['email'];
            $sql = "SELECT firstname, lastname, email, password, dob FROM registered_users WHERE email = '$email'";
            $result = $conn->query($sql);
            
            if ($result->num_rows > 0) {
                $row = $result->fetch_assoc(); 
                echo "firstname: " . $row['firstname'] . "<br>";
                echo "lastname: " . $row['lastname'] . "<br>";
                echo "email: " . $row['email'] . "<br>";
                echo "password: " . $row['password'] . "<br>";
                echo "date of birth: " . $row['dob'] . "<br>";
            } else {
                echo "No user found.";
            }
        }

        $conn->close();
    ?>
</body>
</html>
