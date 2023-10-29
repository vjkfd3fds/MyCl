
<!DOCTYPE html>
<html lang="en">
<head>
    <link rel="icon" href="../images/note.png">
    <title>MyCl | Account</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css">
</head>
<body>
    <?php 
    include('../backend-php/connect.php');
    if (isset($_COOKIE['id'])) {
        $user_id = $_COOKIE['id'];
        $sql = "SELECT * FROM registered_users WHERE id = '$user_id'";
        $result = $conn->query($sql);
        if ($row = $result->fetch_assoc()) {
            echo '<div class="container">';
            echo '<div class="row">';
            echo '<div class="col-12 col-md-6 mx-auto text-center">';
            echo '<h1 class="mt-4">Welcome, ' . $row['firstname'] . '</h1>';
            ?>
            <img class="img-fluid rounded-circle mt-3" src="../profile/<?php echo $row['profile']; ?>" alt="User Image" style="max-width: 150px; height: auto;">
            <?php 
            echo '</div>';
            echo '</div>';
            echo '</div>';
        }
    }
    ?>
    
    <div class="container mt-4">
        <div class="row justify-content-center">
            <div class="col-12 col-md-6">
                <form action="<?php $_SERVER['PHP_SELF']; ?>" method="POST">
                    <h1 class="text-center">User Info</h1>
                    <div class="mb-3">
                        <input type="text" name="firstname" class="form-control" value="<?php echo $row['firstname']; ?>">
                    </div>
                    <div class="mb-3">
                        <input type="text" name="lastname" class="form-control" value="<?php echo $row['lastname']; ?>">
                    </div>
                    <div class="mb-3">
                        <input type="email" name="email" class="form-control" value="<?php echo $row['email']; ?>">
                    </div>
                    <a class="d-block text-center mb-3" href="update-password.php">Update password</a>
                    <div class="d-grid">
                        <input type="submit" value="Update" class="btn btn-primary" name="button">
                    </div>
                </form>
            </div>
        </div>
    </div>
</body>
</html>

<?php 
    include('../backend-php/connect.php');

    if (isset($_POST['button'])) {
        $firstname = $_POST['firstname'];
        $lastname = $_POST['lastname'];
        $email = $_POST['email'];
        $sql = "SELECT * FROM registered_users";
        $stmt1 = $conn->prepare($sql);
        $stmt1->execute();
        $result = $stmt1->get_result();
        $row = $result->fetch_assoc();
        $id  = $row['id'];

        $stmt = $conn->prepare("UPDATE registered_users SET firstname = ?, lastname = ?, email = ? WHERE id = ?");
        $stmt->bind_param("ssss", $firstname, $lastname, $email, $id);
        if ($stmt->execute() === TRUE) {
            echo '<script>alert("Successfully updated your profile");</script>';
            echo '<script>document.location.href="account.php";</script>';
        }
    }
?>
