<?php
    include_once '../backend-php/connect.php'; 
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>MyCl | College Details</title>
    <link rel="icon" href="../images/note.png">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <style>
        
        /* Add your CSS styles here */
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
            background-color: #f5f5f5;
        }
        h1, p, h2 {
            font-family: monospace;
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
            font-size: 36px;
            margin-bottom: 20px;
        }

        .college-details {
            padding: 20px;
            border: 1px solid #ccc;
            margin-bottom: 20px;
            background-color: #fff;
        }

        .college-details h2 {
            font-size: 28px;
            margin-top: 0;
        }

        .college-details p {
            font-size: 18px;
            margin: 0;
            line-height: 1.5;
        }

        .contact-info {
            background-color: #f5f5f5;
            padding: 10px;
            border: 1px solid #ccc;
        }

        .contact-info p {
            font-size: 18px;
            margin: 0;
            line-height: 1.5;
        }

        .image-gallery {
            text-align: center;
        }

        .image-gallery h2 {
            font-size: 24px;
        }

        .image-gallery img {
            max-width: 100%;
            height: auto;
            margin: 10px;
        }
    </style>
</head>
<body>
    <form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="post" enctype="multipart/form-data">
        <div class="container">
            <h1>College Details</h1>
            
            <?php

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

                echo '<div class="college-details">';
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
                <h2>Contact Information</h2>
                <p><strong>Email:</strong> <?php echo $row['email']; ?></p>
                <p><strong>Phone Number:</strong> <?php echo $row['number']; ?></p>
                <p><strong>Total Seats:</strong> <?php echo $row['total_seats']; ?></p>
                <p><strong>Reserved Seats:</strong> <?php echo $row['reserved_seats']; ?></p>
                <p><strong>Management Seats:</strong> <?php echo $row['management_seats']; ?></p>
            </div>

            <div class="image-gallery">
                <h2>Images</h2>
                <img src="../uploads/<?php echo $row['certificate']; ?>" alt="College Certificate">
            </div>
            <?php 
                include('../backend-php/connect.php');
                if (isset($_GET['institution'])) {
                    $institution = $_GET['institution'];
                    $sql1 = "SELECT * FROM review WHERE institution = '$institution'";

                    $result->query($sql1);
                    $row1 = $result->fetch_assoc();

                    echo $row1['comments'];
                }
            ?>
            <div class="image-gallery">
                <h2>Comments</h2>
            </div>
        </div>
    </form>
</body>
</html>
