<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>MyCl | Requests</title>
    <link rel="icon" href="images/note.png">
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
    include('backend-php/connect.php');

    if ($_SERVER['REQUEST_METHOD'] === 'POST') {
        if (isset($_POST['pass'])) {
            echo "Successfully registered their details. Will send them a message.";
        } elseif (isset($_POST['reject'])) {
            $idToDelete = $_POST['reject']; 

            $sql = "DELETE FROM college_details WHERE id = ?";
            $stmt = $conn->prepare($sql);
            $stmt->bind_param("s", $idToDelete);
            if ($stmt->execute()) {
                echo '<p>Deleted</p>';
            } else {
                echo '<p>Error deleting record</p>';
            }
        }
    }

    $sql = "SELECT * FROM college_details";
    $result = $conn->query($sql);

    if ($result->num_rows > 0) {
        echo '<div class="result-box">';
        
        while ($row = $result->fetch_assoc()) {
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
            <img src="../../php-project/uploads/<?php echo $row['certificate']; ?>"class="imgLOL">
            <?php
            echo '</div>';
            echo '<form action="requests.php" method="post">';
            echo '<input type="hidden" name="reject" value="' . $row["id"] . '">';
            echo '<input type="submit" value="pass" name="pass" class="random-button">';
            echo '<input type="submit" value="Delete" name="delete_row" class="random-button">';
            echo '</form>';
            echo '</div>';
        }
        
        echo '</div>';
    }
    $conn->close();
?>



</body>
</html>

