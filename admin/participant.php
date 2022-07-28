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
    if (isset($_GET['id'])) {
      $seminarid = preg_replace('/[^a-zA-Z0-9-]/', '', (int)$_GET['id']);
    }

    //add participant
    if ($_SERVER['REQUEST_METHOD'] == 'POST' && isset($_POST['addParticipant'])) {

      $userAdd = $controllers->addNewParticipant($seminarid,$_POST);
    }

  ?>  <!-- End Header -->

  <!-- ======= Sidebar ======= -->
  <?php 
    include(__DIR__ . '/include/sidebar.php');
  ?>
  <!-- End Sidebar-->

  <main id="main" class="main">

    <div class="pagetitle">
      <h1>Seminar</h1>
      <nav>
        <ol class="breadcrumb">
          <li class="breadcrumb-item"><a href="index.php">Home</a></li>
          <li class="breadcrumb-item active">Seminar</li>
        </ol>
      </nav>
    </div><!-- End Page Title -->
    <section class="section dashboard">
            <div class="row">
            <?php
    $seminar = $controllers->getSeminarInfoById($seminarid);
    ?>
                <!-- Left side columns -->
                <div class="col-lg-12">
                    <div class="row">
                        <section class="section">
                            <div class="row">
                                <div class="col-lg-12">
                                    <div class="card">
                                        <div class="card-body">
                                            <h5 class="card-title">Seminar Application</h5>
                                            <div class="filter" style="padding-right: 20px;">
                                                <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#verticalycentered">
                                                    <i class="bi bi-plus"></i> Add Participant
                                                </button>
                                            </div>
                                            <?php $msg = Session::get('msg');
                                                    if (isset($msg)) {
                                                        echo $msg;
                                                    }
                                                    if (isset($userAdd)) {
                                                        echo $userAdd;
                                                      }
                                            ?>

                                            <!-- General Form Elements -->
                                            <form method="POST" enctype="multipart/form-data">
                                                <div class="row mb-3">
                                                    <label for="inputText" class="col-sm-2 col-form-label">Topic</label>
                                                    <div class="col-sm-10">
                                                        <input type="text" name="topic" class="form-control" value="<?php echo $seminar->topic;?>" readonly>
                                                    </div>
                                                </div>
                                                <div class="row mb-3">
                                                    <label for="inputDate" class="col-sm-2 col-form-label">Date</label>
                                                    <div class="col-sm-4">
                                                        <input type="date" name="date" class="form-control" value="<?php echo $seminar->date;?>" readonly>
                                                    </div>
                                                    <label for="inputTime" class="col-sm-1 col-form-label">Time</label>
                                                    <div class="col-sm-5">
                                                        <input type="time" name="time" class="form-control" value="<?php echo $seminar->time;?>" readonly>
                                                    </div>
                                                </div>
                                                <div class="row mb-3">
                                                    <label for="inputText" class="col-sm-2 col-form-label">Venue</label>
                                                    <div class="col-sm-10">
                                                        <input type="text" name="venue" class="form-control" value="<?php echo $seminar->venue;?>" readonly>
                                                    </div>
                                                </div>
                                                <div class="row mb-3">
                                                    <label for="inputNumber" class="col-sm-2 col-form-label">Banner</label>
                                                    <div class="col-sm-10">
                                                      <img src="/banner/<?php echo $seminar->banner; ?>" width="200">
                                                    </div>
                                                </div>

                                            </form><!-- End General Form Elements -->

                                        </div>
                                    </div>

                                </div>
                            </div>

                    </div>
                </div>
        </section>
    <section class="section dashboard">
      <div class="row">

        <!-- Left side columns -->
        <div class="col-lg-12">
          <div class="row">

            <!-- Recent Sales -->
            <div class="col-12">
              <div class="card recent-sales overflow-auto">
                <div class="card-body">
                  <h5 class="card-title">Participant List</span></h5>
                  <table class="table table-borderless datatable">
                    <thead>
                      <tr>
                        <th scope="col">#</th>
                        <th scope="col">Name</th>
                        <th scope="col">Email</th>
                        <th scope="col">Job</th>
                      </tr>
                    </thead>
                    <tbody>
                    <?php
              $allParticipants = $controllers->selectAllParticipant($seminarid);

              if ($allParticipants) 
              {
                $i = 0;
                foreach ($allParticipants as  $participant) 
                {
                  $i++;?>
                      <tr>
                        <th width="1%" scope="row"><a href="#">#<?php echo $participant->id; ?></a></th>
                        <td width="25%"><?php echo $participant->name; ?></td>
                        <td width="25%"><?php echo $participant->email; ?></td>
                        <td width="25%"><?php echo $participant->job; ?></td>
                   
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
                        <h5 class="modal-title">Vertically Centered</h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <form method="POST">
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
                                        <label for="inputText" class="col-sm-3 col-form-label">Occupation</label>
                                        <div class="col-sm-9">
                                            <input type="text" name="job" class="form-control">
                                        </div>
                                    </div>
                                    <div class="row mb-3">
                                        <label for="inputText" class="col-sm-3 col-form-label">Contact No.</label>
                                        <div class="col-sm-9">
                                            <input type="text" name="phone" class="form-control">
                                        </div>
                                    </div>
                                    <div class="row mb-3">
                                        <label for="inputEmail" class="col-sm-3 col-form-label">Email</label>
                                        <div class="col-sm-9">
                                            <input type="email" name="email" class="form-control">
                                        </div>
                                    </div>

                            </div>
                            <div class="modal-footer">
                                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                                <button type="submit" name="addParticipant" class="btn btn-primary">Register</button>
                            </div>
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
  <script src="../assets/js/jquery.min.js"></script>
  <script src="../assets/js/main.js"></script>
  <script>
      $(document).ready(function () {
          $("#flash-msg").delay(7000).fadeOut("slow");
      });
    
  </script>
</body>

</html>