<?php 
    if (!isset($_COOKIE['cid'])) {
        header('Location: ../pages/home.php');
    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>MyCl | Dashboard</title>
    <link rel="stylesheet" href="style.css">
    <link rel="icon" href="../images/note.png">
</head>
<body>

    <!-- Main Content -->
    <main>
        <!-- Sidebar -->
        <aside>
            <div class="sidebar">
                <h2>Menu</h2>
                <ul>
                    <li><a href="college-dashboard.php">Dashboard</a></li>
                    <li><a href="profile.php">Profile</a></li>
                    <li><a href="settings.php">Settings</a></li>
                    <li><a href="insight.php">Insights</a></li>
                </ul>
                <form method="post" action="college-dashboard.php">
                    <ul>
                    <li><button type="submit" name="logout">Logout</button></li>
                    </ul>
                    </form>
                <?php

                            if (isset($_POST['logout'])) {
                                // Set the expiration time of the cookie to a time in the past to delete it
                                setcookie("cid", "", time() - 3600, "/");
                                header("Location: college-login.php"); // Redirect to the login page after logout
                                exit;
                            }
                        ?>
            </div>
        </aside>

        <!-- Content Area -->
        <section class="content">
            <!-- Your content goes here -->

        <?php 
            include('../backend-php/connect.php');
            if (isset($_COOKIE['cid'])) {
                $stmt = $conn->prepare("SELECT * FROM college_users WHERE cid = ?");
                $stmt->bind_param("s", $cid);
                $stmt->execute();
                $result = $stmt->get_result();
                if ($row = $result->fetch_assoc()) {
                    echo "<script>console.log('email: " . $row['email'] . "');</script>";
                } else {
                    echo "<script> console.log('no data found'); </script>";
                }
    
            }
        ?>

        </section>
    </main>
</body>
</html>
