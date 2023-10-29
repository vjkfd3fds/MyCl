<?php include_once "../backend-php/connect.php"; ?>

<?php

if (isset($_COOKIE['cid'])) {
    $cid = $_COOKIE['cid'];
}

if (isset($_POST['submit'])) {
    $uploads = $_FILES["uploadfile"];

    for ($i = 0; $i < count($uploads["tmp_name"]); $i++) {
        $filename = $uploads["name"][$i];
        $tempname = $uploads["tmp_name"][$i];
        $folder = "../college-image/" . $filename;
     
        $sql = "INSERT INTO images (image_id, image_name) VALUES ('$cid','$filename')";
     
        $conn->query($sql);
     
        if (move_uploaded_file($tempname, $folder)) {
            echo "<h3>Image uploaded successfully!</h3>";
            header('Location: ' . $_SERVER['PHP_SELF']);
        } else {
            echo "<h3>Failed to upload image!</h3>";
        }
    }
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="upload.php" method="post" enctype="multipart/form-data">
        <h1 style="font-family: monospace;">Upload Images</h1>
        <input type="file" name="uploadfile[]" multiple> <br> <br>
        <input type="submit" name="submit">
    </form>
    <br>
    <?php 
        $sql = "SELECT * FROM images";
        $stmt = $conn->prepare($sql);

        $stmt->execute();
        $result = $stmt->get_result();

        echo '<h2 style="font-family: monospace;">Images</h3>';
        while($row = $result->fetch_assoc()) {
        ?>
            <img src="../college-image/<?php echo $row['image_name']; ?>" alt="" srcset=""> <br>
        <?php
        }

        $stmt->close();
        $conn->close();
    ?>
</body>
</html>
