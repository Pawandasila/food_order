<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">

  <title>Fast delivary - The Best Restaurants In Your Home</title>
  <meta name="title" content="Fasteat - The Best Restaurants In Your Home">
  <meta name="description" content="This is a food html template made by codewithsadee">


  <link rel="shortcut icon" href="./assets/images/favicon.ico" type="image/svg+xml">
  <link rel="stylesheet" href="./assets/css/style.css">
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;500;600;700&display=swap" rel="stylesheet">
  <style>
    /* Logo Style for Desktop View */
    /* Logo Style for Mobile View */
    @media (max-width: 767px) {
      .logo .mobile-logo {
        display: none;
      }
    }
  </style>
</head>

<body>

  <!-- <div class="loading-container" data-loading-container>
    <div class="loading-circle"></div>
  </div> -->

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

  <main>
    <article>

      <section class="section hero has-bg-image" aria-label="home"
        style="background-image: url('./assets/images/hero-bg.png')">
        <div class="container">

          <div class="hero-content" data-reveal="left">
            <h1 class="h1 hero-title">The Best Restaurants In Your Home</h1>

            <p class="hero-text">
              One cannot think well, love well, sleep well, if one has not dined wel
            </p>

            <a href="./customer/Restaurantly/login-page.php" class="btn btn-primary has-after">Order Now</a>
          </div>

          <figure class="hero-banner" data-reveal>

            <img src="./assets/images/hero-banner.png" width="680" height="720" alt="hero banner" class="w-100">
          </figure>

        </div>
      </section>

      <section class="section instruction" aria-labelledby="">
        <div class="container">

          <h2 class="h2 section-title" id="instruction-label" data-reveal>How It Works</h2>

          <!-- <p class="section-text" data-reveal>
            Magna sit amet purus gravida quis blandit turpis cursus. Venenatis tellus in
            metus vulputate eu scelerisque felis.
          </p> -->

          <ul class="grid-list">

            <li data-reveal="left">
              <div class="instruction-card">

                <figure class="card-banner">
                  <img src="./assets/images/map.webp" width="300" height="154" loading="lazy" alt="Select Cafe"
                    class="w-100">
                </figure>

                <div class="card-content">

                  <h3 class="h5 card-title">
                    <span class="span">01</span>
                    Select Cafe
                  </h3>

                  <p class="card-text">
                    First, you need to select a cafe from the list of available cafes for the website. You can see the
                    ratings, reviews, and menus of each cafe before you make your choice.
                  </p>

                </div>

              </div>
            </li>

            <li data-reveal>
              <div class="instruction-card">

                <figure class="card-banner">
                  <img src="./assets/images/menue.webp" width="300" height="154" loading="lazy" alt="Select menu"
                    class="w-100">
                </figure>

                <div class="card-content">

                  <h3 class="h5 card-title">
                    <span class="span">02</span>
                    Select menu
                  </h3>

                  <p class="card-text">
                    Next, you need to select the items you want to order from the menu of the cafe you selected. You can
                    see the prices, ingredients, and pictures of each item. You can also customize your order by adding
                    or removing toppings, sauces, or extras.
                  </p>

                </div>

              </div>
            </li>

            <li data-reveal="right">
              <div class="instruction-card">

                <figure class="card-banner">
                  <img src="./assets/images/delivery.webp" width="300" height="154" loading="lazy"
                    alt="Wait for delivery" class="w-100">
                </figure>

                <div class="card-content">

                  <h3 class="h5 card-title">
                    <span class="span">03</span>
                    Wait for cooking
                  </h3>

                  <p class="card-text">
                    Finally, you need to wait for your order to be cooked and delivered to your doorstep. You can track
                    the status of your order on the website and get notified when it is ready. You can also pay online
                    or cash on delivery.
                  </p>

                </div>

              </div>
            </li>

          </ul>

        </div>
      </section>

      <section class="section top-restaurant" aria-labelledby="top-restaurent-label" id="cafe">
        <div class="container">

          <ul class="grid-list">

            <li data-reveal="left">
              <h2 class="h2 section-title" id="top-restaurent-label">
                Best Cafe In The Campus
              </h2>

              <!-- <p class="section-text">
                Magna sit amet purus gravida quis blandit turpis cursus. Venenatis tellus in metus vulputate.
              </p> -->
            </li>

            <li data-reveal="right">
              <div class="restaurant-card">

                <div class="card-icon">
                  <img src="./assets/images/rest-1.jpg" width="100" height="100" loading="lazy" alt="Nescafe"
                    class="w-100">
                </div>

                <h3 class="h5 card-title">Nescafe</h3>

                <div class="rating-wrapper">
                  <ion-icon name="star" aria-hidden="true"></ion-icon>
                  <ion-icon name="star" aria-hidden="true"></ion-icon>
                  <ion-icon name="star" aria-hidden="true"></ion-icon>
                  <ion-icon name="star" aria-hidden="true"></ion-icon>
                  <ion-icon name="star-outline" aria-hidden="true"></ion-icon>
                </div>

                <!-- <div class="card-meta-wrapper">
                  <a href="#" class="card-meta">american</a>
                  <a href="#" class="card-meta">steakhouse</a>
                </div> -->

                <p class="card-text">
                  Nescafé in our college where we can Refill our Energy. It has different types of coffee for different
                  occasions and preferences. We can have it with our friends and food in the canteen, which is clean and
                  spacious. Nescafé connects us with others and helps us achieve our goals. Nescafé is our college
                  buddy.
                </p>

              </div>
            </li>

            <li data-reveal="left">
              <div class="restaurant-card">

                <div class="card-icon">
                  <img src="./assets/images/rest-2.jpg" width="100" height="100" loading="lazy" alt="Let Me Bake"
                    class="w-100">
                </div>

                <h3 class="h5 card-title">Let Me Bake</h3>

                <div class="rating-wrapper">
                  <ion-icon name="star" aria-hidden="true"></ion-icon>
                  <ion-icon name="star" aria-hidden="true"></ion-icon>
                  <ion-icon name="star" aria-hidden="true"></ion-icon>
                  <ion-icon name="star-half" aria-hidden="true"></ion-icon>
                  <ion-icon name="star-outline" aria-hidden="true"></ion-icon>
                </div>

                <!-- <div class="card-meta-wrapper">
                  <a href="#" class="card-meta">american</a>
                  <a href="#" class="card-meta">steakhouse</a>
                </div> -->

                <p class="card-text">
                  Let Me Bake is a place where I can enjoy delicious cakes, pastries, pizzas, burgers, and more. It
                  offers fresh and quality food and drinks at affordable prices. It also has a cozy and friendly
                  atmosphere, where I can relax or socialize.
                </p>

              </div>
            </li>
          </ul>

          <a href="#" class="btn btn-secondary has-after">
            <span class="span">See All</span>

            <ion-icon name="arrow-forward" aria-hidden="true"></ion-icon>
          </a>

        </div>
      </section>

      <section class="section cta has-bg-image" aria-labelledby="cta-label"
        style="background-image: url('./assets/images/hero-bg.png')">
        <div class="container">

          <figure class="cta-banner" data-reveal="left">
            <img src="./assets/images/contact.png" width="680" height="704" loading="lazy" alt="cta banner"
              class="w-100">
          </figure>

          <div class="cta-content" data-reveal="right">

            <h2 class="h3 section-title" id="cta-label">
              Food from your favorite Cafe .
            </h2>

            <p class="section-text">
              You are not just ordering food, you are investing in your happiness.
            </p>

            <a href="./customer/Restaurantly/login-page.php" class="btn btn-primary has-after">Order Now</a>

          </div>

        </div>
      </section>

      <!-- <section class="stats" aria-label="statistics" data-reveal>
        <div class="container">

          <ul class="grid-list">

            <li>
              <h2 class="h3 section-title">Service shows good taste.</h2>
            </li>

            <li class="stats-item">
              <span class="span">976</span>

              <p class="stats-text">
                Satisfied <br>
                Customer
              </p>
            </li>

            <li class="stats-item">
              <span class="span">12</span>

              <p class="stats-text">
                Best <br>
                Restaurants
              </p>
            </li>

            <li class="stats-item">
              <span class="span">1K+</span>

              <p class="stats-text">
                Food <br>
                Delivered
              </p>
            </li>

          </ul>

        </div>
      </section> -->


      <section class="section testi" aria-labelledby="testi-label">
        <div class="container">

          <div class="testi-content" data-reveal="left">

            <h2 class="h2 section-title" id="testi-label">What customers say about us</h2>

            <blockquote class="testi-text">
              Lorem ipsum dolor sit amet consectetur adipisicing elit. Voluptatem libero vitae eius inventore!
            </blockquote>

            <div class="wrapper">
              <img src="./assets/images/testi-avatar.jpg" width="70" height="70" loading="lazy" alt="Thomas Adamson"
                class="author-img">

              <div>
                <p class="author-title">Pawan Dasila</p>

                <div class="rating-wrapper">
                  <ion-icon name="star" aria-hidden="true"></ion-icon>
                  <ion-icon name="star" aria-hidden="true"></ion-icon>
                  <ion-icon name="star" aria-hidden="true"></ion-icon>
                  <ion-icon name="star" aria-hidden="true"></ion-icon>
                  <ion-icon name="star" aria-hidden="true"></ion-icon>
                </div>
              </div>
            </div>

          </div>

          <figure class="testi-banner" data-reveal="right">
            <style>
              svg#freepik_stories-online-review:not(.animated) .animable {
                opacity: 0;
              }

              svg#freepik_stories-online-review.animated #elwz8ugnq46ts {
                animation: 1s 1 forwards linear slideUp;
                animation-delay: 0s;
              }

              svg#freepik_stories-online-review.animated #elegu03vfcs1f {
                animation: 1s 1 forwards linear slideUp;
                animation-delay: 0.022727272727272728s;
                opacity: 0
              }

              svg#freepik_stories-online-review.animated #elj4oyopbb6zj {
                animation: 1s 1 forwards linear slideUp;
                animation-delay: 0.045454545454545456s;
                opacity: 0
              }

              svg#freepik_stories-online-review.animated #elswainhil8n {
                animation: 1s 1 forwards linear slideUp;
                animation-delay: 0.06818181818181818s;
                opacity: 0
              }

              svg#freepik_stories-online-review.animated #el1jo7u9c1iy4 {
                animation: 1s 1 forwards linear slideUp;
                animation-delay: 0.09090909090909091s;
                opacity: 0
              }

              svg#freepik_stories-online-review.animated #ele4h4s55y0tj {
                animation: 1s 1 forwards linear slideUp;
                animation-delay: 0.11363636363636365s;
                opacity: 0
              }

              svg#freepik_stories-online-review.animated #el3knecf2tt32 {
                animation: 1s 1 forwards linear slideUp;
                animation-delay: 0.13636363636363635s;
                opacity: 0
              }

              svg#freepik_stories-online-review.animated #el9tf4ncvkrdl {
                animation: 1s 1 forwards linear slideUp;
                animation-delay: 0.1590909090909091s;
                opacity: 0
              }

              svg#freepik_stories-online-review.animated #elo2n1dvtg90n {
                animation: 1s 1 forwards linear slideUp;
                animation-delay: 0.18181818181818182s;
                opacity: 0
              }

              svg#freepik_stories-online-review.animated #elbjzkt4zgifi {
                animation: 1s 1 forwards linear slideUp;
                animation-delay: 0.20454545454545456s;
                opacity: 0
              }

              svg#freepik_stories-online-review.animated #el7qmhfn0ryo {
                animation: 1s 1 forwards linear slideUp;
                animation-delay: 0.2272727272727273s;
                opacity: 0
              }

              svg#freepik_stories-online-review.animated #el7scigfbz1r8 {
                animation: 1s 1 forwards linear slideUp;
                animation-delay: 0.25s;
                opacity: 0
              }

              svg#freepik_stories-online-review.animated #elhk20si8y5k6 {
                animation: 1s 1 forwards linear slideUp;
                animation-delay: 0.2727272727272727s;
                opacity: 0
              }

              svg#freepik_stories-online-review.animated #eltxehe6qjte {
                animation: 1s 1 forwards linear slideUp;
                animation-delay: 0.29545454545454547s;
                opacity: 0
              }

              svg#freepik_stories-online-review.animated #elqacubxcbbb {
                animation: 1s 1 forwards linear slideUp;
                animation-delay: 0.3181818181818182s;
                opacity: 0
              }

              svg#freepik_stories-online-review.animated #elzk77mbei12 {
                animation: 1s 1 forwards linear slideUp;
                animation-delay: 0.34090909090909094s;
                opacity: 0
              }

              svg#freepik_stories-online-review.animated #eljd8yjts4cia {
                animation: 1s 1 forwards linear slideUp;
                animation-delay: 0.36363636363636365s;
                opacity: 0
              }

              svg#freepik_stories-online-review.animated #el03jc28u8xlmv {
                animation: 1s 1 forwards linear slideUp;
                animation-delay: 0.38636363636363635s;
                opacity: 0
              }

              svg#freepik_stories-online-review.animated #el4bqdr9zcb0u {
                animation: 1s 1 forwards linear slideUp;
                animation-delay: 0.4090909090909091s;
                opacity: 0
              }

              svg#freepik_stories-online-review.animated #elbp77xvsgyh7 {
                animation: 1s 1 forwards linear slideUp;
                animation-delay: 0.4318181818181818s;
                opacity: 0
              }

              svg#freepik_stories-online-review.animated #el69hc2hbc4rg {
                animation: 1s 1 forwards linear slideUp;
                animation-delay: 0.4545454545454546s;
                opacity: 0
              }

              svg#freepik_stories-online-review.animated #elowgqckxkb3 {
                animation: 1s 1 forwards linear slideUp;
                animation-delay: 0.4772727272727273s;
                opacity: 0
              }

              svg#freepik_stories-online-review.animated #eldi3kxyuuml {
                animation: 1s 1 forwards linear slideUp;
                animation-delay: 0.5s;
                opacity: 0
              }

              svg#freepik_stories-online-review.animated #el4oeljtxuhir {
                animation: 1s 1 forwards linear slideUp;
                animation-delay: 0.5227272727272727s;
                opacity: 0
              }

              svg#freepik_stories-online-review.animated #el8ci0y1to743 {
                animation: 1s 1 forwards linear slideUp;
                animation-delay: 0.5454545454545454s;
                opacity: 0
              }

              svg#freepik_stories-online-review.animated #elhd2dr3xum0d {
                animation: 1s 1 forwards linear slideUp;
                animation-delay: 0.5681818181818182s;
                opacity: 0
              }

              svg#freepik_stories-online-review.animated #elmrqm0g6rf7 {
                animation: 1s 1 forwards linear slideUp;
                animation-delay: 0.5909090909090909s;
                opacity: 0
              }

              svg#freepik_stories-online-review.animated #elr6t1rrza60r {
                animation: 1s 1 forwards linear slideUp;
                animation-delay: 0.6136363636363636s;
                opacity: 0
              }

              svg#freepik_stories-online-review.animated #elu3qwabi8569 {
                animation: 1s 1 forwards linear slideUp;
                animation-delay: 0.6363636363636364s;
                opacity: 0
              }

              svg#freepik_stories-online-review.animated #elg9y6z7z1yu6 {
                animation: 1s 1 forwards linear slideUp;
                animation-delay: 0.6590909090909091s;
                opacity: 0
              }

              svg#freepik_stories-online-review.animated #elmxm4892u87 {
                animation: 1s 1 forwards linear slideUp;
                animation-delay: 0.6818181818181819s;
                opacity: 0
              }

              svg#freepik_stories-online-review.animated #elfatwpn0hwdv {
                animation: 1s 1 forwards linear slideUp;
                animation-delay: 0.7045454545454546s;
                opacity: 0
              }

              svg#freepik_stories-online-review.animated #el0fc1rwonu2na {
                animation: 1s 1 forwards linear slideUp;
                animation-delay: 0.7272727272727273s;
                opacity: 0
              }

              svg#freepik_stories-online-review.animated #el8tmz5x69szh {
                animation: 1s 1 forwards linear slideUp;
                animation-delay: 0.75s;
                opacity: 0
              }

              svg#freepik_stories-online-review.animated #elb9gzdibhji {
                animation: 1s 1 forwards linear slideUp;
                animation-delay: 0.7727272727272727s;
                opacity: 0
              }

              svg#freepik_stories-online-review.animated #el813zvbw31ux {
                animation: 1s 1 forwards linear slideUp;
                animation-delay: 0.7954545454545455s;
                opacity: 0
              }

              svg#freepik_stories-online-review.animated #el0rvftt4t1qq {
                animation: 1s 1 forwards linear slideUp;
                animation-delay: 0.8181818181818182s;
                opacity: 0
              }

              svg#freepik_stories-online-review.animated #elv0wt57qo0s {
                animation: 1s 1 forwards linear slideUp;
                animation-delay: 0.8409090909090909s;
                opacity: 0
              }

              svg#freepik_stories-online-review.animated #elgmq5759yf6 {
                animation: 1s 1 forwards linear slideUp;
                animation-delay: 0.8636363636363636s;
                opacity: 0
              }

              svg#freepik_stories-online-review.animated #elxx4hmhbxp2d {
                animation: 1s 1 forwards linear slideUp;
                animation-delay: 0.8863636363636364s;
                opacity: 0
              }

              svg#freepik_stories-online-review.animated #elj7b8x8vx28a {
                animation: 1s 1 forwards linear slideUp;
                animation-delay: 0.9090909090909092s;
                opacity: 0
              }

              svg#freepik_stories-online-review.animated #elrhn2xkifru {
                animation: 1s 1 forwards linear slideUp;
                animation-delay: 0.9318181818181819s;
                opacity: 0
              }

              svg#freepik_stories-online-review.animated #el9emcz91idzl {
                animation: 1s 1 forwards linear slideUp;
                animation-delay: 0.9545454545454546s;
                opacity: 0
              }

              svg#freepik_stories-online-review.animated #ela0ut88bmrdn {
                animation: 1s 1 forwards linear slideUp;
                animation-delay: 0.9772727272727273s;
                opacity: 0
              }

              svg#freepik_stories-online-review.animated #freepik--background-complete--inject-62 {
                animation: 1s 1 forwards linear slideUp, 1.5s Infinite linear floating;
                animation-delay: 0s, 1s;
              }

              svg#freepik_stories-online-review.animated #freepik--Character--inject-62 {
                animation: 1s 1 forwards cubic-bezier(.36, -0.01, .5, 1.38) slideUp;
                animation-delay: 0s;
              }

              svg#freepik_stories-online-review.animated #freepik--Review--inject-62 {
                animation: 1s 1 forwards ease-in fadeIn, 1.5s Infinite linear floating;
                animation-delay: 0s, 1s;
              }

              @keyframes slideUp {
                0% {
                  opacity: 0;
                  transform: translateY(30px);
                }

                100% {
                  opacity: 1;
                  transform: inherit;
                }
              }

              @keyframes floating {
                0% {
                  opacity: 1;
                  transform: translateY(0px);
                }

                50% {
                  transform: translateY(-10px);
                }

                100% {
                  opacity: 1;
                  transform: translateY(0px);
                }
              }

              @keyframes fadeIn {
                0% {
                  opacity: 0;
                }

                100% {
                  opacity: 1;
                }
              }
            </style>
            <svg class="animated" id="freepik_stories-online-review" xmlns="http://www.w3.org/2000/svg"
              viewBox="0 0 500 500" version="1.1" xmlns:xlink="http://www.w3.org/1999/xlink"
              xmlns:svgjs="http://svgjs.com/svgjs">
              <g id="freepik--background-complete--inject-62" class="animable"
                style="transform-origin: 250px 227.22px;">
                <rect y="382.4" width="500" height="0.25"
                  style="fill: rgb(235, 235, 235); transform-origin: 250px 382.525px;" id="elwz8ugnq46ts"
                  class="animable"></rect>
                <rect x="355.33" y="389.91" width="33.12" height="0.25"
                  style="fill: rgb(235, 235, 235); transform-origin: 371.89px 390.035px;" id="elegu03vfcs1f"
                  class="animable"></rect>
                <rect x="257.97" y="398.37" width="44.03" height="0.25"
                  style="fill: rgb(235, 235, 235); transform-origin: 279.985px 398.495px;" id="elj4oyopbb6zj"
                  class="animable"></rect>
                <rect x="389.46" y="399.19" width="44.78" height="0.25"
                  style="fill: rgb(235, 235, 235); transform-origin: 411.85px 399.315px;" id="elswainhil8n"
                  class="animable"></rect>
                <rect x="53.69" y="389.66" width="43.19" height="0.25"
                  style="fill: rgb(235, 235, 235); transform-origin: 75.285px 389.785px;" id="el1jo7u9c1iy4"
                  class="animable"></rect>
                <rect x="105.79" y="389.66" width="6.33" height="0.25"
                  style="fill: rgb(235, 235, 235); transform-origin: 108.955px 389.785px;" id="ele4h4s55y0tj"
                  class="animable"></rect>
                <rect x="132.7" y="393.88" width="93.68" height="0.25"
                  style="fill: rgb(235, 235, 235); transform-origin: 179.54px 394.005px;" id="el3knecf2tt32"
                  class="animable"></rect>
                <path
                  d="M237,337.8H43.91a5.71,5.71,0,0,1-5.7-5.71V60.66A5.71,5.71,0,0,1,43.91,55H237a5.71,5.71,0,0,1,5.71,5.71V332.09A5.71,5.71,0,0,1,237,337.8ZM43.91,55.2a5.46,5.46,0,0,0-5.45,5.46V332.09a5.46,5.46,0,0,0,5.45,5.46H237a5.47,5.47,0,0,0,5.46-5.46V60.66A5.47,5.47,0,0,0,237,55.2Z"
                  style="fill: rgb(235, 235, 235); transform-origin: 140.46px 196.4px;" id="el9tf4ncvkrdl"
                  class="animable"></path>
                <path
                  d="M453.31,337.8H260.21a5.72,5.72,0,0,1-5.71-5.71V60.66A5.72,5.72,0,0,1,260.21,55h193.1A5.71,5.71,0,0,1,459,60.66V332.09A5.71,5.71,0,0,1,453.31,337.8ZM260.21,55.2a5.47,5.47,0,0,0-5.46,5.46V332.09a5.47,5.47,0,0,0,5.46,5.46h193.1a5.47,5.47,0,0,0,5.46-5.46V60.66a5.47,5.47,0,0,0-5.46-5.46Z"
                  style="fill: rgb(235, 235, 235); transform-origin: 356.75px 196.4px;" id="elo2n1dvtg90n"
                  class="animable"></path>
                <g id="elbjzkt4zgifi" class="">
                  <rect x="341.71" y="79.14" width="93.46" height="171.83"
                    style="fill: rgb(230, 230, 230); transform-origin: 388.44px 165.055px; transform: rotate(180deg);"
                    class="animable" id="elge0rdpjq879"></rect>
                </g>
                <g id="el7qmhfn0ryo" class="">
                  <rect x="331.06" y="79.14" width="101.57" height="171.83"
                    style="fill: rgb(240, 240, 240); transform-origin: 381.845px 165.055px; transform: rotate(180deg);"
                    class="animable" id="elyu260mjkdh"></rect>
                </g>
                <g id="el7scigfbz1r8" class="">
                  <rect x="304.44" y="122.78" width="154.81" height="84.55"
                    style="fill: rgb(255, 255, 255); transform-origin: 381.845px 165.055px; transform: rotate(90deg);"
                    class="animable" id="el0ac4t6wprnb"></rect>
                </g>
                <rect x="53.69" y="86.1" width="73.6" height="85.54"
                  style="fill: rgb(224, 224, 224); transform-origin: 90.49px 128.87px;" id="elhk20si8y5k6"
                  class="animable"></rect>
                <rect x="56.18" y="86.1" width="75.51" height="85.54"
                  style="fill: rgb(245, 245, 245); transform-origin: 93.935px 128.87px;" id="eltxehe6qjte"
                  class="animable"></rect>
                <g id="elqacubxcbbb" class="">
                  <rect x="57.9" y="97.44" width="72.06" height="62.86"
                    style="fill: rgb(255, 255, 255); transform-origin: 93.93px 128.87px; transform: rotate(90deg);"
                    class="animable" id="el0nfnfyxfhw3q"></rect>
                </g>
                <rect x="156.93" y="136.03" width="73.6" height="85.54"
                  style="fill: rgb(224, 224, 224); transform-origin: 193.73px 178.8px;" id="elzk77mbei12"
                  class="animable"></rect>
                <rect x="159.42" y="136.03" width="75.51" height="85.54"
                  style="fill: rgb(245, 245, 245); transform-origin: 197.175px 178.8px;" id="eljd8yjts4cia"
                  class="animable"></rect>
                <g id="el03jc28u8xlmv" class="">
                  <rect x="161.15" y="147.38" width="72.06" height="62.86"
                    style="fill: rgb(255, 255, 255); transform-origin: 197.18px 178.81px; transform: rotate(90deg);"
                    class="animable" id="el4dufy3tkgup"></rect>
                </g>
                <path
                  d="M188.45,292.81h0c-.5,0-1,0-1.52.05a21.71,21.71,0,0,0-19.42,27.27,108.32,108.32,0,0,1,3.4,28.24v27.74a3.64,3.64,0,0,0,3.65,3.64h88V292.81Z"
                  style="fill: rgb(240, 240, 240); transform-origin: 214.666px 336.28px;" id="el4bqdr9zcb0u"
                  class="animable"></path>
                <path
                  d="M284.27,314.5A21.68,21.68,0,0,0,241,313.08a22,22,0,0,0,.7,7.06,108.75,108.75,0,0,1,3.4,28.24v27.74a3.64,3.64,0,0,0,3.64,3.64h27.8a3.64,3.64,0,0,0,3.64-3.64V346.76a98.82,98.82,0,0,1,3.36-26.47A21.69,21.69,0,0,0,284.27,314.5Z"
                  style="fill: rgb(245, 245, 245); transform-origin: 262.614px 336.536px;" id="elbp77xvsgyh7"
                  class="animable"></path>
                <rect x="153.69" y="326.97" width="79.02" height="52.79"
                  style="fill: rgb(240, 240, 240); transform-origin: 193.2px 353.365px;" id="el69hc2hbc4rg"
                  class="animable"></rect>
                <path
                  d="M163.7,252.2H90.76c-9.07,0-15.23,7.35-13.76,16.41L88.38,338.9H194.15l-11.38-70.29C181.3,259.55,172.76,252.2,163.7,252.2Z"
                  style="fill: rgb(235, 235, 235); transform-origin: 135.467px 295.55px;" id="elowgqckxkb3"
                  class="animable"></path>
                <path
                  d="M185.15,252.2H110.63c-8.63,0-14.49,7-13.09,15.62l11.51,71.08H214.81L203.3,267.82C201.9,259.2,193.78,252.2,185.15,252.2Z"
                  style="fill: rgb(245, 245, 245); transform-origin: 156.072px 295.55px;" id="eldi3kxyuuml"
                  class="animable"></path>
                <path
                  d="M158.86,322.15H231.7a4.76,4.76,0,0,1,4.76,4.76v12a4.76,4.76,0,0,1-4.76,4.76H158.86a1.42,1.42,0,0,1-1.42-1.42V323.57A1.42,1.42,0,0,1,158.86,322.15Z"
                  style="fill: rgb(235, 235, 235); transform-origin: 196.95px 332.91px;" id="el4oeljtxuhir"
                  class="animable"></path>
                <path
                  d="M80.59,292.81h0c-.5,0-1,0-1.52.05A21.76,21.76,0,0,0,59,313.08a22,22,0,0,0,.7,7.06,108.32,108.32,0,0,1,3.4,28.24v27.74a3.64,3.64,0,0,0,3.64,3.64h88V292.81Z"
                  style="fill: rgb(240, 240, 240); transform-origin: 106.848px 336.285px;" id="el8ci0y1to743"
                  class="animable"></path>
                <path
                  d="M176.41,314.5a21.68,21.68,0,1,0-42.62,5.64,108.75,108.75,0,0,1,3.4,28.24v27.74a3.64,3.64,0,0,0,3.64,3.64h27.8a3.64,3.64,0,0,0,3.64-3.64V346.76a99.22,99.22,0,0,1,3.35-26.47A21.3,21.3,0,0,0,176.41,314.5Z"
                  style="fill: rgb(245, 245, 245); transform-origin: 154.73px 336.302px;" id="elhd2dr3xum0d"
                  class="animable"></path>
                <path d="M261,382.4H82.14a2.64,2.64,0,0,1-2.64-2.64H263.68A2.64,2.64,0,0,1,261,382.4Z"
                  style="fill: rgb(224, 224, 224); transform-origin: 171.59px 381.08px;" id="elmrqm0g6rf7"
                  class="animable"></path>
                <rect x="410.7" y="341.71" width="43.04" height="3.53"
                  style="fill: rgb(230, 230, 230); transform-origin: 432.22px 343.475px;" id="elr6t1rrza60r"
                  class="animable"></rect>
                <g id="elu3qwabi8569" class="">
                  <rect x="329.52" y="301.13" width="7.95" height="81.27"
                    style="fill: rgb(230, 230, 230); transform-origin: 333.495px 341.765px; transform: rotate(180deg);"
                    class="animable" id="eli7ibp3lnjw"></rect>
                </g>
                <g id="elg9y6z7z1yu6" class="">
                  <rect x="302" y="341.71" width="108.7" height="3.53"
                    style="fill: rgb(245, 245, 245); transform-origin: 356.35px 343.475px; transform: rotate(180deg);"
                    class="animable" id="el1qy44k1e7pa"></rect>
                </g>
                <rect x="410.7" y="361.04" width="43.04" height="3.53"
                  style="fill: rgb(230, 230, 230); transform-origin: 432.22px 362.805px;" id="elmxm4892u87"
                  class="animable"></rect>
                <g id="elfatwpn0hwdv" class="">
                  <rect x="302" y="361.04" width="108.7" height="3.53"
                    style="fill: rgb(245, 245, 245); transform-origin: 356.35px 362.805px; transform: rotate(180deg);"
                    class="animable" id="els7mtmvf2ks"></rect>
                </g>
                <rect x="410.7" y="303.06" width="43.04" height="3.53"
                  style="fill: rgb(230, 230, 230); transform-origin: 432.22px 304.825px;" id="el0fc1rwonu2na"
                  class="animable"></rect>
                <g id="el8tmz5x69szh" class="">
                  <rect x="302" y="303.06" width="108.7" height="3.53"
                    style="fill: rgb(245, 245, 245); transform-origin: 356.35px 304.825px; transform: rotate(180deg);"
                    class="animable" id="elpwo87mvyiua"></rect>
                </g>
                <rect x="410.7" y="322.39" width="43.04" height="3.53"
                  style="fill: rgb(230, 230, 230); transform-origin: 432.22px 324.155px;" id="elb9gzdibhji"
                  class="animable"></rect>
                <g id="el813zvbw31ux" class="">
                  <rect x="302" y="322.39" width="108.7" height="3.53"
                    style="fill: rgb(245, 245, 245); transform-origin: 356.35px 324.155px; transform: rotate(180deg);"
                    class="animable" id="el8vtl5kp60j"></rect>
                </g>
                <g id="el0rvftt4t1qq" class="">
                  <rect x="438.22" y="301.13" width="7.95" height="81.27"
                    style="fill: rgb(230, 230, 230); transform-origin: 442.195px 341.765px; transform: rotate(180deg);"
                    class="animable" id="elexkike63d79"></rect>
                </g>
                <g id="elv0wt57qo0s" class="">
                  <rect x="402.76" y="301.13" width="7.95" height="81.27"
                    style="fill: rgb(245, 245, 245); transform-origin: 406.735px 341.765px; transform: rotate(180deg);"
                    class="animable" id="elcti0lktgnnh"></rect>
                </g>
                <g id="elgmq5759yf6" class="">
                  <rect x="302" y="301.13" width="7.95" height="81.27"
                    style="fill: rgb(245, 245, 245); transform-origin: 305.975px 341.765px; transform: rotate(180deg);"
                    class="animable" id="elu153ppj9qa"></rect>
                </g>
                <g id="elxx4hmhbxp2d" class="">
                  <rect x="380.18" y="252.78" width="4.25" height="47.39"
                    style="fill: rgb(230, 230, 230); transform-origin: 382.305px 276.475px; transform: rotate(180deg);"
                    class="animable" id="el13e1hgdoimsr"></rect>
                </g>
                <g id="elj7b8x8vx28a" class="">
                  <rect x="380.72" y="252.75" width="1.2" height="47.39"
                    style="fill: rgb(240, 240, 240); transform-origin: 381.32px 276.445px; transform: rotate(180deg);"
                    class="animable" id="elk75cytyghj"></rect>
                </g>
                <path d="M366.56,303.06H398a4,4,0,0,0-4-4H370.53a4,4,0,0,0-4,4Z"
                  style="fill: rgb(240, 240, 240); transform-origin: 382.265px 301.06px;" id="elrhn2xkifru"
                  class="animable"></path>
                <g id="el9emcz91idzl" class="">
                  <rect x="374.78" y="297.72" width="2.45" height="4.17" rx="0.43"
                    style="fill: rgb(240, 240, 240); transform-origin: 376.005px 299.805px; transform: rotate(180deg);"
                    class="animable" id="elfg2p7k9gw8"></rect>
                </g>
                <path d="M363.27,264h38.07l-3.64-30.36a7.06,7.06,0,0,0-7-6.23H373.93a7.08,7.08,0,0,0-7,6.23Z"
                  style="fill: rgb(245, 245, 245); transform-origin: 382.305px 245.705px;" id="ela0ut88bmrdn"
                  class="animable"></path>
              </g>
              <g id="freepik--Shadow--inject-62" class="animable" style="transform-origin: 250px 416.24px;">
                <ellipse id="freepik--path--inject-62" cx="250" cy="416.24" rx="193.89" ry="11.32"
                  style="fill: rgb(245, 245, 245); transform-origin: 250px 416.24px;" class="animable"></ellipse>
              </g>
              <g id="freepik--Character--inject-62" class="animable" style="transform-origin: 302.705px 258.462px;">
                <path
                  d="M295.71,162.37l-.35,1.18-.32,1c-.22.67-.46,1.29-.7,1.93-.48,1.25-1,2.47-1.57,3.68a66.5,66.5,0,0,1-3.75,7c-.69,1.13-1.42,2.22-2.16,3.31s-1.53,2.14-2.36,3.17a68.69,68.69,0,0,1-5.23,5.95l-.39.4A6.08,6.08,0,0,1,277,191.3a14.85,14.85,0,0,1-6.62,1.23,16.75,16.75,0,0,1-5.74-1.35,20.51,20.51,0,0,1-4.29-2.46,31,31,0,0,1-3.37-2.85,42.51,42.51,0,0,1-5.16-6.26c-.74-1.08-1.42-2.19-2.07-3.31s-1.21-2.24-1.82-3.53a4,4,0,0,1,6.34-4.64l.26.24,2.44,2.24c.83.76,1.68,1.49,2.53,2.19a44.71,44.71,0,0,0,5.1,3.74,14.25,14.25,0,0,0,4.58,2,2.34,2.34,0,0,0,1.27,0,.67.67,0,0,0,.32-.3l-2.3,1.74c1.27-1.72,2.5-3.46,3.63-5.26s2.21-3.66,3.22-5.53,1.94-3.8,2.8-5.73c.44-1,.83-1.94,1.23-2.9l1-2.62.28-.72a8,8,0,0,1,15.1,5.13Z"
                  style="fill: rgb(38, 50, 56); transform-origin: 271.759px 172.471px;" id="elyqhmnyzpbck"
                  class="animable"></path>
                <path d="M250.76,172.82,244,170.47l-1.42-9.26s11.33,3,11.28,8.46Z"
                  style="fill: rgb(206, 122, 99); transform-origin: 248.22px 167.015px;" id="el02huzib1f78q"
                  class="animable"></path>
                <path
                  d="M290.58,124.58c-4.41-1.55-10.5-6.83-8.11-13.66,1.82-5.18,8.56-5.64,11.21-4.09s2.76-1.63,6.15-2.85,5.78,1.85,7.5,3.46,3.73.39,6.28.5,4.37,3.45,2.95,5.89c-2.5,4.28,1.63,7-1.5,10.34-4.61,4.85-1,9.61-7.5,14.44C303.61,141.57,292.39,136.14,290.58,124.58Z"
                  style="fill: rgb(38, 50, 56); transform-origin: 299.495px 121.553px;" id="el965ncbelf79"
                  class="animable"></path>
                <path
                  d="M290.5,129.1a1.23,1.23,0,0,1-.54.17,1.26,1.26,0,0,1-1.36-1.14,12.48,12.48,0,0,1,4.12-10.71,1.24,1.24,0,0,1,1.76.22,1.25,1.25,0,0,1-.2,1.76h0a9.91,9.91,0,0,0-3.17,8.51A1.26,1.26,0,0,1,290.5,129.1Z"
                  style="fill: rgb(38, 50, 56); transform-origin: 291.639px 123.212px;" id="elsjfvcjtzafi"
                  class="animable"></path>
                <path
                  d="M283.31,152.37s-8.87,22.7-.45,65h40.21c.28-6.17-3.6-36.28,2.35-65.36a105.49,105.49,0,0,0-13.46-1.7,147.53,147.53,0,0,0-17.09,0A74.79,74.79,0,0,0,283.31,152.37Z"
                  style="fill: rgb(255, 255, 255); transform-origin: 302.325px 183.716px;" id="elp13keo92m4"
                  class="animable"></path>
                <path
                  d="M310.27,131c-1.08,5.5-2.15,15.58,1.69,19.25,0,0-6.44,5.22-13.21,10.5a11.39,11.39,0,0,1-3.88-10.5c6.13-1.46,6-6,4.91-10.29Z"
                  style="fill: rgb(206, 122, 99); transform-origin: 303.343px 145.875px;" id="el4h9hlomspyt"
                  class="animable"></path>
                <g id="elqtxfc6h3dz">
                  <path
                    d="M306,134.69l-6.21,5.3a17.2,17.2,0,0,1,.53,3c2,1.9,5.56-2.91,5.81-5.36A8.31,8.31,0,0,0,306,134.69Z"
                    style="opacity: 0.2; transform-origin: 302.997px 139.057px;" class="animable" id="elsqeh91gb9j">
                  </path>
                </g>
                <path
                  d="M310.2,121.75c.28,7.46.82,11.81-2.54,16-5.07,6.28-14.55,3.79-17.05-3.44-2.25-6.5-2.33-17.6,4.64-21.26A10.17,10.17,0,0,1,310.2,121.75Z"
                  style="fill: rgb(206, 122, 99); transform-origin: 299.832px 126.595px;" id="elhsnhmuhgs2k"
                  class="animable"></path>
                <path
                  d="M310,128.65c-2.05,4-4.41-8.65-3.81-10.76-7.25,2-18.37,1.34-17.51-3.72,1-5.71,7.64-5.93,15-5.23C315.83,110.11,312.22,124.31,310,128.65Z"
                  style="fill: rgb(38, 50, 56); transform-origin: 300.456px 119.042px;" id="el6ta9bsnrbi7"
                  class="animable"></path>
                <path
                  d="M306.41,129.36a1.19,1.19,0,0,1-.55-.1,1.26,1.26,0,0,1-.65-1.66,12.48,12.48,0,0,1,8.74-7.43,1.25,1.25,0,0,1,1.45,1,1.27,1.27,0,0,1-1,1.45h0a9.94,9.94,0,0,0-6.86,6A1.23,1.23,0,0,1,306.41,129.36Z"
                  style="fill: rgb(38, 50, 56); transform-origin: 310.261px 124.756px;" id="el65wn8visdla"
                  class="animable"></path>
                <path
                  d="M313.92,127a7.53,7.53,0,0,1-2.92,4.47c-1.95,1.36-3.49-.31-3.44-2.66.05-2.11,1.13-5.35,3.31-5.77S314.41,124.79,313.92,127Z"
                  style="fill: rgb(206, 122, 99); transform-origin: 310.789px 127.473px;" id="el16y7zwyi1rn"
                  class="animable"></path>
                <path
                  d="M278.78,406.37c-.93.23-1.86.32-2.26,0a.67.67,0,0,1-.16-.76.86.86,0,0,1,.45-.53c1.13-.63,4,.19,4.13.23a.17.17,0,0,1,0,.33A13.24,13.24,0,0,1,278.78,406.37Zm-1.48-1.13a1.33,1.33,0,0,0-.32.12.54.54,0,0,0-.28.32c-.08.25,0,.34.05.39.45.39,2.29-.05,3.6-.58A8,8,0,0,0,277.3,405.24Z"
                  style="fill: rgb(38, 50, 56); transform-origin: 278.687px 405.71px;" id="elxv8tdbmcwg"
                  class="animable"></path>
                <path
                  d="M280.93,405.62h-.07c-1-.17-3.08-1.32-3.14-2.18,0-.2.07-.48.53-.64a1.32,1.32,0,0,1,1,.06c1.1.53,1.75,2.45,1.78,2.53a.17.17,0,0,1,0,.18A.19.19,0,0,1,280.93,405.62Zm-2.46-2.52-.1,0c-.31.1-.3.23-.29.27,0,.52,1.5,1.46,2.52,1.78a4.08,4.08,0,0,0-1.48-2A1,1,0,0,0,278.47,403.1Z"
                  style="fill: rgb(38, 50, 56); transform-origin: 279.388px 404.175px;" id="el6jvncwqnvbf"
                  class="animable"></path>
                <polygon points="291.86 408 284.33 409.11 284.57 391.85 292.1 390.75 291.86 408"
                  style="fill: rgb(206, 122, 99); transform-origin: 288.215px 399.93px;" id="elk250189hhni"
                  class="animable"></polygon>
                <path
                  d="M283.2,404.65h9.87a.59.59,0,0,1,.6.51l1,6.65a1.19,1.19,0,0,1-1.18,1.33c-2.95-.05-7.19-.22-10.9-.22-4.33,0-8.22.23-13.3.23-3.07,0-3.64-2.91-2.37-3.38,5.68-2.13,8.72-2.49,14.47-4.54A5.76,5.76,0,0,1,283.2,404.65Z"
                  style="fill: rgb(38, 50, 56); transform-origin: 280.483px 408.9px;" id="elzedgnriqbi8"
                  class="animable"></path>
                <g id="elhstfb5po3gq">
                  <polygon points="284.57 391.86 284.44 400.75 291.98 399.64 292.11 390.75 284.57 391.86"
                    style="opacity: 0.2; transform-origin: 288.275px 395.75px;" class="animable" id="el5zz8m030ekj">
                  </polygon>
                </g>
                <path d="M288,405.18c-.05-3.19.95-8.32-7-5.18-4.74,1.86,1.69,7.33,1.69,7.33Z"
                  style="fill: rgb(38, 50, 56); transform-origin: 283.637px 403.175px;" id="elp1aphtq80p"
                  class="animable"></path>
                <path
                  d="M282.86,217.34s-4,60.57-2.87,82.11c1.1,20.41,1.72,78.31,1.86,93.5a3.26,3.26,0,0,0,3.7,3.19l5.32-.72a3.27,3.27,0,0,0,2.8-2.81c3.44-26.81,7.53-68.17,8.42-90.31,1-25.27,7.22-85,7.22-85Z"
                  style="fill: #407BFF; transform-origin: 294.549px 306.735px;" id="el9z34zuy37ra" class="animable">
                </path>
                <g id="ela2e0gdgyxc">
                  <path
                    d="M282.86,217.34s-4,60.57-2.87,82.11c1.1,20.41,1.72,78.31,1.86,93.5a3.26,3.26,0,0,0,3.7,3.19l5.32-.72a3.27,3.27,0,0,0,2.8-2.81c3.44-26.81,7.53-68.17,8.42-90.31,1-25.27,7.22-85,7.22-85Z"
                    style="fill: rgb(255, 255, 255); opacity: 0.2; transform-origin: 294.549px 306.735px;"
                    class="animable" id="elwch95ikdywe"></path>
                </g>
                <path
                  d="M333.06,405.38c-.87.39-1.77.65-2.23.38a.65.65,0,0,1-.29-.71.84.84,0,0,1,.35-.61c1-.82,4-.52,4.1-.51a.18.18,0,0,1,.16.13.19.19,0,0,1-.07.19A13,13,0,0,1,333.06,405.38Zm-1.66-.85a1.6,1.6,0,0,0-.29.18.51.51,0,0,0-.22.37c0,.25.06.34.12.37.51.31,2.24-.46,3.44-1.2A8,8,0,0,0,331.4,404.53Z"
                  style="fill: rgb(38, 50, 56); transform-origin: 332.837px 404.87px;" id="el69doohxkay9"
                  class="animable"></path>
                <path
                  d="M335,404.27H335c-1,0-3.26-.75-3.47-1.59-.05-.19,0-.48.41-.72a1.27,1.27,0,0,1,1-.12c1.18.33,2.17,2.09,2.21,2.17a.19.19,0,0,1,0,.18A.22.22,0,0,1,335,404.27Zm-2.87-2-.09,0c-.28.16-.25.28-.24.32.13.5,1.74,1.17,2.8,1.31a4.09,4.09,0,0,0-1.81-1.72A.93.93,0,0,0,332.17,402.23Z"
                  style="fill: rgb(38, 50, 56); transform-origin: 333.343px 403.029px;" id="eljoz6b8zz9iq"
                  class="animable"></path>
                <polygon points="346.66 404.71 339.56 407.12 334.85 390.43 341.94 388.02 346.66 404.71"
                  style="fill: rgb(206, 122, 99); transform-origin: 340.755px 397.57px;" id="el5c42bk8j7du"
                  class="animable"></polygon>
                <g id="elo21yxt1qe9p">
                  <path d="M301.52,239c-2.07,8.29-1.52,42.74.62,62.16.51-11.37,1.95-28.9,3.41-45Z"
                    style="opacity: 0.2; transform-origin: 302.886px 270.08px;" class="animable" id="el83jucywcydv">
                  </path>
                </g>
                <path
                  d="M336.83,403.07l9.72-1.75a.63.63,0,0,1,.71.39l2.55,6.3a1.1,1.1,0,0,1-.84,1.5c-2.91.48-7.13,1.06-10.78,1.72-4.26.77-4.29,1-9.29,1.92-3,.55-4.29-2.18-3.16-2.87,5.08-3.08,4.25-3.29,9.41-6.31A5.47,5.47,0,0,1,336.83,403.07Z"
                  style="fill: rgb(38, 50, 56); transform-origin: 337.613px 407.265px;" id="elcetopc9tled"
                  class="animable"></path>
                <g id="elgjngdwisuit">
                  <polygon points="334.85 390.44 337.28 399.04 344.38 396.63 341.95 388.03 334.85 390.44"
                    style="opacity: 0.2; transform-origin: 339.615px 393.535px;" class="animable" id="el44xig5pl3gs">
                  </polygon>
                </g>
                <path
                  d="M297.13,217.34s5.18,60.58,9.17,82.11c3.84,20.72,21.21,79.74,26.33,93.15a3.25,3.25,0,0,0,4.06,1.93l5.13-1.67a3.26,3.26,0,0,0,2.19-3.71c-5.1-26.33-13.22-64.81-15.24-86.85-2.31-25.27-5.7-85-5.7-85Z"
                  style="fill: #407BFF; transform-origin: 320.599px 305.997px;" id="elxs0y2n8aar9" class="animable">
                </path>
                <g id="elguxkcy6zm78">
                  <path
                    d="M297.13,217.34s5.18,60.58,9.17,82.11c3.84,20.72,21.21,79.74,26.33,93.15a3.25,3.25,0,0,0,4.06,1.93l5.13-1.67a3.26,3.26,0,0,0,2.19-3.71c-5.1-26.33-13.22-64.81-15.24-86.85-2.31-25.27-5.7-85-5.7-85Z"
                    style="fill: rgb(255, 255, 255); opacity: 0.2; transform-origin: 320.599px 305.997px;"
                    class="animable" id="elkqjnsh8jew8"></path>
                </g>
                <path
                  d="M299.17,124.93c.06.61-.21,1.13-.61,1.17s-.76-.42-.82-1,.21-1.12.61-1.16S299.11,124.33,299.17,124.93Z"
                  style="fill: rgb(38, 50, 56); transform-origin: 298.455px 125.02px;" id="elm5976wprc5c"
                  class="animable"></path>
                <path
                  d="M292.35,125.61c.06.6-.21,1.12-.61,1.16s-.76-.42-.82-1,.21-1.13.61-1.17S292.29,125,292.35,125.61Z"
                  style="fill: rgb(38, 50, 56); transform-origin: 291.635px 125.685px;" id="eldas4sepojmc"
                  class="animable"></path>
                <path d="M294.55,125.69a21.64,21.64,0,0,1-2.38,5.45,3.5,3.5,0,0,0,2.94.25Z"
                  style="fill: rgb(186, 77, 60); transform-origin: 293.64px 128.646px;" id="elvobno5ipi4"
                  class="animable"></path>
                <path
                  d="M297,132.89a.18.18,0,0,1-.19-.16.18.18,0,0,1,.16-.2,4.78,4.78,0,0,0,3.71-2.25.18.18,0,0,1,.24-.08.19.19,0,0,1,.08.24A5.1,5.1,0,0,1,297,132.89Z"
                  style="fill: rgb(38, 50, 56); transform-origin: 298.912px 131.536px;" id="elngp6qosnus"
                  class="animable"></path>
                <path
                  d="M301,122.53a.38.38,0,0,1-.3-.11,2.83,2.83,0,0,0-2.39-1,.36.36,0,0,1-.41-.29.35.35,0,0,1,.29-.41,3.51,3.51,0,0,1,3,1.17.35.35,0,0,1,0,.51A.4.4,0,0,1,301,122.53Z"
                  style="fill: rgb(38, 50, 56); transform-origin: 299.597px 121.616px;" id="el42st94f9ha9"
                  class="animable"></path>
                <path
                  d="M289.05,123.49a.41.41,0,0,1-.16,0,.36.36,0,0,1-.18-.47,3.54,3.54,0,0,1,2.48-2.09.36.36,0,1,1,.12.7h0a2.83,2.83,0,0,0-1.95,1.68A.35.35,0,0,1,289.05,123.49Z"
                  style="fill: rgb(38, 50, 56); transform-origin: 290.174px 122.204px;" id="elj6132qk3y9"
                  class="animable"></path>
                <path
                  d="M313,149c3.92,0,13.37.21,14.29,3.71s-.09,9.17-1.34,12.5c1.84,5.08,1.25,12.58-.5,14.92,1.92,5.66.67,9.83-.5,11.83.92,2.25,1.75,8.67.34,11.83,1.16,4.5,2.49,12,.41,13.51-2.83,2-10.36,3-15.68,1.74s-3.23-12-2.82-14.5c-2.33-3.08.17-12.33.17-12.33-1.17-2.58.58-12.25.58-12.25-1.41-2.33.42-15,.42-15C306.85,162.42,306.19,149,313,149Z"
                  style="fill: rgb(38, 50, 56); transform-origin: 316.927px 184.299px;" id="eljmhjx0xj70n"
                  class="animable"></path>
                <path
                  d="M284.21,151.33c3.08-1.36,13.4-3.83,11.4-1.11-2.9,3.95-1.12,8.11-2.84,13,1.52,4.67,1,12.3-.41,15A18,18,0,0,1,292,190.2c.75,2,1.44,8.27.27,11.75,1,4.24,1.76,12.79,0,14.72A8.86,8.86,0,0,1,282,218.76c-2.45-1-3.54-9.18-2.33-12-2.38-5.19-.44-12.88-.44-12.88-2.3-4-.52-12.39-.52-12.39-2.28-7.44.52-15.67.52-15.67C278,163.59,279.3,153.5,284.21,151.33Z"
                  style="fill: rgb(38, 50, 56); transform-origin: 286.841px 184.285px;" id="elzbj8mro00fr"
                  class="animable"></path>
                <path
                  d="M291,152.25a3.29,3.29,0,0,1-1.33-2.62,2.59,2.59,0,0,1,2.55-2.65,8.44,8.44,0,0,1,3.34,1c1.57.77,2.15,1.48,2.22,2.64s-2.79,5.24-4.36,4.27S291.88,153.25,291,152.25Z"
                  style="fill: rgb(38, 50, 56); transform-origin: 293.725px 151.009px;" id="elqa24u8bq7nn"
                  class="animable"></path>
                <g id="elbd0ja5ekdsr">
                  <path
                    d="M321.34,166.55c.78-3.37,2.76-3.07,4.73-1.69l-.14.39c1.84,5.08,1.25,12.58-.5,14.92.11.32.21.64.3,1C323.28,178.77,319.88,172.91,321.34,166.55Z"
                    style="opacity: 0.2; transform-origin: 324.022px 172.527px;" class="animable" id="elc5jsqxsm7ce">
                  </path>
                </g>
                <polygon
                  points="321.68 174.78 315.03 177.82 314.38 199.3 296.31 210.94 316.54 218.2 322.03 238.97 328.69 235.94 332.41 202.06 321.68 174.78"
                  style="fill: #407BFF; transform-origin: 314.36px 206.875px;" id="elfexk9l6012j" class="animable">
                </polygon>
                <g id="elyl05m51s9wm">
                  <polygon
                    points="321.68 174.78 315.03 177.82 314.38 199.3 296.31 210.94 316.54 218.2 322.03 238.97 328.69 235.94 332.41 202.06 321.68 174.78"
                    style="opacity: 0.3; transform-origin: 314.36px 206.875px;" class="animable" id="el8127xcsnxnl">
                  </polygon>
                </g>
                <polygon points="363.3 220.14 356.64 223.18 335.18 221.98 344.16 215.92 363.3 220.14"
                  style="fill: #407BFF; transform-origin: 349.24px 219.55px;" id="elglq0al61gzd" class="animable">
                </polygon>
                <g id="el5100aqoamcg">
                  <polygon points="363.3 220.14 356.64 223.18 335.18 221.98 344.16 215.92 363.3 220.14"
                    style="opacity: 0.3; transform-origin: 349.24px 219.55px;" class="animable" id="el71wxfdnwdds">
                  </polygon>
                </g>
                <polygon
                  points="321.68 174.78 338.34 188.36 358.97 182.34 351.2 202.38 363.3 220.14 341.84 218.94 328.69 235.94 323.19 215.16 302.97 207.9 321.03 196.26 321.68 174.78"
                  style="fill: #407BFF; transform-origin: 333.135px 205.36px;" id="elyihchvl9y8j" class="animable">
                </polygon>
                <path d="M332.15,217.48l-.15,6.79,8-.45s1.08-4.25-3.52-7.21Z"
                  style="fill: rgb(206, 122, 99); transform-origin: 336.055px 220.44px;" id="elw2gx5sws41"
                  class="animable"></path>
                <polygon points="334.57 231.07 340.11 227.88 340.01 223.82 332 224.27 334.57 231.07"
                  style="fill: rgb(206, 122, 99); transform-origin: 336.055px 227.445px;" id="el3567fl4i44p"
                  class="animable"></polygon>
                <path
                  d="M327.56,152.51c.65.6,1.14,1.06,1.68,1.59s1,1,1.56,1.56c1,1.05,2,2.13,3,3.22a86.59,86.59,0,0,1,5.51,7,58.85,58.85,0,0,1,4.81,8,30,30,0,0,1,3.16,10.35,13.7,13.7,0,0,1,.09,1.61v.84l0,.58-.17,2.27c-.18,1.49-.36,3-.61,4.41a85.32,85.32,0,0,1-1.82,8.47,99.07,99.07,0,0,1-5.7,16,4,4,0,0,1-7.64-2l0-.16c.43-5.28,1-10.66,1.29-15.88.2-2.62.28-5.21.34-7.74,0-1.27,0-2.51,0-3.75l-.08-1.8,0-.44,0-.19a3.23,3.23,0,0,0-.09-.42,20.51,20.51,0,0,0-2.24-5,59.07,59.07,0,0,0-4-5.75c-1.51-1.92-3.13-3.83-4.81-5.71-.84-.94-1.71-1.86-2.57-2.79l-1.3-1.37-1.23-1.27-.2-.21a8,8,0,0,1,11.17-11.44Z"
                  style="fill: rgb(38, 50, 56); transform-origin: 330.854px 185.606px;" id="eljdtapl68irb"
                  class="animable"></path>
                <path
                  d="M316,151.37c1-.14,1.26-2.48.46-4-.65-1.25-3-1.08-5.1-.54a16,16,0,0,0-4.79,1.92c-2.12,1.17-1.35,2.58-.86,3.69s1.42,3.66,3.42,2.31S314.6,151.58,316,151.37Z"
                  style="fill: rgb(38, 50, 56); transform-origin: 311.046px 150.778px;" id="el2rul9giaiok"
                  class="animable"></path>
                <path d="M341.22,402.63c-.15-3.19.69-8.34-7.16-5-4.69,2,1.9,7.28,1.9,7.28Z"
                  style="fill: rgb(38, 50, 56); transform-origin: 336.798px 400.728px;" id="elpqbfnqvo1i"
                  class="animable"></path>
                <path
                  d="M242.9,154h10.74a1.47,1.47,0,0,1,1.34,1l5.62,20a.77.77,0,0,1-.75,1H249.1a1.49,1.49,0,0,1-1.33-1l-5.62-20A.76.76,0,0,1,242.9,154Z"
                  style="fill: #407BFF; transform-origin: 251.373px 165px;" id="elkcg2oha34j" class="animable"></path>
                <polygon points="248.75 167.48 246.5 159.65 242.58 161.21 244 170.47 248.75 167.48"
                  style="fill: rgb(206, 122, 99); transform-origin: 245.665px 165.06px;" id="el21han1vd28y"
                  class="animable"></polygon>
                <g id="elk6ngzc7323">
                  <path
                    d="M254.5,154.72h0a.51.51,0,0,1,.46.37L260.59,175a.26.26,0,0,1-.26.36h0a.5.5,0,0,1-.46-.36l-5.61-19.94A.27.27,0,0,1,254.5,154.72Z"
                    style="opacity: 0.3; transform-origin: 257.43px 165.04px;" class="animable" id="elv2aasrrifbn">
                  </path>
                </g>
              </g>
              <g id="freepik--Review--inject-62" class="animable" style="transform-origin: 159.08px 139.54px;">
                <rect x="115" y="76.3" width="7.57" height="1"
                  style="fill: #407BFF; transform-origin: 118.785px 76.8px;" id="el307dhcnf4fa" class="animable"></rect>
                <path d="M87,87.64H86A11.35,11.35,0,0,1,97.29,76.3h13.6v1H97.29A10.35,10.35,0,0,0,87,87.64Z"
                  style="fill: #407BFF; transform-origin: 98.445px 81.97px;" id="elhzrq8r5sbav" class="animable"></path>
                <rect x="89.46" y="79.8" width="133.73" height="35.1" rx="7.83"
                  style="fill: #407BFF; transform-origin: 156.325px 97.35px;" id="ellctxf54hlac" class="animable">
                </rect>
                <polygon
                  points="140.35 92.06 142.07 95.54 145.92 96.1 143.13 98.81 143.79 102.65 140.35 100.84 136.91 102.65 137.57 98.81 134.78 96.1 138.63 95.54 140.35 92.06"
                  style="fill: rgb(255, 255, 255); transform-origin: 140.35px 97.355px;" id="elvrhuacrfbqg"
                  class="animable"></polygon>
                <polygon
                  points="155.97 92.06 157.69 95.54 161.54 96.1 158.75 98.81 159.41 102.65 155.97 100.84 152.53 102.65 153.19 98.81 150.4 96.1 154.25 95.54 155.97 92.06"
                  style="fill: rgb(255, 255, 255); transform-origin: 155.97px 97.355px;" id="el79b3te4thw2"
                  class="animable"></polygon>
                <polygon
                  points="171.59 92.06 173.31 95.54 177.16 96.1 174.38 98.81 175.03 102.65 171.59 100.84 168.15 102.65 168.81 98.81 166.02 96.1 169.87 95.54 171.59 92.06"
                  style="fill: rgb(255, 255, 255); transform-origin: 171.59px 97.355px;" id="elct84w790zx5"
                  class="animable"></polygon>
                <polygon
                  points="187.21 92.06 188.93 95.54 192.78 96.1 190 98.81 190.65 102.65 187.21 100.84 183.77 102.65 184.43 98.81 181.64 96.1 185.49 95.54 187.21 92.06"
                  style="fill: rgb(255, 255, 255); transform-origin: 187.21px 97.355px;" id="elrr2h3phgtb"
                  class="animable"></polygon>
                <g id="elfgm6gn8tlzu">
                  <path
                    d="M202.83,94.32l.82,1.67a1,1,0,0,0,.76.54l1.84.27-1.33,1.3a1,1,0,0,0-.29.88l.31,1.84L203.3,100a1.12,1.12,0,0,0-.47-.11,1,1,0,0,0-.46.11l-1.65.87L201,99a1,1,0,0,0-.29-.88l-1.33-1.3,1.84-.27A1,1,0,0,0,202,96l.82-1.67m0-2.26-1.72,3.48-3.85.56,2.79,2.72-.66,3.83,3.44-1.81,3.44,1.81-.66-3.83,2.79-2.72-3.85-.56-1.72-3.48Z"
                    style="fill: rgb(255, 255, 255); opacity: 0.3; transform-origin: 202.82px 97.365px;"
                    class="animable" id="elmyts99vqrvl"></path>
                </g>
                <g id="elf12sq2kiu9d">
                  <circle cx="113.85" cy="97.35" r="12.01"
                    style="fill: rgb(255, 255, 255); opacity: 0.2; transform-origin: 113.85px 97.35px;" class="animable"
                    id="elyknbufs3eal"></circle>
                </g>
                <path d="M123.77,97.35a9.91,9.91,0,0,1-18.63,4.72,9.76,9.76,0,0,1-1.2-4.72,9.92,9.92,0,0,1,19.83,0Z"
                  style="fill: rgb(255, 255, 255); transform-origin: 113.855px 97.5082px;" id="el0fvzfeimlatq"
                  class="animable"></path>
                <path d="M122.57,102.07a9.9,9.9,0,0,1-17.43,0,15.7,15.7,0,0,1,17.43,0Z"
                  style="fill: rgb(38, 50, 56); transform-origin: 113.855px 103.351px;" id="elpe5q83xhavq"
                  class="animable"></path>
                <path d="M118.27,94a4.42,4.42,0,1,1-4.42-4.42A4.42,4.42,0,0,1,118.27,94Z"
                  style="fill: rgb(255, 195, 189); transform-origin: 113.85px 94px;" id="eli24d5722xto"
                  class="animable"></path>
                <rect x="187.21" y="201.78" width="20.01" height="1"
                  style="fill: #407BFF; transform-origin: 197.215px 202.28px;" id="el8mdcoogs6lv" class="animable">
                </rect>
                <rect x="89.46" y="164.18" width="133.73" height="35.1" rx="7.83"
                  style="fill: #407BFF; transform-origin: 156.325px 181.73px;" id="elun0zlsgyat" class="animable">
                </rect>
                <polygon
                  points="140.35 176.43 142.07 179.92 145.92 180.47 143.13 183.19 143.79 187.02 140.35 185.21 136.91 187.02 137.57 183.19 134.78 180.47 138.63 179.92 140.35 176.43"
                  style="fill: rgb(255, 255, 255); transform-origin: 140.35px 181.725px;" id="elj4us7cea58"
                  class="animable"></polygon>
                <polygon
                  points="155.97 176.43 157.69 179.92 161.54 180.47 158.75 183.19 159.41 187.02 155.97 185.21 152.53 187.02 153.19 183.19 150.4 180.47 154.25 179.92 155.97 176.43"
                  style="fill: rgb(255, 255, 255); transform-origin: 155.97px 181.725px;" id="el0fxzrr3cxhj"
                  class="animable"></polygon>
                <polygon
                  points="171.59 176.43 173.31 179.92 177.16 180.47 174.38 183.19 175.03 187.02 171.59 185.21 168.15 187.02 168.81 183.19 166.02 180.47 169.87 179.92 171.59 176.43"
                  style="fill: rgb(255, 255, 255); transform-origin: 171.59px 181.725px;" id="els5tks8q5k98"
                  class="animable"></polygon>
                <polygon
                  points="187.21 176.43 188.93 179.92 192.78 180.47 190 183.19 190.65 187.02 187.21 185.21 183.77 187.02 184.43 183.19 181.64 180.47 185.49 179.92 187.21 176.43"
                  style="fill: rgb(255, 255, 255); transform-origin: 187.21px 181.725px;" id="elorp8x67ss2t"
                  class="animable"></polygon>
                <polygon
                  points="202.83 176.43 204.55 179.92 208.4 180.47 205.62 183.19 206.27 187.02 202.83 185.21 199.39 187.02 200.05 183.19 197.26 180.47 201.11 179.92 202.83 176.43"
                  style="fill: rgb(255, 255, 255); transform-origin: 202.83px 181.725px;" id="elonolpxecnxi"
                  class="animable"></polygon>
                <g id="elhvpyf51a5f">
                  <circle cx="113.85" cy="181.73" r="12.01"
                    style="fill: rgb(255, 255, 255); opacity: 0.2; transform-origin: 113.85px 181.73px; transform: rotate(-45deg);"
                    class="animable" id="elpriprb0r1eo"></circle>
                </g>
                <path d="M123.77,181.72a9.91,9.91,0,0,1-18.63,4.73,9.8,9.8,0,0,1-1.2-4.73,9.92,9.92,0,0,1,19.83,0Z"
                  style="fill: rgb(255, 255, 255); transform-origin: 113.855px 181.883px;" id="elngtyt3fehhp"
                  class="animable"></path>
                <g id="elzicy1kkdqlj">
                  <path d="M122.57,186.45a9.91,9.91,0,0,1-17.43,0,15.7,15.7,0,0,1,17.43,0Z"
                    style="fill: #407BFF; opacity: 0.5; transform-origin: 113.855px 187.726px;" class="animable"
                    id="el2xx96jwo1"></path>
                </g>
                <path d="M118.27,178.33a4.42,4.42,0,1,1-4.42-4.41A4.42,4.42,0,0,1,118.27,178.33Z"
                  style="fill: rgb(255, 181, 115); transform-origin: 113.85px 178.34px;" id="elbtheyb0yx0r"
                  class="animable"></path>
                <rect x="89.46" y="121.99" width="133.73" height="35.1" rx="7.83"
                  style="fill: #407BFF; transform-origin: 156.325px 139.54px;" id="elx0xw5t3en7q" class="animable">
                </rect>
                <polygon points="219.56 142.54 211.16 157.09 232.16 157.09 219.56 142.54"
                  style="fill: #407BFF; transform-origin: 221.66px 149.815px;" id="elx8mqtch4am" class="animable">
                </polygon>
                <polygon
                  points="140.35 134.24 142.07 137.73 145.92 138.29 143.13 141 143.79 144.83 140.35 143.02 136.91 144.83 137.57 141 134.78 138.29 138.63 137.73 140.35 134.24"
                  style="fill: rgb(255, 255, 255); transform-origin: 140.35px 139.535px;" id="elu22jnpga75"
                  class="animable"></polygon>
                <polygon
                  points="155.97 134.24 157.69 137.73 161.54 138.29 158.75 141 159.41 144.83 155.97 143.02 152.53 144.83 153.19 141 150.4 138.29 154.25 137.73 155.97 134.24"
                  style="fill: rgb(255, 255, 255); transform-origin: 155.97px 139.535px;" id="elhaye1kn7pnu"
                  class="animable"></polygon>
                <g id="elh9j1vfa284">
                  <path
                    d="M171.59,136.5l.82,1.67a1,1,0,0,0,.76.55L175,139l-1.33,1.3a1,1,0,0,0-.29.88l.31,1.84-1.64-.87a1,1,0,0,0-.47-.12.93.93,0,0,0-.46.12l-1.65.87.31-1.84a1,1,0,0,0-.29-.88l-1.33-1.3,1.84-.27a1,1,0,0,0,.76-.55l.82-1.67m0-2.26-1.72,3.49-3.85.56,2.79,2.71-.66,3.83,3.44-1.81,3.44,1.81-.66-3.83,2.79-2.71-3.85-.56-1.72-3.49Z"
                    style="fill: rgb(255, 255, 255); opacity: 0.3; transform-origin: 171.58px 139.545px;"
                    class="animable" id="elklgq940ed4"></path>
                </g>
                <g id="eljek57l61z4">
                  <path
                    d="M187.21,136.5l.82,1.67a1,1,0,0,0,.76.55l1.84.27-1.33,1.3a1,1,0,0,0-.29.88l.31,1.84-1.64-.87a1,1,0,0,0-.47-.12.93.93,0,0,0-.46.12l-1.65.87.31-1.84a1,1,0,0,0-.29-.88l-1.33-1.3,1.84-.27a1,1,0,0,0,.76-.55l.82-1.67m0-2.26-1.72,3.49-3.85.56,2.79,2.71-.66,3.83,3.44-1.81,3.44,1.81L190,141l2.79-2.71-3.85-.56-1.72-3.49Z"
                    style="fill: rgb(255, 255, 255); opacity: 0.3; transform-origin: 187.215px 139.535px;"
                    class="animable" id="elvwis3s78rs"></path>
                </g>
                <g id="el4rhmmweh8j8">
                  <path
                    d="M202.83,136.5l.82,1.67a1,1,0,0,0,.76.55l1.84.27-1.33,1.3a1,1,0,0,0-.29.88l.31,1.84-1.64-.87a1,1,0,0,0-.47-.12.93.93,0,0,0-.46.12l-1.65.87.31-1.84a1,1,0,0,0-.29-.88l-1.33-1.3,1.84-.27a1,1,0,0,0,.76-.55l.82-1.67m0-2.26-1.72,3.49-3.85.56,2.79,2.71-.66,3.83,3.44-1.81,3.44,1.81-.66-3.83,2.79-2.71-3.85-.56-1.72-3.49Z"
                    style="fill: rgb(255, 255, 255); opacity: 0.3; transform-origin: 202.83px 139.535px;"
                    class="animable" id="elwf2t9o13zp"></path>
                </g>
                <g id="elqymptfbn55s">
                  <circle cx="113.85" cy="139.54" r="12.01"
                    style="fill: rgb(255, 255, 255); opacity: 0.2; transform-origin: 113.85px 139.54px;"
                    class="animable" id="elz7vcoj5n7cg"></circle>
                </g>
                <path d="M123.77,139.54a9.91,9.91,0,0,1-18.63,4.72,9.76,9.76,0,0,1-1.2-4.72,9.92,9.92,0,1,1,19.83,0Z"
                  style="fill: rgb(255, 255, 255); transform-origin: 113.855px 139.383px;" id="elbarhjeg8yfh"
                  class="animable"></path>
                <path d="M122.57,144.26a9.91,9.91,0,0,1-17.43,0,15.7,15.7,0,0,1,17.43,0Z"
                  style="fill: #407BFF; transform-origin: 113.855px 145.536px;" id="el1ll1cnfqyto" class="animable">
                </path>
                <path d="M118.27,136.15a4.42,4.42,0,1,1-4.42-4.42A4.41,4.41,0,0,1,118.27,136.15Z"
                  style="fill: rgb(181, 91, 82); transform-origin: 113.85px 136.15px;" id="eltr5b8em3lt"
                  class="animable"></path>
              </g>
              <defs>
                <filter id="active" height="200%">
                  <feMorphology in="SourceAlpha" result="DILATED" operator="dilate" radius="2"></feMorphology>
                  <feFlood flood-color="#32DFEC" flood-opacity="1" result="PINK"></feFlood>
                  <feComposite in="PINK" in2="DILATED" operator="in" result="OUTLINE"></feComposite>
                  <feMerge>
                    <feMergeNode in="OUTLINE"></feMergeNode>
                    <feMergeNode in="SourceGraphic"></feMergeNode>
                  </feMerge>
                </filter>
                <filter id="hover" height="200%">
                  <feMorphology in="SourceAlpha" result="DILATED" operator="dilate" radius="2"></feMorphology>
                  <feFlood flood-color="#ff0000" flood-opacity="0.5" result="PINK"></feFlood>
                  <feComposite in="PINK" in2="DILATED" operator="in" result="OUTLINE"></feComposite>
                  <feMerge>
                    <feMergeNode in="OUTLINE"></feMergeNode>
                    <feMergeNode in="SourceGraphic"></feMergeNode>
                  </feMerge>
                  <feColorMatrix type="matrix"
                    values="0   0   0   0   0                0   1   0   0   0                0   0   0   0   0                0   0   0   1   0 ">
                  </feColorMatrix>
                </filter>
              </defs>
            </svg>

          </figure>

        </div>
      </section>



      <!-- <section class="section partnership" aria-label="partnership">
        <div class="container">

          <h2 class="h2 section-title" data-reveal>Want to Join Partnership?</h2>

          <ul class="grid-list">

            <li data-reveal="left">
              <div class="partnership-card">

                <figure class="card-banner img-holder" style="--width: 640; --height: 402;">
                  <img src="./assets/images/partner-1.jpg" width="640" height="402" loading="lazy" alt="Join Courier"
                    class="img-cover">
                </figure>

                <div class="card-content">
                  <h3 class="h5 card-title">Join Courier</h3>

                  <a href="#" class="btn btn-primary has-after">
                    <span class="span">Learn More</span>

                    <ion-icon name="arrow-forward" aria-hidden="true"></ion-icon>
                  </a>
                </div>

              </div>
            </li>

            <li data-reveal="right">
              <div class="partnership-card">

                <figure class="card-banner img-holder" style="--width: 640; --height: 402;">
                  <img src="./assets/images/partner-2.jpg" width="640" height="402" loading="lazy" alt="Join Merchant"
                    class="img-cover">
                </figure>

                <div class="card-content">
                  <h3 class="h5 card-title">Join Merchant</h3>

                  <a href="#" class="btn btn-primary has-after">
                    <span class="span">Learn More</span>

                    <ion-icon name="arrow-forward" aria-hidden="true"></ion-icon>
                  </a>
                </div>

              </div>
            </li>

          </ul>

        </div>
      </section> -->


      <section class="section newsletter" aria-label="newsletter">
        <div class="container">

          <figure class="newsletter-banner" data-reveal="left">
            <img src="./assets/images/user.png" width="680" height="405" loading="lazy" alt="Illustration" class="w-100"
              style="border-radius: 3.2rem;">
          </figure>

          <div class="newsletter-content" data-reveal="right">
            <h2 class="h4 section-title">
              Get the menu of your favorite restaurants every day
            </h2>

            <div class="input-wrapper">
              <input type="email" name="email_address" placeholder="Enter email address" required class="input-field">

              <button type="submit" class="btn btn-primary has-after">
                <ion-icon name="notifications-outline" aria-hidden="true"></ion-icon>
                <span class="span">Subscribe</span>
              </button>
            </div>

          </div>

        </div>
      </section>

    </article>

  </main>


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