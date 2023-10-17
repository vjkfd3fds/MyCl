<?php 
    if (!isset($_COOKIE['username'])) {
        header('Location: ../pages/home.php');
    }
?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" href="../images/note.png">
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons+Sharp" rel="stylesheet">
    <link rel="stylesheet" href="../css/admin-home.css" type="text/css">
    <title>Admin page | Dashboard</title>
    <style>
        .logout,.material-icons-sharp {
            cursor: pointer;
        }
    </style>
</head>

<body>

    <div class="container" style="padding: 25px;">

        <!-- Sidebar section start  -->
        <aside>

            

            <div class="sidebar">
               

                <a href="#" id="">
                    <span class="material-icons-sharp">
                        person_outline
                    </span>
                    <h3>User</h3>

                </a>

                

                <a href="admin-home.html" id="" class="active">
                    <span class="material-icons-sharp">
                        insights
                    </span>
                    <h3>Analylics</h3>

                </a>

                <a href="requests.php" id="">
                    <span class="material-icons-sharp">
                        mail_outline
                    </span>
                    <h3>Requests</h3>
                </a>

                <a href="overview.php" id="">
                    <span class="material-icons-sharp">
                        inventory
                    </span>
                    <h3>Overview</h3>

                </a>

                <a href="#" id="">
                    <span class="material-icons-sharp">
                        report_gmailerrorred
                    </span>
                    <h3>Reports</h3>

                </a>

                <a href="settings.php" id="">
                    <span class="material-icons-sharp">
                        settings
                    </span>
                    <h3>Settings</h3>
                </a>

    
                <?php
                    if (isset($_COOKIE['username'])) {
                        $user_id = $_COOKIE['username'];
                        echo '
                        <a>
                        <span class="material-icons-sharp">
                            logout
                        </span>
                        <form method="post" action="admin-dashboard.php">
                        <h3><input type="submit" name="logout" value="Logout" class="logout"></h3>
                        </form>
                        </a>';
                    }
                    
                    if (isset($_POST['logout'])) {                        
                        setcookie("username", "", time() - 3600, "/");
                        header("Location: admin-login.php");
                        exit;
                    }
                ?>

            </div>

        </aside>
        <!-- End of Sidebar Section-->

        <!-- Main Content-->
        <main>
            <h1>Analystics</h1>
            <!--Analystics-->

            <div class="analyse">
                <div class="sales">
                    <div class="status">
                        <div class="info">
                            <h3>Institutions</h3>
                            <?php 
                            include('../backend-php/connect.php');
                            $sql = "SELECT COUNT(*) FROM college_users";

                            $result = $conn->query($sql);
                            if ($result === false) {
                                echo $conn->error;
                            } else {
                                $row = $result->fetch_row();
                                $count = $row[0];
                            }
                            if ($count === 0) {
                                echo '<h1> No Accounts are created';
                            } else {
                                echo "<h1 style='text: align: center;'>" . $count . "</h1>";
                            }
                            ?>
                        </div>
                    </div>
                </div>

                <div class="visits">
                    <div class="status">
                        <div class="info">
                            <h3>User Accounts</h3>
                            <?php 
                            include('../backend-php/connect.php');
                            $sql = "SELECT COUNT(*) FROM registered_users";

                            $result = $conn->query($sql);
                            if ($result === false) {
                                echo $conn->error;
                            } else {
                                $row = $result->fetch_row();
                                $count = $row[0];
                            }
                            if ($count === 0) {
                                echo '<h1> No Accounts are created';
                            } else {
                                echo "<h1 style='text: align: center;'>" . $count . "</h1>";
                            }
                            ?>
                        </div>
                    </div>
                </div>

                <div class="searches">
                    <div class="status">
                        <div class="info">
                            <h3>Searches</h3>
                            <h1>23,452</h1>
                        </div>
                        <div class="progresss">
                            <svg>
                                <circle cx="38" cy="38" r="36"></circle>
                            </svg>

                            <div class="percentage">
                                <p>+21%</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- End of Analists-->

            <!-- New users Section start-->
            <?php
                include_once '../backend-php/connect.php';
                $sql = "SELECT * FROM registered_users";
                $result = $conn->query($sql);
                if ($result->num_rows > 0) {
                    echo '<div class="user-card-container">'; // Start user card container

                    while ($row = $result->fetch_assoc()) {
                        echo '<div class="user-card">'; // Start user card
                        echo '<h2>' . $row['firstname'] . '</h2>';
                        echo '<div class="avatar-container">';
                        echo '<img src="../images/bill.webp" alt="">'; // Avatar image
                        echo '</div>';
                        echo '</div>'; // End user card
                    }

                    echo '</div>'; // End user card container
                }
            ?>

            <!--end of New user Section-->
        </main>
        <!-- End Of the Main Section-->

        <!--RIght Section-->
        <di
        v class="right-section">

            <!--Nav section-->
            <div class="nav">
                <button id="menu-btn">
                    <span class="material-icons-sharp">
                        menu
                    </span>
                </button>

            </div>
            <!-- End of the nav Section-->

            <div class="user-profile">
                <div class="logo">
                    <img src="#"
                        alt="">
                    <h2>Shafiiq</h2>
                    <p>Frontend Developer</p>
                    <img src="admin-images/shafeek.jpg" alt="">
                </div>
            </div>

            <div class="user-profile">
                <div class="logo">
                    <img src="#"
                        alt="">
                    <h2>Jxy</h2>
                    <p>Backend Developer</p>
                    <img src="admin-images/jxy.jpg" alt="">
                </div>
            </div>

            <div class="reminders">
                <div class="header">
                    <h2>Reminders</h2>

                    <span class="material-icons-sharp">
                        notifications
                    </span>
                </div>


                <div class="notification">

                    <div class="icon">
                        <span class="material-icons-sharp">
                            volume_up
                        </span>
                    </div>

                    <div class="content">
                        <div class="info">
                            <h3>Workshop</h3>
                            <small class="text-muted">
                                08:00 AM - 12:00 PM
                            </small>
                        </div>
                        <span class="material-icons-sharp">
                            more_vert
                        </span>
                    </div>

                </div>

                <div class="notification deactive">

                    <div class="icon">
                        <span class="material-icons-sharp">
                            edit
                        </span>
                    </div>

                    <div class="content">
                        <div class="info">
                            <h3>Workshop</h3>
                            <small class="text-muted">
                                08:00 AM - 12:00 PM
                            </small>
                        </div>
                        <span class="material-icons-sharp">
                            more_vert
                        </span>
                    </div>

                </div>

                <div class="notification add-reminder">

                    <div>
                        <span class="material-icons-sharp">
                            add
                        </span>  
                    </div>
                    <h3>Add Reminder</h3>
                </div>

            </div>

        </div>
        <!--End of the Nav Section-->

    </div>


    <script src="js/applies.js"></script>
    <script src="js/mainjs.js"></script>
</body>

</html>