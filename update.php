<form method="post">
    <input type="text" name="firstname" placeholder="Enter the new first name"> <br/> <br/> 
    <input type="text" name="lastname" placeholder="Enter the new last name"> <br/> <br/> 
    <input type="text" name="password" placeholder="Enter the new password"> <br/> <br/> 
    
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