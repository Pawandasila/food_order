<?php
session_start();
  $x = $_SESSION['userId'];
  $name =$_SESSION['first'];

  // echo '<script>alert("' .$x. '")</script>';
?>

<header id="header" class="fixed-top d-flex align-items-cente">
    <div class="container-fluid container-xl d-flex align-items-center justify-content-lg-between">

      <h1 class="logo me-auto me-lg-0"><a href="index.html">Fast Delivery</a></h1>
      <!-- Uncomment below if you prefer to use an image logo -->
      <!-- <a href="index.html" class="logo me-auto me-lg-0"><img src="assets/img/logo.png" alt="" class="img-fluid"></a>-->

      <nav id="navbar" class="navbar order-last order-lg-0">
        <ul>
          <li><a class="nav-link scrollto active" href="#hero">Home</a></li>
          <li><a class="nav-link scrollto" href="#about">About</a></li>
          <li><a class="nav-link scrollto" href="#menu">Cafe's</a></li>
          <!-- <li><a class="nav-link scrollto" href="#gallery">Gallery</a></li> -->
          <!-- <li><a class="nav-link scrollto" href="#contact">Contact</a></li> -->
        </ul>
        <i class="bi bi-list mobile-nav-toggle"></i>
      </nav><!-- .navbar -->
      <li class="nav-item dropdown mt-0">
        <a class="avatar-pos nav-link py-0 d-flex align-items-center" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
          <img src="../Restaurantly/assets/img/01.png" alt="User-Profile" class="img-fluid avatar avatar-50 avatar-rounded">
          <div class="caption ms-3 d-none d-md-block ">
              <h6 class="mb-0 caption-title"> <?php echo $name ?> </h6>
          </div>
        </a>
        <ul class="dropdown-menu dropdown-menu-end" aria-labelledby="navbarDropdown">
          <li><a class="dropdown-item" href="profile.php" target="_blank">Profile</a></li>
          <li><a class="dropdown-item" href="#">Privacy Setting</a></li>
          <li><hr class="dropdown-divider"></li>
          <li><a class="dropdown-item" href="logout.php">Logout</a></li>
        </ul>
      </li>

    </div>
  </header>