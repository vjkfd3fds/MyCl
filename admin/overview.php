<?php include_once "../backend-php/connect.php";?>

<?php 

    $stmt = $conn->prepare("SELECT * FROM registered_users");
    $stmt->execute();
    $result = $stmt->get_result();

?>



<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>MyCl | Overview</title>
    <link rel="icon" href="../images/note.png">
    <style>
        td, th, tr, table {
            border: 1px solid black;
            border-collapse: collapse;
            font-family: monospace;
        }

        h1 {
            font-family: monospace;
        }

        input {
            background-color: transparent;
            border: none;
            cursor: pointer;
        }

        input:hover {
            text-decoration: underline black;
        }
    </style>
</head>
<body>
    <h1>User Accounts</h1>
    <form action="<?php echo $_SERVER['PHP_SELF'];?>" method="POST">
        <table>
            <tr>
                <th>User Id</th>
                <th>Email</th>
                <th>Username</th>
                <th>Profile Picture</th>
            </tr>

            <?php 
                while ($row = $result->fetch_assoc()) {
                    echo "<tr>";
                    echo "<td>" . $row["id"] . "</td>";
                    echo "<td>" . $row['email'] . "</td>";
                    echo "<td>" . $row['firstname'] . "</td>";
            ?>
            <td> <img witdth="100" height="100" src="../profile/<?php echo $row['profile']; ?>" alt=""> </td>
            <?php
            }
            ?>
        </table>
    </form>
    <?php 

        $stmt = $conn->prepare("SELECT * FROM college_users");
        $stmt->execute();
        $result = $stmt->get_result();

    ?>
    <h1>College Accounts</h1>
    <form action="<?php echo $_SERVER['PHP_SELF'];?>" method="POST">
        <table>
            <tr>
                <th>College Id</th>
                <th>Email</th>
                <th>Username</th>
                <th >Profile Picture</th>
            </tr>

            <?php 
                while ($row = $result->fetch_assoc()) {
                    echo "<tr>";
                    echo "<td>" . $row["cid"] . "</td>";
                    echo "<td>" . $row['email'] . "</td>";
                    echo "<td>" . $row['firstname'] . "</td>";
            ?>
            <td> <img witdth="100" height="100" src="../college-profile/<?php echo $row['profile']; ?>" alt=""> </td>
            <?php

            }
            ?>
        </table>
    </form>
    
</body>
</html>