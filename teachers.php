<?php
require 'functions/common.php';

session_start();
if(!isset($_SESSION['user_name'])){
    header('Location:signin.php');
    exit;
}

?>
<!DOCTYPE html>
<!-- Designined by CodingLab | www.youtube.com/codinglabyt -->
<html lang="en" dir="ltr">
  <head>
    <meta charset="UTF-8">
    <title> SVCI ComLab An Internet of Things System </title>
    <link rel="stylesheet" href="css/style.dashboard.css">
    <link rel="stylesheet" href="https://unpkg.com/boxicons@2.0.7/css/boxicons.min.css">
     <meta name="viewport" content="width=device-width, initial-scale=1.0">
     <link rel="icon" href="images/svci.icon.png" type="image/x-icon">
    <script src="js/scriptchart.js"></script>

    </head>

<body>
  <div class="sidebar">
    <script src="js/sidebar.js"></script>
    <div class="logo-details">
      <img src="images/svci.png.png" alt="SVCI LOGO">
      <span class="logo_name">Computer Laboratory</span>
    </div>
      <ul class="nav-links">
        <li>
          <a href="index.php" class="dashboard">
            <i class='bx bx-grid-alt' ></i>
            <span class="links_name">Dashboard</span>
          </a>
        </li>
        <li>
          <a href="students.php" data-target="student">
            <i class='bx bx-box' ></i>
            <span class="links_name">Students</span>
          </a>
        </li>
        <li>
          <a href="attendance.php" data-target="attendance">
            <i class='bx bx-list-ul' ></i>
            <span class="links_name">Attendance</span>
          </a>
        </li>
        <li>
          <a>
            <i class='bx bx-border-all'></i>
            <span class="links_name">Teachers</span>
          </a>
        </li>
        <!-- <li>
          <a href="#">
            <i class='bx bx-pie-chart-alt-2' ></i>
            <span class="links_name">Analytics</span>
          </a>
        </li> -->
        <!-- <li>
          <a href="#">
            <i class='bx bx-book-alt' ></i>
            <span class="links_name">Exam</span>
          </a>
        </li> -->
        <!-- <li>
          <a href="#">
            <i class='bx bx-cog' ></i>
            <span class="links_name">Setting</span>
          </a>
        </li> -->
        <li class="log_out">
          <a href="functions/logout.php">
            <i class='bx bx-log-out'></i>
            <span class="links_name">Log out</span>
          </a>
        </li>
      </ul>
  </div>
  <section class="home-section">
    <nav>
      <div class="sidebar-button">
        <i class='bx bx-menu sidebarBtn'></i>
        <span class="dashboard">Teachers</span>
      </div>
      <div class="search-box">
        <input type="text" placeholder="Search...">
        <i class='bx bx-search' ></i>
      </div>
      <div class="profile-details">
        <i class='bx bx-user'></i>
        <span> <?php echo $_SESSION['user_name'] ?></span>
        <i class='bx bx-chevron-down' ></i>
      </div>
    </nav>

    <div class="home-content">
      <div class="overview-boxes">
        <div class="box">
          <div class="right-side">
            <div class="box-topic">We Have</div>
            <div class="number">1000</div>
            <div class="box-topic">CCS Students</div>
            <div class="indicator">
            </div>
          </div>
          <i class='bx bxs-group cart'></i>
        </div>
        <div class="box">
          <div class="right-side">
            <div class="box-topic">We Have</div>
            <div class="number">50</div>
            <div class="box-topic">CCS Teachers</div>
            <div class="indicator">
            </div>
          </div>
          <i class='bx bxs-graduation cart two'></i>
        </div>
        <div class="box">
          <div class="right-side">
            <div class="box-topic">We Have</div>
            <div class="number">10,000</div>
            <div class="box-topic">Computers</div>
            <div class="indicator">
            </div>
          </div>
          <i class='bx bx-server cart three'></i>
        </div>
        <div class="box">
          <div class="right-side">
            <div class="box-topic">Attendance Rate</div>
            <div class="number">99.1%</div>
            <div class="box-topic">State Average</div>
            <div class="indicator">
            </div>
          </div>
          </ul>
          <script src="js/scriptcheckbox.js"></script>
          <script src="js/EducationalStage.js"> </script>
        </div>
      </div>
    </div>
  </section>
  <script src="js/script.dashboard.js"></script>

</body>
</html>
