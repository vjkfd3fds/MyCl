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
            echo "<script>alert('Successfully uploaded new images');</script>";
            echo '<script>document.location.href="upload.php";';
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
    <title>Upload Images</title>
    <link href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
    <style>
        /* Custom CSS can be added here */
    </style>
</head>
<body>
    <div class="container mt-5">
        <div class="row">
            <div class="col-md-6 offset-md-3">
                <div class="card">
                    <div class="card-header">
                        <h1 class="text-center">Upload Images</h1>
                    </div>
                    <div class="card-body">
                        <form action="upload.php" method="post" enctype="multipart/form-data">
                            <div class="form-group">
                                <label for="uploadfile" class="font-weight-bold">Select Image(s)</label>
                                <input type="file" name="uploadfile[]" id="uploadfile" multiple class="form-control-file">
                            </div>
                            <div class="text-center">
                                <button type="submit" name="submit" class="btn btn-primary">Upload</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
    
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.4/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</html>
