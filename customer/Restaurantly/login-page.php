<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Sign In to Your Account - Taste Sculptors</title>
  <link rel="stylesheet" href="./assets/css/login.css" />

  <!-- Add CSS links for libraries -->
  <link href="assets/vendor/animate.css/animate.min.css" rel="stylesheet">
  <link href="assets/vendor/aos/aos.css" rel="stylesheet">
  <link href="assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
  <link href="assets/vendor/boxicons/css/boxicons.min.css" rel="stylesheet">
  <link href="assets/vendor/glightbox/css/glightbox.min.css" rel="stylesheet">
  <link href="assets/vendor/swiper/swiper-bundle.min.css" rel="stylesheet">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css"
    integrity="sha384-KyZXEAg3QhqLMpG8r+6ayZJ8r7B6q6eEc6aDkGS6X4U5j4IbbVYUew+OrCXaRkfj" crossorigin="anonymous">
</head>

<body>
  <?php
    // Database connection
    $server = "localhost";
    $username = "root";
    $password = "";
    $con = mysqli_connect($server, $username, $password, "food_order");

    // Check if the form is submitted

    if ($_SERVER["REQUEST_METHOD"] == "POST") {
    if (isset($_POST['loginButton'])) {
        // echo '<script>alert("hello");</script>';
        $username = $_POST['username'];
        $password = $_POST['password'];

        $sql = "INSERT INTO `user_credentials`( `username`, `password_hash`) VALUES ('$username','$password')";

        mysqli_query($con, $sql);
    }
}

  ?>

  <section class="h-100 gradient-form" style="background-color: #eee;">
    <div class="container py-5 h-100">
      <div class="row d-flex justify-content-center align-items-center h-100">
        <div class="col-xl-10">
          <div class="card rounded-3 text-black">
            <div class="row g-0">
              <div class="col-lg-6">
                <div class="card-body p-md-5 mx-md-4">
                  <div class="text-center">
                    <img
                      src="https://images.unsplash.com/photo-1599305445671-ac291c95aaa9?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxzZWFyY2h8Mnx8bG9nb3xlbnwwfHwwfHx8MA%3D%3D&auto=format&fit=crop&w=500&q=60"
                      style="width: 185px;" alt="logo">
                    <h4 class="mt-1 mb-5 pb-1">Welcome back</h4>
                  </div>

                  <form method="post" class="login-form">
                    <div class="form-outline mb-4">
                      <label class="form-label" for="form2Example11">Username</label>
                      <input type="email" id="form2Example11" class="form-control" name="username"
                        placeholder="Phone number or email address" />
                    </div>

                    <div class="form-outline mb-4">
                      <label class="form-label" for="form2Example22">Password</label>
                      <input type="password" id="form2Example22" class="form-control" name="password"
                        placeholder="Enter your password" />
                    </div>

                    <div class="text-center pt-1 mb-5 pb-1">
                      <!-- Use type="submit" to submit the form -->
                      <button class="btn btn-primary btn-block fa-lg gradient-custom-2 mb-3" type="submit"
                        style="width: 150px; height: 50px;" name="loginButton">Log in</button> <br>
                      <a class="text-muted" href="#!">Forgot password?</a>
                    </div>

                    <div class="d-flex align-items-center justify-content-center pb-4">
                      <p class="mb-0 me-2">Don't have an account?</p>
                      <a href="sign-up.html"><button type="button" class="btn btn-outline-danger">Create new</button></a>
                    </div>
                  </form>
                </div>
              </div>
              <div class="col-lg-6 d-flex align-items-center gradient-custom-2 bg">
                <div class="text-white px-3 py-4 p-md-5 mx-md-4">
                  <!-- Content for the right side -->
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
  <script src="./assets/js/login.js"></script>
</body>

</html>