<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>Dashboard - NiceAdmin Bootstrap Template</title>
  <meta content="" name="description">
  <meta content="" name="keywords">

  <!-- Favicons -->
  <link href="assets/img/favicon.png" rel="icon">
  <link href="assets/img/apple-touch-icon.png" rel="apple-touch-icon">

  <!-- Google Fonts -->
  <link href="https://fonts.gstatic.com" rel="preconnect">
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Nunito:300,300i,400,400i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">

  <!-- Vendor CSS Files -->
  <link href="{{asset('assets/vendor/bootstrap/css/bootstrap.min.css')}}" rel="stylesheet">
  <link href="{{asset('assets/vendor/bootstrap-icons/bootstrap-icons.css')}}" rel="stylesheet">
  <link href="{{asset('assets/vendor/boxicons/css/boxicons.min.css')}}" rel="stylesheet">
  <link href="{{asset('assets/vendor/quill/quill.snow.css')}}" rel="stylesheet">
  <link href="{{asset('assets/vendor/quill/quill.bubble.css')}}" rel="stylesheet">
  <link href="{{asset('assets/vendor/remixicon/remixicon.css')}}" rel="stylesheet">
  <link href="{{asset('assets/vendor/simple-datatables/style.css')}}" rel="stylesheet">

  <!-- Template Main CSS File -->
  <link href="{{asset('assets/css/style.css')}}" rel="stylesheet">

  <!-- =======================================================
  * Template Name: NiceAdmin
  * Template URL: https://bootstrapmade.com/nice-admin-bootstrap-admin-html-template/
  * Updated: Apr 20 2024 with Bootstrap v5.3.3
  * Author: BootstrapMade.com
  * License: https://bootstrapmade.com/license/
  ======================================================== -->

  
<style>
 /* ======= Header ======= */
.header {
    background-color: black;
    color: white;
    border-bottom: 2px solid #F5C300; /* Dark yellow */
    box-shadow: 0 2px 4px rgba(0, 0, 0, 0.2);
}

.header .logo {
    display: flex;
    align-items: center;
    padding: 0 20px;
}

.header .logo img {
    height: 40px;
}

.header .logo span {
    color: #F5C300; /* Dark yellow */
    font-weight: bold;
    margin-left: 10px;
}

.header .search-bar {
    margin: 0 20px;
}

.header .search-bar input[type="text"] {
    background-color: white;
    border: 1px solid #F5C300; /* Dark yellow */
    border-radius: 20px;
    padding: 5px 15px;
    color: black;
    font-size: 14px;
}

.header .search-bar button {
    background-color: #F5C300; /* Dark yellow */
    border: none;
    color: black;
    border-radius: 20px;
    padding: 5px 15px;
    margin-left: 5px;
    cursor: pointer;
}

.header .search-bar button:hover {
    background-color: #F0B800; /* Slightly darker yellow */
}

/* ======= Notifications and Messages ======= */
.header .nav-icon {
    color: #F5C300; /* Dark yellow */
    font-size: 20px;
}

.header .dropdown-menu {
    background-color: black;
    color: white;
    border: 1px solid #F5C300; /* Dark yellow */
    border-radius: 5px;
    min-width: 300px;
    padding: 10px;
}

.header .dropdown-menu a {
    color: white;
}

.header .dropdown-menu a:hover {
    background-color: #F5C300; /* Dark yellow */
    color: black;
}

/* ======= Sidebar ======= */
.sidebar {
    background-color: black;
    color: white;
    width: 250px;
    min-height: 100vh;
    box-shadow: 2px 0 4px rgba(0, 0, 0, 0.2);
    overflow: auto;
}

.sidebar .nav-item {
    position: relative;
}

.sidebar .nav-link {
    display: flex;
    align-items: center;
    color: white;
    padding: 15px 20px;
    border-radius: 5px;
    transition: background-color 0.3s, color 0.3s;
}

.sidebar .nav-link:hover,
.sidebar .nav-link.active {
    background-color: #F5C300; /* Dark yellow */
    color: black;
}

.sidebar .nav-link i {
    font-size: 18px;
    margin-right: 10px;
}

.sidebar .nav-content {
    padding: 0;
}

.sidebar .nav-content a {
    color: white;
    padding: 10px 20px;
    display: flex;
    align-items: center;
    font-size: 14px;
    border-radius: 5px;
    transition: background-color 0.3s, color 0.3s;
}

.sidebar .nav-content a:hover {
    background-color: rgba(255, 255, 255, 0.1);
}

.sidebar .nav-content .bi-circle {
    font-size: 12px;
    margin-right: 10px;
}

/* ======= Main ======= */
.main {
    margin-left: 250px;
    padding: 20px;
    transition: margin-left 0.3s;
}

.main .pagetitle {
    display: flex;
    justify-content: space-between;
    align-items: center;
}

.main .pagetitle h1 {
    margin: 0;
    font-size: 24px;
}

.main .breadcrumb {
    margin: 0;
}

.main .breadcrumb-item a {
    color: #F5C300; /* Dark yellow */
}

.main .breadcrumb-item.active {
    color: white;
}

/* ======= Cards ======= */
.card {
    background-color: #2c2c2c; /* Darker background for cards */
    border: none;
    border-radius: 8px;
    box-shadow: 0 4px 8px rgb(255, 255, 255);
    margin-bottom: 20px;
    overflow: hidden;
}

.card-body {
    padding: 20px;
}

.card-title {
    color: #F5C300; /* Dark yellow */
    font-size: 18px;
    margin-bottom: 15px;
}

.card-icon {
    background-color: #F5C300; /* Dark yellow */
    color: black;
    height: 50px;
    width: 50px;
    border-radius: 50%;
    display: flex;
    align-items: center;
    justify-content: center;
}

.card-info {
    font-size: 20px;
    font-weight: bold;
}

.card-body h6 {
    font-size: 22px;
}

.card .filter {
    position: absolute;
    top: 15px;
    right: 15px;
}

/* ======= Dropdowns ======= */
.dropdown-menu {
    background-color: black;
    color: white;
    border: 1px solid #F5C300; /* Dark yellow */
    border-radius: 5px;
}

.dropdown-menu .dropdown-item {
    color: white;
}

.dropdown-menu .dropdown-item:hover {
    background-color: #F5C300; /* Dark yellow */
    color: black;
}

/* ======= Charts ======= */
#reportsChart {
    width: 100%;
    height: 350px;
}

/* ======= Responsive Adjustments ======= */
@media (max-width: 768px) {
    .main {
        margin-left: 0;
    }
}

/* General Styles */
body {
    background-color: rgb(0, 0, 0); /* Dark background for the entire page */
    color: white; /* White text color for readability */
}

.card {
    background-color: #ffffff; /* Darker background for cards */
    border: none; /* Remove card borders */
    border-radius: 8px; /* Rounded corners */
    box-shadow: 0 4px 8px rgba(0, 0, 0, 0.2); /* Soft shadow */
    color: white; /* White text color in cards */
}

.card-title {
    color: #F5C300; /* Dark yellow color for card titles */
}

.card-icon {
    background-color: #F5C300; /* Dark yellow background for icons */
    color: black; /* Black icon color */
}

.table thead th {
    background-color: #333; /* Dark header background */
    color: #F5C300; /* Dark yellow header text */
}

.table tbody tr:nth-child(even) {
    background-color: #ffffff; /* Slightly darker rows for readability */
}

.table tbody tr:hover {
    background-color: #444; /* Highlight row on hover */
}

.badge {
    border-radius: 20px; /* Rounded badges */
    padding: 0.5em 1em; /* Padding for badges */
}

.badge.bg-success {
    background-color: #27ae60; /* Green for success */
}

.badge.bg-warning {
    background-color: #F5C300; /* Dark yellow for warning */
}

.badge.bg-danger {
    background-color: #e74c3c; /* Red for danger */
}

.badge.bg-info {
    background-color: #3498db; /* Blue for info */
}

.filter .dropdown-menu {
    background-color: #2c2c2c; /* Dark background for dropdowns */
    color: white; /* White text color */
}

.filter .dropdown-item {
    color: white; /* White text color for dropdown items */
}

.filter .dropdown-item:hover {
    background-color: #444; /* Darker background on hover */
}

.activity-item {
    border-bottom: 1px solid #333; /* Border between activity items */
}

.activity-badge {
    background-color: #F5C300; /* Dark yellow for activity badges */
}

.echart {
    background-color: #ffffff; /* Dark background for charts */
   
}



</style>
</head>

<body>

  <!-- ======= Header ======= -->
  <header id="header" class="header fixed-top d-flex align-items-center">

    <div class="d-flex align-items-center justify-content-between">
      <a href="/index" class="logo d-flex align-items-center">
        
        <span class="d-none d-lg-block" style="color: white;">Pets Heaven</span>
      </a>
      <i class="bi bi-list toggle-sidebar-btn"></i>
    </div><!-- End Logo -->

    <div class="search-bar">
      <form class="search-form d-flex align-items-center" method="POST" action="#">
        <input type="text" name="query" placeholder="Search" title="Enter search keyword">
        <button type="submit" title="Search"><i class="bi bi-search"></i></button>
      </form>
    </div><!-- End Search Bar -->

    <nav class="header-nav ms-auto">
      <ul class="d-flex align-items-center">

        <li class="nav-item d-block d-lg-none">
          <a class="nav-link nav-icon search-bar-toggle " href="#">
            <i class="bi bi-search"></i>
          </a>
        </li><!-- End Search Icon-->

        <li class="nav-item dropdown">

          <a class="nav-link nav-icon" href="#" data-bs-toggle="dropdown">
            <i class="bi bi-bell"></i>
            <span class="badge bg-primary badge-number">4</span>
          </a><!-- End Notification Icon -->

          <ul class="dropdown-menu dropdown-menu-end dropdown-menu-arrow notifications">
            <li class="dropdown-header">
              You have 4 new notifications
              <a href="#"><span class="badge rounded-pill bg-primary p-2 ms-2">View all</span></a>
            </li>
            <li>
              <hr class="dropdown-divider">
            </li>

            <li class="notification-item">
              <i class="bi bi-exclamation-circle text-warning"></i>
              <div>
                <h4>Lorem Ipsum</h4>
                <p>Quae dolorem earum veritatis oditseno</p>
                <p>30 min. ago</p>
              </div>
            </li>

            <li>
              <hr class="dropdown-divider">
            </li>

            <li class="notification-item">
              <i class="bi bi-x-circle text-danger"></i>
              <div>
                <h4>Atque rerum nesciunt</h4>
                <p>Quae dolorem earum veritatis oditseno</p>
                <p>1 hr. ago</p>
              </div>
            </li>

            <li>
              <hr class="dropdown-divider">
            </li>

            <li class="notification-item">
              <i class="bi bi-check-circle text-success"></i>
              <div>
                <h4>Sit rerum fuga</h4>
                <p>Quae dolorem earum veritatis oditseno</p>
                <p>2 hrs. ago</p>
              </div>
            </li>

            <li>
              <hr class="dropdown-divider">
            </li>

            <li class="notification-item">
              <i class="bi bi-info-circle text-primary"></i>
              <div>
                <h4>Dicta reprehenderit</h4>
                <p>Quae dolorem earum veritatis oditseno</p>
                <p>4 hrs. ago</p>
              </div>
            </li>

            <li>
              <hr class="dropdown-divider">
            </li>
            <li class="dropdown-footer">
              <a href="#">Show all notifications</a>
            </li>

          </ul><!-- End Notification Dropdown Items -->

        </li><!-- End Notification Nav -->

        <li class="nav-item dropdown">

          <a class="nav-link nav-icon" href="#" data-bs-toggle="dropdown">
            <i class="bi bi-chat-left-text"></i>
            <span class="badge bg-success badge-number">3</span>
          </a><!-- End Messages Icon -->

          <ul class="dropdown-menu dropdown-menu-end dropdown-menu-arrow messages">
            <li class="dropdown-header">
              You have 3 new messages
              <a href="#"><span class="badge rounded-pill bg-primary p-2 ms-2">View all</span></a>
            </li>
            <li>
              <hr class="dropdown-divider">
            </li>

            <li class="message-item">
              <a href="#">
                <img src="assets/img/messages-1.jpg" alt="" class="rounded-circle">
                <div>
                  <h4>Maria Hudson</h4>
                  <p>Velit asperiores et ducimus soluta repudiandae labore officia est ut...</p>
                  <p>4 hrs. ago</p>
                </div>
              </a>
            </li>
            <li>
              <hr class="dropdown-divider">
            </li>

            <li class="message-item">
              <a href="#">
                <img src="assets/img/messages-2.jpg" alt="" class="rounded-circle">
                <div>
                  <h4>Anna Nelson</h4>
                  <p>Velit asperiores et ducimus soluta repudiandae labore officia est ut...</p>
                  <p>6 hrs. ago</p>
                </div>
              </a>
            </li>
            <li>
              <hr class="dropdown-divider">
            </li>

            <li class="message-item">
              <a href="#">
                <img src="assets/img/messages-3.jpg" alt="" class="rounded-circle">
                <div>
                  <h4>David Muldon</h4>
                  <p>Velit asperiores et ducimus soluta repudiandae labore officia est ut...</p>
                  <p>8 hrs. ago</p>
                </div>
              </a>
            </li>
            <li>
              <hr class="dropdown-divider">
            </li>

            <li class="dropdown-footer">
              <a href="#">Show all messages</a>
            </li>

          </ul><!-- End Messages Dropdown Items -->

        </li><!-- End Messages Nav -->

        <li class="nav-item dropdown pe-3">

          <a class="nav-link nav-profile d-flex align-items-center pe-0" href="#" data-bs-toggle="dropdown">
            <img src="assets/img/profile-img.jpg" alt="Profile" class="rounded-circle">
            <span class="d-none d-md-block dropdown-toggle ps-2">K. Anderson</span>
          </a><!-- End Profile Iamge Icon -->

          <ul class="dropdown-menu dropdown-menu-end dropdown-menu-arrow profile">
            <li class="dropdown-header">
              <h6>Kevin Anderson</h6>
              <span>Web Designer</span>
            </li>
            <li>
              <hr class="dropdown-divider">
            </li>

            <li>
              <a class="dropdown-item d-flex align-items-center" href="users-profile.html">
                <i class="bi bi-person"></i>
                <span>My Profile</span>
              </a>
            </li>
            <li>
              <hr class="dropdown-divider">
            </li>

            <li>
              <a class="dropdown-item d-flex align-items-center" href="users-profile.html">
                <i class="bi bi-gear"></i>
                <span>Account Settings</span>
              </a>
            </li>
            <li>
              <hr class="dropdown-divider">
            </li>

            <li>
              <a class="dropdown-item d-flex align-items-center" href="pages-faq.html">
                <i class="bi bi-question-circle"></i>
                <span>Need Help?</span>
              </a>
            </li>
            <li>
              <hr class="dropdown-divider">
            </li>

            <li>
              <a class="dropdown-item d-flex align-items-center" href="#">
                <i class="bi bi-box-arrow-right"></i>
                <span>Sign Out</span>
              </a>
            </li>

          </ul><!-- End Profile Dropdown Items -->
        </li><!-- End Profile Nav -->

      </ul>
    </nav><!-- End Icons Navigation -->

  </header><!-- End Header -->

  <!-- ======= Sidebar ======= -->
  <aside id="sidebar" class="sidebar">

    <ul class="sidebar-nav" id="sidebar-nav">

      <li class="nav-item">
        <a class="nav-link " href="index.html">
          <i class="bi bi-grid"></i>
          <span>Dashboard</span>
        </a>
      </li><!-- End Dashboard Nav -->

      

      <li class="nav-heading">Pages</li>

      <li class="nav-item">
        <a class="nav-link collapsed" href="users-profile.html">
          <i class="bi bi-person"></i>
          <span>Profile</span>
        </a>
      </li><!-- End Profile Page Nav -->

      <li class="nav-item">
        <a class="nav-link collapsed" href="/adoptpetdata">
          <i class="bi bi-question-circle"></i>
          <span>Adoptpet data</span>
        </a>
      </li><!-- End F.A.Q Page Nav -->

      <li class="nav-item">
        <a class="nav-link collapsed" href="/fetchcontact">
          <i class="bi bi-envelope"></i>
          <span>Contact</span>
        </a>
      </li><!-- End Contact Page Nav -->

      <li class="nav-item">
        <a class="nav-link collapsed" href="/donation">
          <i class="bi bi-card-list"></i>
          <span>Donations</span>
        </a>
      </li><!-- End Register Page Nav -->
    </ul>
    

  </aside><!-- End Sidebar-->
 
  @yield('content');

   <!-- ======= Footer ======= -->
   <footer id="footer" class="footer">
    <div class="copyright">
      &copy; Copyright <strong><span>NiceAdmin</span></strong>. All Rights Reserved
    </div>
    <div class="credits">
      <!-- All the links in the footer should remain intact. -->
      <!-- You can delete the links only if you purchased the pro version. -->
      <!-- Licensing information: https://bootstrapmade.com/license/ -->
      <!-- Purchase the pro version with working PHP/AJAX contact form: https://bootstrapmade.com/nice-admin-bootstrap-admin-html-template/ -->
      Designed by <a href="https://bootstrapmade.com/">BootstrapMade</a>
    </div>
  </footer><!-- End Footer -->

  <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

  <!-- Vendor JS Files -->
  <script src="assets/vendor/apexcharts/apexcharts.min.js"></script>
  <script src="assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="assets/vendor/chart.js/chart.umd.js"></script>
  <script src="assets/vendor/echarts/echarts.min.js"></script>
  <script src="assets/vendor/quill/quill.js"></script>
  <script src="assets/vendor/simple-datatables/simple-datatables.js"></script>
  <script src="assets/vendor/tinymce/tinymce.min.js"></script>
  <script src="assets/vendor/php-email-form/validate.js"></script>

  <!-- Template Main JS File -->
  <script src="assets/js/main.js"></script>

</body>

</html>