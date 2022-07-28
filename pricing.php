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
  <?php 
  include 'include/header.php';
  ?>
  <!-- End Header -->

  <!-- ======= Sidebar ======= -->
  <?php 
  include 'include/sidebar.php';
  ?>
  <!-- End Sidebar-->

  <main id="main" class="main">

    <div class="pagetitle">

      <h1>Pricing</h1>
      <nav>
        <ol class="breadcrumb">
          <li class="breadcrumb-item"><a href="index.html">Pricing</a></li>
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
                  <div class="pricing-header p-3 pb-md-4 mx-auto text-center">
                    <h1 class="display-4 fw-normal">Pricing</h1>
                    <p class="text-muted">Pick the best plan that meets your business needs. A free trial is available to help you with the decision-making.</p>
                  </div>
                  <div class="row row-cols-1 row-cols-md-3 m-3 text-center">
                    <div class="col">
                      <div class="card mb-4 rounded-3 shadow-sm">
                        <div class="card-header py-3">
                          <h4 class="my-0 fw-normal">Free</h4>
                        </div>
                        <div class="card-body">
                          <h1 class="card-title pricing-card-title">RM0<small class="text-muted fw-light">/mo</small></h1>
                          <ul class="list-unstyled mt-3 mb-4">
                            <li>Life Insurance</li>
                            <li>Basic Coverage</li>
                            <li>Home Insurance</li>
                            <li>Personal Account</li>
                            <li>Phone Support</li>
                          </ul>
                          <a href="register.php" class="w-100 btn btn-lg btn-primary">Sign Up</a>
                        </div>
                      </div>
                    </div>
                    <div class="col">
                      <div class="card mb-4 rounded-3 shadow-sm">
                        <div class="card-header py-3">
                          <h4 class="my-0 fw-normal">Starter</h4>
                        </div>
                        <div class="card-body">
                          <h1 class="card-title pricing-card-title">RM99<small class="text-muted fw-light">/mo</small></h1>
                          <ul class="list-unstyled mt-3 mb-4">
                            <li>Car Insurance</li>
                            <li>Increased Coverage</li>
                            <li>Travel Insurance</li>
                            <li>Free Mobile App</li>
                            <li>Online Support</li>
                          </ul>
                          <a href="register.php" class="w-100 btn btn-lg btn-primary">Sign Up</a>
                        </div>
                      </div>
                    </div>
                    <div class="col">
                      <div class="card mb-4 rounded-3 shadow-sm border-primary">
                        <div class="card-header py-3 text-white bg-primary border-primary">
                          <h4 class="my-0 fw-normal">Business</h4>
                        </div>
                        <div class="card-body">
                          <h1 class="card-title pricing-card-title">RM129<small class="text-muted fw-light">/mo</small></h1>
                          <ul class="list-unstyled mt-3 mb-4">
                            <li>Business Insurance</li>
                            <li>Advanced Coverage</li>
                            <li>Law Insurance</li>
                            <li>Free Insurance Report</li>
                            <li>24/7 Support</li>
                          </ul>
                          <a href="register.php" class="w-100 btn btn-lg btn-primary">Sign Up</a>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
    </section>


    <div class="text-center">
      <span class="small pt-4 ps-6 ">
        “Join our FREE seminar and let the experts tell you the truth about your insurance policy“
      </span>
    </div>



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