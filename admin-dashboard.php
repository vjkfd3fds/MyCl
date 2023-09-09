<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" href="images/note.png">
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons+Sharp" rel="stylesheet">
    <link rel="stylesheet" href="css/admin-home.css" type="text/css">
    <title>Admin page | Responsive</title>
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
                    <h3>Tickets</h3>
                </a>

                <a href="#" id="">
                    <span class="material-icons-sharp">
                        inventory
                    </span>
                    <h3>Over view</h3>

                </a>

                <a href="#" id="">
                    <span class="material-icons-sharp">
                        report_gmailerrorred
                    </span>
                    <h3>Reports</h3>

                </a>

                <a href="#" id="">
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
                            include('backend-php/connect.php');
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
                            include('backend-php/connect.php');
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
            <div class="new-user">
                <h2>New Users</h2>
                <div class="user-list">

                    <div class="user">
                        <img src="images/bill.webp"
                            alt="">
                        <h2>Bill gates</h2>
                        <p>54 mins ago</p>
                    </div>

                    <div class="user">
                        <img src="images/client.jpg"
                            alt="">
                        <h2>Christophor</h2>
                        <p>5 mins ago</p>
                    </div>

                    <div class="user">
                        <img src="images/elon.jpg"
                            alt="">
                        <h2>Elon musk</h2>
                        <p>Active 1 hour ago</p>
                    </div>

                    <div class="user">
                        <img src="https://w7.pngwing.com/pngs/100/522/png-transparent-computer-icons-plus-and-minus-signs-symbol-plus-miscellaneous-cross-sign-thumbnail.png"
                            alt="">
                        <h2>More</h2>
                        <p>New user</p>
                    </div>



                </div>
            </div>
            <!--end of New user Section-->

            <!-- Recent orders table-->
            <div class="recent-orders">
                <h2>Recent applies</h2>
                <table>
                    <thead>
                        <tr>
                            <th>Name of institution</th>
                            <th>District</th>
                            <th>Programmes</th>
                            <th>Status</th>
                            <th></th>
                        </tr>
                    </thead>
                    <tbody></tbody>
                </table>
                <a href="#">Show All</a>
            </div>
            <!--End of the orders-->
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

                <div class="dark-mode">

                    <span class="material-icons-sharp active">
                        light_mode
                    </span>

                    <span class="material-icons-sharp ">
                        dark_mode
                    </span>

                </div>

            </div>
            <!-- End of the nav Section-->

            <div class="user-profile">
                <div class="logo">
                    <img src="#"
                        alt="">
                    <h2>Shafiiq</h2>
                    <p>Head of the Programme</p>
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