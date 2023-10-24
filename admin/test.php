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
            echo '<script>alert("Operation successful!");</script>';
        } else {
            echo '<script>alert("No users selected!");</script>';
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
    <style>
        .random-button {
        display: inline-block;
        padding: 10px 20px;
        font-size: 16px;
        background-color: #3498db;
        color: #fff;
        border: none;
        border-radius: 4px;
        cursor: pointer;
        transition: background-color 0.3s ease;
    }
        feedback-list {
            margin-top: 20px;
        }

        .feedback-card {
            background-color: #fff;
            border-radius: 5px;
            padding: 15px;
            margin-bottom: 15px;
            box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);
        }

        .feedback-card h3 {
            margin-top: 0;
            margin-bottom: 10px;
        }

        .feedback-card p {
            margin: 0;
            font-family: monospace;
            font-size: 15px;
        }
        /* Style for the result box */
        .result-box {
            border: 1px solid #ccc;
            padding: 20px;
            margin: 20px;
            background-color: #f9f9f9;
            border-radius: 10px;
            box-shadow: 0px 2px 4px rgba(0, 0, 0, 0.1);
        }

        /* Style for heading */
        .result-heading {
            font-size: 1.2rem;
            margin-bottom: 10px;
        }

        /* Style for individual feedback card */
        .feedback-card {
            border: 1px solid #ddd;
            padding: 10px;
            margin: 10px 0;
            background-color: #fff;
            border-radius: 5px;
        }

        /* Style for feedback card content */
        .feedback-content {
            font-size: 0.9rem;
        }

        .imgLOL {
            width: 400px;
            height: 400px;
            margin-left: 500px; /* Keep this as it is if you want horizontal spacing. */
            margin-top: -16%; /* Move the image to the top. */
        }

    </style>
</head>
<body>
    <h1 style="font-family: monospace;">New-Requests</h1>
    <?php 
    include('../backend-php/connect.php');

    $sql = "SELECT * FROM college_details";
    $result = $conn->query($sql);

    if ($result->num_rows > 0) {
        echo '<div class="result-box">';
        
        echo '<form action="requests.php" method="post">';
        
        while ($row = $result->fetch_assoc()) {
            if ($row['status'] == 'unverified') {
                echo '<div class="feedback-card">';
                echo '<h3>' . $row["institution"] . '</h3>';
                echo '<p style="font-size: 15px";> university: ' . $row["university"] . '</p>';
                echo '<p style="font-size: 15px";> state: ' . $row["state"] . '</p>';
                echo '<p style="font-size: 15px";> district: ' . $row["district"] . '</p>';
                echo '<p style="font-size: 15px";> address: ' . $row["address"] . '</p>';
                echo '<p style="font-size: 15px";> programs: ' . $row["programs"] . '</p>';
                echo '<p style="font-size: 15px";> course: ' . $row["course"] . '</p>';
                echo '<p style="font-size: 15px";> phone number: ' . $row["number"] . '</p>';
                echo '<p style="font-size: 15px";> email: ' . $row["email"] . '</p>';
                echo '<p style="font-size: 15px";> total seats: ' . $row["total_seats"] . '</p>';
                echo '<p style="font-size: 15px";> reserved seats: ' . $row["reserved_seats"] . '</p>';
                echo '<p style="font-size: 15px";> management_seats seats: ' . $row["management_seats"] . '</p>';
                echo '<p style="font-size: 15px";> description: ' . $row["about"] . '</p>';
                ?>
                <img src="../../MyCl/certificate/<?php echo $row['certificate']; ?>"class="imgLOL">
                <?php

                echo '<input type="hidden" name="user_ids[]" value="' . $row['cid'] . '">';
                echo '</div>';
                echo '<input type="submit" value="Accept" name="pass" class="random-button">';
                echo '<input type="submit" value="Reject" name="reject" class="random-button">';
                echo '</form>';
                echo '</div>';
            } else {
                echo 'No data found';
            }
        }
        
    }
    $conn->close();
?>

</body>
</html>

