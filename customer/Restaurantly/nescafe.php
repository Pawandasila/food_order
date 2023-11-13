<?php ob_start(); ?>
<?php
$shopId = $_GET['ShopID'];
$server = "localhost";
$username = "root";
$password = "";
$database = "food_order";
$con = mysqli_connect($server, $username, $password, $database);
if (!$con) {
    echo 'Connection failed: ' . mysqli_connect_error();
}
?>

<?php
if (isset($_POST['submit'])){
    // Check if the keys exist in the $_POST array
    $pawan = isset($_POST['pawan']) ? $_POST['pawan'] : '';
    $price = isset($_POST['price']) ? $_POST['price'] : '';
    $quantity = isset($_POST['quantity']) ? $_POST['quantity'] : '';
    $totalItem = isset($_POST['totalItem']) ? $_POST['totalItem'] : '';

    // Now you can use these variables as needed
    echo "Item Name: $pawan, Price: $price, Quantity: $quantity, Total Items: $totalItem";
    foreach ($pawan as $foodName => $well) {
      // $foodName is the current element in the array
      echo $pawan[$well] . "<br>";
  }
  }
?>



<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>Taste Sculptors Palette: Crafting Gastronomic Art</title>
  <meta content="" name="description">
  <meta content="" name="keywords">

  <!-- Favicons -->
  <link href="assets/img/favicon.png" rel="icon">
  <link href="assets/img/apple-touch-icon.png" rel="apple-touch-icon">

  <!-- Google Fonts -->
  <link
    href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Playfair+Display:ital,wght@0,400;0,500;0,600;0,700;1,400;1,500;1,600;1,700|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i"
    rel="stylesheet">

  <!-- Vendor CSS Files -->
  <link href="assets/vendor/animate.css/animate.min.css" rel="stylesheet">
  <link href="assets/vendor/aos/aos.css" rel="stylesheet">
  <link href="assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
  <link href="assets/vendor/boxicons/css/boxicons.min.css" rel="stylesheet">
  <link href="assets/vendor/glightbox/css/glightbox.min.css" rel="stylesheet">
  <link href="assets/vendor/swiper/swiper-bundle.min.css" rel="stylesheet">

  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css"
    integrity="sha384-KyZXEAg3QhqLMpG8r+6ayZJ8r7B6q6eEc6aDkGS6X4U5j4IbbVYUew+OrCXaRkfj" crossorigin="anonymous">

  <!-- Template Main CSS File -->
  <link href="assets/css/style.css" rel="stylesheet">

  <style>
    /* Style for the container */
    .container-menu {
      width: 100%;
      max-width: 800px;
      margin: 20px auto;
      margin-top: 40px;
      padding: 20px;
      border-radius: 15px;
      box-shadow: 0 15px 10px rgba(186, 18, 18, 0.2);
      background: #333;
    }

    .head {
      font-size: 26px;
      font-weight: bold;
      margin-bottom: 40px;
      margin-top: 10px;
      text-align: center;
    }

    .cart-container {
      overflow-x: auto;
    }

    .cart {
      width: 100%;
      border-collapse: collapse;
    }

    .cart th,
    .cart td {
      padding: 10px 15px;
      text-align: left;
      border-bottom: 1px solid #ddd;
    }

    .cart th {
      background-color: #333;
      color: white;
    }

    /* Style for table data cells */
    .cart td {
      padding: 10px 15px;
      color: #000;
      border-bottom: 1px solid #ddd;
    }

    /* Alternate row background color */
    .cart tbody tr {
      background-color: #f2f2f2;
      color: black;
    }

    .cart tbody .table-row {
      background-color: rgb(163, 151, 151);
      /* color: white; */
    }

    .button {
      margin-top: 2.3rem;
      display: flex;
      justify-content: center;
      align-items: center;
      border: none;
      background: none;
    }

    .button button {
      padding: .5rem;
      border-radius: .9rem;
      background-color: transparent;
      color: white;
      box-shadow: 0 15px 10px rgba(186, 18, 18, 0.2);
    }

    /* Style for "Add to cart" and "Remove" buttons */
    .addToCart,
    .remove {
      text-align: center;
    }

    /* Hover effect on buttons */
    .remove:hover {
      background-color: #333;
      color: white;
      cursor: pointer;
    }

    .btn button a {
      text-decoration: none;
      list-style: none;
      display: inline;
      /* width: 12rem; */
    }

    .quantityChange {
      text-align: center;
    }

    /* Add this CSS to your stylesheet or in a style tag in the head of your HTML document */

    .remove-item {
      background-color: #dc3545;
      /* Red background color */
      color: #fff;
      /* White text color */
      padding: 5px 10px;
      /* Adjust padding as needed */
      border: none;
      cursor: pointer;
    }

    .remove-item:hover {
      background-color: #c82333;
      /* Darker red on hover */
    }

    .quantity-group {
      display: flex;
      align-items: center;
    }

    .quantity-group span {
      cursor: pointer;
      padding: 5px;
      border: 1px solid #ccc;
      margin: 0 5px;
    }

    .quantity-group input {
      width: 40px;
      text-align: center;
      border: 1px solid #ccc;
    }

    .card:hover {
      transform: none !important;
      transition: none !important;
    }

    .card {
      max-height: 450px;
      /* Adjust the value as needed */
      /* overflow: auto;    */
    }

    .overlay-text {
      position: absolute;
      top: 50%;
      left: 50%;
      transform: translate(-50%, -50%);
      color: white;
      font-size: 16px;
      text-align: center;
    }

    @media (max-width: 768px) {
      .container-menu {
        overflow-x: scroll;
      }
    }

    /* CSS for mobile view */
    @media screen and (max-width: 768px) {
      .btn button {
        background-color: #FF0000;
        /* Change button color for mobile view */
      }
    }
  </style>
</head>

<body>
  <?php include "navbar.php"  ?>
  <main id="main">
    <section id="menu" class="menu section-bg">

      <div class="container" data-aos="fade-up">
        <div class="section-title">
          <h2>Menu</h2>
          <p>Check Our Tasty Menu</p>
        </div>

        <div class="row" data-aos="fade-up" data-aos-delay="100">
          <div class="col-lg-12 d-flex justify-content-center">
            <ul id="menu-flters">
              <li data-filter="*" class="filter-active">All</li>
              <?php
                            $menue = mysqli_query($con, "SELECT * FROM foodcategory ");
                            while ($mennShow = mysqli_fetch_array($menue)) {
                            ?>
              <li data-filter=".<?php echo $mennShow['foodCatergoryName'] ?>">
                <?php echo $mennShow['foodCatergoryName'] ?>
              </li>
              <?php
                            }
                            ?>
            </ul>
          </div>
        </div>

        <div class="row menu-container" data-aos="fade-up" data-aos-delay="400" >
          <?php
              $result = mysqli_query($con, "SELECT * FROM fooditem WHERE shopsId = $shopId");
              while ($row = mysqli_fetch_array($result)) {
                $foodcategoryname = $row['foodcategoryId'];
                $category = mysqli_query($con, " SELECT * FROM foodcategory WHERE foodId = $foodcategoryname");
                $food = mysqli_fetch_array($category);
                $imp = $food['foodCatergoryName'];
              ?>
          <div class="col-lg-4 menu-item <?php echo $imp ?>" value ="1">
            <div class="card" style="height: 29rem;">
              <div class="position-relative">
                <img src="assets/img/menu/lobster-bisque.jpg" class="card-img-top" alt="" data-bs-toggle="tooltip"
                  data-bs-placement="top" title="<?php echo $row['description']; ?>">
                <div class="overlay">
                  <p class="overlay-text">
                    <?php echo $row['description']; ?>
                  </p>
                </div>
              </div>
              <div class="card-body text-center">
                <div class="additional-info">
                  <p class="mb-0"><strong>Name:</strong>
                    <span data-additional="<?php echo $row['FoodName']; ?>">
                      <input type="text" style="border: none; width: 113px;" class="foodName"
                        value="<?php echo $row['FoodName']; ?> ">
                    </span>
                  </p>
                  <p class="mb-0"><strong>Price:</strong>
                    <span class="prices" data-additional="<?php echo $row['price']; ?>">
                      &#x20b9; <input style="border: none; width: 113px;" type="text"
                        value="<?php echo $row['price']; ?>"> </span>
                  </p>
                  <button class="btn btn-primary cart1 mt-3" id="btn<?php echo $row['FoodId'] ?>" value="<?php echo $row['FoodId'] ?>">
                    <!-- <input type="text" id="int<?php echo $row['FoodId'] ?>" value="<?php echo $row['FoodId'] ?>" hidden> -->
                    <i class="fa-solid fa-cart-plus"></i>&emsp; Add to Cart
                  </button>
                </div>
              </div>
            </div>
          </div>
          <?php
  }
  ?>
        </div>
        <form method="post">
    <div class="container container-menu">
        <div class="head">Your Orders List</div>
        <table class="table cart tbale-hoverable">
            <thead>
                <tr>
                    <th class="number">S.no</th>
                    <th class="name">Item Name</th>
                    <th class="price">Price</th>
                    <th class="addToCart">Total Items</th>
                    <th class="total">Total</th>
                    <th class="remove">Remove</th>
                </tr>
            </thead>
            <tbody class="table-body" id="body-cart">
                <tr>
                    <td>1</td>
                    <td><input type="text" style="background:none ; border:none" name="pawan[]" value="oaw" class="form-control" ></td>
                    <td><input type="text" style="background:none ; border:none" name="price[]" value="jjj" class="form-control" ></td>
                    <td id="quantity" class="quantity-group"> <span class="decrement">-</span> <input type="text" name="quantity" class="form-control quantityChange" value="1"> <span class="increment">+</span></td>
                    <td><input type="text" style="background:none ; border:none" name="totalItem[]  " value="kkk" class="form-control" ></td>
                    <td><button class="remove-item">Remove</button></td>
                </tr>
            </tbody>
        </table>
        <div class="button">
            <button class="btn btn-primary" name="submit" value="submit" type="submit">Proceed</button>
        </div>
    </div>
</form>



      </div>

    </section>

<!-- End Menu Section -->

  </main>
  <!-- End #main -->

  <div id="preloader"></div>
  <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i
      class="bi bi-arrow-up-short"></i></a>

  <!-- Vendor JS Files -->
  <script src="assets/vendor/aos/aos.js"></script>
  <script src="assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="assets/vendor/glightbox/js/glightbox.min.js"></script>
  <script src="assets/vendor/isotope-layout/isotope.pkgd.min.js"></script>
  <script src="assets/vendor/swiper/swiper-bundle.min.js"></script>
  <script src="assets/vendor/php-email-form/validate.js"></script>
  <script src="https://kit.fontawesome.com/603603feae.js" crossorigin="anonymous"></script>

  <!-- Template Main JS File -->
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
  <script src="assets/js/main.js"></script>
  <script src="https://ajax.googleapis.com/ajax/libs/jqueryui/1.12.1/jquery-ui.min.js"></script>
  <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
  <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>


  <script>
    $(document).ready(function(){
      $('.menu-item').on('click', function(){
        // alert($(this).val());
        const foodName = $(this).find('.additional-info .foodName').val();
        const priceText = $(this).find('.additional-info .prices').find('input').val();
        const price = parseFloat(priceText.replace(/[^\d.]/g, ''));
        const Id = $(this).find('.cart1').val();
        const totalItem = price;
        // alert(Id);
        var tbody = $('#body-cart');
        var row = $('<tr>');
        row.append('<td>' + (tbody.find('tr').length + 1) + '</td>');
        row.append('<td><input type="text" style="background:none ; border:none" name="pawan[]" value="' + foodName + '" class="form-control" ></td>');
        row.append('<td><input type="text" style="background:none ; border:none" name="price[]" value="' + price + '" class="form-control" ></td>');
        row.append('<td id="quantity" class="quantity-group"> <span class="decrement">-</span> <input type="text" name="quantity[]" class="form-control quantityChange" value="1"> <span class="increment">+</span></td>');
        row.append('<td><input type="text" style="background:none ; border:none" name="totalItem[]" value="' + totalItem + '" class="form-control" ></td>');
        row.append('<td><button class="remove-item">Remove</button></td>');

        tbody.append(row);

        row.find('.remove-item').on('click', function (){
          row.remove();
        });
        var quantityInput = row.find('#quantity input');
        var incrementButton = row.find('.increment');
        var decrementButton = row.find('.decrement');

        incrementButton.on('click', function () {
          var currentQuantity = parseInt(quantityInput.val());
          quantityInput.val(currentQuantity + 1);
          updateTotal(row);
        });

        decrementButton.on('click', function () {
          var currentQuantity = parseInt(quantityInput.val());
          if (currentQuantity > 1) {
            quantityInput.val(currentQuantity - 1);
            updateTotal(row);
          }
        });
      });

      // Function to update the total when the quantity changes
      function updateTotal(row) {
        var quantity = parseInt(row.find('#quantity input').val());
        var price = parseFloat(row.find('.price').text());
        var total = quantity * price;
        row.find('.total').text(total);
      }
    });
    ob_end_flush();

  </script>





</body>

</html>