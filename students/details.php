<?php 
    if (!$_COOKIE['id']) {
        header('Location: ../pages/home.php');
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

        .rating:not(:checked) > input {
            position: absolute;
            appearance: none;
        }

            .rating:not(:checked) > label {
            float: right;
            cursor: pointer;
            font-size: 30px;
            color: #666;
        }

            .rating:not(:checked) > label:before {
            content: '★';
        }

            .rating > input:checked + label:hover,
            .rating > input:checked + label:hover ~ label,
            .rating > input:checked ~ label:hover,
            .rating > input:checked ~ label:hover ~ label,
            .rating > label:hover ~ input:checked ~ label {
            color: #e58e09;
            }

            .rating:not(:checked) > label:hover,
            .rating:not(:checked) > label:hover ~ label {
            color: #ff9e0b;
            }

            .rating > input:checked ~ label {
            color: #ffa723;
            }




    </style>
</head>
<body>
    <form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="post" enctype="multipart/form-data">
        <div class="container">
            <h1>College Details</h1>
            
            <?php
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
            <div class="contact-info">
                <h2 style="text-align: center;">Post a Review</h2>
            <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal">
           Enter your review
            </button>

            <!-- Modal -->
            <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Reviews and Comments</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <div class="rating">
                        <input value="5" name="rate" id="star5" type="radio">
                        <label title="text" for="star5"></label>
                        <input value="4" name="rate" id="star4" type="radio">
                        <label title="text" for="star4"></label>
                        <input value="3" name="rate" id="star3" type="radio">
                        <label title="text" for="star3"></label>
                        <input value="2" name="rate" id="star2" type="radio">
                        <label title="text" for="star2"></label>
                        <input value="1" name="rate" id="star1" type="radio">
                        <label title="text" for="star1"></label>
                    </div>
                    <div class="input-group flex-nowrap">
                        <span class="input-group-text" id="addon-wrapping">@</span>
                        <input name="message" type="text" class="form-control" placeholder="Comment" aria-label="Username" aria-describedby="addon-wrapping">
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                    <button type="submit" class="btn btn-primary" name="lol">Submit</button>
                </div>
                </div>
            </div>
            </div>
            </div>
        </div>
    </form>

?>
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>

</body>
</html>
