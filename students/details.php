<?php 
    if (!$_COOKIE['id']) {
        header('Location: ../home.php');
    }
?>

<?php 
include('../backend-php/connect.php');

if (isset($_GET['institution'])) {
    $institution = $conn->real_escape_string($_GET['institution']);
    $sql = "SELECT * FROM college_details WHERE institution = '$institution'";
    
    if (isset($_GET['university'])) {
        $university = $conn->real_escape_string($_GET['university']);
        $sql .= " AND university = '$university'";
    }

    if (isset($_GET['state'])) {
        $state = $conn->real_escape_string($_GET['state']);
        $sql .= " AND state = '$state'";
    }

    $result = $conn->query($sql);
    $row = $result->fetch_assoc();
} else {
    echo "Search parameters are required.";
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>College Details</title>
    <style>
        /* Add your CSS styles here */
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
            background-color: #f5f5f5;
        }

        .container {
            max-width: 800px;
            margin: 0 auto;
            padding: 20px;
            background-color: #fff;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        }

        h1 {
            text-align: center;
        }

        .college-details {
            padding: 20px;
            border: 1px solid #ccc;
            margin-bottom: 20px;
            background-color: #fff;
        }

        .college-details img {
            max-width: 100%;
            height: auto;
        }

        .college-details h2 {
            margin-top: 0;
        }

        .college-details p {
            margin: 0;
        }

        .contact-info {
            background-color: #f5f5f5;
            padding: 10px;
            border: 1px solid #ccc;
        }

        .image-gallery {
            text-align: center;
        }

        .image-gallery img {
            max-width: 100%;
            height: auto;
            margin: 10px;
        }
    </style>
</head>
<body>
    <div class="container">
        <h1>College Details</h1>
        
        <?php


        echo '<div class="college-details">';
        #echo '<img src="' . $collegeDetails['image'] . '" alt="College Image">';
        echo '<h2>' . $row['university'] . ' - ' . $row['institution'] . '</h2>';
        echo '<p>' . $row['about'] . '</p>';
        echo '<p><strong>State:</strong> ' . $row['state'] . '</p>';
        echo '<p><strong>District:</strong> ' . $row['district'] . '</p>';
        echo '<p><strong>Address:</strong> ' . $row['address'] . '</p>';
        echo '<p><strong>Programs:</strong> ' . $row['programs'] . '</p>';
        echo '<p><strong>Courses:</strong> ' . $row['course'] . '</p>';
        echo '</div>';
        ?>

        <div class="contact-info">
            <p><strong>Contact Email:</strong> <?php echo $row['email']; ?></p>
            <p><strong>Phone Number:</strong> <?php echo $row['number']; ?></p>
            <p><strong>Total Seats:</strong> <?php echo $row['total_seats']; ?></p>
            <p><strong>Reserved Seats:</strong> <?php echo $row['reserved_seats']; ?></p>
            <p><strong>Management Seats:</strong> <?php echo $row['management_seats']; ?></p>
        </div>

        <div class="image-gallery">
            <h2>Images</h2>
            <img src="../uploads/<?php echo $row['certificate']; ?>" alt="" >
        </div>
    </div>
</body>
</html>

