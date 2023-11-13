<?php 
          $server = "localhost";
          $username = "root";
          $password = "";
          $database = "food_order";
          $con = mysqli_connect($server, $username, $password, $database);
          if ($con) {
              // Corrected: This is a PHP alert, not a JavaScript alert
              // echo '<script> alert("Connected to the database."); </script>';
          } else {
              // Provide an error message if the connection fails
              echo 'Connection failed: ' . mysqli_connect_error();
          }
?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>Taste Sculptors Palette: Crafting Gastronomic Art</title>
  <meta content="" name="description">
  <meta content="" name="keywords">

  <!-- Favicons -->
  <link href="assets/img/favicon.png" rel="icon">
  <link href="assets/img/apple-touch-icon.png" rel="apple-touch-icon">

  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Playfair+Display:ital,wght@0,400;0,500;0,600;0,700;1,400;1,500;1,600;1,700|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">

  <!-- Vendor CSS Files -->
  <link href="assets/vendor/animate.css/animate.min.css" rel="stylesheet">
  <link href="assets/vendor/aos/aos.css" rel="stylesheet">
  <link href="assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
  <link href="assets/vendor/boxicons/css/boxicons.min.css" rel="stylesheet">
  <link href="assets/vendor/glightbox/css/glightbox.min.css" rel="stylesheet">
  <link href="assets/vendor/swiper/swiper-bundle.min.css" rel="stylesheet">

  <!-- Template Main CSS File -->
  <link href="assets/css/style.css" rel="stylesheet">
</head>

<body>

  <!-- ======= Header ======= -->
  <?php include 'navbar.php'; ?>

  <!-- ======= Hero Section ======= -->
  <section id="hero" class="d-flex align-items-center">
    <div class="container position-relative text-center text-lg-start" data-aos="zoom-in" data-aos-delay="100">
      <div class="row">
        <div class="col-lg-8">
          <h1>Welcome to <span>Taste Sculptors</span></h1>
          <div class="btns">
            <a href="#menu" class="btn-menu animated fadeInUp scrollto">Our Cafe's</a>
            <a href="#book-a-table" class="btn-book animated fadeInUp scrollto">Order Now</a>
          </div>
        </div>
        <div class="col-lg-4 d-flex align-items-center justify-content-center position-relative" data-aos="zoom-in" data-aos-delay="200">
          <a href="https://www.youtube.com/watch?v=u6BOC7CDUTQ" class="glightbox play-btn"></a>
        </div>

      </div>
    </div>
  </section><!-- End Hero -->

  <main id="main">

    <!-- ======= About Section ======= -->
    <section id="about" class="about">
      <div class="container" data-aos="fade-up">

        <div class="row">
          <div class="col-lg-6 order-1 order-lg-2" data-aos="zoom-in" data-aos-delay="100">
            <div class="about-img">
              <img src="assets/img/about.jpg" alt="">
            </div>
          </div>
          <div class="col-lg-6 pt-4 pt-lg-0 order-2 order-lg-1 content">
            <h3> Welcome to Taste Sculptors, where culinary excellence meets warm hospitality.</h3>
            <p class="fst-italic">
              Discover a fusion of flavors at [Restaurant Name], where passion for cuisine meets unforgettable experiences.
            </p>
            <ul>
              <li><i class="bi bi-check-circle"></i> At Taste Sculptors, we take pride in our commitment to culinary innovation</li>
              <li><i class="bi bi-check-circle"></i> Our chefs continually push the boundaries of flavor, combining traditional recipes with modern techniques to craft dishes that are both familiar and refreshingly unique.</li>
            </ul>
            <p>
              Our restaurant is a haven for food enthusiasts seeking a memorable dining experience. With a passion for crafting exceptional flavors, our talented chefs meticulously curate each dish, infusing it with creativity and dedication. Whether you're indulging in our signature  creations or savoring classic favorites with a twist, every plate is a work of art that tantalizes the taste buds.
            </p>
          </div>
        </div>

      </div>
    </section>
        
    <!-- ======= Menu Section ======= -->
    <section id="menu" class="menu section-bg">
    <div class="section-title text-center">
        <h2 style="margin-bottom: 1rem;">Cafe's</h2>
        <p>Check Our Cafe's</p>
    </div>

    <div class="container">
        <div class="row">
            <?php
            $cafe = mysqli_query($con, "SELECT * FROM shops ");
            while ($countCafe = mysqli_fetch_array($cafe)) {
            ?>
                <div class="col-md-4">
                    <div class="card mb-4" id = "card1">
                        <div class="overlay">
                            <h4><?php echo $countCafe['ShopName']; ?></h4>
                            <p><?php echo $countCafe['ShopDescription']; ?></p>
                            <a href="nescafe.php?ShopID=<?php echo $countCafe['ShopID'] ?>" class="btn btn-warning">Check it</a>
                        </div>
                    </div>
                </div>
            <?php
            }
            ?>
        </div>
    </div>
</section>


  </main><!-- End #main -->

  <!-- ======= Footer ======= -->
  <footer id="footer">
    <div class="footer-top">
      <div class="container">
        <div class="row">

          <div class="col-lg-3 col-md-6">
            <div class="footer-info">
              <h3>Taste Sculptors</h3>
              <p>
                A108 Adam Street <br>
                NY 535022, USA<br><br>
                <strong>Phone:</strong> +1 5589 55488 55<br>
                <strong>Email:</strong> info@example.com<br>
              </p>
              <div class="social-links mt-3">
                <a href="#" class="twitter"><i class="bx bxl-twitter"></i></a>
                <a href="#" class="facebook"><i class="bx bxl-facebook"></i></a>
                <a href="#" class="instagram"><i class="bx bxl-instagram"></i></a>
                <a href="#" class="google-plus"><i class="bx bxl-skype"></i></a>
                <a href="#" class="linkedin"><i class="bx bxl-linkedin"></i></a>
              </div>
            </div>
          </div>

          <div class="col-lg-2 col-md-6 footer-links">
            <h4>Useful Links</h4>
            <ul>
              <li><i class="bx bx-chevron-right"></i> <a href="#">Home</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="#">About us</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="#">Services</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="#">Terms of service</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="#">Privacy policy</a></li>
            </ul>
          </div>

          <div class="col-lg-3 col-md-6 footer-links">
            <h4>Our Services</h4>
            <ul>
              <li><i class="bx bx-chevron-right"></i> <a href="#BestFood">Best Food</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="#Savour">Savor Perfection</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="#FlavourFusion">Flavor Fusion</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="#CulinaryBliss">Culinary Bliss</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="#TasteSensation">Taste Sensation</a></li>
            </ul>
          </div>

          <div class="col-lg-4 col-md-6 footer-newsletter">
            <h4>Our Newsletter</h4>
            <p>Tamen quem nulla quae legam multos aute sint culpa legam noster magna</p>
            <form action="" method="post">
              <input type="email" name="email"><input type="submit" value="Subscribe">
            </form>

          </div>

        </div>
      </div>
    </div>

    <div class="container">
      <div class="copyright">
        &copy; Copyright <strong><span>Taste Sculptors</span></strong>. All Rights Reserved
      </div>
      <div class="credits">
        <!-- All the links in the footer should remain intact. -->
        <!-- You can delete the links only if you purchased the pro version. -->
        <!-- Licensing information: https://bootstrapmade.com/license/ -->
        <!-- Purchase the pro version with working PHP/AJAX contact form: https://bootstrapmade.com/Taste Sculptors-restaurant-template/ -->
        Designed by <a href="https://bootstrapmade.com/">BootstrapMade</a>
      </div>
    </div>
  </footer><!-- End Footer -->

  <div id="preloader"></div>
  <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

  <!-- Vendor JS Files -->
  <script src="assets/vendor/aos/aos.js"></script>
  <script src="assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="assets/vendor/glightbox/js/glightbox.min.js"></script>
  <script src="assets/vendor/isotope-layout/isotope.pkgd.min.js"></script>
  <script src="assets/vendor/swiper/swiper-bundle.min.js"></script>
  <script src="assets/vendor/php-email-form/validate.js"></script>

  <!-- Template Main JS File -->
  <script src="assets/js/main.js"></script>

</body>

</html>