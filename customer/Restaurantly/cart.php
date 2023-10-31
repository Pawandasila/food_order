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
  <link
    href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Playfair+Display:ital,wght@0,400;0,500;0,600;0,700;1,400;1,500;1,600;1,700|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i"
    rel="stylesheet">

  <!-- Vendor CSS Files -->
  <link href="assets/vendor/animate.css/animate.min.css" rel="stylesheet">
  <link href="assets/vendor/aos/aos.css" rel="stylesheet">
  <link href="assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
  <link href="assets/vendor/boxicons/css/boxicons.min.css" rel="stylesheet">
  <link href="assets/vendor/glightbox/css/glightbox.min.css" rel="stylesheet">
  <link href="assets/vendor/swiper/swiper-bundle.min.css" rel="stylesheet">

  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css"
    integrity="sha384-KyZXEAg3QhqLMpG8r+6ayZJ8r7B6q6eEc6aDkGS6X4U5j4IbbVYUew+OrCXaRkfj" crossorigin="anonymous">

  <!-- Template Main CSS File -->
  <link href="assets/css/style.css" rel="stylesheet">

  <style>
    /* Style for the container */
    table {
      width: 100%;
      border-collapse: collapse;
    }

    #quantity span {
      padding: .4rem;
    }

    #quantity  span:hover {
      cursor: pointer;
    }

    .small-container-cart-page {
      margin: 150px auto;
      width: 80%;

    }

    .small-container-cart-page h1 {
      text-align: center;
      padding-bottom: 1.5rem;
    }

    .cart-info {
      margin-top: 1.2rem;
      display: flex;
      flex-wrap: wrap;
    }

    th {
      text-align: left;
      padding: 5px;
      color: #fff;
      background: gray;
      font-weight: normal;
      border-collapse: collapse;
    }

    td {
      padding: 10px 5px;
      color: aqua;

    }

    td small {
      color: aquamarine;
    }

    td input {
      width: 60px;
      height: 30px;
      padding: 5px;
      text-align: center;
      border-radius: 1rem;
    }

    td a {
      color: #ff523b;
      font-size: 12px;

    }

    td img {
      width: 80px;
      height: 80px;
      margin-right: 10px;
    }

    .total-price {
      display: flex;
      justify-content: flex-end;
    }

    .total-price table {
      border-top: 3px solid gray;
      width: 100%;
      max-width: 400px;
    }

    td:last-child {
      text-align: right;
    }

    th:last-child {
      text-align: right;
    }

    /* .total{
      display: flex;
      flex-direction: column;
      justify-content: flex-end;
      align-items: flex-end;

    } */

    @media screen and (max-width: 768px) {
      .small-container-cart-page {
        width: 90%;
        /* Adjust the width for smaller screens */
      }

      table {
        font-size: 14px;
        /* Increase font size for better readability */
      }

      td {
        padding: 8px 5px;
        /* Adjust padding for better spacing */
      }

      td input {
        width: 40px;
        /* Reduce input width for better fit on smaller screens */
      }

      .cart-info {
        flex-direction: column;
        /* Stack cart items vertically */
        align-items: center;
        /* Center align cart items */
        text-align: center;
        /* Center align text within cart items */
      }

      td img {
        margin: 0 auto 10px;
        /* Center align images */
      }

      .total-price {
        justify-content: center;
        /* Center align total price */
      }
    }
  </style>
</head>

<body>

  <!-- ======= Header ======= -->
  <header id="header" class="fixed-top d-flex align-items-cente">
    <div class="container-fluid container-xl d-flex align-items-center justify-content-lg-between">

      <h1 class="logo me-auto me-lg-0"><a href="index.html">Taste Sculptors</a></h1>
      <!-- Uncomment below if you prefer to use an image logo -->
      <!-- <a href="index.html" class="logo me-auto me-lg-0"><img src="assets/img/logo.png" alt="" class="img-fluid"></a> -->

      <nav id="navbar" class="navbar order-last order-lg-0">
        <ul>
          <li><a class="nav-link scrollto active" href="index.html">Home</a></li>
          <li><a class="nav-link scrollto" href="#about">About</a></li>
          <li><a class="nav-link scrollto" href="#menu">Cafe's</a></li>
          <!-- <li><a class="nav-link scrollto" href="#specials">Specials</a></li> -->
          <!-- <li><a class="nav-link scrollto" href="#chefs">Chefs</a></li> -->
          <li><a class="nav-link scrollto" href="#gallery">Gallery</a></li>

          <li><a class="nav-link scrollto" href="#contact">Contact</a></li>
        </ul>
        <i class="bi bi-list mobile-nav-toggle"></i>
      </nav><!-- .navbar -->
      <!-- <a href="#book-a-table" class="book-a-table-btn scrollto d-none d-lg-flex">order Now</a> -->
      <li class="nav-item dropdown mt-0">
        <a class="avatar-pos nav-link py-0 d-flex align-items-center" href="#" id="navbarDropdown" role="button"
          data-bs-toggle="dropdown" aria-expanded="false">
          <img src="../Restaurantly/assets/img/01.png" alt="User-Profile"
            class="img-fluid avatar avatar-50 avatar-rounded">
          <div class="caption ms-3 d-none d-md-block ">
            <h6 class="mb-0 caption-title">Austin </h6>
          </div>
        </a>
        <ul class="dropdown-menu dropdown-menu-end" aria-labelledby="navbarDropdown">
          <li><a class="dropdown-item" href="#">Profile</a></li>
          <li><a class="dropdown-item" href="#">Privacy Setting</a></li>
          <li>
            <hr class="dropdown-divider">
          </li>
          <li><a class="dropdown-item" href="#">Logout</a></li>
        </ul>
      </li>

    </div>
  </header><!-- End Header -->


  <main id="main">

    <div class="small-container-cart-page">
      <h1>Your Order List</h1>

      <table>
        <tr>
          <th>Product</th>
          <th>Quantity</th>
          <th>Subtotal</th>
        </tr>
        <tr>
          <td>
            <div class="cart-info">
              <img src="/assets/img/specials-1.png">
              <div>
                <p>Garlic Breed</p>
                <small id="price">Price:</small> <small id="inr"> &#8377; 123</small>
                </br>
                <a href="#">Remove</a>
              </div>
            </div>
          </td>
          <td id="quantity"> <span id="inc" > + </span> <input type="text" value="1"> <span
              id="dec"> - </span> </td>
          <td id="Subtotal"> &#8377;<small class="price">  999.00</small> </td>
        </tr>
        <tr>
          <td>
            <div class="cart-info">
              <img src="/assets/img/specials-2.png">
              <div>
                <p>Momo</p>
                <small id="price">Price:</small> <small id="inr"> &#8377; 123</small>
                </br>
                <a href="#">Remove</a>
              </div>
            </div>
          </td>
          <td id="quantity"> <span id="inc" > + </span> <input type="text" value="1"> <span
              id="dec"> - </span> </td>
          <td id="Subtotal"> &#8377;<small class="price">  999.00</small> </td>
        </tr>
        <tr>
          <td>
            <div class="cart-info">
              <img src="/assets/img/specials-3.png">
              <div>
                <p>Maggi</p>
                <small id="price">Price:</small> <small id="inr"> &#8377; 123</small>
                </br>
                <a href="#">Remove</a>
              </div>
            </div>
          </td>
          <td id="quantity"> <span id="inc" > + </span> <input type="text" value="1"> <span
              id="dec"> - </span> </td>
          <td id="Subtotal">&#8377; <small class="price"> 999.00</small> </td>
        </tr>
      </table>

      <div class="total-price" >
        <table>
          <tr>
            <td>Total</td>
            <td id="total">&#8377; 3,747.00</td>
          </tr>
        </table>
      </div>


    </div>
  </main>

  <!-- ======= Footer ======= -->
  <footer id="footer">
    <div class="footer-top">
      <div class="container">
        <div class="row">

          <div class="col-lg-3 col-md-6">
            <div class="footer-info">
              <h3>Taste Sculptors</h3>
              <p>
                this new Street <br>
                yes 10000, anywhere<br><br>
                <strong>Phone:</strong> +0 0000 0000 00<br>
                <strong>Email:</strong> cafe@example.com<br>
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
      <!-- <div class="credits"> -->
      <!-- All the links in the footer should remain intact. -->
      <!-- You can delete the links only if you purchased the pro version. -->
      <!-- Licensing information: https://bootstrapmade.com/license/ -->
      <!-- Purchase the pro version with working PHP/AJAX contact form: https://bootstrapmade.com/Taste Sculptors-restaurant-template/ -->
      <!-- Designed by <a href="https://bootstrapmade.com/">BootstrapMade</a> -->
      <!-- </div> -->
    </div>
  </footer><!-- End Footer -->

  <div id="preloader"></div>
  <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i
      class="bi bi-arrow-up-short"></i></a>

  <!-- Vendor JS Files -->
  <script src="assets/vendor/aos/aos.js"></script>
  <script src="assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="assets/vendor/glightbox/js/glightbox.min.js"></script>
  <script src="assets/vendor/isotope-layout/isotope.pkgd.min.js"></script>
  <script src="assets/vendor/swiper/swiper-bundle.min.js"></script>
  <script src="assets/vendor/php-email-form/validate.js"></script>
  <script src="https://kit.fontawesome.com/603603feae.js" crossorigin="anonymous"></script>

  <!-- Template Main JS File -->
  <script src="assets/js/main.js"></script>
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
  <script src="https://ajax.googleapis.com/ajax/libs/jqueryui/1.12.1/jquery-ui.min.js"></script>

  <script>
    
    var quantityInput = document.querySelector('#quantity input');
    var price = document.querySelector('.price').value;
    console.log(price);
    var increaseButton = document.querySelector('#inc');
    var decreaseButton = document.querySelector('#dec');

    
    increaseButton.addEventListener('click', function () {
    
      var currentValue = parseInt(quantityInput.value, 10);
      quantityInput.value = (currentValue + 1).toString();
      price = (currentValue*2);
      console.log(price)
    });

    
    decreaseButton.addEventListener('click', function () {
    
      var currentValue = parseInt(quantityInput.value, 10);
      if (currentValue > 1) {
        quantityInput.value = (currentValue - 1).toString();
      }
    });

  </script>


</body>

</html>