<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title> Account Settings</title>
</head>
<body>
<form method="post">
    New password: <input type="text" name="password" placeholder="Enter the new password"> <br/> <br/> 
    Confirm new password: <input type="text" name="confirm" placeholder="re-enter the new password"> <br/><br/>
    
    <button type="submit">Update</button>
</form>

<?php 
    include('backend-php/connect.php');

    if ($_SERVER['REQUEST_METHOD'] == 'POST') {
        $password = $_POST['password'];
        $email = $_COOKIE['email'];

        $sql = "UPDATE registered_users SET password = ? WHERE email = ?";
        $stmt = $conn->prepare($sql);
        $stmt->bind_param("ss", $password, $email);
        $stmt->execute();
        $stmt->close();
    }
?>
</body>
</html>