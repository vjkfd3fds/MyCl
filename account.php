<head>
    <style>
        .no-class {
            width: 200;
            height: 200;
        }
    </style>
</head>

<?php 
    include('backend-php/connect.php');
    if (isset($_COOKIE['id'])) {
        $user_id = $_COOKIE['id'];
        $sql = "SELECT * FROM registered_users WHERE id = '$user_id'";
        $result = $conn->query($sql);
        if ($row = $result->fetch_assoc()) {
            echo '<div style="border: 1px solid black; display: flex; justify-content: flex-end">';
            echo '<h1 style="font-family: monospace; margin-top: 20px;"> Welcome ' . $row['firstname'] . '<h1>';
            ?>
            <img class="no-class" src="profile/<?php echo $row['profile']; ?>"
            <?php
            echo '</div>';
        }
    }
?>