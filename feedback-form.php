<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Feedback</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.2/dist/css/bootstrap.min.css">
    <style>
        /* Custom styles to adjust form appearance */
        .custom-form {
            max-width: 400px;
            margin: 0 auto;
            padding: 20px;
        }
        .custom-form label {
            font-weight: bold;
        }
        .feedback-list {
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
<?php 
    
    include('backend-php/connect.php');
    include('backend-php/feedback-process.php')
?>
    <div class="container">
        <div class="custom-form">
            <form method="post" action="backend-php/feedback-process.php">
                <!-- Name input -->
                <div class="form-group">
                    <label for="form4Example1">Name</label>
                    <input type="text" id="form4Example1" class="form-control" name="name"/>
                </div>
        
                <!-- Message input -->
                <div class="form-group">
                    <label for="form4Example3">Message</label>
                    <textarea class="form-control" id="form4Example3" rows="4" name="message"></textarea>
                </div>

                <!-- Submit button -->
                <button type="submit" class="btn btn-primary btn-block">Send</button>
            </form>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.2/dist/js/bootstrap.min.js"></script>

    <?php 

        $sql = "SELECT * FROM feedback";
        $result = $conn->query($sql);

        if ($result->num_rows > 0) {
            echo '<div class="feedback-list">';
        }
    
        while ($row = $result->fetch_assoc()) {
            echo '<div class="feedback-card">';
            echo '<h3>' . $row["name"] . '</h3>';
            echo '<p>Message: ' . $row["message"] . '</p>';
            echo '</div>';
        }
        echo '</div>';
        $conn->close();
    ?>
</body>
</html>
