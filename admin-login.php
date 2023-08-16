<!DOCTYPE html>
<html>

<head>
  <!-- Basic -->
  <meta charset="utf-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <!-- Mobile Metas -->
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
  <!-- Site Metas -->
  <link rel="icon" href="images/note.png">
  <meta name="keywords" content="" />
  <meta name="description" content="" />
  <meta name="author" content="" />

  <title>MyCl | Admin Login</title>

  <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" rel="stylesheet">

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


  <!-- Custom styles for the drop-down box -->
  <style>
    section {
      background-color: #fff;
    }

    /* Style for the drop-down box */
    .nav-item.dropdown {
      position: relative;
    }

    .nav-link.dropdown-toggle::after {
      display: none;
    }

    .dropdown-menu {
      position: absolute;
      top: 100%;
      left: 0;
      z-index: 1000;
      display: none;
      float: left;
      min-width: 10rem;
      padding: 0.5rem 0;
      margin: 0;
      font-size: 1rem;
      color: #212529;
      text-align: left;
      list-style: none;
      background-color: #fff;
      background-clip: padding-box;
      border: 1px solid rgba(0, 0, 0, 0.15);
      border-radius: 0.25rem;
    }

    .nav-item.dropdown:hover .dropdown-menu {
      display: block;
    }
  </style>
</head>

<body>
  <div class="hero_area">
    <!-- header section starts -->
    <header class="header_section">
      <div class="container-fluid">
        <nav class="navbar navbar-expand-lg custom_nav-container">
  <a class="navbar-brand" href="home.php">
    <h4 style="font-size: x-large; cursor: pointer; color: white;">
      my
      <span style="font-size: x-large;">c</span>
      I
    </h4>
  </a>

  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class=""></span>
  </button>

  <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="navbar-nav ml-auto">
      <li class="nav-item active">
        <a class="nav-link" href="home.php">Home <span class="sr-only">(current)</span></a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="about.php"> About</a>
      </li>

      <!-- Adding the drop-down box for Admin, Student, and College options -->
      <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
          Dashboard
        </a>
        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
          <?php 
                  if (isset($_COOKIE['username'])) {
                    $user_id = $_COOKIE['username'];
                    echo '<a class="dropdown-item" href="admin-dashboard.php">Admin</a>';
                  } else {
                    echo '<a class="dropdown-item" href="admin-login.php">Admin</a>';
                  }
                  ?>
                  <?php 
                  if (isset($_COOKIE['email'])) {
                    $user_id = $_COOKIE['email'];
                    echo '<a class="dropdown-item" href="student-dashboard.php">Student</a>';
                  } else {
                    echo '<a class="dropdown-item" href="student-register.php">Student</a>';
                  }
                  ?>
          <a class="dropdown-item" href="college-register.php">College</a>
        </div>
      </li>
      <!-- End of drop-down box -->

    </ul>
  </div>
</nav>
    <!-- end header section -->

  </div>


  <section class="vh-100" id="student-login" style="padding: 40px;">
    <div class="container-fluid h-custom">
      <div class="row d-flex justify-content-center align-items-center h-100">
        <div class="col-md-9 col-lg-6 col-xl-5">
          <img src="https://ibm.vic.edu.au/public/frontend/assets/img/contact/01.png"
            alt="Sample image">
        </div>
        <div class="col-md-8 col-lg-6 col-xl-4 offset-xl-1 ">
          <form action="backend-php/admin-login.php" method="post" class="was-validated">
            <h3 class="text-center " style="padding: 40px;">Admin Login</h3>

            <div class="text-center ">

            </div>

            <!-- Email input -->
            <div class="form-outline mb-4">
              <input type="text" type="tel" id="form3Example3" class="form-control form-control-lg"
                placeholder="Username" name="username" required/>
            </div>

            <!-- Password input -->
            <div class="form-outline mb-3">
              <input type="password" id="form3Example4" class="form-control form-control-lg"
                placeholder="password" required name="password" />
            </div>

            <div class="d-flex justify-content-between align-items-center">
              <!-- Checkbox -->
              <div class="form-check mb-0">
                <input class="form-check-input me-2" type="checkbox" value="" id="form2Example3" />
                <label class="form-check-label" for="form2Example3">
                  Remember me
                </label>
              </div>
              <a href="forgot-admin-password.html" class="text-body">Forgot password?</a>
            </div>

            <div class="text-center text-lg-start mt-4 pt-2">
              <button type="submit" class="btn btn-primary btn-lg"
                style="padding-left: 2.5rem; padding-right: 2.5rem;">Login</button>
            </div>


          </form>

          <!--this is form  ended before-->


        </div>
      </div>
    </div>

  </section>




  <!-- price section -->
  <!--
  <section class="price_section layout_padding">
    <div class="container">
      <div class="heading_container heading_center">
        <h2>
          Student login
        </h2>
      </div>
      <div class="price_container ">

        
        <input class="box" type="text" placeholder="Username or phone number" style="width: 35em;height: 3em;">
        <input class="" type="text" placeholder="Password" style="width: 300em;height: 3em;">
        <div class="box">
          <div class="detail-box">
            <h2>$ <span>49</span></h2>
            <h6>
              Startup
            </h6>
            <ul class="price_features">
              <li>
                2GB RAM
              </li>
              <li>
                20GB SSD Cloud Storage
              </li>
              <li>
                Weekly Backups
              </li>
              <li>
                DDoS Protection
              </li>
              <li>
                Full Root Access
              </li>
              <li>
                24/7/365 Tech Support
              </li>
            </ul>
          </div>
          <div class="btn-box">
            <a href="">
              See Detail
            </a>
          </div>
        </div>
        <div class="box">
          <div class="detail-box">
            <h2>$ <span>99</span></h2>
            <h6>
              Standard
            </h6>
            <ul class="price_features">
              <li>
                4GB RAM
              </li>
              <li>
                50GB SSD Cloud Storage
              </li>
              <li>
                Weekly Backups
              </li>
              <li>
                DDoS Protection
              </li>
              <li>
                Full Root Access
              </li>
              <li>
                24/7/365 Tech Support
              </li>
            </ul>
          </div>
          <div class="btn-box">
            <a href="">
              See Detail
            </a>
          </div>
        </div>
        <div class="box">
          <div class="detail-box">
            <h2>$ <span>149</span></h2>
            <h6>
              Business
            </h6>
            <ul class="price_features">
              <li>
                8GB RAM
              </li>
              <li>
                100GB SSD Cloud Storage
              </li>
              <li>
                Weekly Backups
              </li>
              <li>
                DDoS Protection
              </li>
              <li>
                Full Root Access
              </li>
              <li>
                24/7/365 Tech Support
              </li>
            </ul>
          </div>
          <div class="btn-box">
            <a href="">
              See Detail
            </a>
          </div>
        </div>
      </div><
    </div>
  </section>
  !-->

  <!-- price section -->

  <!-- info section -->

  <section class="info_section layout_padding2">
    <div class="container">
      <div class="row">
        <div class="col-md-3">
          <div class="info_contact">
            <h4>
              Address
            </h4>
            <div class="contact_link_box">
              <a href="">
                <i class="fa fa-map-marker" aria-hidden="true"></i>
                <span>
                  Location
                </span>
              </a>
              <a href="">
                <i class="fa fa-phone" aria-hidden="true"></i>
                <span>
                  Call +01 1234567890
                </span>
              </a>
              <a href="">
                <i class="fa fa-envelope" aria-hidden="true"></i>
                <span>
                  demo@gmail.com
                </span>
              </a>
            </div>
          </div>
          <div class="info_social">
            <a href="">
              <i class="fa fa-facebook" aria-hidden="true"></i>
            </a>
            <a href="">
              <i class="fa fa-twitter" aria-hidden="true"></i>
            </a>
            <a href="">
              <i class="fa fa-linkedin" aria-hidden="true"></i>
            </a>
            <a href="">
              <i class="fa fa-instagram" aria-hidden="true"></i>
            </a>
          </div>
        </div>
        <div class="col-md-3">
          <div class="info_link_box">
            <h4>
              Links
            </h4>
            <div class="info_links">
              <a class="" href="home.php">
                <img src="images/nav-bullet.png" alt="">
                Home
              </a>
              <a class="" href="about.php">
                <img src="images/nav-bullet.png" alt="">
                About
              </a>
              <a class="" href="feedback-form.php">
                <img src="images/nav-bullet.png" alt="">
                Feedback
              </a>
            </div>
          </div>
        </div>
        <div class="col-md-3">
          <div class="info_detail">
            <h4>
              Info
            </h4>
            <p>
              necessary, making this the first true generator on the Internet. It uses a dictionary of over 200 Latin
              words, combined with a handful
            </p>
          </div>
        </div>
        <div class="col-md-3 mb-0">
          <h4>
            Subscribe
          </h4>
          <form action="#">
            <input type="text" placeholder="Enter email" />
            <button type="submit">
              Subscribe
            </button>
          </form>
        </div>
      </div>
    </div>
  </section>

  <!-- end info section -->


  <!-- footer section -->
  <footer class="footer_section">
    <div class="container">
      <p>
        &copy; <span id="displayYear"></span> All Rights Reserved By
        <a href="https://html.design/">Free Html Templates</a>
      </p>
    </div>
  </footer>
  <!-- footer section -->

  <!-- jQery -->
  <script src="js/jquery-3.4.1.min.js"></script>
  <!-- bootstrap js -->
  <script src="js/bootstrap.js"></script>
  <!-- custom js -->
  <script src="js/custom.js"></script>
  




  <script src="https://kit.fontawesome.com/3cb1958bfd.js" crossorigin="anonymous"></script>


</body>

</html>