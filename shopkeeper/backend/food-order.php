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
    <!-- endinject -->
    <!-- Plugin css for this page -->
    <!-- End plugin css for this page -->
    <!-- inject:css -->
    <!-- endinject -->
    <!-- Layout styles -->
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
            /* Change this to your desired active background color */
            color: #fff;
            /* Change this to your desired active text color */
        }


        .tabs a:hover {
            background-color: #b4e186;
            /* Add a background color for the hover effect */
        }
    </style>
</head>

<body>
    <div class="container-scroller">
        <!-- partial:../../partials/_navbar.html -->
        <?php
     include "navbar.php";
     ?>
        <!-- partial -->
        <div class="container-fluid page-body-wrapper">
            <!-- partial:../../partials/_sidebar.html -->
            <?php
        include "sidebar.php";
        ?>
            <!-- partial -->
            <div class="main-panel" style=" height: 50%; overflow: scroll;">
                <div class="content-wrapper">
                    <div class="page-header">
                        <h3 class="page-title"> Food Order </h3>
                        <nav aria-label="breadcrumb">
                            <ol class="breadcrumb">
                                <li class="breadcrumb-item">Food</li>
                                <li class="breadcrumb-item active" aria-current="page">Food Order</li>
                            </ol>
                        </nav>
                    </div>
                    <div class="tabs">
                        <a href="#" id="food-tab" class="tab-link active">Food</a>
                        <a href="#" id="food-order-tab" class="tab-link">Food Order</a>
                        </ul>
                    </div>


                    <div class="col-lg-6 grid-margin stretch-card table-responsive" id="food-table"
                        style="height: 100%; width: 70vw; overflow: scroll; ">
                        <div class="card">
                            <div class="card-body">
                                <h4 class="card-title">Order </h4>
                                </p>
                                <div class="table-responsive ">
                                    <table class="table table-striped table-hover">
                                        <thead>
                                            <tr>
                                                <th> User </th>
                                                <th> First <span id="sortFirstName" class="sort-icon">&#9660;</span>
                                                </th>
                                                <th> Progress </th>
                                                <th> Customer Id </th>
                                                <th> Amount <span id="sortAmount" class="sort-icon">&#9660;</span></th>
                                                <th>Status <span id="sortStatus" class="sort-icon">&#9660;</span></th>
                                                <th> Otp </th>
                                                <th> Customer Notes </th>
                                                <th> Actions </th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr>
                                                <td class="py-1">
                                                    <img src="assets/images/faces-clipart/pic-1.png" alt="image" />
                                                </td>
                                                <td> Herman Beck </td>
                                                <td>
                                                    <div class="progress">
                                                        <div class="progress-bar bg-success" role="progressbar"
                                                            style="width: 25%" aria-valuenow="25" aria-valuemin="0"
                                                            aria-valuemax="100"></div>
                                                    </div>
                                                </td>
                                                <td> $ 77.99 </td>
                                                <td> $ 77.99 </td>
                                                <td><label class="badge badge-info">Fixed</label></td>

                                                <td> <input type="number" name="Otp" id="Otp" maxlength="4"
                                                        oninput="maxLengthCheck(this)" style="width: 80px;"> </td>
                                                <td>Lorem, ipsum.</td>
                                                <td><i class="fas fa-check"
                                                        style="color: forestgreen; font-size: 24px;"></i> &emsp; <i
                                                        class="fas fa-times"
                                                        style="color: red; font-size: 24px;"></i>&emsp13;</td>
                                            </tr>
                                            <tr>
                                                <td class="py-1">
                                                    <img src="assets/images/faces-clipart/pic-2.png" alt="image" />
                                                </td>
                                                <td> Messsy Adam </td>
                                                <td>
                                                    <div class="progress">
                                                        <div class="progress-bar bg-danger" role="progressbar"
                                                            style="width: 75%" aria-valuenow="75" aria-valuemin="0"
                                                            aria-valuemax="100"></div>
                                                    </div>
                                                </td>
                                                <td> $245.30 </td>
                                                <td> $245.30 </td>
                                                <td><label class="badge badge-success">Done</label></td>
                                                <td> <input type="number" name="Otp" id="Otp" maxlength="4"
                                                        oninput="maxLengthCheck(this)" style="width: 80px;"> </td>

                                                <td>Lorem, ipsum.</td>
                                                <td><i class="fas fa-check"
                                                        style="color: forestgreen; font-size: 24px;"></i> &emsp; <i
                                                        class="fas fa-times"
                                                        style="color: red; font-size: 24px;"></i>&emsp13;</td>
                                            </tr>
                                            <tr>
                                                <td class="py-1">
                                                    <img src="assets/images/faces-clipart/pic-3.png" alt="image" />
                                                </td>
                                                <td> John Richards </td>
                                                <td>
                                                    <div class="progress">
                                                        <div class="progress-bar bg-warning" role="progressbar"
                                                            style="width: 90%" aria-valuenow="90" aria-valuemin="0"
                                                            aria-valuemax="100"></div>
                                                    </div>
                                                </td>
                                                <td> $138.00 </td>
                                                <td> $138.00 </td>
                                                <td><label class="badge badge-danger">Pending</label></td>

                                                <td> <input type="number" name="Otp" id="Otp" maxlength="4"
                                                        oninput="maxLengthCheck(this)" style="width: 80px;"> </td>

                                                <td>Lorem, ipsum.</td>
                                                <td><i class="fas fa-check"
                                                        style="color: forestgreen; font-size: 24px;"></i> &emsp; <i
                                                        class="fas fa-times"
                                                        style="color: red; font-size: 24px;"></i>&emsp13;</td>
                                            </tr>
                                            <tr>
                                                <td class="py-1">
                                                    <img src="assets/images/faces-clipart/pic-4.png" alt="image" />
                                                </td>
                                                <td> Peter Meggik </td>
                                                <td>
                                                    <div class="progress">
                                                        <div class="progress-bar bg-primary" role="progressbar"
                                                            style="width: 50%" aria-valuenow="50" aria-valuemin="0"
                                                            aria-valuemax="100"></div>
                                                    </div>
                                                </td>
                                                <td> $ 77.99 </td>
                                                <td> $ 77.99 </td>
                                                <td><label class="badge badge-danger">Pending</label></td>

                                                <td> <input type="number" name="Otp" id="Otp" maxlength="4"
                                                        oninput="maxLengthCheck(this)" style="width: 80px;"> </td>

                                                <td>Lorem, ipsum.</td>
                                                <td><i class="fas fa-check"
                                                        style="color: forestgreen; font-size: 24px;"></i> &emsp; <i
                                                        class="fas fa-times"
                                                        style="color: red; font-size: 24px;"></i>&emsp13;</td>
                                            </tr>
                                            <tr>
                                                <td class="py-1">
                                                    <img src="assets/images/faces-clipart/pic-1.png" alt="image" />
                                                </td>
                                                <td> Edward </td>
                                                <td>
                                                    <div class="progress">
                                                        <div class="progress-bar bg-danger" role="progressbar"
                                                            style="width: 35%" aria-valuenow="35" aria-valuemin="0"
                                                            aria-valuemax="100"></div>
                                                    </div>
                                                </td>
                                                <td> $ 160.25 </td>
                                                <td> $ 160.25 </td>
                                                <td><label class="badge badge-danger">Pending</label></td>

                                                <td> <input type="number" name="Otp" id="Otp" maxlength="4"
                                                        oninput="maxLengthCheck(this)" style="width: 80px;"> </td>

                                                <td>Lorem, ipsum.</td>
                                                <td><i class="fas fa-check"
                                                        style="color: forestgreen; font-size: 24px;"></i> &emsp; <i
                                                        class="fas fa-times"
                                                        style="color: red; font-size: 24px;"></i>&emsp13;</td>
                                            </tr>
                                            <tr>
                                                <td class="py-1">
                                                    <img src="assets/images/faces-clipart/pic-2.png" alt="image" />
                                                </td>
                                                <td> John Doe </td>
                                                <td>
                                                    <div class="progress">
                                                        <div class="progress-bar bg-info" role="progressbar"
                                                            style="width: 65%" aria-valuenow="65" aria-valuemin="0"
                                                            aria-valuemax="100"></div>
                                                    </div>
                                                </td>
                                                <td> $ 123.21 </td>
                                                <td> $ 123.21 </td>
                                                <td><label class="badge badge-success">Done</label></td>

                                                <td> <input type="number" name="Otp" id="Otp" maxlength="4"
                                                        oninput="maxLengthCheck(this)" style="width: 80px;"> </td>

                                                <td>Lorem, ipsum.</td>
                                                <td><i class="fas fa-check"
                                                        style="color: forestgreen; font-size: 24px;"></i> &emsp; <i
                                                        class="fas fa-times"
                                                        style="color: red; font-size: 24px;"></i>&emsp13;</td>
                                            </tr>
                                            <tr>
                                                <td class="py-1">
                                                    <img src="assets/images/faces-clipart/pic-3.png" alt="image" />
                                                </td>
                                                <td> Henry Tom </td>
                                                <td>
                                                    <div class="progress">
                                                        <div class="progress-bar bg-warning" role="progressbar"
                                                            style="width: 20%" aria-valuenow="20" aria-valuemin="0"
                                                            aria-valuemax="100"></div>
                                                    </div>
                                                </td>
                                                <td> $ 150.00 </td>
                                                <td> $ 150.00 </td>
                                                <td><label class="badge badge-info">fixed</label></td>

                                                <td> <input type="number" name="Otp" id="Otp" maxlength="4"
                                                        oninput="maxLengthCheck(this)" style="width: 80px; "> </td>

                                                <td>Lorem, ipsum.</td>
                                                <td><i class="fas fa-check"
                                                        style="color: forestgreen; font-size: 24px;"></i> &emsp; <i
                                                        class="fas fa-times"
                                                        style="color: red; font-size: 24px;"></i>&emsp13;</td>

                                            </tr>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>

                    </div>

                    <div class="col-lg-6 grid-margin stretch-card table-responsive" id="food-order-table"
                        style="height: 100%; width: 70vw; overflow: scroll; display: none;">
                        <div class="card">
                            <div class="card-body">
                                <h4 class="card-title">Order </h4>
                                </p>
                                <div class="table-responsive ">
                                    <table class="table table-striped table-hover">
                                        <thead>
                                            <tr>
                                                <th> User </th>
                                                <th> First <span class="sort-icon">&#9660;</span> </th>
                                                <th> Progress </th>
                                                <th> Customer Id </th>
                                                <th> Amount </th>
                                                <th> Status </th>
                                                <th> Otp </th>
                                                <th> Customer Notes </th>
                                                <th> Actions </th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr>
                                                <td class="py-1">
                                                    <img src="assets/images/faces-clipart/pic-1.png" alt="image" />
                                                </td>
                                                <td> Herman Beck </td>
                                                <td>
                                                    <div class="progress">
                                                        <div class="progress-bar bg-success" role="progressbar"
                                                            style="width: 25%" aria-valuenow="25" aria-valuemin="0"
                                                            aria-valuemax="100"></div>
                                                    </div>
                                                </td>
                                                <td> $ 77.99 </td>
                                                <td> $ 77.99 </td>
                                                <td><label class="badge badge-info">Fixed</label></td>

                                                <td> <input type="number" name="Otp" id="Otp" maxlength="4"
                                                        oninput="maxLengthCheck(this)" style="width: 80px;"> </td>
                                                <td>Lorem, ipsum.</td>
                                                <td><i class="fas fa-check"
                                                        style="color: forestgreen; font-size: 24px;"></i> &emsp; <i
                                                        class="fas fa-times"
                                                        style="color: red; font-size: 24px;"></i>&emsp13;</td>
                                            </tr>
                                            <tr>
                                                <td class="py-1">
                                                    <img src="assets/images/faces-clipart/pic-2.png" alt="image" />
                                                </td>
                                                <td> Messsy Adam </td>
                                                <td>
                                                    <div class="progress">
                                                        <div class="progress-bar bg-danger" role="progressbar"
                                                            style="width: 75%" aria-valuenow="75" aria-valuemin="0"
                                                            aria-valuemax="100"></div>
                                                    </div>
                                                </td>
                                                <td> $245.30 </td>
                                                <td> $245.30 </td>
                                                <td><label class="badge badge-success">Done</label></td>
                                                <td> <input type="number" name="Otp" id="Otp" maxlength="4"
                                                        oninput="maxLengthCheck(this)" style="width: 80px;"> </td>

                                                <td>Lorem, ipsum.</td>
                                                <td><i class="fas fa-check"
                                                        style="color: forestgreen; font-size: 24px;"></i> &emsp; <i
                                                        class="fas fa-times"
                                                        style="color: red; font-size: 24px;"></i>&emsp13;</td>
                                            </tr>
                                            <tr>
                                                <td class="py-1">
                                                    <img src="assets/images/faces-clipart/pic-3.png" alt="image" />
                                                </td>
                                                <td> John Richards </td>
                                                <td>
                                                    <div class="progress">
                                                        <div class="progress-bar bg-warning" role="progressbar"
                                                            style="width: 90%" aria-valuenow="90" aria-valuemin="0"
                                                            aria-valuemax="100"></div>
                                                    </div>
                                                </td>
                                                <td> $138.00 </td>
                                                <td> $138.00 </td>
                                                <td><label class="badge badge-danger">Pending</label></td>

                                                <td> <input type="number" name="Otp" id="Otp" maxlength="4"
                                                        oninput="maxLengthCheck(this)" style="width: 80px;"> </td>

                                                <td>Lorem, ipsum.</td>
                                                <td><i class="fas fa-check"
                                                        style="color: forestgreen; font-size: 24px;"></i> &emsp; <i
                                                        class="fas fa-times"
                                                        style="color: red; font-size: 24px;"></i>&emsp13;</td>
                                            </tr>
                                            <tr>
                                                <td class="py-1">
                                                    <img src="assets/images/faces-clipart/pic-4.png" alt="image" />
                                                </td>
                                                <td> Peter Meggik </td>
                                                <td>
                                                    <div class="progress">
                                                        <div class="progress-bar bg-primary" role="progressbar"
                                                            style="width: 50%" aria-valuenow="50" aria-valuemin="0"
                                                            aria-valuemax="100"></div>
                                                    </div>
                                                </td>
                                                <td> $ 77.99 </td>
                                                <td> $ 77.99 </td>
                                                <td><label class="badge badge-danger">Pending</label></td>

                                                <td> <input type="number" name="Otp" id="Otp" maxlength="4"
                                                        oninput="maxLengthCheck(this)" style="width: 80px;"> </td>

                                                <td>Lorem, ipsum.</td>
                                                <td><i class="fas fa-check"
                                                        style="color: forestgreen; font-size: 24px;"></i> &emsp; <i
                                                        class="fas fa-times"
                                                        style="color: red; font-size: 24px;"></i>&emsp13;</td>
                                            </tr>

                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>

                    </div>
                    <!-- content-wrapper ends -->
                    <!-- partial:../../partials/_footer.html -->
                    <footer class="footer">
                        <div class="container-fluid d-flex justify-content-between">
                            <span class="text-muted d-block text-center text-sm-start d-sm-inline-block">Copyright ©
                                bootstrapdash.com
                                2021</span>
                            <span class="float-none float-sm-end mt-1 mt-sm-0 text-end"> Free <a
                                    href="https://www.bootstrapdash.com/bootstrap-admin-template/"
                                    target="_blank">Bootstrap
                                    admin
                                    template</a> from Bootstrapdash.com</span>
                        </div>
                    </footer>
                    <!-- partial -->
                </div>
                <!-- main-panel ends -->
            </div>
            <!-- page-body-wrapper ends -->
        </div>
        <!-- container-scroller -->
        <!-- plugins:js -->
        <script src="../../assets/vendors/js/vendor.bundle.base.js"></script>
        <!-- endinject -->
        <!-- Plugin js for this page -->
        <!-- End plugin js for this page -->
        <!-- inject:js -->
        <script src="../../assets/js/off-canvas.js"></script>
        <script src="../../assets/js/hoverable-collapse.js"></script>
        <script src="../../assets/js/misc.js"></script>
        <!-- Include jQuery (must be included before Bootstrap JS) -->
        <!-- Include jQuery -->
        <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>

        <!-- Include Bootstrap JS (popper.js is required for dropdowns) -->
        <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.3/dist/umd/popper.min.js"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.bundle.min.js"></script>


        <!-- endinject -->
        <!-- Custom js for this page -->
        <script src="../../assets/js/file-upload.js"></script>
        <!-- End custom js for this page -->
        <script>
            // Get references to the tab elements and table containers
            const foodTab = document.getElementById("food-tab");
            const foodOrderTab = document.getElementById("food-order-tab");
            const foodTableContainer = document.getElementById("food-table");
            const foodOrderTableContainer = document.getElementById("food-order-table");

            // Add click event listeners to the tabs
            foodTab.addEventListener("click", () => {
                // Show the "Food" table and hide the "Food Order" table
                foodTableContainer.style.display = "block";
                foodOrderTableContainer.style.display = "none";
            });

            foodOrderTab.addEventListener("click", () => {
                // Show the "Food Order" table and hide the "Food" table
                foodTableContainer.style.display = "none";
                foodOrderTableContainer.style.display = "block";
            });
        </script>

        <script>
            // Get all tab links by class name
            const tabLinks = document.querySelectorAll(".tab-link");

            // Add click event listeners to each tab link
            tabLinks.forEach(tab => {
                tab.addEventListener("click", function (event) {
                    // Prevent the default link behavior
                    event.preventDefault();

                    // Remove the "active" class from all tab links
                    tabLinks.forEach(link => link.classList.remove("active"));

                    // Add the "active" class to the clicked tab link
                    this.classList.add("active");
                });
            });
        </script>




        <script>
            // Get the table body rows and convert them into an array
            const tableRows = Array.from(document.querySelectorAll("#food-table tbody tr"));

            // Define a variable to keep track of the sorting order for the First Name column
            let sortOrderFirstName = 0; // 0: Original, 1: Ascending, -1: Descending

            // Function to sort the table rows based on the First Name column
            function sortTable() {
                tableRows.sort(function (a, b) {
                    const textA = a.cells[1].textContent.trim(); // First Name is in the second column (index 1)
                    const textB = b.cells[1].textContent.trim();
                    return sortOrderFirstName * textA.localeCompare(textB);
                });

                // Reorder the rows in the table
                const tableBody = document.querySelector("#food-table tbody");
                tableRows.forEach(row => tableBody.appendChild(row));

                // Toggle the sorting icon based on the sorting order
                const sortIcon = document.getElementById("sortFirstName");
                if (sortOrderFirstName === 1) {
                    sortIcon.textContent = "\u25B2"; // Ascending arrow
                } else if (sortOrderFirstName === -1) {
                    sortIcon.textContent = "\u25BC"; // Descending arrow
                } else {
                    sortIcon.textContent = "\u25BC"; // Default to Descending arrow
                }
            }


        </script>

        <script>
            function toggleDropdown() {
                var dropdownMenu = document.querySelector('.dropdown[aria-labelledby="dropdownButton"]');
                if (dropdownMenu.style.display === 'none' || dropdownMenu.style.display === '') {
                    dropdownMenu.style.display = 'flex';
                } else {
                    dropdownMenu.style.display = 'none';
                }
            }

            // Add a click event listener to the button to toggle the dropdown
            var dropdownButton = document.getElementById('dropdownButton');
            dropdownButton.addEventListener('click', toggleDropdown);
        </script>
</body>

</html>