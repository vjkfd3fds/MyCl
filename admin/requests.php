<?php 
    if (!isset($_COOKIE['username'])) {
        header('Location: ../pages/home.php');
    }
?>

<?php 
    include_once '../backend-php/connect.php';

    if (isset($_POST['pass']) || isset($_POST['reject'])) {
        if (isset($_POST['pass'])) {
            $action = 'verified';
        } else {
            $action = 'rejected';
        }

        // Loop through the submitted user IDs and update the status for each user
        if(isset($_POST['user_ids']) && is_array($_POST['user_ids'])){
            foreach($_POST['user_ids'] as $user_id){
                $sql = "UPDATE college_details SET status = ? WHERE cid = ?";
                $stmt = $conn->prepare($sql);
                $stmt->bind_param("ss", $action, $user_id);
                $stmt->execute();
            }
            echo '<script>alert("Operation successful! Will notify them");</script>';
        } 
    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>MyCl | Requests</title>
    <link rel="icon" href="../images/note.png">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css">
</head>
<body>
    <div class="container mt-4">
    <h1 class="text-center;">New-Requests</h1>
    <?php 
    include('../backend-php/connect.php');

    $sql = "SELECT * FROM college_details";
    $result = $conn->query($sql);
    echo '<form action="requests.php" method="post">';
    if ($result->num_rows > 0) {
        echo '<div class="card mb-3">';
        
        while ($row = $result->fetch_assoc()) {
            if ($row['status'] == 'unverified') {
                echo '<div class="card-body">';
                echo '<h3 class="card-title">' . $row["institution"] . '</h3>';
                echo '<ul class="list-group list-group-flush">';
                echo '<li class="list-group-item"> university: ' . $row["university"] . '</li>';
                echo '<li class="list-group-item"> state: ' . $row["state"] . '</li>';
                echo '<li class="list-group-item"> district: ' . $row["district"] . '</li>';
                echo '<li class="list-group-item"> address: ' . $row["address"] . '</li>';
                echo '<li class="list-group-item"> programs: ' . $row["programs"] . '</li>';
                echo '<li class="list-group-item"> course: ' . $row["course"] . '</li>';
                echo '<li class="list-group-item"> phone number: ' . $row["number"] . '</li>';
                echo '<li class="list-group-item"> email: ' . $row["email"] . '</li>';
                echo '<li class="list-group-item"> total seats: ' . $row["total_seats"] . '</li>';
                echo '<li class="list-group-item"> reserved seats: ' . $row["reserved_seats"] . '</li>';
                echo '<li class="list-group-item"> management_seats seats: ' . $row["management_seats"] . '</li>';
                echo '<li class="list-group-item"> description: ' . $row["about"] . '</li>';
                ?>
                <img src="../../MyCl/certificate/<?php echo $row['certificate']; ?>" class="img-fluid mt-3" style="max-width: 300px;">
                <?php

                echo '<input type="hidden" name="user_ids[]" value="' . $row['cid'] . '">';
                echo '<div class="mt-3 d-grid gap-2 d-md-block">';
                echo '<input type="submit" value="Accept" name="pass" class="btn btn-success">';
                echo '<input type="submit" value="Reject" name="reject" class="btn btn-danger">';
                echo '</div>';
                echo '</div>';
                echo '</div>';
            } 
        }
        
    }
    echo '</form>';
    $conn->close();
?>

</body>
</html>

