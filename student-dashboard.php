<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>MyCl | Dashboard</title>

<style>
     feedback-list {
            margin-top: 20px;
        }

        .feedback-card {
            background-color: #fff;
            border-radius: 5px;
            padding: 15px;
            margin-bottom: 15px;
            box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);
        }

        .feedback-card h3 {
            margin-top: 0;
            margin-bottom: 10px;
        }

        .feedback-card p {
            margin: 0;
        }
        /* Style for the result box */
        .result-box {
            border: 1px solid #ccc;
            padding: 20px;
            margin: 20px;
            background-color: #f9f9f9;
            border-radius: 10px;
            box-shadow: 0px 2px 4px rgba(0, 0, 0, 0.1);
        }

        /* Style for heading */
        .result-heading {
            font-size: 1.2rem;
            margin-bottom: 10px;
        }

        /* Style for individual feedback card */
        .feedback-card {
            border: 1px solid #ddd;
            padding: 10px;
            margin: 10px 0;
            background-color: #fff;
            border-radius: 5px;
        }

        /* Style for feedback card content */
        .feedback-content {
            font-size: 0.9rem;
        }
        .logout-button {
    /* Add your desired styling for the logout button here */
        background-color: transparent;
        color: #black;
        font-size: 15px;
        border: none;
        padding: 20x 20px;
        cursor: pointer;
    }

    /* Apply the same styling to the other navigation links */
    #navbartoggle .nav-content ul a li {
        /* Your navigation item styling */
    }


        /* Add your other CSS styles here */

    
</style>

<!-- bootstrap core css -->
<link rel="stylesheet" type="text/css" href="css/bootstrap.css" />
<link rel="icon" href="images/note.png">

<!-- fonts style -->
<link href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;500;700;900&display=swap" rel="stylesheet">

<!-- font awesome style -->
<link href="css/font-awesome.min.css" rel="stylesheet" />

<!-- Custom styles for this template -->
<link href="css/style.css" rel="stylesheet" />
<!-- responsive style -->
<link href="css/responsive.css" rel="stylesheet" />


<!--google fonts and icon css  and student css file-->
<link rel="stylesheet" href="css/student.css">
<link href="https://fonts.googleapis.com/icon?family=Material+Icons+Sharp" rel="stylesheet">

<link rel="stylesheet" href="style.css">
</head>
<body>

    <!--Header Section Starts-->
    <header>
        <div class="logo">
            <h3 style="font-family: 'Poppins', sans-serif;">my<span>c</span>l</h3>
        </div>
        
        <div class="nav">
            <div class="user-control">
                <a href="">Institutions</a>
                <a href="">Programmes</a>
                <a href="">Courses</a>
                <?php
                            if (isset($_COOKIE['email'])) {
                                $user_id = $_COOKIE['email'];
                                // Perform actions that a logged-in user can do
                                echo '<a>
                                <form method="post" action="student-dashboard.php">
                                        <input type="submit" name="logout" value="Logout" class="logout-button">
                                    </form>
                                    </a>';
                            } 

                            if (isset($_POST['logout'])) {
                                // Set the expiration time of the cookie to a time in the past to delete it
                                setcookie("email", "", time() - 3600, "/");
                                header("Location: student-login.php"); // Redirect to the login page after logout
                                exit;
                            }
                        ?>
            </div>
            <nav>
                <span class="material-icons-sharp more-vert" data-toggle="collapse" data-target="#navbartoggle">
                    more_vert
                </span>

                <div id="navbartoggle" class="nav-content">
                    <ul>
                        <a href="home.php">
                            <li>Home</li>
                        </a>
                        <a href="account.php">
                            <li>Account</li>
                        </a>
                        <a href="dashboard.html">
                            <li>Wishlists</li>
                        </a>
                        <a href="#">
                            <li>Settings</li>
                        </a>

                    </ul>
                </div>

            </nav>
        </div>
    </header>
    <!--Header Section End-->

    <!--Selecting section Starts-->
    <section>
        <div class="container-fluid">

            <div class="row">

                <div class="col-12 col-sm-12 col-md-12 col-lg-6 d-flex justify-content-center">
                    <img src="images/draw2.webp" alt="">
                </div>


                <div class="col-12 col-sm-12 col-md-12 col-lg-6 d-flex justify-content-center">

                    <div class="card" style="width: 36em; height: 27rem; margin-top: 7.1em;">
                        <div class="card-body">


                            <form action="student-dashboard.php" method="post">
                                <div>
                                    <div class="form-group d-flex justify-content-center" style="margin-top: 2em;" >

                                        <select class="form-control" id="exampleFormControlSelect1"
                                            style="width: 26em;" name="university">
                                            <option>University</option>
                                            <?php                                     
                                                include('backend-php/connect.php');
                                                $sql = "SELECT university FROM college_details";
                                                $result = $conn->query($sql);
                                                if ($result->num_rows > 0) {
                                                    while ($row = $result->fetch_assoc()) { 
                                                        $university = $row['university']; 
                                                        echo"<option value='$university' >$university</option>";
                                                    }
                                                }   
                                            ?>
                                        </select>
                                    </div>



                                    <div class="form-group d-flex justify-content-center ">
                                        <select class="form-control" id="exampleFormControlSelect1"
                                            style="width: 26em;" name="district">
                                            <option>District</option>
                                            <?php 
                                                include('backend-php/connect.php');
                                                $sql = "SELECT district FROM college_details";
                                                $result = $conn->query($sql);
                                                if ($result->num_rows > 0) {
                                                    echo '<div class="feedback-list">';
                                                    while ($row = $result->fetch_assoc()) { 
                                                        $district = $row['district']; 
                                                        echo "<option value='$district'>$district</option>";
                                                    }
                                                }  
                                            ?>
                                        </select>
                                    </div>
                                    <?php include('backend-php/form-details.php'); ?>
                                    <div class="form-group d-flex justify-content-center ">
                                        <select class="form-control" id="exampleFormControlSelect1"
                                            style="width: 26em;">
                                            <option>Course</option>
                                            <?php echo $optionsCourses; ?>
                                        </select>
                                    </div>


                                    <div class="d-flex justify-content-center mt-5">
                                        <button type="submit" class="btn btn-success"
                                            style="width: 15em;">Submit</button>
                                    </div>
                                </div>
                            </form>

                            <div class="text-center p-4 mt-1">
                                © 2023 Copyright:
                                <a class="text-reset fw-bold" href="home.php">my<span
                                        style="font-size: larger;">C</span>l
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--End of the Selecting section-->

    <!--Seaching box Section Starts-->
    <section>
        <form action="student-dashboard.php" method="post">
            <div class="container search-box">
                <h1 style="padding: 20px; font-family: monospace;">Search By Name</h1>
                <div class="d-flex justify-content-center">
                    <div class="input-group">
                        <input type="search" class="form-control rounded" placeholder="Search by name of Institution"
                        aria-label="Search" aria-describedby="search-addon" name="search"/>
                        <button type="submit" class="btn btn-outline-primary">search</button>
                    </div> 
                </div>
            </div>
        </form>
    </section>
    <!--End of the Searching Section-->

    <?php 
        include('backend-php/connect.php');

        if ($_SERVER['REQUEST_METHOD'] === 'POST') {
			if(isset($_POST['search'])) {
				$institution = $_POST['search'];
            	$institution = $conn->real_escape_string($institution);
            	$sql = "SELECT * FROM college_details WHERE institution = '$institution'";
            	$result = $conn->query($sql);
            	if ($result->num_rows > 0) {
					echo '<div class="result-box">';
					echo '<h2 class="result-heading">Search Results:</h2>';
					while ($row = $result->fetch_assoc()) { 
						echo '<div class="feedback-card">';
                    	echo '<h3>' . $row["institution"] . '</h3>';
                    	echo '<p style="font-size: 15px; font-family: monospace;"> university: ' . $row["university"] . '</p>';
                    	echo '<p style="font-size: 15px; font-family: monospace;"> state: ' . $row["state"] . '</p>';
                    	echo '<p style="font-size: 15px; font-family: monospace;"> district: ' . $row["district"] . '</p>';
                    	echo '<p style="font-size: 15px; font-family: monospace;"> address: ' . $row["address"] . '</p>';
                    	echo '<p style="font-size: 15px; font-family: monospace;"> programs: ' . $row["programs"] . '</p>';
                    	echo '<p style="font-size: 15px; font-family: monospace;"> course: ' . $row["course"] . '</p>';
                    	echo '<p style="font-size: 15px; font-family: monospace;"> phone number: ' . $row["number"] . '</p>';
                    	echo '<p style="font-size: 15px; font-family: monospace;"> email: ' . $row["email"] . '</p>';
                    	echo '<p style="font-size: 15px; font-family: monospace;"> total seats: ' . $row["total_seats"] . '</p>';
                    	echo '<p style="font-size: 15px; font-family: monospace;"> reserved seats: ' . $row["reserved_seats"] . '</p>';
                    	echo '<p style="font-size: 15px; font-family: monospace;"> management_seats seats: ' . $row["management_seats"] . '</p>';
                    	echo '</div>';
               		}
					echo "</div>";
            	}
        	} 
   		}else {
            echo "No results found.";
        }

    
    ?>
    <!-- Search using university names -->

     <?php 
          if ($_SERVER['REQUEST_METHOD'] === 'POST') {
            if (isset($_POST['district']) && isset($_POST['university'])) {
                $district = $_POST['district'];
                $university = $_POST['university'];
                $district = $conn->real_escape_string($district);
                $university = $conn->real_escape_string($university);
                $sql = "SELECT * FROM college_details WHERE district = '$district' AND university = '$university'";
                $result = $conn->query($sql);
                if ($result->num_rows > 0) {
                        
                echo '<div class="result-box">';
                echo '<h2 class="result-heading">Search Results:</h2>';
                while ($row = $result->fetch_assoc()) { 
                    echo '<div class="feedback-card">';
                    echo '<h3>' . $row["institution"] . '</h3>';
                    echo '<p style="font-size: 15px; font-family: monospace;"> university: ' . $row["university"] . '</p>';
                    echo '<p style="font-size: 15px; font-family: monospace;"> state: ' . $row["state"] . '</p>';
                    echo '<p style="font-size: 15px; font-family: monospace;"> district: ' . $row["district"] . '</p>';
                    echo '<p style="font-size: 15px; font-family: monospace;"> address: ' . $row["address"] . '</p>';
                    echo '<p style="font-size: 15px; font-family: monospace;"> programs: ' . $row["programs"] . '</p>';
                    echo '<p style="font-size: 15px; font-family: monospace;"> course: ' . $row["course"] . '</p>';
                    echo '<p style="font-size: 15px; font-family: monospace;"> phone number: ' . $row["number"] . '</p>';
                    echo '<p style="font-size: 15px; font-family: monospace;"> email: ' . $row["email"] . '</p>';
                    echo '<p style="font-size: 15px; font-family: monospace;"> total seats: ' . $row["total_seats"] . '</p>';
                    echo '<p style="font-size: 15px; font-family: monospace;"> reserved seats: ' . $row["reserved_seats"] . '</p>';
                    echo '<p style="font-size: 15px; font-family: monospace;"> management_seats seats: ' . $row["management_seats"] . '</p>';
                    echo '</div>';
                }
                echo "</div>";
            }
        } 
    } 

        $conn->close();
    ?>

   

    <!-- jQery -->
    <script src="js/jquery-3.4.1.min.js"></script>
    <!-- bootstrap js -->
    <script src="js/bootstrap.js"></script>
    <!-- custom js -->
    <script src="js/custom.js"></script>
    <!--Icons js-->
    <script src="https://kit.fontawesome.com/3cb1958bfd.js" crossorigin="anonymous"></script>

    <script src="js/student.js"></script>

</body>

</html>