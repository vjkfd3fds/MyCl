<!DOCTYPE html>
<html>

<head>
  <!-- Basic -->
  <meta charset="utf-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <!-- Mobile Metas -->
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
  <!-- Site Metas -->
  <link rel="icon" href="images/note.png" type="image/gif" />
  <meta name="keywords" content="" />
  <meta name="description" content="" />
  <meta name="author" content="" />

  <title>MyCl</title>

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

              <!-- Adding the drop-down box -->
              <li class="nav-item dropdown">
                  <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    Login/SignUp </a>
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
                  if (isset($_COOKIE['id'])) {
                    $user_id = $_COOKIE['id'];
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
      </div>
    </header>
    <!-- end header section -->

    <!-- slider section -->
    <section class="slider_section ">
      <div id="customCarousel1" class="carousel slide" data-ride="carousel">
        <div class="carousel-inner">
          <div class="carousel-item active">
            <div class="container ">
              <div class="row">
                <div class="col-md-6">
                  <div class="detail-box">
                    <h1>
                      Fast & Reliable  <br>
                      College Searching Method
                    </h1>
                    <p>
                      MyCl is a comprehensive online platform designed to assist students in finding their ideal colleges and universities.  </p>
                    <div class="btn-box">
                      <a href="about.php" class="btn-1">
                        Read More
                      </a>
                      <a href="contact.php" class="btn-2">
                        Contact Us
                      </a>
                    </div>
                  </div>
                </div>
                <div class="col-md-6">
                  <div class="row">
                    <div class=" col-lg-10 mx-auto">
                      <div class="img-box">
                        <img src="images/slider-img.png" alt="">
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="carousel-item">
            <div class="container ">
              <div class="row">
                <div class="col-md-6">
                  <div class="detail-box">
                    <h1>
                      Fast & Reliable <br>
                      College Searching Method
                    </h1>
                    <p>
                      MyCl is a comprehensive online platform designed to assist students in finding their ideal colleges and universities.  </p>
                    <div class="btn-box">
                      <a href="about.php" class="btn-1">
                      Read More
                    </a>
                    <a href="contact.php" class="btn-2">
                      Contact Us
                    </a>
                    </div>
                  </div>
                </div>
                <div class="col-md-6">
                  <div class="row">
                    <div class=" col-lg-10 mx-auto">
                      <div class="img-box">
                        <img src="images/slider-img.png" alt="">
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="carousel-item">
            <div class="container ">
              <div class="row">
                <div class="col-md-6">
                  <div class="detail-box">
                    <h1>
                      Fast & Reliable <br>
                      College Searching Method
                    </h1>
                    <p>
                      MyCl is a comprehensive online platform designed to assist students in finding their ideal colleges and universities.  </p>
                    <div class="btn-box">
                      <a href="about.php" class="btn-1">
                        Read More
                      </a>
                      <a href="contact.php" class="btn-2">
                        Contact Us
                      </a>
                    </div>
                  </div>
                </div>
                <div class="col-md-6">
                  <div class="row">
                    <div class=" col-lg-10 mx-auto">
                      <div class="img-box">
                        <img src="images/slider-img.png" alt="">
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="carousel_btn-box">
          <a class="carousel-control-prev" href="#customCarousel1" role="button" data-slide="prev">
            <i class="fa fa-angle-left" aria-hidden="true"></i>
            <span class="sr-only">Previous</span>
          </a>
          <a class="carousel-control-next" href="#customCarousel1" role="button" data-slide="next">
            <i class="fa fa-angle-right" aria-hidden="true"></i>
            <span class="sr-only">Next</span>
          </a>
        </div>
      </div>
    </section>
    <!-- end slider section -->
  </div>

  <!-- service section -->

  <section class="service_section layout_padding">
    <div class="container">
      <div class="heading_container heading_center">
        <h2>
          Our Services
        </h2>
      </div>
    </div>
    <div class="container ">
      <div class="row">
        <div class="col-md-6 col-lg-4">
          <div class="box ">
            <div class="img-box">
              <img src="images/s1.png" alt="">
            </div>
            <div class="detail-box">
              <h4>
                College Profiles
              </h4>
              <p style="text-align: center;">
                The website offers detailed profiles for each college, providing essential information such as admission requirements, majors campus facilities, etc.
          
            </div>
          </div>
        </div>
        <div class="col-md-6 col-lg-4">
          <div class="box ">
            <div class="img-box">
              <img src="images/s2.png" alt="">
            </div>
            <div class="detail-box">
              <h4>
                Reviews and Ratings
              </h4>
              <p style="text-align: center;">
                Users can access authentic student reviews and ratings for various colleges, allowing them to gain insights from current or past students' experiences. 
              </p>
            </div>
          </div>
        </div>
        <div class="col-md-6 col-lg-4 ">
          <div class="box ">
            <div class="img-box">
              <img src="images/s3.png" alt="">
            </div>
            <div class="detail-box">
              <h4>
                Bookmarking and Favorites
              </h4>
              <p>
                The website allows users to create accounts and save their favorite colleges to a personalized bookmark list. 
              </p>
            </div>
          </div>
        </div>
        <div class="col-md-6 col-lg-4">
          <div class="box ">
            <div class="img-box">
              <img src="images/s4.png" alt="">
            </div>
            <div class="detail-box">
              <h4>
                College Comparison Tool
              </h4>
              <p>
                The website provides a comparison tool that allows users to select multiple colleges and view a side-by-side comparison of their features, such as acceptance rates, and more.
              </p>
            </div>
          </div>
        </div>
        <div class="col-md-6 col-lg-4">
          <div class="box ">
            <div class="img-box">
              <img src="images/s5.png" alt="">
            </div>
            <div class="detail-box">
              <h4>
                College Rankings and Statistics
              </h4>
              <p>
                The website includes comprehensive rankings and statistics for colleges based on factors like academic reputation, student satisfaction, graduation rates, etc.              </p>
            </div>
          </div>
        </div>
        <div class="col-md-6 col-lg-4">
          <div class="box ">
            <div class="img-box">
              <img src="images/s6.png" alt="">
            </div>
            <div class="detail-box">
              <h4>
                Admissions Interviews
              </h4>
              <p>
                he Admissions Interviews feature offers prospective students the opportunity to engage in one-on-one conversations with admissions representatives as part of the college application process. 
              </p>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>

  <!-- end service section -->

  <!-- about section -->

  <section class="about_section layout_padding-bottom">
    <div class="container  ">
      <div class="row">
        <div class="col-md-6">
          <div class="detail-box">
            <div class="heading_container">
              <h2>
                About Us
              </h2>
            </div>
            <p>
              At myCollege, we've curated a comprehensive database of colleges and universities from around the world. Whether you're looking for a local institution or considering studying abroad, our extensive collection of educational institutions is here to help you explore your options. <a href="about.php">
              Read More
            </a>
          </div>
        </div>
        <div class="col-md-6 ">
          <div class="img-box">
            <img src="images/about-img.png" alt="">
          </div>
        </div>

      </div>
    </div>
  </section>

  <!-- end about section -->

  <!-- client section -->
  <section class="client_section ">
    <div class="container">
      <div class="heading_container heading_center">
        <h2 style="padding: 50px;">
          Feedbacks
        </h2>
        <p>
          View the comments left by our users about our website.
        </p>
      </div>
    </div>
    <div class="container px-0">
      <div id="customCarousel2" class="carousel  slide" data-ride="carousel">
        <div class="carousel-inner">
          <div class="carousel-item active">
            <div class="container">
              <div class="row">
                <div class="col-md-10 mx-auto">
                  <div class="box">
                    <div class="img-box">
                      <img src="images/bill.webp" alt="">
                    </div>
                    <div class="detail-box">
                      <div class="client_info">
                        <div class="client_name">
                          <h5>
                            Bill Gates
                          </h5>
                          <h6>
                            Customer
                          </h6>
                        </div>
                        <i class="fa fa-quote-left" aria-hidden="true"></i>
                      </div>
                      <p>
                        the college comparison tool was incredibly helpful. It allowed me to select multiple colleges and view a side-by-side comparison of their key features, such as acceptance rates and student-faculty ratios. This feature made it much easier for me to make informed decisions and weigh the pros and cons of each college.
                        Overall, I want to express my appreciation for the attractive design and user-friendly functionality of your website. It has made MyCl search experience more enjoyable and efficient. Keep up the great work!
                      </p>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="carousel-item">
            <div class="container">
              <div class="row">
                <div class="col-md-10 mx-auto">
                  <div class="box">
                    <div class="img-box">
                      <img src="images/elon.jpg" alt="">
                    </div>
                    <div class="detail-box">
                      <div class="client_info">
                        <div class="client_name">
                          <h5>
                            Elon Musk
                          </h5>
                          <h6>
                            Customer
                          </h6>
                        </div>
                        <i class="fa fa-quote-left" aria-hidden="true"></i>
                      </div>
                      <p>
                        In terms of functionality, I found the website to be user-friendly and intuitive. The search filters for finding colleges based on criteria such as location and academic programs were straightforward to use, allowing me to quickly narrow down my options. The comprehensive college profiles provided all the necessary information I needed, such as admission requirements, majors offered, and campus facilities, in a clear and concise manner.
                      </p>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="carousel-item">
            <div class="container">
              <div class="row">
                <div class="col-md-10 mx-auto">
                  <div class="box">
                    <div class="img-box">
                      <img src="images/mark.cms" alt="">
                    </div>
                    <div class="detail-box">
                      <div class="client_info">
                        <div class="client_name">
                          <h5>
                            Mark
                          </h5>
                          <h6>
                            Customer
                          </h6>
                        </div>
                        <i class="fa fa-quote-left" aria-hidden="true"></i>
                      </div>
                      <p>
                        As a user, I found the website to be visually appealing and easy to navigate, and I would like to share my thoughts regarding these aspects.

Firstly, I must commend the design of the website. The overall layout and aesthetics are visually appealing, with a pleasing color scheme and well-organized sections. The use of images and graphics enhances the user experience and creates an inviting atmosphere for prospective college students like myself.
                      </p>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="carousel_btn-box">
          <a class="carousel-control-prev" href="#customCarousel2" role="button" data-slide="prev">
            <i class="fa fa-angle-left" aria-hidden="true"></i>
            <span class="sr-only">Previous</span>
          </a>
          <a class="carousel-control-next" href="#customCarousel2" role="button" data-slide="next">
            <i class="fa fa-angle-right" aria-hidden="true"></i>
            <span class="sr-only">Next</span>
          </a>
        </div>
      </div>
    </div>
  </section>
  <!-- end client section -->
                
  <!-- contact section -->
  <section class="contact_section layout_padding-bottom">
    <div class="container">
      <div class="heading_container heading_center">
        <h2>
          Get In Touch
        </h2>
      </div>
      <div class="row">
        <div class="col-md-8 col-lg-6 mx-auto">
          <div class="form_container">
            <form action="backend-php/contact.php" method="post">
              <div>
                <input type="text" placeholder="Your Name" name="name" />
              </div>
              <div>
                <input type="email" placeholder="Your Email" name="email" />
              </div>
              <div>
                <input type="text" placeholder="Your Phone" name="phone"/>
              </div>
              <div>
                <input type="text" class="message-box" placeholder="Message" name="message"/>
              </div>
              <div class="btn_box">
                  <input type="submit" name="contact" class="button">
              </div>
            </form>
          </div>
        </div>
      </div>
    </div>
  </section>
  
 

  <!-- end contact section -->

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
              <a href="https://www.google.com/maps/dir/9.1103466,76.7221076/College+of+Applied+Sciences,+Adoor.+(IHRD+Adoor),+Hospital,+Link+Road,+Parass+La,+Adoor,+Kerala+691523/@9.1323187,76.7099433,14z/data=!3m1!4b1!4m9!4m8!1m1!4e1!1m5!1m1!1s0x3b061187b5f4f8f7:0x9da04f814b628886!2m2!1d76.7308023!2d9.1555193?entry=ttu">
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
                  ssid88607@gmail.com
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
              <a class="active" href="home.php">
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

  <!-- jQery -->
  <script src="js/jquery-3.4.1.min.js"></script>
  <!-- bootstrap js -->
  <script src="js/bootstrap.js"></script>
  <!-- custom js -->
  <script src="js/custom.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.1.0/js/bootstrap.bundle.min.js"></script>



</body>

</html>