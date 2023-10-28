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
            font-size: 20px; /* Adjust the font size as needed */
        }

        /* Button Styles */
        .btn-primary {
            background-color: #4CAF50;
            color: white;
        }

        #birthdayDate::placeholder {
            font-size: 26px; /* Adjust the font size as needed */
        }

        </style>

        <script>
            function isMobileScreen() {
                return window.innerWidth <=756;
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
    if (isset($_POST['signup'])) {
        $username = $_POST['username'];
        $password = $_POST['password'];
        $hashedPassword = password_hash($password, PASSWORD_DEFAULT);
        $firstName = $_POST['firstName'];
        $lastName = $_POST['lastName'];
        $email = $_POST['email'];
        $phone = $_POST['phoneNumber'];
    
        $result = mysqli_query($con, "SELECT * FROM user_profile WHERE username = '" . $username . "'");
    
        if ($result !== false) { 
            if (mysqli_num_rows($result) > 0) { 
                echo '<script> alert("Please select a different username as the username already exists");</script>';
            } else {
                $sql = "INSERT INTO user_profile (first_name, last_name, username, password_hash, email, phone_number) VALUES ('$firstName', '$lastName', '$username', '$hashedPassword', '$email', $phone)";
    
                if (mysqli_query($con, $sql)) {
                    echo '<script> alert("User registered successfully");</script>';
                } else {
                    echo '<script> alert("Error: ' . mysqli_error($con) . '");</script>';
                }
            }
        } else {
            echo '<script> alert("Query error: ' . mysqli_error($con) . '");</script>';
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
                            <form method ="post">

                                <div class="row">
                                    <div class="col-md-6 mb-4">

                                        <div class="form-outline">
                                            <label class="form-label form-control-lg"for="firstName">First Name</label>
                                            <input type="text" id="firstName"  name="firstName"  class="form-control form-control-lg" />
                                        </div>
                                        
                                    </div>

                                    <div class="col-md-6 mb-4">
                                        <div class="form-outline">
                                            <label class="form-label form-control-lg" for="lastName">Last Name</label>
                                            <input type="text" id="lastName"  name="lastName"  class="form-control form-control-lg" />
                                        </div>
                                    </div>
                                    
                                </div>
                                <div class="row">
                                    <div class="col-md-6 mb-4">

                                        <div class="form-outline">
                                            <label class="form-label form-control-lg" placeholder="username" for="Username">Username</label>
                                            <input type="text" id="Username"  name="username" class="form-control form-control-lg" />
                                        </div>

                                    </div>
                                    <div class="col-md-6 mb-4">

                                        <div class="form-outline">
                                            <label class="form-label form-control-lg" for="password">password</label>
                                            <input type="password" id="password" name= "password" class="form-control form-control-lg" />
                                        </div>

                                    </div>
                                    <div class="col-md-6 mb-0">

                                        <div class="form-outline">
                                            <label class="form-label form-control-lg" for="confirm">cofirm password</label>
                                            <input type="password" id="confirm" class="form-control form-control-lg" />
                                        </div>

                                    </div>
                                </div>

                                <div class="row">
                                    <div class="col-md-6 mb-4 d-flex align-items-center">

                                        <div class="form-outline datepicker w-100">
                                            <label for="birthdayDate form-control-lg " class="form-label">Birthday</label>
                                            <input type="date" name="birthdayDate"  class="form-control form-control-lg" id="birthdayDate" />
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
                                            <label class="form-label form-control-lg" for="phoneNumber">Phone Number</label>
                                            <input type="tel" id="phoneNumber" name="phoneNumber" class="form-control form-control-lg" />
                                        </div>

                                    </div>
                                </div>

                                <!-- <div class="row">
                                    <div class="col-12">

                                        <select class="select form-control-lg">
                                            <option value="1" disabled>Choose option</option>
                                            <option value="2">Subject 1</option>
                                            <option value="3">Subject 2</option>
                                            <option value="4">Subject 3</option>
                                        </select>
                                        <label class="form-label select-label">Choose option</label>

                                    </div>
                                </div> -->

                                <div class="mt-4 pt-2" >
                                    <button name="signup" class="btn btn-primary btn-block fa-lg gradient-custom-2 mb-3" type="submit"
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