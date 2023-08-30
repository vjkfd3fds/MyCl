<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<form method="post" action="">
    <input type="submit" name="logout" value="Logout">
</form>
<?php
    if (isset($_POST['logout'])) {
        setcookie("email", $email, time() - 3600, "/");
        header('Location: ../../php-project/college-login.php');
        exit();
    }
?>

</body>
</html>