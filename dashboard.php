<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
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
        }
    </style>
</head>
<body>
    <h1>College-Details</h1>
<?php 
    include('backend-php/connect.php');

    $sql = "SELECT * FROM college_details";
    $result = $conn->query($sql);

    if ($result->num_rows > 0) {
        echo '<div class="feedback-list">';
    }

    while ($row = $result->fetch_assoc()) {
        echo '<div class="feedback-card">';
        echo '<h3>' . $row["institution"] . '</h3>';
        echo '<p> university: ' . $row["university"] . '</p>';
        echo '<p> state: ' . $row["state"] . '</p>';
        echo '<p> district: ' . $row["district"] . '</p>';
        echo '<p> address: ' . $row["address"] . '</p>';
        echo '<p> programs: ' . $row["programs"] . '</p>';
        echo '<p> course: ' . $row["course"] . '</p>';
        echo '<p> phone number: ' . $row["number"] . '</p>';
        echo '<p> email: ' . $row["email"] . '</p>';
        echo '<p> total seats: ' . $row["total_seats"] . '</p>';
        echo '<p> reserved seats: ' . $row["reserved_seats"] . '</p>';
        echo '<p> management_seats seats: ' . $row["management_seats"] . '</p>';
        echo '</div>';
        echo '<input type="submit" value="pass">';
        echo '<input type="submit" value="reject">';
    }
    echo '</div>';
     $conn->close();

?>

    
</body>
</html>

