<head>
    <style>
        .no-class {
            width: 100;
            height: 100;
        }
        
        .nav-bar {
            border: 1px solid none; 
            display: flex; 
            justify-content: flex-end;
        }
    </style>
    <link rel="icon" href="images/note.png">
    <title>MyCl | Account</title>
</head>
<?php 
    include('backend-php/connect.php');
    if (isset($_COOKIE['id'])) {
        $user_id = $_COOKIE['id'];
        $sql = "SELECT * FROM registered_users WHERE id = '$user_id'";
        $result = $conn->query($sql);
        if ($row = $result->fetch_assoc()) {
            echo '<div class="nav-bar">';
            echo '<h1 style="font-family: monospace; margin-top: 20px;"> Welcome ' . $row['firstname'] . '<h1>';
            ?>
            <img class="no-class" src="profile/<?php echo $row['profile']; ?>"
            <?php
            echo '</div>';
        }
    }
?>