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
    ?>          
                <form method="post" action="account.php">
                    First Name: <input type="text" name="firstname" value="<?php echo $row['firstname'];?>" readonly>  <br/> <br/>
                    Last Name: <input type="text" name="lastname" value="<?php echo $row['lastname'];?>" readonly>  <br/> <br/>
                    Email: <input type="text" name="email" value="<?php echo $row['email'];?>" readonly>  <br/> <br/>
                    Password: <input type="text" name="password" value="<?php echo $row['password'];?>" readonly>  <br/> <br/>
                    Date Of Birth: <input type="text" name="dob" value="<?php echo $row['dob'];?>" readonly>  <br/> <br/>
                </form>
                <form method="post">
                    <input type="text" name="firstname" placeholder="Enter the new first name">
                    <button type="submit">Update</button>
                </form>

                    <?php 
                        if ($_SERVER['REQUEST_METHOD'] == 'POST') {
                            $firstname = $_POST['firstname'];
                            $email = $_COOKIE['email'];
                            $sql = "UPDATE registered_users SET firstname = ? WHERE email = ?";
                            $stmt = $conn->prepare($sql);
                            $stmt->bind_param("ss", $firstname, $email);
                            $stmt->execute();
                            // Close the prepared statement
                            $stmt->close();
                        }
                    ?>
            <?php
            } else {
                echo "No user found.";
            }
        }

        $conn->close();
        ?>
</body>
</html>
