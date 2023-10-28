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
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
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

    th.text-center {
        text-align: center;
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
      <div class="main-panel table-responsive" style=" height: 50%; overflow: scroll;" >
        <div class="content-wrapper">
          <div class="page-header">
            <h3 class="page-title"> Food Category </h3>
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
                    <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#addRowModal" id="addRowButton">Add New Row</button>
                </li>


              </ol>
            </nav>
          </div>

          <div class="col-lg-6 grid-margin stretch-card table-responsive" style="width:79vw">
            <div class="card ">
              <div class="card-body">
                <h4 class="card-title">Food Category </h4>
                <div class="table-responsive">
                  <table class="table table-hover">
                    <thead>
                      <tr>
                        <th>FoodId</th>
                        <th>FoodName</th>
                        <th>Price</th>
                        <th>Description</th>
                        <th>FoodCategoryId</th>
                        <th>ShopsId</th> 
                        <th>Offers</th>  
                        <th>Available Time</th>
                        <th>Time Taken</th>
                      </tr>
                    </thead>
                    <tbody id='category'>

                      <?php
                          $result=mysqli_query($con,"SELECT * FROM fooditem"); 
                          while($row=mysqli_fetch_array($result)){
                            $foodId = $row['FoodId'];
                            $FoodName = $row['FoodName'];
                            $price = $row['price']; 
                            $description = $row['description'];   
                            $foodcategoryId = $row['foodcategoryId'];   
                            $shopsId = $row['shopsId'];   
                            $offers = $row['offers'];   
                            $available = $row['available'];   
                            $TimeTaken = $row['TimeTaken'];   
                          ?>
                      <tr>
                        <td>
                           <?php echo $row['FoodId'] ?>
                        </td>
                        <td>
                          <?php echo $row['FoodName'] ?>
                        </td>
                        <td>
                          <?php echo $row['price'] ?>
                        </td>
                        <td>
                          <?php echo $row['description'] ?>
                        </td>
                        <td>
                          <?php echo $row['foodcategoryId'] ?>
                        </td>
                        <td>
                          <?php echo $row['shopsId'] ?>
                        </td>
                        <td>
                          <?php echo $row['offers'] ?>
                        </td>
                        <td>
                          <?php echo $row['available'] ?>
                        </td>
                        <td>
                          <?php echo $row['TimeTaken'] ?>
                        </td>
                        <td>
                            <div class="d-flex justify-content-center">
                            <button onclick="editThis('<?php echo $FoodId ?>', '<?php echo $FoodName ?>', '<?php echo $price ?>', '<?php echo $description ?>', '<?php echo $foodcategoryId ?>', '<?php echo $shopsId ?>', '<?php echo $offers ?>', '<?php echo $available ?>', '<?php echo $TimeTaken ?>')" class="btn btn-danger edit-link" data-foodid="<?php echo $FoodId; ?>">
                            <i class="fas fa-edit"></i> Edit
                            </button>

                            </div>
                        </td>

                        <td>
                            <div class="d-flex justify-content-center">
                                <button type="button" class="btn btn-danger delete-button" data-foodid="<?php echo $row['FoodId']; ?>"><i class="fas fa-trash-alt"></i> Delete</button>
                            </div>
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

       <!-- Edit Modal -->
       <div class="modal fade" id="editCourseModal" tabindex="-1" aria-labelledby="editCourseModalLabel" aria-hidden="true">
          <div class="modal-dialog">
            <div class="modal-content">
              <div class="modal-header">
                <h5 class="modal-title" id="editCourseModalLabel">Edit Course Details</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                  <span aria-hidden="true">&times;</span>
                </button>
              </div>
              <form id="editCourseForm">
                <div class="modal-body">
                  <!-- Add input fields for editing course details here -->
                  <div class="form-group">
                    <!-- <label for="editCategory">FoodId</label> -->
                    <input type="hidden" class="form-control" id="foodId" name="foodid" required>
                  </div>
                  <div class="form-group">
                  <label for="FoodName">Food Name</label>
                  <input type="text" class="form-control" id="FoodName" name="FoodName" required>
                </div>
                <div class="form-group">
                  <!-- <label for="foodId">Food ID</label> -->
                  <input type="text" class="form-control" id="foodId" name="foodId" readonly hidden>
                </div>
                <div class="form-group">
                  <label for="price">Price</label>
                  <input type="text" class="form-control" id="price" name="price">
                </div>
                <div class="form-group">
                  <label for="description">Description</label>
                  <input type="text" class="form-control" id="description" name="description">
                </div>
                <div class="form-group">
                  <label for="foodcategoryId">Food Category ID</label>
                  <input type="text" class="form-control" id="foodcategoryId" name="foodcategoryId">
                </div>
                <div class="form-group">
                  <label for="shopsId">Shops ID</label>
                  <input type="text" class="form-control" id="shopsId" name="shopsId">
                </div>
                <div class="form-group">
                  <label for="offers">Offers</label>
                  <input type="text" class="form-control" id="offers" name="offers">
                </div>
                <div class="form-group">
                  <label for="available">Available</label>
                  <input type="text" class="form-control" id="available" name="available">
                </div>
                <div class="form-group">
                  <label for="TimeTaken">Time Taken</label>
                  <input type="text" class="form-control" id="TimeTaken" name="TimeTaken">
                </div>
                  <!-- <div class="form-group">
                    <label for="editItem">Item</label>
                    <input type="text" class="form-control" id="editItem" name="editItem" required>
                  </div> -->
                  <!-- Add more input fields as needed -->
                </div>
                <div class="modal-footer">
                  <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                  <button type="submit" class="btn btn-primary" onclick="saveChanges()">Save Changes</button>
                </div>
              </form>
            </div>
          </div>
      </div>


<!-- add new row model -->
        <div class="modal fade" id="addRowModal" tabindex="-1" aria-labelledby="addRowModalLabel" aria-hidden="true">
          <div class="modal-dialog">
            <div class="modal-content">
              <div class="modal-header">
                <h5 class="modal-title" id="addRowModalLabel">Add New Row</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                  <span aria-hidden="true">&times;</span>
                </button>
              </div>
              <form id="addRowForm" method="post">
                <div class="modal-body">
                  <!-- Add input fields for adding new row here -->
                <div class="form-group">
                  <label for="FoodName">Food Name</label>
                  <input type="text" class="form-control" id="FoodName" name="FoodName" required>
                </div>
                <div class="form-group">
                  <!-- <label for="foodId">Food ID</label> -->
                  <input type="text" class="form-control" id="foodId" hidden name="foodId" readonly>
                </div>
                <div class="form-group">
                  <label for="price">Price</label>
                  <input type="number" class="form-control" id="price" name="price">
                </div>
                <div class="form-group">
                  <label for="description">Description</label>
                  <input type="text" class="form-control" id="description" name="description">
                </div>
                <div class="form-group">
                  <label for="foodcategoryId">Food Category ID</label>
                  <input type="text" class="form-control" id="foodcategoryId" name="foodcategoryId">
                </div>
                <div class="form-group">
                  <label for="shopsId">Shops ID</label>
                  <input type="number" class="form-control" id="shopsId" name="shopsId">
                </div>
                <div class="form-group">
                  <label for="offers">Offers</label>
                  <input type="number" class="form-control" id="offers" name="offers">
                </div>
                <div class="form-group">
                  <label for="available">Available</label>
                  <input type="number" class="form-control" id="available" name="available">
                </div>
                <div class="form-group">
                  <label for="TimeTaken">Time Taken</label>
                  <input type="number" class="form-control" id="TimeTaken" name="TimeTaken">
                </div>
                  <!-- <div class="form-group">
                    <label for="newItem">Item</label>
                    <input type="text" class="form-control" id="newItem" name="newItem" required>
                  </div> -->
                  <!-- Add more input fields as needed -->
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                    <button type="submit" class="btn btn-primary" id="addRowForm">Add Row</button>
                </div>  

              </form>
            </div>
          </div>
        </div>

        <!-- delete model -->
        <div class="modal fade" id="deleteConfirmationModal" tabindex="-1" aria-labelledby="deleteConfirmationModalLabel" aria-hidden="true">
          <div class="modal-dialog">
            <div class="modal-content">
              <div class="modal-header">
                <h5 class="modal-title" id="deleteConfirmationModalLabel">Confirm Deletion</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                  <span aria-hidden="true">&times;</span>
                </button>
              </div>
              <div class="modal-body">
                Are you sure you want to delete this record?
              </div>
              <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancel</button>
                <button type="submit" class="btn btn-danger" id="confirmDeleteButton" onclick= deleterow()>Delete</button>
              </div>
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
  
  
<!-- <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script> -->
  <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-alpha1/dist/js/bootstrap.min.js"></script>
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
  <script src="https://ajax.googleapis.com/ajax/libs/jqueryui/1.12.1/jquery-ui.min.js"></script>



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

 
 
  <script src="../../assets/js/file-upload.js"></script>
  <script src="assets/js/dashboard.js"></script>
  <!-- Include Chart.js library -->
  <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/3.7.0/chart.min.js"></script>


  <!-- js for edit form -->
  <script>
  function editThis(x, y, a, b, c, d, e, f, g) {
    $('#FoodName').val(y);
    $('#foodId').val(x);
    $('#price').val(a);
    $('#description').val(b);
    $('#foodcategoryId').val(c);
    $('#shopsId').val(d);
    $('#offers').val(e);
    $('#available').val(f);
    $('#TimeTaken').val(g);
  }

  $(document).ready(function () {
    $(".edit-link").click(function (e) {
      $("#editCourseModal").modal("show");
    });
  });

  function saveChanges() {
    var foodId = $('#foodId').val();
    var FoodName = $('#FoodName').val();
    var price = $('#price').val();
    var description = $('#description').val();
    var foodcategoryId = $('#foodcategoryId').val();
    var shopsId = $('#shopsId').val();
    var offers = $('#offers').val();
    var available = $('#available').val();
    var TimeTaken = $('#TimeTaken').val();

    $.ajax({
      url: 'action.php',
      type: 'POST',
      data: {
        action: 'editCategory',
        FoodName: FoodName,
        foodId: foodId,
        price: price,
        description: description,
        foodcategoryId: foodcategoryId,
        shopsId: shopsId,
        offers: offers,
        available: available,
        TimeTaken: TimeTaken
      },
      success: function (data) {
        var td = "<tr><td>" + foodId + "</td>";
        td += "<td>" + FoodName + "</td>";
        td += "<td>" + price + "</td>";
        td += "<td>" + description + "</td>";
        td += "<td>" + foodcategoryId + "</td>";
        td += "<td>" + shopsId + "</td>";
        td += "<td>" + offers + "</td>";
        td += "<td>" + available + "</td>";
        td += "<td>" + TimeTaken + "</td></tr>";
        $('#editCategory').html(td); // Use html() to replace the content
      },
      error: function (jqXHR, textStatus, errorThrown) {
        alert('AJAX request failed:', textStatus, errorThrown);
      }
    });

    $("#editCourseModal").modal("hide");
  }
</script>

  <!-- js for delete form -->
  <script>
    $(document).ready(function () {
        $('.delete-button').click(function () {
            var foodId = $(this).data('foodid');
            $('#deleteConfirmationModal').data('foodid', foodId);
            $('#deleteConfirmationModal').modal('show');
          });
          
          $('#confirmDeleteButton').click(function () {
            var foodId = $('#deleteConfirmationModal').data('foodid');
            $.ajax({
                url: 'action.php',
                type: 'POST',
                data: 'action=deleteData&FoodId=' + FoodId,
                success: function (data) {
                    // alert("hello ");
                    location.reload();
                    
                    // Hide the modal after adding a new row
                    hideAddRowModal();
                },
                error: function (jqXHR, textStatus, errorThrown) {
                    alert('AJAX request failed:', textStatus, errorThrown);
                }
            });
            $('#deleteConfirmationModal').modal('hide');
        });
    });
</script>


<script>
    $(document).ready(function () {
        // Function to hide the modal
        function hideAddRowModal() {
            $("#addRowModal").modal("hide");
        }
        

        $('#addRowForm').on('submit', function (e) {
            // e.preventDefault();
            var foodId = $('#foodId').val();
            var FoodName = $('#FoodName').val();
            var price = $('#price').val();
            var description = $('#description').val();
            var foodcategoryId = $('#foodcategoryId').val();
            var shopsId = $('#shopsId').val();
            var offers = $('#offers').val();
            var available = $('#available').val();
            var TimeTaken = $('#TimeTaken').val();

            $.ajax({
                url: 'action.php',
                type: 'POST',
                data: 'action=shopInsertCategory&foodId=' + foodId + '&price=' + price + '&description=' + description + '&shopsId=' + shopsId + '&offers=' + offers,+ '&available=' + available + '&TimeTaken=' + TimeTaken,
                
                success: function (data)  {
                  var td = "<tr><td>" + FoodId + "</td>";
                  td += "<td>" + FoodName + "</td>";
                  td += "<td>" + price + "</td>";
                  td += "<td>" + description + "</td>";
                  td += "<td>" + foodcategoryId + "</td>";
                  td += "<td>" + shopsId + "</td>";
                  td += "<td>" + offers + "</td>";
                  td += "<td>" + available + "</td>";
                  td += "<td>" + TimeTaken + "</td></tr>";
                    
                  $('#category').append(td);
                  // $('#newCategory').val('');
                  alert("hello")
                    
                    // Hide the modal after adding a new row
                    hideAddRowModal();
                },
                error: function (jqXHR, textStatus, errorThrown) {
                    alert('AJAX request failed:', textStatus, errorThrown);
                }
            });
        });
    });
</script>






  

  <!-- End custom js for this page -->
</body>

</html>