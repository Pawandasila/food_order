<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Sign In to Your Account - Taste Sculptors</title>
    <!-- <link rel="stylesheet" href="./assets/css/login.css" /> -->
    <link href="assets/css/style.css" rel="stylesheet">


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
        body {
            font-family: 'Arial', sans-serif;
            margin: 0;
            padding: 0;
        }

        .bg {
            background: linear-gradient(to right, #00dbde, #fc00ff);
        }

        /* Card Styles */
        .card-registration {
            border: none;
        }

        /* Form Styles */
        .form-outline {
            margin-bottom: 20px;
        }

        .form-control-lg {
            border-radius: 1.3rem;
        }

        .form-control:focus {
            font-size: 20px;
            /* Adjust the font size as needed */
        }

        /* Button Styles */
        .btn-primary {
            background-color: #4CAF50;
            color: white;
        }

        #birthdayDate::placeholder {
            font-size: 26px;
            /* Adjust the font size as needed */
        }
    </style>

    <script>
        function isMobileScreen() {
            return window.innerWidth <= 756;
        }

        function setBodyClass() {
            if (isMobileScreen()) {
                // document.body.classList.add("gradient-custom");
                document.body.classList.add("gradient-custom-2");
            } else {
                // document.body.classList.add("gradient-custom-2");
                document.body.classList.remove("gradient-custom-2");
            }
        }
        window.addEventListener('resize', setBodyClass);
        window.addEventListener('load', setBodyClass);
    </script>


</head>

<body class="bg">

<?php
    // Database connection
    $server = "localhost";
    $username = "root";
    $password = "";
    $database = "food_order";
    $con = mysqli_connect($server, $username, $password, $database);

    if (!$con) {
        die("Connection failed: " . mysqli_connect_error());
    }

    if (isset($_POST['signup'])) {
        $shopName = $_POST['shopName'];
        $password = $_POST['password'];
        $desc = $_POST['desc'];
        $UserName = $_POST['username'];
        $shopkeeperName = $_POST['shopkeeperName'];
        $email = $_POST['email'];
        $phone = $_POST['phoneNumber'];
        $confirmPassword = $_POST['confirmPassword'];

        // Validate if the form fields are set
            // Check if passwords match
            if ($password != $confirmPassword) {
                echo '<script>alert("Passwords do not match");</script>';
            } else {
                // Continue with processing the data
                $hashedPassword = password_hash($password, PASSWORD_DEFAULT);

                // Use prepared statements to prevent SQL injection
                $stmt = $con->prepare("INSERT INTO `shops`(`ShopName`, `ShopDescription`, `ShopkeeperName`, `UserName`, `Passwords`, `ContactNo`) VALUES (?, ?, ?, ?, ?, ?)");
                $stmt->bind_param("ssssss", $shopName, $desc, $shopkeeperName, $UserName, $hashedPassword, $phone);

                if ($stmt->execute()) {
                    echo '<script> alert("Shop registered successfully");</script>';
                } else {
                    echo '<script> alert("Error: ' . $stmt->error . '");</script>';
                }
            }
        }

    mysqli_close($con);
    ?>




    <section class="vh-100  sections">
        <div class="container py-3 h-80">
            <div class="row justify-content-center align-items-center h-80">
                <div class="col-12 col-lg-8 col-xl-8">
                    <div class="card shadow-2-strong card-registration" style="border-radius: 44px;">
                        <div class="card-body p-5 p-md-4">

                            <h3 class="mb-4 pb-2 pb-md-0 mb-md-5 text-center font-awesome">Sign Up</h3>

                            <form method="post">
                                <div class="row">
                                    <div class="col-md-6 mb-4">

                                        <div class="form-outline">
                                            <label class="form-label form-control-lg" for="shopName">Shop Name</label>
                                            <input type="text" id="shopName" name="shopName"
                                                class="form-control form-control-lg" />
                                        </div>

                                    </div>

                                    <div class="col-md-6 mb-4">
                                        <div class="form-outline">
                                            <label class="form-label form-control-lg" for="desc">shop
                                                Description</label>
                                            <input type="text" id="desc" name="desc"
                                                class="form-control form-control-lg" />
                                        </div>
                                    </div>

                                </div>
                                <div class="row">
                                    <div class="col-md-6 mb-4">

                                        <div class="form-outline">
                                            <label class="form-label form-control-lg" placeholder="username"
                                                for="Username">Shopkeeper Name</label>
                                            <input type="text" id="shopkeeperName" name="shopkeeperName"
                                                class="form-control form-control-lg" />
                                        </div>

                                    </div>

                                    <div class="col-md-6 mb-4">

                                        <div class="form-outline">
                                            <label class="form-label form-control-lg" for="password">username</label>
                                            <input type="text" id="username" name="username"
                                                class="form-control form-control-lg" />
                                        </div>

                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-6 mb-0">
                                        <div class="form-outline">
                                            <label class="form-label form-control-lg" for="password">Password</label>
                                            <input type="password" id="password" name="password" class="form-control form-control-lg" />
                                        </div>
                                    </div>

                                    <div class="col-md-6 mb-0">
                                        <div class="form-outline">
                                            <label class="form-label form-control-lg" for="confirmPassword">Confirm Password</label>
                                            <input type="password" id="confirmPassword" name="confirmPassword" class="form-control form-control-lg" />
                                        </div>
                                    </div>
                                </div>

                                <div class="row">
                                    <div class="col-md-6 mb-4 pb-2">

                                        <div class="form-outline">
                                            <label class="form-label form-control-lg" for="emailAddress">Email</label>
                                            <input type="email" id="emailAddress" name="email"
                                                class="form-control form-control-lg" />
                                        </div>

                                    </div>

                                    <div class="col-md-6 mb-4 pb-2">

                                        <div class="form-outline">
                                            <label class="form-label form-control-lg" for="phoneNumber">Phone
                                                Number</label>
                                            <input type="tel" id="phoneNumber" name="phoneNumber"
                                                class="form-control form-control-lg" />
                                        </div>

                                    </div>
                                </div>

                                <div class="mt-4 pt-2">
                                    <button name="signup" class="btn btn-primary btn-block fa-lg gradient-custom-2 mb-3"
                                        type="submit"
                                        style="width: 150px; height: 50px; border-radius: 1.3rem; font-size: 1.3rem; text-align: center; box-shadow: 1px -2px 20px 6px rgb(33 255 247 / 50%)">Log
                                        in</button>
                                </div>

                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
</body>

</html>