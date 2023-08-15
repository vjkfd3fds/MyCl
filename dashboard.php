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

    if ($_SERVER['REQUEST_METHOD'] === 'POST') {
        if (isset($_POST['pass'])) {
            echo "Successfully registered their details. Will send them a message.";
        } elseif (isset($_POST['reject'])) {
            $emailToDelete = $_POST['reject']; 

            $sql = "DELETE FROM college_details WHERE email = ?";
            $stmt = $conn->prepare($sql);
            $stmt->bind_param("s", $emailToDelete);
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
        echo '<div class="feedback-list">';
        
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
            echo '<form action="dashboard.php" method="post">';
            echo '<input type="hidden" name="reject" value="' . $row["email"] . '">';
            echo '<input type="submit" value="pass" name="pass">';
            echo '<input type="submit" value="Delete" name="delete_row">';
            echo '</form>';
        }
        
        echo '</div>';
    }

    $conn->close();
?>



</body>
</html>

