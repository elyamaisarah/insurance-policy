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
  <link
    href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Nunito:300,300i,400,400i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i"
    rel="stylesheet">

  <!-- Vendor CSS Files -->
  <link href="assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
  <link href="assets/vendor/boxicons/css/boxicons.min.css" rel="stylesheet">
  <link href="assets/vendor/quill/quill.snow.css" rel="stylesheet">
  <link href="assets/vendor/quill/quill.bubble.css" rel="stylesheet">
  <link href="assets/vendor/remixicon/remixicon.css" rel="stylesheet">
  <link href="assets/vendor/simple-datatables/style.css" rel="stylesheet">

  <!-- Template Main CSS File -->
  <link href="assets/css/style.css" rel="stylesheet">

  <!-- =======================================================
  * Template Name: NiceAdmin - v2.2.2
  * Template URL: https://bootstrapmade.com/nice-admin-bootstrap-admin-html-template/
  * Author: BootstrapMade.com
  * License: https://bootstrapmade.com/license/
  ======================================================== -->

  <style>
    body {
      background-image: url('image/1.jpg');
      background-repeat: no-repeat;
      background-attachment: fixed;
      background-size: cover;
    }
  </style>

</head>

<body>

  <!-- ======= Header ======= -->
  <header id="header" class="header fixed-top d-flex align-items-center">

    <div class="d-flex align-items-center justify-content-between">
      <i class="bi bi-list toggle-sidebar-btn"></i>
      <a href="index.php" class="logo d-flex align-items-center">
        <img src="assets/img/logo.png" alt="">
        <span class="d-none d-lg-block">Insurance Project</span>

      </a>

    </div><!-- End Logo -->

    <nav class="header-nav ms-auto">
      <ul class="d-flex align-items-center">

        <li class="nav-item d-block d-lg-none">
          <a class="nav-link nav-icon search-bar-toggle " href="#">
            <i class="bi bi-search"></i>
          </a>
        </li><!-- End Search Icon-->
      </ul>
    </nav><!-- End Icons Navigation -->

  </header><!-- End Header -->

  <!-- ======= Sidebar ======= -->
  <?php 
  include 'include/sidebar.php';
  ?>
<!-- End Sidebar-->

  <main id="main" class="main">

    <div class="pagetitle">

      <h1>Home</h1>
      <nav>
        <ol class="breadcrumb">
          <li class="breadcrumb-item"><a href="index.html">Homepage</a></li>
        </ol>
      </nav>
    </div><!-- End Page Title -->

    <section class="section dashboard">
      <div class="row">

        <!-- Left side columns -->
        <div class="col-lg-12">
          <div class="row">

            <!-- Sales Card -->
            <div class="col-xxl-12 col-md-12">
              <div class="card info-card sales-card">

                <div class="card-body">
                  <h5 class="mt-4 card-title text-center">
                    "Upload your insurance policy here and we will tell you what your insurance agent didn???t you.
                    You will know if you have overpaid your insurance, and you may cash out
                    what you have paid for the last few years without compromising the protection on your current
                    policy.???
                  </h5>
                </div>
              </div>
            </div>

            <section class="section">
              <div class="row">
                <div class="col-lg-12">

                  <div class="card">
                    <div class="card-body">
                      <h5 class="text-muted small pt-2"> ???Upload your policy and mobile number, our agents will
                        contact you soon.???</h5>

                      <!-- General Form Elements -->
                      <form>

                        <div class="row mb-3">
                          <label for="inputMobileNumber" class="col-sm-2 col-form-label">Mobile Number</label>
                          <div class="col-sm-10">
                            <input type="mobile number" class="form-control">
                          </div>
                        </div>

                        <div class="row mb-3">
                          <label for="inputEmail" class="col-sm-2 col-form-label">Email</label>
                          <div class="col-sm-10">
                            <input type="email" class="form-control">
                          </div>
                        </div>

                        <div class="row mb-3">
                          <label for="inputOccupation" class="col-sm-2 col-form-label">Occupation</label>
                          <div class="col-sm-10">
                            <input type="occupation" class="form-control" required>
                          </div>
                        </div>

                        <div class="row mb-3">
                          <label for="inputNumber" class="col-sm-2 col-form-label">File Upload</label>
                          <div class="col-sm-10">
                            <input class="form-control" type="file" id="formFile" multiple ondrop="drop(event)"
                              ondragover="allowDrop(event)" draggable="true" ondragstart="drag(event)">

                          </div>
                        </div>



                        <div class="row mb-3">
                          <legend class="col-form-label col-sm-2 pt-0">Term and Condition</legend>
                          <div class="col-sm-10">


                            <div class="form-check">
                              <input class="form-check-input" type="checkbox" id="gridCheck2" checked>
                              <label class="form-check-label" for="gridCheck2">
                                I have read and agree with the terms and conditions.
                              </label>
                            </div>

                          </div>
                        </div>


                        <div class="row mb-3">
                          <label class="col-sm-2 col-form-label">Submit Button</label>
                          <div class="col-sm-10">
                            <button type="submit" class="btn btn-primary">Submit Form</button>
                          </div>
                        </div>

                        <div class="fb-share-button" data-href="http://localhost/insurance-policy/" data-layout="button"
                          data-size="small"><a target="_blank"
                            href="https://www.facebook.com/sharer/sharer.php?u=http%3A%2F%2Flocalhost%2Finsurance-policy%2F&amp;src=sdkpreparse"
                            class="fb-xfbml-parse-ignore">Share</a></div>
                        <div class="social-links mt-2 text-center">

                          <a href="https://www.facebook.com/sharer/sharer.php?u=https%3A%2F%2Fparse.com"
                            class="facebook"><i class="bi bi-facebook"></i></a>
                          <a href="https://www.instagram.com/sharer/sharer.php?u=https%3A%2F%2Fparse.com"
                            class="instagram"><i class="bi bi-instagram"></i></a>

                        </div>

                    </div>
                  </div>



                  </form><!-- End General Form Elements -->



                </div>
              </div>

          </div>
        </div>
    </section>



    <span class="text-center small pt-4 ps-6 ">
      ???Join our FREE seminar and let the experts tell you the truth about your insurance policy???
    </span>




    </div>
    </div><!-- End Sales Card -->
    </div><!-- End Right side columns -->

    </div>
    </section>

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

  <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i
      class="bi bi-arrow-up-short"></i></a>

  <!-- Vendor JS Files -->
  <script src="assets/vendor/apexcharts/apexcharts.min.js"></script>
  <script src="assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="assets/vendor/chart.js/chart.min.js"></script>
  <script src="assets/vendor/echarts/echarts.min.js"></script>
  <script src="assets/vendor/quill/quill.min.js"></script>
  <script src="assets/vendor/simple-datatables/simple-datatables.js"></script>
  <script src="assets/vendor/tinymce/tinymce.min.js"></script>
  <script src="assets/vendor/php-email-form/validate.js"></script>

  <!-- Template Main JS File -->
  <script src="assets/js/main.js"></script>
  <script async defer crossorigin="anonymous" src="https://connect.facebook.net/en_US/sdk.js#xfbml=1&version=v14.0"
    nonce="8RCBTk0M"></script>

</body>

</html>