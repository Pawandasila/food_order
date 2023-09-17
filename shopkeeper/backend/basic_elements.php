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

    i {
      margin-right: 12px;
    }

    i:hover {
      cursor: pointer;
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
      <div class="main-panel table-responsive">
        <div class="content-wrapper">
          <div class="page-header">
            <h3 class="page-title"> Food items </h3>
            <nav aria-label="breadcrumb">
              <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="#">Edit</a></li>
                <li class="breadcrumb-item active" aria-current="page">Food items</li>
              </ol>
            </nav>
          </div>
          <div class="col-lg-6 grid-margin stretch-card table-responsive" style="height: 100vh; width: 75vw; overflow: scroll;">
            <div class="card">
              <div class="card-body">
                <h4 class="card-title">Food Items</h4>
                <!-- <p class="card-description"> Add class <code>.table-hover</code> -->
                </p>
                <div class="table-responsive">
                  <table class="table table-hover">
                    <thead>
                      <tr>
                        <th>sr.no</th>
                        <th>Category</th>
                        <th>Item</th>
                        <th>Price</th>
                        <th>offers</th>
                        <th>Description</th>
                        <th>Time taken to bake</th>
                        <th>Actions</th>
                      </tr>
                    </thead>
                    <tbody>
                      <tr>
                        <td>1</td>
                        <td class="text-danger"> 28.76% <i class="mdi mdi-arrow-down"></i></td>
                        <td><label class="badge badge-danger">Pending</label></td>
                        <td>Jacob</td>
                        <td>Photoshop</td>
                        <td>Photoshop</td>
                        <td>Photoshop</td>
                        <td>
                          <!-- Add the delete icon with a unique identifier (e.g., data-id) -->
                          <i class="mdi mdi-tooltip-edit"></i>
                          <i class="fas fa-trash delete-icon" data-id="1"></i>
                        </td>
                      </tr>
                      <tr>
                        <td>2</td>
                        <td class="text-danger"> 21.06% <i class="mdi mdi-arrow-down"></i></td>
                        <td><label class="badge badge-warning">In progress</label></td>
                        <td>Messsy</td>
                        <td>Flash</td>
                        <td>Flash</td>
                        <td>Flash</td>
                        <td>
                          <!-- Add the delete icon with a unique identifier (e.g., data-id) -->
                          <i class="mdi mdi-tooltip-edit"></i>
                          <i class="fas fa-trash delete-icon" data-id="1"></i>
                        </td>
                      </tr>
                      <tr>
                        <td>3</td>
                        <td class="text-danger"> 35.00% <i class="mdi mdi-arrow-down"></i></td>
                        <td><label class="badge badge-info">Fixed</label></td>
                        <td>John</td>
                        <td>Premier</td>
                        <td>Premier</td>
                        <td>Premier</td>
                        <td>
                          <!-- Add the delete icon with a unique identifier (e.g., data-id) -->
                          <i class="mdi mdi-tooltip-edit"></i>
                          <i class="fas fa-trash delete-icon" data-id="1"></i>
                        </td>
                      </tr>
                      <tr>
                        <td>4</td>
                        <td class="text-success"> 82.00% <i class="mdi mdi-arrow-up"></i></td>
                        <td><label class="badge badge-success">Completed</label></td>
                        <td>Peter</td>
                        <td>After effects</td>
                        <td>After effects</td>
                        <td>After effects</td>
                        <td>
                          <!-- Add the delete icon with a unique identifier (e.g., data-id) -->
                          <i class="mdi mdi-tooltip-edit"></i>
                          <i class="fas fa-trash delete-icon" data-id="1"></i>
                        </td>
                      </tr>
                      <tr>
                        <td>5</td>
                        <td class="text-success"> 98.05% <i class="mdi mdi-arrow-up"></i></td>
                        <td><label class="badge badge-warning">In progress</label></td>
                        <td>Dave</td>
                        <td>53275535</td>
                        <td>53275535</td>
                        <td>53275535</td>
                        <td>
                          <!-- Add the delete icon with a unique identifier (e.g., data-id) -->
                          <i class="mdi mdi-tooltip-edit"></i>
                          <i class="fas fa-trash delete-icon" data-id="1"></i>
                        </td>
                      </tr>
                    </tbody>
                  </table>
                </div>
              </div>
            </div>
          </div>
        </div>
        <!-- content-wrapper ends -->
        <!-- partial:../../partials/_footer.html -->
        <footer class="footer">
          <div class="container-fluid d-flex justify-content-between">
            <span class="text-muted d-block text-center text-sm-start d-sm-inline-block">Copyright © bootstrapdash.com
              2021</span>
            <span class="float-none float-sm-end mt-1 mt-sm-0 text-end"> Free <a
                href="https://www.bootstrapdash.com/bootstrap-admin-template/" target="_blank">Bootstrap admin
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
  <script src="assets/js/jquery.cookie.js" type="text/javascript"></script>
  <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
        <script src="https://ajax.googleapis.com/ajax/libs/jqueryui/1.12.1/jquery-ui.min.js"></script>
  <!-- endinject -->
  <!-- Plugin js for this page -->
  <!-- End plugin js for this page -->
  <!-- inject:js -->
  <script src="../../assets/js/off-canvas.js"></script>
  <script src="../../assets/js/hoverable-collapse.js"></script>
  <script src="../../assets/js/misc.js"></script>
  <!-- endinject -->
  <!-- Custom js for this page -->
  <script src="../../assets/js/file-upload.js"></script>
  <script src="assets/js/dashboard.js"></script>
  <!-- Include Chart.js library -->
  <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/3.7.0/chart.min.js"></script>

  <script>
    const deleteIcons = document.querySelectorAll('.delete-icon');

    // Add a click event listener to each delete icon
    
  </script>



  <!-- End custom js for this page -->
</body>

</html>