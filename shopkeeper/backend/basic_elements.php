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
                <li class="breadcrumb-item">
                  <div class="input-group">
                    <input type="text" class="form-control" placeholder="Search...">
                    <div class="input-group-append">
                      <button class="btn btn-outline-secondary" type="button">Search</button>
                    </div>
                  </div>
                </li>
                <li class="breadcrumb-item">
                  <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#addRowModal">Add New
                    Row</button>
                </li>
              </ol>
            </nav>
          </div>

          <div class="col-lg-6 grid-margin stretch-card table-responsive"
            style="height: 100vh; width: 75vw; overflow: scroll;">
            <div class="card">
              <div class="card-body">
                <h4 class="card-title">Food Items</h4>
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
                          <a href="#" data-toggle="modal" data-target="#editCourseModal">
                            <i class="fas fa-pencil-alt edit-icon"></i>
                          </a>
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
                          <a href="#" data-toggle="modal" data-target="#editCourseModal">
                            <i class="fas fa-pencil-alt edit-icon"></i>
                          </a>
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
                          <a href="#" data-toggle="modal" data-target="#editCourseModal">
                            <i class="fas fa-pencil-alt edit-icon"></i>
                          </a>
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
                          <a href="#" data-toggle="modal" data-target="#editCourseModal">
                            <i class="fas fa-pencil-alt edit-icon"></i>
                          </a>
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
                        <<td>
                          <a href="#" data-toggle="modal" data-target="#editCourseModal">
                            <i class="fas fa-pencil-alt edit-icon"></i>
                          </a>
                          </td>
                      </tr>
                    </tbody>
                  </table>
                </div>
              </div>
            </div>
          </div>
        </div>

        <div class="modal fade" id="editCourseModal" tabindex="-1" aria-labelledby="editCourseModalLabel"
          aria-hidden="true">
          <div class="modal-dialog">
            <div class="modal-content">
              <div class="modal-header">
                <h5 class="modal-title" id="editCourseModalLabel">Edit Course Details</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                  <span aria-hidden="true">&times;</span>
                </button>
              </div>
              <form method="post">
                <div class="modal-body">
                  <!-- Add input fields for editing course details here -->
                  <div class="form-group">
                    <label for="editCourseName">Catergory </label>
                    <input type="text" class="form-control" id="editCategory" name="editCategory" required>
                  </div>
                  <div class="form-group">
                    <label for="editCourseDescription">Price</label>
                    <input type="number" class="form-control" id="editCourPrice" name="editCourPrice"
                      required></textarea>
                  </div>
                  <div class="form-group">
                    <label for="editPrice">Offer's</label>
                    <input type="text" class="form-control" id="editOffers" name="editOffers" required>
                  </div>
                  <div class="form-group">
                    <label for="editCourseCategory">Description</label>
                    <input type="text" class="form-control" id="editDesscription" name="editDesscription" required>
                  </div>
                  <div class="form-group">
                    <label for="editCourseCategory">Time Taken To Bake</label>
                    <input type="text" class="form-control" id="editTime" name="editTime" required>
                  </div>
                  <!-- Add more input fields as needed -->
                </div>
                <div class="modal-footer">
                  <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                  <button type="submit" class="btn btn-primary">Save Changes</button>
                </div>
              </form>
            </div>
          </div>
        </div>

        <div class="modal fade" id="addRowModal" tabindex="-1" aria-labelledby="addRowModalLabel" aria-hidden="true">
          <div class="modal-dialog">
            <div class="modal-content">
              <div class="modal-header">
                <h5 class="modal-title" id="addRowModalLabel">Add New Row</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                  <span aria-hidden="true">&times;</span>
                </button>
              </div>
              <form id="addRowForm">
                <div class="modal-body">
                  <!-- Add input fields for adding new row here -->
                  <div class="form-group">
                    <label for="newCategory">Category</label>
                    <input type="text" class="form-control" id="newCategory" name="newCategory" required>
                  </div>
                  <div class="form-group">
                    <label for="newItem">Item</label>
                    <input type="text" class="form-control" id="newItem" name="newItem" required>
                  </div>
                  <!-- Add more input fields as needed -->
                </div>
                <div class="modal-footer">
                  <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                  <button type="button" class="btn btn-primary" onclick="addNewRow()">Add Row</button>
                </div>
              </form>
            </div>
          </div>
        </div>

        <!-- content-wrapper ends -->
        <!-- partial:../../partials/_footer.html -->
        <footer class="footer">
          <div class="container-fluid d-flex justify-content-between">
            <span class="text-muted d-block text-center text-sm-start d-sm-inline-block">Copyright © to the Team</span>
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
  <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>

  <!-- Include Popper.js (required for Bootstrap dropdowns) -->
  <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.3/dist/umd/popper.min.js"></script>

  <!-- Include Bootstrap JS -->
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>

  <!-- Include your custom scripts after including jQuery, Popper.js, and Bootstrap JS -->
  <script src="../../assets/vendors/js/vendor.bundle.base.js"></script>
  <script src="../../assets/js/off-canvas.js"></script>
  <script src="../../assets/js/hoverable-collapse.js"></script>
  <script src="../../assets/js/misc.js"></script>
  <script src="../../assets/js/file-upload.js"></script>

  <script>
    // JavaScript function to toggle the visibility of the form
    function editRow(rowId) {
      // Hide all forms by default
      const forms = document.querySelectorAll('.custom-form');
      forms.forEach((form) => {
        form.style.display = 'none';
      });

      // Show the form associated with the clicked row
      const formToShow = document.querySelector(`#${rowId}-form`);
      if (formToShow) {
        formToShow.style.display = 'block';
      }
    }
  </script>
  <script src="../../assets/js/file-upload.js"></script>
  <script src="assets/js/dashboard.js"></script>
  <!-- Include Chart.js library -->
  <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/3.7.0/chart.min.js"></script>

  <script>
    function addNewRow() {
      // Get the values from the form fields
      const newCategory = document.getElementById('newCategory').value;
      const newItem = document.getElementById('newItem').value;

      // Create a new table row and append it to the table
      const tableBody = document.querySelector('.table tbody');
      const newRow = document.createElement('tr');
      newRow.innerHTML = `
            <td>${tableBody.children.length + 1}</td>
            <td>${newCategory}</td>
            <td>${newItem}</td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <td>
                <a href="#" data-toggle="modal" data-target="#editCourseModal">
                    <i class="fas fa-pencil-alt edit-icon"></i>
                </a>
            </td>
        `;

      tableBody.appendChild(newRow);

      // Clear the form fields and close the modal
      document.getElementById('newCategory').value = '';
      document.getElementById('newItem').value = '';
      $('#addRowModal').modal('hide');
    }
  </script>
  <!-- Add this JavaScript code at the end of your HTML file, just before the closing </body> tag -->
  <script>
    document.addEventListener("DOMContentLoaded", function () {
      const searchInput = document.querySelector("#searchInput");
      const searchButton = document.querySelector("#searchButton");
      const tableRows = document.querySelectorAll(".table tbody tr");

      searchButton.addEventListener("click", function () {
        const searchTerm = searchInput.value.toLowerCase();

        tableRows.forEach(function (row) {
          const rowData = row.textContent.toLowerCase();
          if (rowData.includes(searchTerm)) {
            row.style.display = "table-row";
          } else {
            row.style.display = "none";
          }
        });
      });
    });
  </script>




  <!-- End custom js for this page -->
</body>

</html>