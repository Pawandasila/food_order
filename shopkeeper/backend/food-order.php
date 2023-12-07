<?php 
session_start();
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Purple Admin</title>
    <!-- plugins:css -->
    <link rel="stylesheet" href="assets/vendors/mdi/css/materialdesignicons.min.css">
    <link rel="stylesheet" href="assets/vendors/css/vendor.bundle.base.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">
    
    <link rel="stylesheet" href="assets/css/style.css">
    <!-- End layout styles -->
    <link rel="shortcut icon" href="assets/images/favicon.ico" />
    <style>
        .card {
            margin: 0;
        }

        @media (max-width: 576px) {
            .col-lg-6 {
                width: 100%;
            }
        }

        i:hover {
            cursor: pointer;
        }

        .sort-icon {
            font-size: 12px;
            /* Adjust the font size as needed */
            margin-left: 4px;
            height: 20px;
            width: 20px;
            background-color: red;
            border-radius: 50%;
            /* Add some spacing between the name and the icon */
        }

        .sort-icon:hover {
            cursor: pointer;

        }

        /* Style the tabs container */
        .tabs-container {
            display: flex;
            justify-content: space-between;
            align-items: center;
            background-color: #f0f0f0;
            /* Add your desired background color */
            padding: 10px;
        }

        /* Style the tabs */
        .tabs {
            list-style: none;
            display: flex;
            margin: 0;
            padding: 0;
            align-content: flex-start;
            flex-wrap: nowrap;
            /* justify-content: center; */
            align-items: center;
            gap: 7px;
            flex-direction: row;

        }

        .tabs li {
            margin-right: 20px;
            /* Adjust the spacing between tabs */
        }

        .tabs a {
            text-decoration: none;
            color: #333;
            font-weight: 900;
            font-size: 17px;
            padding: 5px 10px;
            background: rgb(231, 202, 54);
            border: 1px solid #ccc;
            border-radius: 4px;
            transition: background 0.3s;
        }

        .tabs a.active {
            background: #3366FF;
            color: #fff;
        }


        .tabs a:hover {
            background-color: #b4e186;
        }

        .modal {
            display: none;
            position: fixed;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            overflow: auto;
            background-color: rgba(0, 0, 0, 0.5);
        }

        .modal-content {
            background-color: #fefefe;
            margin: 10% auto;
            padding: 20px;
            border: 1px solid #888;
            width: 80%;
        }

        /* Close button style */
        .close {
            color: #aaa;
            float: right;
            font-size: 28px;
            font-weight: bold;
        }

        .close:hover,
        .close:focus {
            color: black;
            text-decoration: none;
            cursor: pointer;
        }

        .modal-content {
            text-align: center;
        }

        table {
            width: 100%;
            border-collapse: collapse;
            margin-top: 20px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        }

        th,
        td {
            padding: 15px;
            text-align: left;
            border-bottom: 1px solid #ddd;
        }

        th {
            background-color: #f2f2f2;
        }

        h2 {
            color: #333;
        }

        .close {
            color: #aaa;
            position: absolute;
            float: left;
            font-size: 28px;
            font-weight: bold;
            cursor: pointer;
        }

        .close:hover,
        .close:focus {
            color: black;
            text-decoration: none;
            cursor: pointer;
        }

        button {
            background-color: #4CAF50;
            color: white;
            padding: 10px;
            margin: 5px;
            border: none;
            border-radius: 4px;
            cursor: pointer;
        }

        button:hover {
            background-color: #45a049;
        }

        .action {
            text-align: center;
        }


        .accept {
            margin-right: 32px
        }

        @media (max-width: 600px) {

            table,
            th,
            td {
                overflow: scroll;
                display: block;
                width: 100%;
            }
        }
    </style>
</head>

<body>
    <div class="container-scroller">
        <?php
     include "navbar.php";
     ?>
        <!-- partial -->
        <div class="container-fluid page-body-wrapper">
            <?php
        include "sidebar.php";
        ?>
            <div class="main-panel" style=" height: 50%; overflow: scroll;">
                <div class="content-wrapper">
                    <div class="page-header">
                        <h3 class="page-title"> Food Order </h3>
                        <nav aria-label="breadcrumb">
                            <ol class="breadcrumb">
                                <li class="breadcrumb-item">Food</li>
                                <li class="breadcrumb-item active" aria-current="page">Food Order history</li>
                            </ol>
                        </nav>
                    </div>
                    <div class="tabs">
                        <a href="#" id="food-tab" class="tab-link active">Food</a>
                        <a href="#" id="food-order-tab" class="tab-link">Food Order History</a>
                        </ul>
                    </div>
                    <div class="col-lg-6 grid-margin stretch-card table-responsive" id="food-table"
                        style="height: 100%; width: 70vw; overflow: scroll;">
                        <div class="card">
                            <div class="card-body">
                                <h4 class="card-title">Order </h4>
                                </p>
                                <div class="table-responsive ">
                                    <table class="table table-striped table-hover">
                                        <thead>
                                            <tr>
                                                <th> Name <span id="sortFirstName" class="sort-icon">&#9660;</span>
                                                </th>
                                                <!-- <th> Progress </th> -->
                                                <!-- <th> Customer Id </th> -->
                                                <th>Status</th>
                                                <th> Amount <span id="sortAmount" class="sort-icon">&#9660;</span></th>
                                                <th>Date and Time</th>
                                                <th> Otp </th>
                                                <th>View</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <!-- <form id="otpForm"> -->
                                            <?php 
                                            $result = mysqli_query($con, "SELECT * FROM orders WHERE OrderStatus != 'Delivered'");
                                            while ($row = mysqli_fetch_array($result)){
                                                $customerID = $row["CustomerID"];
                                                $user = mysqli_query($con, "SELECT * FROM user_profile where id = ".$customerID."");
                                                $userRow = mysqli_fetch_array($user);
                                            ?>
                                            <tr>
                                                <td>
                                                    <?php echo $userRow['first_name']; ?>
                                                </td>
                                                <td>
                                                    <?php 
                                                    if ($row['OrderStatus'] == "Pending") {
                                                    ?>
                                                    <label class="badge badge-warning">
                                                        <?php echo $row['OrderStatus']; ?>
                                                    </label>
                                                    <?php 
                                                    } elseif ($row['OrderStatus'] == "Fixed") {
                                                    ?>
                                                    <label class="badge badge-gradient-primary">
                                                        <?php echo $row['OrderStatus']; ?>
                                                    </label>
                                                    <?php 
                                                    } elseif ($row['OrderStatus'] == "Accepted") {
                                                    ?>
                                                    <label class="badge badge-gradient-danger">
                                                        <?php echo $row['OrderStatus']; ?>
                                                    </label>
                                                    <?php 
                                                    } elseif ($row['OrderStatus'] == "Baking") {
                                                    ?>
                                                    <label class="badge badge-gradient-info">
                                                        <?php echo $row['OrderStatus']; ?>
                                                    </label>
                                                    <?php 
                                                    } elseif ($row['OrderStatus'] == "Baked") {
                                                    ?>
                                                    <label class="badge badge-success">
                                                        <?php echo $row['OrderStatus']; ?>
                                                    </label>
                                                    <?php 
                                                    } elseif ($row['OrderStatus'] == "Come") {
                                                    ?>
                                                    <label class="badge badge-primary">
                                                        <?php echo $row['OrderStatus']; ?>
                                                    </label>
                                                    <?php 
                                                    }
                                                    ?>
                                                </td>
                                                <td>
                                                    <?php echo $row['TotalBills']?>
                                                </td>
                                                <td>
                                                    <?php echo date('Y-m-d H:i:s');?>
                                                </td>
                                                <td>
                                                    
                                                        <input style="width: 70px; text-align: center;"   type="number" name="otp" id="otp" maxlength="4"
                                                            oninput="maxLengthCheck(this)">
                                                        <!-- <button type="button" id="otpbtn" class="btn btn-primary" onclick="submitOTP()">Submit</button> -->
                                                        <button type="button" id="otpbtn" class="btn btn-primary" >Submit</button>
                                                        <div id="error-message" style="color: red; display: none;"></div>
                                                </td>
                                                <td>
                                                    <button class="box" style="background:transparent; border:none;"
                                                        value="<?php echo $row['OrderID'] ?>">
                                                        <i class="fa fa-eye" style="color:black; font-size:22px;"></i>
                                                    </button>
                                                </td>
                                            </tr>

                                            <?php     
                                            }
                                            ?>
                                        <!-- </form> -->
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Eye Button Modal outside the table div -->

                    <div id="myModal" class="modal">
                        <div class="modal-content">
                            <span class="close" onclick="closeModal()">&times;</span>
                            <h2>Order Details</h2>
                            <form class="form" method="post">
                                <table style="border-collapse: collapse;" id="foodDetails">

                                    <?php 
                                    $result = mysqli_query($con, "SELECT * FROM orders ");
                                while ($row = mysqli_fetch_array($result)){
                                    $customerID = $row["CustomerID"];
                                    $user = mysqli_query($con, "SELECT * FROM user_profile where id = ".$customerID."");
                                    $userRow = mysqli_fetch_array($user); 
                                ?>
                                     <tr>
                                        <td><?php echo 'Paneer Tikka' ?></td>
                                        <td><?php echo $row['TotalBills']; ?></td>
                                        <td><?php echo 'Chole' ?></td>
                                        <td><?php echo $row['CustomersNotes'] ?></td>
                                        <td><input type="text" id="status" value=""></td>
                                    </tr> 
                                    <tr class="action">
                                        <td colspan="5" class="action">
                                            <button class="accept" onclick="performAction('accept')">Accept</button>
                                            <button onclick="performAction('reject')">Reject</button>
                                        </td>
                                    </tr>
                                    <?php 
                                        } 
                                     ?>
                                    <div class="table-separator"></div>
                                </table>
                            </form>

                        </div>
                    </div>

                    <!-- Animated Modal -->
                    <div id="animatedModal" class="modal">
                        <div class="modal-content">
                            <span class="close" onclick="closeAnimatedModal()">&times;</span>
                            <h2>Order Details</h2>
                            <?php 
                                    $result = mysqli_query($con, "SELECT * FROM orders");
                                    while ($row = mysqli_fetch_array($result)){
                                        $customerID = $row["CustomerID"];
                                        $user = mysqli_query($con, "SELECT * FROM user_profile where id = ".$customerID."");
                                        $userRow = mysqli_fetch_array($user);
                                ?>
                            <table style="border-collapse: collapse;">
                                <tr>
                                    <th>Item Name</th>
                                    <th>Total Price</th>
                                    <th>Quantity</th>
                                    <th><strong>Customer Notes:</strong></th>
                                </tr>
                                <tr>
                                    <td>
                                        <?php echo 'masala' ?>
                                    </td>
                                    <td>
                                        <?php echo $row['TotalBills']; ?>
                                    </td>
                                    <td>
                                        <?php echo 'Chole' ?>
                                    </td>
                                    <td>
                                        <?php echo $row['CustomersNotes'] ?>
                                    </td>
                                </tr>
                                <div class="table-separator"></div>
                            </table>
                            <?php } ?>
                        </div>
                    </div>


                    <div class="col-lg-6 grid-margin stretch-card table-responsive" id="food-order-table"
                        style="height: 100%; width: 70vw; overflow: scroll; display: none;">
                        <div class="card">
                            <div class="card-body">
                                <h4 class="card-title">Food Order History </h4>
                                </p>
                                <div class="table-responsive ">
                                    <table class="table table-striped table-hover">
                                        <thead>
                                            <tr>
                                                <th> Name</th>
                                                <th> Status <span class="sort-icon">&#9660;</span> </th>
                                                <th> Date and Time </th>
                                                <th> Amount </th>
                                                <th> View </th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <?php 
                                            $result = mysqli_query($con, "SELECT * FROM orders WHERE OrderStatus ='Delivered'");
                                            // $user = mysqli_query($con,"SELECT * FROM ");
                                            while ($row = mysqli_fetch_array($result)){
                                            ?>
                                            <tr>
                                                <td>
                                                    <?php echo $_SESSION['username'] ?>
                                                </td>
                                                <td>
                                                    <?php echo $row['CustomerStatus'] ?>
                                                </td>
                                                <td>
                                                    <?php  echo date('Y-m-d H:i:s');?>
                                                </td>
                                                <td>
                                                    <?php echo $row['TotalBills'] ?>
                                                </td>
                                                <td>
                                                    <button style="background:transparent; border:none;"
                                                        id="myButton"></button>
                                                    <i class="fa fa-eye" style="color:black ; font-size:22px;"></i>
                                                    </button>
                                                </td>
                                            </tr>
                                            <?php     
                                        }
                                        ?>
                                        </tbody>

                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
            <!-- content-wrapper ends -->

        </div>
        <!-- main-panel ends -->
    </div>
    <!-- page-body-wrapper ends -->
    </div>
    <script src="../../assets/vendors/js/vendor.bundle.base.js"></script>
    <script src="../../assets/js/off-canvas.js"></script>
    <script src="../../assets/js/hoverable-collapse.js"></script>
    <script src="../../assets/js/misc.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.3/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.bundle.min.js"></script>
    <script src="../../assets/js/file-upload.js"></script>

    <script>
        const foodTab = document.getElementById("food-tab");
        const foodOrderTab = document.getElementById("food-order-tab");
        const foodTableContainer = document.getElementById("food-table");
        const foodOrderTableContainer = document.getElementById("food-order-table");
        foodTab.addEventListener("click", () => {
            foodTableContainer.style.display = "block";
            foodOrderTableContainer.style.display = "none";
        });

        foodOrderTab.addEventListener("click", () => {
            foodTableContainer.style.display = "none";
            foodOrderTableContainer.style.display = "block";
        });
        const tabLinks = document.querySelectorAll(".tab-link");
        tabLinks.forEach(tab => {
            tab.addEventListener("click", function (event) {
                event.preventDefault();
                tabLinks.forEach(link => link.classList.remove("active"));
                this.classList.add("active");
            });
        });
        const tableRows = Array.from(document.querySelectorAll("#food-table tbody tr"));
        let sortOrderFirstName = 0;
        function sortTable() {
            tableRows.sort(function (a, b) {
                const textA = a.cells[1].textContent.trim();
                const textB = b.cells[1].textContent.trim();
                return sortOrderFirstName * textA.localeCompare(textB);
            });

            const tableBody = document.querySelector("#food-table tbody");
            tableRows.forEach(row => tableBody.appendChild(row));
        }
        function toggleDropdown() {
            var dropdownMenu = document.querySelector('.dropdown[aria-labelledby="dropdownButton"]');
            if (dropdownMenu.style.display === 'none' || dropdownMenu.style.display === '') {
                dropdownMenu.style.display = 'flex';
            } else {
                dropdownMenu.style.display = 'none';
            }
        }

        var dropdownButton = document.getElementById('dropdownButton');
        dropdownButton.addEventListener('click', toggleDropdown);
    </script>

    <!-- JavaScript for eye Modal Handling -->

    <script>

        $(document).ready(function () {
            $(".fa-eye").on("click", function () {
                var orderID = $(this).closest("tr").find(".order-id").text();
                openModal(orderID);
            });

            $('.box').on("click", function () {
                $.ajax({
                    url: "action.php",
                    method: "POST",
                    data: 'action=click&fx=' + $(this).val(),
                    success: function (response) {
                        $('#foodDetails').empty();
                        table = "<tr><th>Item Name</th><th>Total Price</th><th>Quantity</th></tr>";
                        $('#foodDetails').append(table);
                        $('#foodDetails').append(response);

                    },
                    error: function (jqXHR, textStatus, errorThrown) {
                        alert("AJAX Error: " + textStatus + " " + errorThrown);
                    }
                });
            });

            function openModal(orderID) {
                var modal = $("#myModal");
                modal.css("display", "block");
                $("#food-table").css("filter", "blur(5px)");
            }

            function closeModal() {
                var modal = $("#myModal");
                modal.css("display", "none");
                $("#food-table").css("filter", "none");
            }
        });

        function openAnimatedModal(orderID) {
            var modal = document.getElementById("animatedModal");
            modal.style.display = "block";
            document.getElementById("food-order-table").style.filter = "blur(5px)";
        }

        function closeModal() {
            var modal = document.getElementById("myModal");
            modal.style.display = "none";
            document.getElementById("food-table").style.filter = "none";
        }

        function closeAnimatedModal() {
            var modal = document.getElementById("animatedModal");
            modal.style.display = "none";
            document.getElementById("food-order-table").style.filter = "none";
        }


        function performAction(action) {
            closeModal();
        }

    </script>

    <script>
        function acceptOrder(orderID) {
            $.ajax({
                url: "accept_order.php",
                method: "POST",
                data: { orderID: orderID },
                success: function (response) {
                    alert(response);
                    // location.href.reload();
                },
                error: function (jqXHR, textStatus, errorThrown) {
                    // Handle error
                    alert("AJAX Error: " + textStatus + " " + errorThrown);
                }
            });
        }

        function updateStatus(orderID) {
            $.ajax({
                url: "accept_order.php",
                method: "POST",
                data: { orderID: orderID, reject: true },
                success: function (response) {
                    alert(response);
                },
                error: function (jqXHR, textStatus, errorThrown) {
                    alert("AJAX Error: " + textStatus + " " + errorThrown);
                }
            });
        }

//   function submitOTP() {
//         var enteredOTP = $('#otp').val();
//         if (validateOTP(enteredOTP)) {
//             alert(enteredOTP)
//             $.ajax({
//                 url: "accept_order.php",
//                 method: "POST",
//                 data: { enteredOTP: enteredOTP ,
//                 enteredOTP: enteredOTP},
//                 success: function (response) {
//                     if (response=='1'){
//                         displayErrorMessage("OTP verification accepted!")
//                     } 
//                     else {
//                         displayErrorMessage("OTP verification failed ");
//                     }
//                 },
//                 error: function (jqXHR, textStatus, errorThrown) {
//                     // alert("AJAX Error: " + textStatus + " " + errorThrown);
//                 }
//             });
//         }
//     }

    // Validate OTP input format and display error message if invalid
    // function validateOTP(input) {
    //     var regex = /^\d{4}$/;
    //     if (!regex.test(input)) {
    //         displayErrorMessage("Invalid OTP format. Please enter a 4-digit numerical OTP.");
    //         return false;
    //     } else {
    //         hideErrorMessage();
    //         return true;
    //     }
    // }

    // function displayErrorMessage(message) {
    //     $('#error-message').text(message).show();
    // }

    // function hideErrorMessage() {
    //     $('#error-message').hide();
    // }

    // $('#otp').on('input', function () {
    //     validateOTP(this.value);
    // });
    </script>

</body>

</html>