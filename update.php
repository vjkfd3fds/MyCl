<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title> Account Settings</title>
</head>
<body>
<form method="post">
    New first name: <input type="text" name="firstname" placeholder="Enter the new first name"> <br/> <br/> 
    New last name: <input type="text" name="lastname" placeholder="Enter the new last name"> <br/> <br/> 
    New password: <input type="text" name="password" placeholder="Enter the new password"> <br/> <br/> 
    Confirm new password: <input type="text" name="confirm" placeholder="re-enter the new password"> <br/><br/>
    
    <button type="submit">Update</button>
</form>

<?php 
    include('backend-php/connect.php');

    if ($_SERVER['REQUEST_METHOD'] == 'POST') {
        $firstname = $_POST['firstname'];
        $lastname = $_POST['lastname'];
        $password = $_POST['password'];
        $email = $_COOKIE['email'];

        $sql = "UPDATE registered_users SET firstname = ?, lastname = ?, password = ? WHERE email = ?";
        $stmt = $conn->prepare($sql);
        $stmt->bind_param("ssss", $firstname, $lastname, $password, $email);
        $stmt->execute();
        $stmt->close();
    }
?>
</body>
</html>