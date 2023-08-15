<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>MyCl | Dashboard</title>



<!-- bootstrap core css -->
<link rel="stylesheet" type="text/css" href="css/bootstrap.css" />

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
            </div>
            <nav>
                <span class="material-icons-sharp more-vert" data-toggle="collapse" data-target="#navbartoggle">
                    more_vert
                </span>

                <div id="navbartoggle" class="nav-content">
                    <ul>
                        <a href="student-dashboard.html">
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
                        <a href="backend-php/logout.php">
                            <li>Logout</li>
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


                            <form action="#">

                                <div>
                                    <div class="form-group d-flex justify-content-center" style="margin-top: 2em;">

                                        <select class="form-control" id="exampleFormControlSelect1"
                                            style="width: 26em;">
                                            <option>University</option>
                                            <?php 
                                                include('backend-php/connect.php');
                                                $sql = "SELECT university FROM college_details";
                                                $result = $conn->query($sql);
                                                if ($result->num_rows > 0) {
                                                    while ($row = $result->fetch_assoc()) { 
                                                        $university = $row['university']; 
                                                        echo"<option value='$university'>$university</option>";
                                                    }
                                                }   
                                            ?>
                                        </select>
                                    </div>


                                    <div class="form-group d-flex justify-content-center ">
                                        <select class="form-control" id="exampleFormControlSelect1"
                                            style="width: 26em;">
                                            <option>District</option>
                                            <?php 
                                                include('backend-php/connect.php');
                                                $sql = "SELECT district FROM college_details";
                                                $result = $conn->query($sql);
                                                if ($result->num_rows > 0) {
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
                                <a class="text-reset fw-bold" href="home.html">my<span
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
        <form action="index.php" metho="post">
            <div class="container search-box">
                <h1 style="padding: 20px; font-family: monospace;">Search By Name</h1>
                <div class="d-flex justify-content-center">
                    <div class="input-group">
                        <input type="search" class="form-control rounded" placeholder="Search by name of Institution"
                        aria-label="Search" aria-describedby="search-addon" />
                        <button type="submit" class="btn btn-outline-primary">search</button>
                    </div> 
                </div>
            </div>
        </form>
    </section>
    <!--End of the Searching Section-->


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