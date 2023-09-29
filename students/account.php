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
            bordder
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
        .a-1 {
            text-decoration: none; 
            font-size: 20px; 
            font-family: monospace; 
            color: black;
        }

        .a-1:hover {
            text-decoration: underline;
        }
    </style>
    <link rel="icon" href="../images/note.png">
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
    <form action="<?php $_SERVER['PHP_SELF']; ?>" method="POST"> <br> <br>
        <div class="input-types">
            <h1 class="heading">User Info</h1>
        
            <?php echo "<input type='text' name='firstname' class='input-1' value= " .$row['firstname']  . ">";?>   <br> <br>
            <?php echo '<input type="text" name="lastname" class="input-2" value=' . $row['lastname'] . '>';?> <br> <br>
            <?php echo '<input type="text" name="email" class="input-3" value='. $row['email'] . '>';?> <br> <br>
            <a class="a-1" href="update-password.php">Update password</a> <br><br>
            <div class="btn">
                <input type="submit" value="Update" class="update-btn" name="button">
            </div>
        </div>  
    </form>
</body>

<?php 
    include('../backend-php/connect.php');

    if (isset($_POST['button'])) {
        $firstname = $_POST['firstname'];
        $lastname = $_POST['lastname'];
        $email = $_POST['email'];
        $sql = "SELECT * FROM registered_users";
        $stmt1 = $conn->prepare($sql);
        $stmt1->execute();
        $result = $stmt1->get_result();
        $row = $result->fetch_assoc();
        $id  = $row['id'];

        $stmt = $conn->prepare("UPDATE registered_users SET firstname = ?, lastname = ?, email = ? WHERE id = ?");
        $stmt->bind_param("ssss", $firstname, $lastname, $email, $id);
        $stmt->execute();
    }

?>
