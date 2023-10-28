<?php
session_start();
?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Sign In to Your Account - Taste Sculptors</title>
  <link rel="stylesheet" href="./assets/css/style.css">

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

  <style>
    /* Add these styles to your existing CSS file or create a new one */

    body {
        font-family: 'Arial', sans-serif;
        margin: 0;
        padding: 0;
    }

    .gradient-form {
        background-color: #eee;
    }

    .card {
        border: none;
    }

    .card-body {
        padding: 5rem;
    }

    .login-form {
        max-width: 400px;
        margin: 0 auto;
    }

    .form-outline {
        margin-bottom: 1.5rem;
    }
    .form-control::placeholder {
        font-size: 16px; /* Adjust the font size as needed */
    }

    .btn-primary {
        background-color: #4CAF50;
        color: white;
        width: 150px;
        height: 50px;
        border-radius: 1.3rem;
        font-size: 1.3rem;
        text-align: center;
    }

    .btn-outline-danger {
        border-color: #dc3545;
        color: #dc3545;
    }

    .btn-outline-danger:hover {
        background-color: #dc3545;
        color: white;
    }

    /* Responsive Styles */
    @media (max-width: 768px) {
        .card-body {
            padding: 2rem;
        }
    }

  </style>
</head>

<body>

  
  <?php
          $server = "localhost";
          $username = "root";
          $password = "";
          $con = mysqli_connect($server, $username, $password, "food_order");    
  ?>

  <?php
  
  if (isset($_POST['username']) && isset($_POST['password'])) {
    $username = $_POST['username'];
    $password = $_POST['password'];
    $sql = "SELECT * FROM user_profile WHERE username = '" . $username . "'";
    $result = mysqli_query($con, $sql);

    if ($result) {
        if (mysqli_num_rows($result) > 0) {
            $row = mysqli_fetch_assoc($result);
            $hashedPasswordFromDatabase = $row['password_hash'];

            // Use password_verify to check if the provided password matches the hashed password
            if (password_verify($password, $hashedPasswordFromDatabase)) {
                $_SESSION['username'] = $username;
                echo '<script> window.location.href = "index.php" </script>';
            } else {
                echo '<script>alert("Invalid username or password")</script>';
            }
        } else {
            echo '<script>alert("Invalid username or password")</script>';
        }
    } else {
        echo '<script>alert("Error: ' . mysqli_error($con) . '")</script>';
    }
} else {
    // Handle the case where username or password is not set
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
                      <input type="text" id="form2Example11" class="form-control" name="username"
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
                      <a href="sign-up.php"><button type="button" class="btn btn-outline-danger">Create new</button></a>
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
