<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Fasteat - The Best Restaurants In Your Home</title>
    <meta name="title" content="Fasteat - The Best Restaurants In Your Home">
    <meta name="description" content="This is a food html template made by codewithsadee">


    <link rel="shortcut icon" href="./assets/images/favicon.ico" type="image/svg+xml">
    <link rel="stylesheet" href="./assets/css/style.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;500;600;700&display=swap" rel="stylesheet">



</head>

<body>

    <div class="loading-container" data-loading-container>
        <div class="loading-circle"></div>
    </div>

    <header class="header" data-header>
    <div class="container">

      <a href="#" class="logo">
        <!-- Mobile Logo -->
        <img src="./assets/images/logo.png" width="148" height="28" alt="Fasteat home" class="mobile-logo logo1" style = "border-radius : 50%">
        <!-- Desktop Logo -->
      </a>

      <nav class="navbar" data-navbar>
        <button class="nav-close-btn" aria-label="close menu" data-nav-toggler>
          <ion-icon name="close-outline" aria-hidden="true"></ion-icon>
        </button>

        <ul class="navbar-list">
          <li class="navbar-item">
            <a href="Index.php" class="navbar-link" data-nav-link>Home</a>
          </li>
          <li class="navbar-item">
            <a href="about.php" class="navbar-link" data-nav-link>About Us</a>
          </li>
          <li class="navbar-item">
            <a href="#" class="navbar-link" data-nav-link>Cafe's</a>
          </li>
          <li class="navbar-item">
            <a href="contact.php" class="navbar-link" data-nav-link>Contacts</a>
          </li>
        </ul>
      </nav>

      <div class="header-action">
        <button class="cart-btn" aria-label="cart">
          <ion-icon name="bag" aria-hidden="true"></ion-icon>
        </button>
        <a href="./customer/Restaurantly/login-page.php" class="btn btn-primary has-after">Order Now</a>
      </div>

      <button class="nav-open-btn" aria-label="open menu" data-nav-toggler>
        <ion-icon name="menu-outline" aria-hidden="true"></ion-icon>
      </button>

      <div class="overlay" data-overlay data-nav-toggler></div>

    </div>
  </header>     


    <article>
        <main style="margin-top: 10rem;">

            <section class="section newsletter" aria-label="aboutUs">
                <div class="container">

                    <figure class="newsletter-banner" data-reveal="left">
                        <img src="./assets/images/testimonial-banner.png" width="680" height="405" loading="lazy"
                            alt="Illustration" class="w-100" style="border-radius: 3.2rem;">
                    </figure>

                    <div class="newsletter-content" data-reveal="right">
                        <h2 class="h4 section-title">
                            About Our food
                        </h2>

                        We are a team of food lovers who want to make your life easier and tastier. We created this website, where you can order food from hundreds of local and international cuisines in just a few clicks.
                        <hr style="margin: 12px 0px;">
                        Our website is simple and user-friendly
                        <hr style="margin: 12px 0px;">
                        We are your online food court, where you can find and enjoy the food you love, anytime and anywhere. We are here to make your day better, one bite at a time. 😊
                    </div>

                </div>
            </section>


            <section class="section newsletter" aria-label="newsletter">
                <div class="container">

                    <figure class="newsletter-banner" data-reveal="left">
                        <img src="./assets/images/user.png" width="680" height="405" loading="lazy" alt="Illustration"
                            class="w-100" style="border-radius: 3.2rem;">
                    </figure>

                    <div class="newsletter-content" data-reveal="right">
                        <h2 class="h4 section-title">
                            Get the menu of your favorite restaurants every day
                        </h2>

                        <div class="input-wrapper">
                            <input type="email" name="email_address" placeholder="Enter email address" required
                                class="input-field">

                            <button type="submit" class="btn btn-primary has-after">
                                <ion-icon name="notifications-outline" aria-hidden="true"></ion-icon>

                                <span class="span">Subscribe</span>
                            </button>
                        </div>

                    </div>

                </div>
            </section>
        </main>
    </article>




    <footer class="footer">
    <div class="container">

      <div class="section footer-top grid-list">

        <div class="footer-brand">

          <a href="#" class="logo">
            <img src="./assets/images/logo.png" width="148" height="38" alt="fasteat home" style="border-radius: 50%;">
          </a>

          <!-- <h2 class="h2 section-title">Find Your Orders </h2> -->

          <!-- <p class="section-text">
            Vitae congue mauris rhoncus aenean. Enim nulla aliquet porttitor lacus luctus accumsan tortor posuere.
            Tempus egestas sed sed risus pretium quam.
          </p> -->

        </div>

        <ul class="footer-list">

          <li>
            <p class="footer-list-title h5">Menu</p>
          </li>

          <li>
            <a href="#" class="footer-link">
              <span class="span">Home</span>

              <ion-icon name="arrow-forward" aria-hidden="true"></ion-icon>
            </a>
          </li>

          <li>
            <a href="#" class="footer-link">
              <span class="span">About Us</span>

              <ion-icon name="arrow-forward" aria-hidden="true"></ion-icon>
            </a>
          </li>

          <li>
            <a href="#" class="footer-link">
              <span class="span">Cafe's</span>

              <ion-icon name="arrow-forward" aria-hidden="true"></ion-icon>
            </a>
          </li>

          <li>
            <a href="#" class="footer-link">
              <span class="span">Contacts</span>

              <ion-icon name="arrow-forward" aria-hidden="true"></ion-icon>
            </a>
          </li>

        </ul>

        <ul class="footer-list">

          <li>
            <p class="footer-list-title h5">Contacts</p>
          </li>

          <li>
            <address class="address">
              <ion-icon name="location" aria-hidden="true"></ion-icon>
              <span class="span">bhimtal, uttarakhand</span>
            </address>
          </li>

          <li>
            <a href="mailto:quickeat@mail.net" class="footer-link">
              <ion-icon name="mail" aria-hidden="true"></ion-icon>

              <span class="span">nescafe@mail.net</span>
            </a>
          </li>

          <li>
            <a href="tel:+12344567890" class="footer-link">
              <ion-icon name="call" aria-hidden="true"></ion-icon>

              <span class="span">+0 000 000 00 00</span>
            </a>
          </li>

          <li>
            <ul class="social-list">

              <li>
                <a href="#" class="social-link">
                  <ion-icon name="logo-facebook"></ion-icon>
                </a>
              </li>

              <li>
                <a href="#" class="social-link">
                  <ion-icon name="logo-instagram"></ion-icon>
                </a>
              </li>

              <li>
                <a href="#" class="social-link">
                  <ion-icon name="logo-twitter"></ion-icon>
                </a>
              </li>

            </ul>
          </li>

        </ul>

      </div>

      <div class="footer-bottom">

        <p class="copyright">
          Copyright 2022 . All rights reserved.
        </p>

      </div>

    </div>
  </footer>


    <script src="./assets/js/script.js"></script>

    <script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
    <script nomodule src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"></script>

</body>

</html>