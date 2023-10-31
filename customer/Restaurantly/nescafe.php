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
    .container-menu {
      width: 100%;
      max-width: 800px;
      margin: 20px auto;
      margin-top: 40px;
      padding: 20px;
      border-radius: 15px;
      box-shadow: 0 15px 10px rgba(186, 18, 18, 0.2);
      background: #333;

    }

    .head {
      font-size: 26px;
      font-weight: bold;
      margin-bottom: 40px;
      margin-top: 10px;
      text-align: center;
    }

    .cart-container {
      overflow-x: auto;
    }

    .cart {
      width: 100%;
      border-collapse: collapse;
    }

    .cart th,
    .cart td {
      padding: 10px 15px;
      text-align: left;
      border-bottom: 1px solid #ddd;
    }

    .cart th {
      background-color: #333;
      color: white;
    }

    /* Style for table data cells */
    .cart td {
      padding: 10px 15px;
      color: #000;
      border-bottom: 1px solid #ddd;
    }

    /* Alternate row background color */
    .cart tbody tr {
      background-color: #f2f2f2;
      color: black;
    }

    .cart tbody .table-row {
      background-color: rgb(163, 151, 151);
      /* color: white; */

    }

    .button {
      margin-top: 2.3rem;
      display: flex;
      justify-content: center;
      align-items: center;
      border: none;
      background: none;
    }

    .button button {
      padding: .5rem;
      border-radius: .9rem;
      background-color: transparent;
      color: white;
      box-shadow: 0 15px 10px rgba(186, 18, 18, 0.2);
    }


    /* Style for "Add to cart" and "Remove" buttons */
    .addToCart,
    .remove {
      text-align: center;
    }

    /* Hover effect on buttons */
    .remove:hover {
      background-color: #333;
      color: white;
      cursor: pointer;
    }

    .btn button a {
      text-decoration: none;
      list-style: none;
      display: inline;
      /* width: 12rem; */

    }

    @media (max-width: 768px) {
      .container-menu {
        overflow-x: scroll;
      }
    }

    /* CSS for mobile view */
    @media screen and (max-width: 768px) {
      .btn button {
        background-color: #FF0000;
        /* Change button color for mobile view */
      }
    }
  </style>
</head>

<body>

  <!-- ======= Top Bar ======= -->
  <!-- <div id="topbar" class="d-flex align-items-center fixed-top">
    <div class="container d-flex justify-content-center justify-content-md-between">

      <div class="contact-info d-flex align-items-center">
        <i class="bi bi-phone d-flex align-items-center"><span>+91 000 000 0000</span></i>
        <i class="bi bi-clock d-flex align-items-center ms-4"><span> Mon-Sat: 11AM - 12AM</span></i>
      </div>

      <div class="languages d-none d-md-flex align-items-center">
        <ul>
          <li>En</li>
          <li><a href="#">De</a></li>
        </ul>
      </div>
    </div>
  </div> -->

  <!-- ======= Header ======= -->
  <header id="header" class="fixed-top d-flex align-items-cente">
    <div class="container-fluid container-xl d-flex align-items-center justify-content-lg-between">

      <h1 class="logo me-auto me-lg-0"><a href="index.html">Taste Sculptors</a></h1>
      <!-- Uncomment below if you prefer to use an image logo -->
      <!-- <a href="index.html" class="logo me-auto me-lg-0"><img src="assets/img/logo.png" alt="" class="img-fluid"></a>-->

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




  <!-- ======= Hero Section ======= -->
  <!-- <section id="hero" class="d-flex align-items-center">
    <div class="container position-relative text-center text-lg-start" data-aos="zoom-in" data-aos-delay="100">
      <div class="row">
        <div class="col-lg-8">
          <h1>Welcome to <span>Taste Sculptors</span></h1>

          <div class="btns">
            <a href="#menu" class="btn-menu animated fadeInUp scrollto">Our Menu</a>
            <a href="#book-a-table" class="btn-book animated fadeInUp scrollto">Order Now</a>
          </div>
        </div>
        <div class="col-lg-4 d-flex align-items-center justify-content-center position-relative" data-aos="zoom-in"
          data-aos-delay="200">
          <a href="https://www.youtube.com/watch?v=u6BOC7CDUTQ" class="glightbox play-btn"></a>
        </div>

      </div>
    </div>
  </section> -->
  

  <main id="main">
    <section id="menu" class="menu section-bg">
      <div class="container" data-aos="fade-up">


        <div class="section-title">
          <h2>Menu</h2>
          <p>Check Our Tasty Menu</p>
        </div>

        <div class="row" data-aos="fade-up" data-aos-delay="100">
          <div class="col-lg-12 d-flex justify-content-center">
            <ul id="menu-flters">
              <li data-filter="*" class="filter-active">All</li>
              <li data-filter=".filter-starters">Starters</li>
              <li data-filter=".filter-salads">Salads</li>
              <li data-filter=".filter-specialty">Specialty</li>
            </ul>
          </div>
        </div>

        <div class="row menu-container" data-aos="fade-up" data-aos-delay="400">

          <div class="col-lg-6 menu-item filter-starters">
            <img src="assets/img/menu/lobster-bisque.jpg" class="menu-img" alt="">
            <div class="menu-content">
              <a href="#" style="color: yellow;">Lobster Bisque</a><span class="prices">$5.95
                <button class="cart1" value="Lobster Bisque" style="border: none; margin: 0; background: #1a1814;">
                  <i class="fa-solid fa-cart-plus">
                  </i>
                </button>

              </span>
            </div>
            <div class="menu-ingredients">
              Lorem, deren, trataro, filede, nerada
            </div>
          </div>

          <div class="col-lg-6 menu-item filter-specialty" data-aos-delay="300">
            <img src="assets/img/menu/bread-barrel.jpg" class="menu-img" alt="">
            <div class="menu-content">
              <a href="#" style="color: yellow;">Bread Barrel</a><span class="prices">$6.95 
                <button class="cart1" value="Bread Barrel" style="border: none; margin: 0; background: #1a1814;">
                  <i class="fa-solid fa-cart-plus">
                  </i>
                </button>
                </span>
            </div>
            <div class="menu-ingredients">
              Lorem, deren, trataro, filede, nerada
            </div>
          </div>

          <div class="col-lg-6 menu-item filter-starters">
            <img src="assets/img/menu/cake.jpg" class="menu-img" alt="">
            <div class="menu-content">
              <a href="#" style="color: yellow;">Crab Cake</a><span class="prices">$7.95
                <button class="cart1" value="Crab Cake" style="border: none; margin: 0; background: #1a1814;">
                  <i class="fa-solid fa-cart-plus">
                  </i>
                </button>
                </span>
            </div>
            <div class="menu-ingredients">
              A delicate crab cake served on a toasted roll with lettuce and tartar sauce
            </div>
          </div>

          <div class="col-lg-6 menu-item filter-salads">
            <img src="assets/img/menu/caesar.jpg" class="menu-img" alt="">
            <div class="menu-content">
              <a href="#" style="color: yellow;">Caesar Selections</a><span class="prices">$8.95 
                <button class="cart1" value="Caesar Selections" style="border: none; margin: 0; background: #1a1814;">
                  <i class="fa-solid fa-cart-plus">
                  </i>
                </button>
                </span>
            </div>
            <div class="menu-ingredients">
              Lorem, deren, trataro, filede, nerada
            </div>
          </div>

          <div class="col-lg-6 menu-item filter-specialty">
            <img src="assets/img/menu/tuscan-grilled.jpg" class="menu-img" alt="">
            <div class="menu-content">
              <a href="#" style="color: yellow;">Tuscan Grilled</a><span class="prices">$9.95 
                <button class="cart1" value="Tuscan Grilled" style="border: none; margin: 0; background: #1a1814;">
                  <i class="fa-solid fa-cart-plus">
                  </i>
                </button>
                </span>
            </div>
            <div class="menu-ingredients">
              Grilled chicken with provolone, artichoke hearts, and roasted red pesto
            </div>
          </div>

          <div class="col-lg-6 menu-item filter-starters">
            <img src="assets/img/menu/mozzarella.jpg" class="menu-img" alt="">
            <div class="menu-content">
              <a href="#" style="color: yellow;">Mozzarella Stick</a><span class="prices">$4.95 
                <button class="cart1" value="Mozzarella Stick" style="border: none; margin: 0; background: #1a1814;">
                  <i class="fa-solid fa-cart-plus">
                  </i>
                </button>
                </span>
            </div>
            <div class="menu-ingredients">
              Lorem, deren, trataro, filede, nerada
            </div>
          </div>

          <div class="col-lg-6 menu-item filter-salads">
            <img src="assets/img/menu/greek-salad.jpg" class="menu-img" alt="">
            <div class="menu-content">
              <a href="#" style="color: yellow;">Greek Salad</a><span class="prices">$9.95 <button class="cart1" value="Greek Salad"
                  style="border: none; margin: 0; background: #1a1814;"> <i class="fa-solid fa-cart-plus"></i>
                </button></span>
            </div>
            <div class="menu-ingredients">
              Fresh spinach, crisp romaine, tomatoes, and Greek olives
            </div>
          </div>

          <div class="col-lg-6 menu-item filter-salads">
            <img src="assets/img/menu/spinach-salad.jpg" class="menu-img" alt="">
            <div class="menu-content">
              <a href="#" style="color: yellow;">Spinach Salad</a><span class="prices">$9.95 
                <button class="cart1" value="Spinach Salad" style="border: none; margin: 0; background: #1a1814;">
                  <i class="fa-solid fa-cart-plus">
                  </i>
                </button>
                </span>
            </div>
            <div class="menu-ingredients">
              Fresh spinach with mushrooms, hard boiled egg, and warm bacon vinaigrette
            </div>
          </div>

          <div class="col-lg-6 menu-item filter-specialty">
            <img src="assets/img/menu/lobster-roll.jpg" class="menu-img" alt="">
            <div class="menu-content">
              <a href="#" style="color: yellow;"> Lobster Roll</a><span class="prices">$12.95 
                <button class="cart1" value=" Lobster Roll" style="border: none; margin: 0; background: #1a1814;">
                  <i class="fa-solid fa-cart-plus">
                  </i>
                </button>
                </span>
            </div>
            <div class="menu-ingredients">
              Plump lobster meat, mayo and crisp lettuce on a toasted bulky roll
            </div>
            <!-- </div> -->

          </div>

        </div>

        <div class="container-menu">
          <div class="head">Your Orders List</div>
          <table class="cart">
            <thead>
              <tr>
                <th class="number">S.no</th>
                <th class="name">Item Name</th>
                <th class="price">Price</th>
                <th class="total">Total</th>
                <th class="addToCart">total items</th>
                <th class="remove">Remove</th>

              </tr>
            </thead>
            <tbody class="table-body" id="body-cart">

            </tbody>
          </table>
          <div class="button">
            <button> <a href="cart.html">Proceed</a></button>
          </div>
        </div>

    </section>


    <!-- End Menu Section -->

  </main>
  <!-- End #main -->

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

  <!-- Add this script tag before your closing </body> tag to include jQuery -->
  <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
  <script>
    var cart = [];

    $('#cart1').click(function () {
      var itemName = document.getElementsByClassName("cart1"); // Replace with the actual item name

      var itemPrice = document.getElementsByClassName("prices"); // Replace with the actual item price

      // Check if the item is already in the cart
      var existingItem = cart.find(item => item.name === itemName);

      if (existingItem) {
        // If the item is already in the cart, increase the quantity and update the total price
        existingItem.quantity++;
        existingItem.totalPrice += itemPrice;
      } else {
        // If the item is not in the cart, add it to the cart array
        cart.push({
          name: itemName,
          price: itemPrice,
          quantity: 1,
          totalPrice: itemPrice,
        });

        // Create a new row for the cart table
        var newRow = '<tr>';
        newRow += '<td>x</td>';
        newRow += '<td>' + itemName + '</td>';
        newRow += '<td>$' + itemPrice.toFixed(2) + '</td>';
        newRow += '<td>$' + itemPrice.toFixed(2) + '</td>';
        newRow += '<td class="addToCart">1</td>';
        newRow += '<td><button class="removeItem">Remove</button></td>';
        newRow += '</tr>';

        $('#body-cart').append(newRow);
      }
    });

    // Add an event listener for removing items from the cart
    $('#body-cart').on('click', '.removeItem', function () {
      var row = $(this).closest('tr');
      var itemName = row.find('td:eq(1)').text();

      // Find the index of the item in the cart array
      var itemIndex = cart.findIndex(item => item.name === itemName);

      if (itemIndex !== -1) {
        // Remove the item from the cart array and the table row
        cart.splice(itemIndex, 1);
        row.remove();
      }
    });
  </script>


</body>

</html> 