<?php
include "../lib/config.php";
include "../lib/koneksi.php";
session_start();
if (!isset($_SESSION['email']) and !isset($_SESSION['password'])) {
  echo "<center>Untuk mengakses modul, Anda harus login dulu <br>";
  echo "<a href=$admin_url><b>LOGIN</b></a></center>";
} else {
?>

  <?php $email = $_SESSION['email']; ?>
  <?php
  $queryAdmin = mysqli_query($koneksi, "SELECT * FROM tb_user WHERE email='$email'");
  $hasilQuery = mysqli_fetch_array($queryAdmin);
  $nama = $hasilQuery['nama'];
  $status = $hasilQuery['status'];

  if ($status == 2) {
    header('location:adminfounder.php?module=home');
  } elseif ($status == 3) {
    header('Location: ../index.php');
  } else {


  ?>


    <!DOCTYPE html>
    <html lang="en">

    <head>
      <!-- Required meta tags -->
      <meta charset="utf-8">
      <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
      <title>Ruangkita-Adm</title>
      <!-- plugins:css -->
      <link rel="stylesheet" href="assets/vendors/iconfonts/mdi/css/materialdesignicons.min.css">
      <link rel="stylesheet" href="assets/vendors/iconfonts/ionicons/css/ionicons.css">
      <link rel="stylesheet" href="assets/vendors/iconfonts/typicons/src/font/typicons.css">
      <link rel="stylesheet" href="assets/vendors/iconfonts/flag-icon-css/css/flag-icon.min.css">
      <link rel="stylesheet" href="assets/vendors/css/vendor.bundle.base.css">
      <link rel="stylesheet" href="assets/vendors/css/vendor.bundle.addons.css">
      <!-- endinject -->
      <!-- plugin css for this page -->
      <!-- End plugin css for this page -->
      <!-- inject:css -->
      <link rel="stylesheet" href="assets/css/shared/style.css">
      <!-- endinject -->
      <!-- Layout styles -->
      <link rel="stylesheet" href="assets/css/demo_1/style.css">
      <!-- End Layout styles -->
      <link rel="shortcut icon" href="assets/images/favicon00.png" />
    </head>

    <body>
      <div class="container-scroller">
        <!-- partial:partials/_navbar.html -->
        <nav class="navbar default-layout col-lg-12 col-12 p-0 fixed-top d-flex flex-row">
          <div class="text-center navbar-brand-wrapper d-flex align-items-top justify-content-center">
            <a class="navbar-brand brand-logo" href="index.html">
              <img src="assets/images/logo_Rk.svg" alt="logo" /> </a>
            <a class="navbar-brand brand-logo-mini" href="index.html">
              <img src="assets/images/logo-mini_Rk.svg" alt="logo" /> </a>
          </div>
          <div class="navbar-menu-wrapper d-flex align-items-center">
            <h3>Admin RuangKita</h3>
            <ul class="navbar-nav ml-auto">
              <li class="nav-item dropdown">
                <a class="nav-link count-indicator" id="messageDropdown" href="#" data-toggle="dropdown" aria-expanded="false">
                  <i class="mdi mdi-bell-outline"></i>
                  <span class="count">7</span>
                </a>
                <div class="dropdown-menu dropdown-menu-right navbar-dropdown preview-list pb-0" aria-labelledby="messageDropdown">
                  <a class="dropdown-item py-3">
                    <p class="mb-0 font-weight-medium float-left">You have 7 unread mails </p>
                    <span class="badge badge-pill badge-primary float-right">View all</span>
                  </a>
                  <div class="dropdown-divider"></div>
                  <a class="dropdown-item preview-item">
                    <div class="preview-thumbnail">
                      <img src="assets/images/faces/face10.jpg" alt="image" class="img-sm profile-pic"> </div>
                    <div class="preview-item-content flex-grow py-2">
                      <p class="preview-subject ellipsis font-weight-medium text-dark">Marian Garner </p>
                      <p class="font-weight-light small-text"> The meeting is cancelled </p>
                    </div>
                  </a>
                  <a class="dropdown-item preview-item">
                    <div class="preview-thumbnail">
                      <img src="assets/images/faces/face12.jpg" alt="image" class="img-sm profile-pic"> </div>
                    <div class="preview-item-content flex-grow py-2">
                      <p class="preview-subject ellipsis font-weight-medium text-dark">David Grey </p>
                      <p class="font-weight-light small-text"> The meeting is cancelled </p>
                    </div>
                  </a>
                  <a class="dropdown-item preview-item">
                    <div class="preview-thumbnail">
                      <img src="assets/images/faces/face1.jpg" alt="image" class="img-sm profile-pic"> </div>
                    <div class="preview-item-content flex-grow py-2">
                      <p class="preview-subject ellipsis font-weight-medium text-dark">Travis Jenkins </p>
                      <p class="font-weight-light small-text"> The meeting is cancelled </p>
                    </div>
                  </a>
                </div>
              </li>
              <li class="nav-item dropdown">
                <a class="nav-link count-indicator" id="notificationDropdown" href="#" data-toggle="dropdown">
                  <i class="mdi mdi-email-outline"></i>
                  <span class="count bg-success">3</span>
                </a>
                <div class="dropdown-menu dropdown-menu-right navbar-dropdown preview-list pb-0" aria-labelledby="notificationDropdown">
                  <a class="dropdown-item py-3 border-bottom">
                    <p class="mb-0 font-weight-medium float-left">You have 4 new notifications </p>
                    <span class="badge badge-pill badge-primary float-right">View all</span>
                  </a>
                  <a class="dropdown-item preview-item py-3">
                    <div class="preview-thumbnail">
                      <i class="mdi mdi-alert m-auto text-primary"></i>
                    </div>
                    <div class="preview-item-content">
                      <h6 class="preview-subject font-weight-normal text-dark mb-1">Application Error</h6>
                      <p class="font-weight-light small-text mb-0"> Just now </p>
                    </div>
                  </a>
                  <a class="dropdown-item preview-item py-3">
                    <div class="preview-thumbnail">
                      <i class="mdi mdi-settings m-auto text-primary"></i>
                    </div>
                    <div class="preview-item-content">
                      <h6 class="preview-subject font-weight-normal text-dark mb-1">Settings</h6>
                      <p class="font-weight-light small-text mb-0"> Private message </p>
                    </div>
                  </a>
                  <a class="dropdown-item preview-item py-3">
                    <div class="preview-thumbnail">
                      <i class="mdi mdi-airballoon m-auto text-primary"></i>
                    </div>
                    <div class="preview-item-content">
                      <h6 class="preview-subject font-weight-normal text-dark mb-1">New user registration</h6>
                      <p class="font-weight-light small-text mb-0"> 2 days ago </p>
                    </div>
                  </a>
                </div>
              </li>
              <li class="nav-item dropdown d-none d-xl-inline-block user-dropdown">
                <a class="nav-link dropdown-toggle" id="UserDropdown" href="#" data-toggle="dropdown" aria-expanded="false">
                  <img class="img-xs rounded-circle" src="assets/images/faces/face00.jpg" alt="Profile image"> </a>
                <div class="dropdown-menu dropdown-menu-right navbar-dropdown" aria-labelledby="UserDropdown">
                  <div class="dropdown-header text-center">
                    <img class="img-md rounded-circle" src="assets/images/faces/face00.jpg" alt="Profile image">
                    <p class="mb-1 mt-3 font-weight-semibold"><?= $nama ?></p>
                    <p class="font-weight-light text-muted mb-0"><?= $email  ?></p>
                  </div>
                  <a class="dropdown-item">My Profile <span class="badge badge-pill badge-danger">1</span><i class="dropdown-item-icon ti-dashboard"></i></a>
                  <a class="dropdown-item">Messages<i class="dropdown-item-icon ti-comment-alt"></i></a>
                  <a class="dropdown-item">Activity<i class="dropdown-item-icon ti-location-arrow"></i></a>
                  <a class="dropdown-item">FAQ<i class="dropdown-item-icon ti-help-alt"></i></a>
                  <a class="dropdown-item" href="logout.php">Sign Out<i class="dropdown-item-icon ti-power-off"></i></a>
                </div>
              </li>
            </ul>
            <button class="navbar-toggler navbar-toggler-right d-lg-none align-self-center" type="button" data-toggle="offcanvas">
              <span class="mdi mdi-menu"></span>
            </button>
          </div>
        </nav>
        <!-- partial -->
        <div class="container-fluid page-body-wrapper">
          <!-- partial:partials/_sidebar.html -->
          <nav class="sidebar sidebar-offcanvas" id="sidebar">
            <ul class="nav">
              <li class="nav-item nav-profile">
                <a href="#" class="nav-link">
                  <div class="profile-image">
                    <img class="img-xs rounded-circle" src="assets/images/faces/face00.jpg" alt="profile image">
                    <div class="dot-indicator bg-success"></div>
                  </div>
                  <div class="text-wrapper">
                    <p class="profile-name"><?= $nama ?></p>
                    <p class="designation">
                      <?php

                      if ($status == 1) {
                        echo "Admin Utama";
                      } elseif ($status == 2) {
                        echo "Founder Ruangan";
                      }

                      ?>
                    </p>
                  </div>
                </a>
              </li>
              <li class="nav-item nav-category">Main Menu</li>
              <li class="nav-item">
                <a class="nav-link" href="adminweb.php?module=home">
                  <i class="menu-icon typcn typcn-document-text"></i>
                  <span class="menu-title">Dashboard</span>
                </a>
                <!-- </li>
            <li class="nav-item">
              <a class="nav-link" href="adminweb.php?module=list_admin">
                <i class="menu-icon typcn typcn-document-text"></i>
                <span class="menu-title">Admin</span>
              </a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="adminweb.php?module=list_founder">
                <i class="menu-icon typcn typcn-document-text"></i>
                <span class="menu-title">Founder</span>
              </a>
            </li> -->
              <li class="nav-item">
                <a class="nav-link" href="adminweb.php?module=list_ruangan_admin">
                  <i class="menu-icon typcn typcn-shopping-bag"></i>
                  <span class="menu-title">Data Ruangan</span>
                </a>
              </li>
              <!-- <li class="nav-item">
              <a class="nav-link" href="adminweb.php?module=list_customer">
                <i class="menu-icon typcn typcn-document-text"></i>
                <span class="menu-title">Customer</span>
              </a>
            </li> -->
              <li class="nav-item">
                <a class="nav-link" href="adminweb.php?module=list_user">
                  <i class="menu-icon typcn typcn-document-text"></i>
                  <span class="menu-title">User</span>
                </a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="adminweb.php?module=list_pesanan">
                  <i class="menu-icon typcn typcn-shopping-bag"></i>
                  <span class="menu-title">Aktivitas</span>
                </a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="adminweb.php?module=list_Testimoni">
                  <i class="menu-icon typcn typcn-th-large-outline"></i>
                  <span class="menu-title">Testimoni</span>
                </a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="#">
                  <i class="menu-icon typcn typcn-bell"></i>
                  <span class="menu-title">Laporan</span>
                </a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="logout.php">
                  <i class="menu-icon typcn typcn-bell"></i>
                  <span class="menu-title">Logout</span>
                </a>
              </li>

              <!--           <li class="nav-item">
              <a class="nav-link" data-toggle="collapse" href="#auth" aria-expanded="false" aria-controls="auth">
                <i class="menu-icon typcn typcn-document-add"></i>
                <span class="menu-title">User Pages</span>
                <i class="menu-arrow"></i>
              </a>
              <div class="collapse" id="auth">
                <ul class="nav flex-column sub-menu">
                  <li class="nav-item active">
                    <a class="nav-link" href="pages/samples/blank-page.html"> Blank Page </a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link" href="pages/samples/login.html"> Login </a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link" href="pages/samples/register.html"> Register </a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link" href="pages/samples/error-404.html"> 404 </a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link" href="pages/samples/error-500.html"> 500 </a>
                  </li>
                </ul>
              </div>
            </li>
   -->
            </ul>
          </nav>


          <?php

          if ($_GET['module'] == 'home') {
            include "module/home/home.php";
          }
          // bagian blank page //
          elseif ($_GET['module'] == 'list_admin') {
            include "module/data_admin/list_admin.php";
          } elseif ($_GET['module'] == 'tambah_admin') {
            include "module/data_admin/tambah_admin.php";
          } elseif ($_GET['module'] == 'form_edit') {
            include "module/data_admin/form_edit.php";
          } elseif ($_GET['module'] == 'list_founder') {
            include "module/data_founder/list_founder.php";
          } elseif ($_GET['module'] == 'list_customer') {
            include "module/data_customer/list_customer.php";
          } elseif ($_GET['module'] == 'list_pesanan') {
            include "module/pesanan_admin/list_pesanan.php";
          }

          // moudule ruangan
          elseif ($_GET['module'] == 'list_ruangan_admin') {
            include "module/data_ruangan/list_ruangan_admin.php";
          } elseif ($_GET['module'] == 'detail_ruangan_admin') {
            include "module/data_ruangan/detail_ruangan_admin.php";
          }
          // module testimoni
          elseif ($_GET['module'] == 'list_Testimoni') {
            include "module/data_testimoni/list_Testimoni.php";
          }

          // module user
          elseif ($_GET['module'] == 'list_user') {
            include "module/data_user/list_user.php";
          } elseif ($_GET['module'] == 'list_user_admin') {
            include "module/data_user/list_user_admin.php";
          } elseif ($_GET['module'] == 'list_user_founder') {
            include "module/data_user/list_user_founder.php";
          } elseif ($_GET['module'] == 'list_user_customer') {
            include "module/data_user/list_user_customer.php";
          } elseif ($_GET['module'] == 'tambah_user') {
            include "module/data_user/tambah_user.php";
          } elseif ($_GET['module'] == 'edit_user') {
            include "module/data_user/form_edit.php";
          }



          // ?? //
          else {
            include "module/home/home.php";
          }


          ?>




          <!-- partial -->
          <footer class="footer">
            <div class="container-fluid clearfix">
              <span class="text-muted d-block text-center text-sm-left d-sm-inline-block">Copyright © 2019 <a href="http://www.bootstrapdash.com/" target="_blank">Bootstrapdash</a>. All rights reserved.</span>
              <span class="float-none float-sm-right d-block mt-1 mt-sm-0 text-center">Hand-crafted & made with <i class="mdi mdi-heart text-danger"></i>
              </span>
            </div>
          </footer>
          <!-- partial -->
        </div>
        <!-- main-panel ends -->
      </div>
      <!-- page-body-wrapper ends -->
      </div>
      <!-- container-scroller -->
      <!-- plugins:js -->
      <script src="assets/vendors/js/vendor.bundle.base.js"></script>
      <script src="assets/vendors/js/vendor.bundle.addons.js"></script>
      <!-- endinject -->
      <!-- Plugin js for this page-->
      <!-- End plugin js for this page-->
      <!-- inject:js -->
      <script src="assets/js/shared/off-canvas.js"></script>
      <script src="assets/js/shared/misc.js"></script>
      <!-- endinject -->
      <!-- Custom js for this page-->
      <script src="assets/js/demo_1/dashboard.js"></script>
      <!-- End custom js for this page-->
    </body>

    </html>

<?php   }
} ?>