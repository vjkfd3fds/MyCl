<head>
    <style>
        .no-class {
            width: 100;
            height: 100;
        }
        
        .nav-bar {
            border: 1px solid black; 
            display: flex; 
            justify-content: flex-end;
        }
    </style>
    <link rel="icon" href="images/note.png">
    <title>MyCl | Account</title>
</head>
<body>
<?php 
    include('backend-php/connect.php');
    if (isset($_COOKIE['id'])) {
        $user_id = $_COOKIE['id'];
        $sql = "SELECT * FROM registered_users WHERE id = '$user_id'";
        $result = $conn->query($sql);
        if ($row = $result->fetch_assoc()) {
            echo '<div class="nav-bar">';
            echo '<h1 style="font-family: monospace; margin-top: 20px;"> Welcome ' . $row['firstname'] . '</h1>';
            ?>
            <img class="no-class" src="profile/<?php echo $row['profile']; ?>">
            <?php
            echo '</div>';
        }
    }
    ?>
    <form action="" method="POST"> <br> <br>
    <div class="input-types">
        <input type="text" name="firstname" class="input-1"> <br> <br>
        <input type="text" name="lastname" class="input-2"> <br> <br>
        <input type="text" name="email" class="input-3"> <br> <br>
        <input type="text" name="password" class="input-4">
    </div>  
    </form>
</body>

