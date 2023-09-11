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

        .input-types {
            text-align: center;
            margin-top: 10%;
        }

        .input-1, .input-2, .input-3, .input-4 {
            font-size: 20px;
        }

        .heading {
            text-align: center;
            font-family: monospace;
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
        <h1 class="heading">User Info</h1>
        
        <?php echo "<input type='text' name='firstname' class='input-1' readonly placeholder= " .$row['firstname']  . ">";?>   <br> <br>
        <?php echo '<input type="text" name="lastname" class="input-2" readonly placeholder=' . $row['lastname'] . '>';?> <br> <br>
        <?php echo '<input type="text" name="email" class="input-3" readonly placeholder='. $row['email'] . '>';?> <br> <br>
        <?php echo '<input type="text" name="password" class="input-3" readonly placeholder='. $row['password'] . '>';?> <br> <br>
        <input type="button" value="Update">
    </div>  
    </form>
</body>

