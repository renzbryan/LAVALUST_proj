<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>Register email</title>
  <meta content="" name="description">
  <meta content="" name="keywords">

  <!-- Favicons -->
  <link href="assets/img/favicon.png" rel="icon">
  <link href="assets/img/apple-touch-icon.png" rel="apple-touch-icon">

  <!-- Google Fonts -->
  <link href="https://fonts.gstatic.com" rel="preconnect">
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Nunito:300,300i,400,400i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">

    <!-- Vendor CSS Files -->
    <link href="<?php echo BASE_URL . PUBLIC_DIR . '/assets/vendor/bootstrap/css/bootstrap.min.css' ?>" rel="stylesheet">
    <link href="<?php echo BASE_URL . PUBLIC_DIR . '/assets/vendor/bootstrap-icons/bootstrap-icons.css' ?>" rel="stylesheet">
    <link href="<?php echo BASE_URL . PUBLIC_DIR . '/assets/vendor/boxicons/css/boxicons.min.css' ?>" rel="stylesheet">
    <link href="<?php echo BASE_URL . PUBLIC_DIR . '/assets/vendor/quill/quill.snow.css' ?>" rel="stylesheet">
    <link href="<?php echo BASE_URL . PUBLIC_DIR . '/assets/vendor/quill/quill.bubble.css' ?>" rel="stylesheet">
    <link href="<?php echo BASE_URL . PUBLIC_DIR . '/assets/vendor/remixicon/remixicon.css' ?>" rel="stylesheet">
    <link href="<?php echo BASE_URL . PUBLIC_DIR . '/assets/vendor/simple-datatables/style.css' ?>" rel="stylesheet">

    <!-- Template Main CSS File -->
    <link href="<?php echo BASE_URL . PUBLIC_DIR . '/assets/css/style.css' ?>" rel="stylesheet">

  <!-- =======================================================
  * Template Name: NiceAdmin
  * Updated: Sep 18 2023 with Bootstrap v5.3.2
  * Template URL: https://bootstrapmade.com/nice-admin-bootstrap-admin-html-template/
  * Author: BootstrapMade.com
  * License: https://bootstrapmade.com/license/
  ======================================================== -->
</head>

<style>
        body {
            font-family: 'Open Sans', sans-serif;
            background-color: #343a40; 
            color: #ffffff;
            overflow: hidden; 
        }

        .container {
            margin-top: 30px; 
        }

        .logo img {
            max-width: 80px;
            height: auto;
        }

        .logo span {
            font-family: 'Poppins', sans-serif;
            font-weight: bold;
            font-size: 24px;
            margin-left: 10px;
            color: #ffd700; 
        }

        .card {
            border: none;
            border-radius: 15px; 
            box-shadow: 0 0 20px rgba(0, 0, 0, 0.1);
            background-color: #ffffff;
        }

        .card-title {
            color: #ffd700; 
            font-size: 24px;
            font-weight: bold;
        }

        .form-label {
            font-family: 'Open Sans', sans-serif;
            font-size: 14px;
            color: #cca300;
        }

        .form-control {
            border-radius: 10px; 
            background-color: #495057; 
            color: #ffffff; 
            border: 1px solid #ced4da;
        }

        .form-control:focus {
            background-color: #6c757d; 
            color: #ffffff; 
            border: 1px solid #6c757d; 
        }

        .form-check-label {
            font-family: 'Open Sans', sans-serif;
            font-size: 14px;
            color: #cca300; 
        }

        .btn-primary {
            background-color: #ffd700; 
            border-color: #ffd700; 
            font-family: 'Poppins', sans-serif;
            font-weight: bold;
        }

        .btn-primary:hover {
            background-color: #cca300;
            border-color: #cca300; 
        }

        .small {
            font-size: 12px;
            color: blue; 
        }

        .mb-0 {
            margin-bottom: 0;
        }
    </style>



<body>

  <main>
    <div class="container">

      <section class="section register min-vh-100 d-flex flex-column align-items-center justify-content-center py-4">
        <div class="container">
          <div class="row justify-content-center">
            <div class="col-lg-4 col-md-6 d-flex flex-column align-items-center justify-content-center">

              <div class="d-flex justify-content-center py-4">
                <a href="index.html" class="logo d-flex align-items-center w-auto">
                  <img src="assets/img/logo.png" alt="">
                </a>
              </div><!-- End Logo -->

              <div class="card mb-3">

                <div class="card-body">

                  <div class="pt-4 pb-2">
                    <h5 class="card-title text-center pb-0 fs-4">REGISTER AN ACCOUNT</h5>
                    <br>
                  </div>

                  <form method="post" action="/create" class="row g-3 needs-validation" novalidate>
                   
                    <div class="col-12">
                      <label for="yourEmail" class="form-label">Your Email</label>
                      <input type="email" name="email" class="form-control" id="yourEmail" required>
                      <div class="invalid-feedback">Please enter a valid Email adddress!</div>
                    </div>

                    
                    <div class="col-12">
                      <label for="yourPassword" class="form-label">Password</label>
                      <input type="password" name="password" class="form-control" id="yourPassword" required>
                      <div class="invalid-feedback">Please enter your password!</div>
                    </div>

                    <div class="col-12">
                      <div class="form-check">
                        <input class="form-check-input" name="terms" type="checkbox" value="" id="acceptTerms" required>
                        <label class="form-check-label" for="acceptTerms">I agree and accept the <a href="#">terms and conditions</a></label>
                        <div class="invalid-feedback">You must agree before submitting.</div>
                      </div>
                    </div>
                    <div class="col-12">
                      <button class="btn btn-primary w-100" type="submit">Submit</button>
                    </div>
                    <div class="col-12">
                      <p class="small mb-0">Already have an account? <a href="/login">Log in</a></p>
                    </div>
                  </form>

                </div>
              </div>
            </div>
          </div>
        </div>

      </section>

    </div>
  </main><!-- End #main -->

  <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

  <!-- Vendor JS Files -->
  <script src="<?php echo BASE_URL . PUBLIC_DIR . '/assets/vendor/apexcharts/apexcharts.min.js' ?>"></script>
    <script src="<?php echo BASE_URL . PUBLIC_DIR . '/assets/vendor/bootstrap/js/bootstrap.bundle.min.js' ?>"></script>
    <script src="<?php echo BASE_URL . PUBLIC_DIR . '/assets/vendor/chart.js/chart.umd.js' ?>"></script>
    <script src="<?php echo BASE_URL . PUBLIC_DIR . '/assets/vendor/echarts/echarts.min.js' ?>"></script>
    <script src="<?php echo BASE_URL . PUBLIC_DIR . '/assets/vendor/quill/quill.min.js' ?>"></script>
    <script src="<?php echo BASE_URL . PUBLIC_DIR . '/assets/vendor/simple-datatables/simple-datatables.js' ?>"></script>
    <script src="<?php echo BASE_URL . PUBLIC_DIR . '/assets/vendor/tinymce/tinymce.min.js' ?>"></script>
    <script src="<?php echo BASE_URL . PUBLIC_DIR . '/assets/vendor/php-email-form/validate.js' ?>"></script>

    <!-- Template Main JS File -->
    <script src="<?php echo BASE_URL . PUBLIC_DIR . '/assets/js/main.js' ?>"></script>

</body>

</html>
