<!DOCTYPE html>
<html>

<head>
  <!-- Basic -->
  <meta charset="utf-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <!-- Mobile Metas -->
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
  <!-- Site Metas -->
  <link rel="icon" href="../images/note.png">
  <meta name="keywords" content="" />
  <meta name="description" content="" />
  <meta name="author" content="" />

  <title>MyCl | Feedback</title>


  <!-- bootstrap core css -->
  <link rel="stylesheet" type="text/css" href="../css/bootstrap.css" />

  <!-- fonts style -->
  <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;500;700;900&display=swap" rel="stylesheet">

  <!-- font awesome style -->
  <link href="../css/font-awesome.min.css" rel="stylesheet" />

  <!-- Custom styles for this template -->
  <link href="../css/style.css" rel="stylesheet" />
  <!-- responsive style -->
  <link href="../css/responsive.css" rel="stylesheet" />


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
    .custom-form {
            max-width: 400px;
            margin: 0 auto;
            padding: 20px;
        }
        .custom-form label {
            font-weight: bold;
        }
        .feedback-list {
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
  </style>
</head>

<body class="sub_page">

  <div class="hero_area">
    <!-- header section strats -->
    <header class="header_section">
      <div class="container-fluid">
        <nav class="navbar navbar-expand-lg custom_nav-container ">
          <a class="navbar-brand" href="home.php">
            <h4 style="font-size: x-large; cursor: pointer; color: white;">
              my
              <span style="font-size: x-large;">c</span>
              I
            </h4>
          </a>
          <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span> </span>
          </button>

          <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav  ml-auto">
              <li class="nav-item ">
                <a class="nav-link" href="home.php">Home <span class="sr-only">(current)</span></a>
              </li>
              <li class="nav-item active">
                <a class="nav-link" href="about.php"> About</a>
              </li>
              <li class="nav-item dropdown">
              <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    Login/SignUp </a>
                <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                <?php 
                  if (isset($_COOKIE['username'])) {
                    $user_id = $_COOKIE['username'];
                    echo '<a class="dropdown-item" href="../admin/admin-dashboard.php">Admin Dashboard</a>';
                  } else {
                    echo '<a class="dropdown-item" href="../admin/admin-login.php">Admin</a>';
                  }
                  ?>
                  <?php 
                  if (isset($_COOKIE['id'])) {
                    $user_id = $_COOKIE['id'];
                    echo '<a class="dropdown-item" href="../students/student-dashboard.php">Student Dashboard</a>';
                  } else {
                    echo '<a class="dropdown-item" href="../students/student-register.php">Student</a>';
                  }
                  ?>
                  <?php 
                  if (isset($_COOKIE['cid'])) {
                      echo '<a class="dropdown-item" href="../college/college-dashboard.php">College Dashboard</a>';
                  } else {
                    echo '<a class="dropdown-item" href="../college/college-register.php">College</a>';
                  }  
                  ?>
                </div>
              </li>
            </ul>
            <div class="quote_btn-container">
              <!-- Place any other content here -->
            </div>
          </div>
        </nav>
      </div>
    </header>
    <!-- end header section -->
  </div>

<?php 

    include('../backend-php/connect.php');
    include('../backend-php/feedback.php');
    
    ?>
  <div class="container">
        <div class="custom-form">
            <h1 style="text-align: center; padding: 25px;">Feedbacks</h1>
            <p>Post your feedbacks about the website and the colleges.</p>
            <form method="post" action="backend-php/feedback.php">
                <!-- Name input -->
                <div class="form-group">
                    <label for="form4Example1">Name</label>
                    <input type="text" id="form4Example1" class="form-control" name="name"/>
                </div>

                <!-- Email input -->
                <div class="form-group">
                    <label for="form4Example2">Email address</label>
                    <input type="email" id="form4Example2" class="form-control" name="email"/>
                </div>

                <!-- Message input -->
                <div class="form-group">
                    <label for="form4Example3">Message</label>
                    <textarea class="form-control" id="form4Example3" rows="4" name="message"></textarea>
                </div>

                <!-- Submit button -->
                <button type="submit" class="btn btn-primary btn-block">Send</button>
            </form>
        </div>
    </div>

    <?php 

        $sql = "SELECT * FROM feedbacks";
        $result = $conn->query($sql);

        if ($result->num_rows > 0) {
            echo '<div class="feedback-list">';
        }

        while ($row = $result->fetch_assoc()) {
            echo '<div class="feedback-card">';
            echo '<h3>' . $row["name"] . '</h3>';
            echo '<p>Email: ' . $row["email"] . '</p>';
            echo '<p>Message: ' . $row["message"] . '</p>';
            echo '</div>';
        }
        echo '</div>';
        $conn->close();
    ?>
  

  <!-- footer section -->

  <!-- jQery -->
  <script src="../js/jquery-3.4.1.min.js"></script>
  <!-- bootstrap js -->
  <script src="../js/bootstrap.js"></script>
  <!-- custom js -->
  <script src="../js/custom.js"></script>


</body>

</html>