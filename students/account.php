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
            margin-top: 5%;
        }

        .input-1, .input-2, .input-3, .input-4, .update-btn {
            font-size: 25px;
            font-family: monospace;
        }
        
        .update-btn {
            border-radius: 1px;
            height: 60px;
            background-color: transparent;
            cursor: pointer;
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
    include('../backend-php/connect.php');
    if (isset($_COOKIE['id'])) {
        $user_id = $_COOKIE['id'];
        $sql = "SELECT * FROM registered_users WHERE id = '$user_id'";
        $result = $conn->query($sql);
        if ($row = $result->fetch_assoc()) {
            echo '<div class="nav-bar">';
            echo '<h1 style="font-family: monospace; margin-top: 20px;"> Welcome ' . $row['firstname'] . '</h1>';
            ?>
            <img class="no-class" src="../profile/<?php echo $row['profile']; ?>" alt="">
            <?php 
            echo '</div>';
        }
    }
    ?>
    <form action="account.php" method="POST"> <br> <br>
        <div class="input-types">
            <h1 class="heading">User Info</h1>
        
            <?php echo "<input type='text' name='firstname' class='input-1' readonly placeholder= " .$row['firstname']  . ">";?>   <br> <br>
            <?php echo '<input type="text" name="lastname" class="input-2" readonly placeholder=' . $row['lastname'] . '>';?> <br> <br>
            <?php echo '<input type="text" name="email" class="input-3" readonly placeholder='. $row['email'] . '>';?> <br> <br>
            <?php echo '<input type="text" name="password" class="input-3" readonly placeholder='. $row['password'] . '>';?> <br> <br>
            <div class="btn">
                <input type="submit" value="Update" class="update-btn" name="button">
            </div>
        </div>  
    </form>
    <?php 
       if (isset($_POST['button'])) {
        echo '<div class="input-types">';
        echo "<input type='text' name='firstname' class='input-1' placeholder= " .$row['firstname']  . ">";
        echo '</div>';
       }
    ?>
</body>

