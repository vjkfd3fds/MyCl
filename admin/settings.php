<?php include_once "../backend-php/connect.php"; ?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="icon" href="../images/note.png" />
    <title>MyCl | settings</title>
</head>
<body>
    <h1 style="font-family: monospace; text-align: center; margin-top: 5%;">Update password</h1>
    <form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="post">
        <input type="password" name="password" style=" font-size: 90px; margin-left: 13%; margin-top: 2%; font-family: monospace;">
        <h1 style="font-family: monospace; text-align: center; margin-top: 5%;">Re-enter password</h1>
        <input type="password" name="password" style=" font-size: 90px; margin-left: 13%; margin-top: 2%; font-family: monospace;"> <br />
        <input type="submit" value="Update" style="margin-left: 50%; margin-top: 30px; font-size: 100px;" name="submit">
    </form>

    <?php 
        if (isset($_POST['submit'])) {
            $pass = $_POST['password'];

            $stmt = $conn->prepare("UPDATE password SET password = ? WHERE password = password");
            $stmt->bind_param("s", $pass);
            $stmt->execute();
        }
    ?>
</body>
</html>