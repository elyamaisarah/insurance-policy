<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>Dashboard - NiceAdmin Bootstrap Template</title>
  <meta content="" name="description">
  <meta content="" name="keywords">

  <!-- Favicons -->
  <link href="../assets/img/favicon.png" rel="icon">
  <link href="../assets/img/apple-touch-icon.png" rel="apple-touch-icon">

  <!-- Google Fonts -->
  <link href="https://fonts.gstatic.com" rel="preconnect">
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Nunito:300,300i,400,400i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">

  <!-- Vendor CSS Files -->
  <link href="../assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="../assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
  <link href="../assets/vendor/boxicons/css/boxicons.min.css" rel="stylesheet">
  <link href="../assets/vendor/quill/quill.snow.css" rel="stylesheet">
  <link href="../assets/vendor/quill/quill.bubble.css" rel="stylesheet">
  <link href="../assets/vendor/remixicon/remixicon.css" rel="stylesheet">
  <link href="../assets/vendor/simple-datatables/style.css" rel="stylesheet">

  <!-- Template Main CSS File -->
  <link href="../assets/css/style.css" rel="stylesheet">

  <!-- =======================================================
  * Template Name: NiceAdmin - v2.3.1
  * Template URL: https://bootstrapmade.com/nice-admin-bootstrap-admin-html-template/
  * Author: BootstrapMade.com
  * License: https://bootstrapmade.com/license/
  ======================================================== -->
</head>

<body>
  <!-- ======= Header ======= -->
  <?php 
    include(__DIR__ . '/include/header.php');
  ?>  <!-- End Header -->

<?php
    Session::CheckSession();
      if ($_SERVER['REQUEST_METHOD'] == 'POST' && isset($_POST['addUser'])) {

        $userAdd = $controllers->addNewUserByAdmin($_POST);
      }

      if (isset($_GET['deactive'])) {
        $deactive = preg_replace('/[^a-zA-Z0-9-]/', '', (int)$_GET['deactive']);
        $deactiveId = $controllers->userDeactiveByAdmin($deactive);
      }

      if (isset($_GET['active'])) {
        $active = preg_replace('/[^a-zA-Z0-9-]/', '', (int)$_GET['active']);
        $activeId = $controllers->userActiveByAdmin($active);
      }

  ?>
  <!-- ======= Sidebar ======= -->
  <?php 
    include(__DIR__ . '/include/sidebar.php');
  ?>
  <!-- End Sidebar-->



  <main id="main" class="main">
    <div class="pagetitle">
      <h1>Manage Admin</h1>
      <nav>
        <ol class="breadcrumb">
          <li class="breadcrumb-item"><a href="index.php">Home</a></li>
          <li class="breadcrumb-item active">Admin</li>
        </ol>
      </nav>
    </div><!-- End Page Title -->
    <?php
        if (isset($userAdd)) {
            echo $userAdd;
          }

          if (isset($msg)) {
            echo $msg;
          }
        ?>
    <section class="section dashboard">
      <div class="row">

        <!-- Left side columns -->
        <div class="col-lg-12">
          <div class="row">

            <!-- Recent Sales -->
            <div class="col-12">
              <div class="card recent-sales overflow-auto">
                <div class="card-body">
                  <h5 class="card-title">Admin List</span></h5>
                  <div class="filter" style="padding-right: 20px;">
                        <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#verticalycentered">
                            <i class="bi bi-plus"></i> Add Admin
                        </button>
                    </div>
                  <table class="table table-borderless datatable">
                    <thead>
                      <tr>
                        <th scope="col">#</th>
                        <th scope="col">Name</th>
                        <th scope="col">Email</th>
                        <th scope="col" class="text-center">Status</th>
                        <th scope="col" class="text-center">Action</th>
                      </tr>
                    </thead>
                    <tbody>
        <?php
              $allUser = $controllers->selectAllUserData();

              if ($allUser) 
              {
                $i = 0;
                foreach ($allUser as  $user) 
                {
                  $i++;?>

                      <tr>
                        <th width="1%" scope="row"><a href="#">#<?php echo $i; ?></a></th>
                        <td width="25%"><?php echo $user->name; ?></td>
                        <td width="25%"><?php echo $user->email; ?></td>
                        <?php if($user->status == 0){?>
                        <td width="10%" class="text-center"> <span class="badge bg-success badge-number"> Active</span></td>
                        <?php }else{?>
                          <td width="10%" class="text-center"> <span class="badge bg-danger badge-number">Suspended</span></td>
                        <?php }?>

                        <?php if($user->status == 0){?>
                          <td width="12%" class="text-center"><a href="?deactive=<?php echo $user->id;?>" class="btn btn-danger btn-sm" onclick="return confirm('Are you sure To Suspend ?')">Suspend</a></td>
                        <?php }else{?>
                          <td width="12%" class="text-center"><a href="?active=<?php echo $user->id;?>" class="btn btn-success btn-sm" onclick="return confirm('Are you sure To Active ?')">Active</a></td>
                        <?php }?>
                        <?php 
                  }
              }
              else
              { ?>
                      <tr class="text-center">
                      <td>No user availabe now !</td>
                    </tr>
                    <?php } ?>

                      </tbody>
                  </table>

                </div>

              </div>
            </div><!-- End Recent Sales -->

          </div>
        </div><!-- End Left side columns -->

      </div>
    </section>
    <div class="modal fade" id="verticalycentered" tabindex="-1">
            <div class="modal-dialog modal-dialog-centered">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title">Add New Admin</h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <form method="post">
                    <div class="modal-body">
                        <div class="col-lg-12">

                            <!-- General Form Elements -->
                           
                                <div class="row mb-3">
                                    <label for="inputText" class="col-sm-3 col-form-label">Name</label>
                                    <div class="col-sm-9">
                                        <input type="text" name="name" class="form-control">
                                    </div>
                                </div>
                                <div class="row mb-3">
                                    <label for="inputEmail" class="col-sm-3 col-form-label">Email</label>
                                    <div class="col-sm-9">
                                        <input type="email" name="email" class="form-control">
                                    </div>
                                </div>
                                <div class="row mb-3">
                                    <label for="inputEmail" class="col-sm-3 col-form-label">Password</label>
                                    <div class="col-sm-9">
                                        <input type="password" name="password" class="form-control">
                                    </div>
                                </div>

                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                            <button type="submit" name="addUser" class="btn btn-primary">Register</button>
                        </div>
                        </form>
                    </div>
                </div>
            </div><!-- End Vertically centered Modal-->
            <div class="text-center">
                <span class="text-center small pt-4 ps-6 ">
                    “Join our FREE seminar and let the experts tell you the truth about your insurance policy“
                </span>
            </div>



        </div>

  </main><!-- End #main -->

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
  
  <script src="../assets/vendor/apexcharts/apexcharts.min.js"></script>
  <script src="../assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="../assets/vendor/chart.js/chart.min.js"></script>
  <script src="../assets/vendor/echarts/echarts.min.js"></script>
  <script src="../assets/vendor/quill/quill.min.js"></script>
  <script src="../assets/vendor/simple-datatables/simple-datatables.js"></script>
  <script src="../assets/vendor/tinymce/tinymce.min.js"></script>
  <script src="../assets/vendor/php-email-form/validate.js"></script>

  <!-- Template Main JS File -->
  <script src="../assets/js/main.js"></script>
  <script src="../assets/js/jquery.min.js"></script>
  <script>
      $(document).ready(function () {
          $("#flash-msg").delay(7000).fadeOut("slow");
      });
    
  </script>
</body>

</html>