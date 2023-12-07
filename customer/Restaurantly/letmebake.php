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



<!DOCTYPE html>
<html lang="en">

<head>
  <?php include "head.php" ?>

  <style>
    /* Style for the container */
    .quantity-group {
      position: relative;
    }

    .popover {
      max-width: none;
      /* Override Bootstrap's default max-width */
    }

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

    .cart td {
      padding: 10px 15px;
      color: #000;
      border-bottom: 1px solid #ddd;
    }

    .cart tbody tr {
      background-color: #f2f2f2;
      color: black;
    }

    .cart tbody .table-row {
      background-color: rgb(163, 151, 151);
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

    .addToCart,
    .remove {
      text-align: center;
    }

    .remove:hover {
      background-color: #333;
      color: white;
      cursor: pointer;
    }

    .btn button a {
      text-decoration: none;
      list-style: none;
      display: inline;
    }

    .quantityChange {
      text-align: center;
    }


    .remove-item {
      background-color: #dc3545;
      color: #fff;
      padding: 5px 10px;
      border: none;
      cursor: pointer;
    }

    .remove-item:hover {
      background-color: #c82333;
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

    .custom-popover-title {
      color: red !important;
      animation: fade-in 1.5s;
      box-shadow: 0px 0px 10px rgba(0, 0, 0, 0.1);
    }

    @keyframes fade-in {
      from {
        opacity: 0;
      }

      to {
        opacity: 1;
      }
    }





    @media (max-width: 768px) {
      .container-menu {
        overflow-x: scroll;
      }
    }

    @media screen and (max-width: 768px) {
      .btn button {
        background-color: #FF0000;
      }
    }
  </style>
</head>

<body>
  <?php include "navbar.php"  ?>

  <?php
if (isset($_POST['submit'])){
    $pawan = isset($_POST['pawan']) ? $_POST['pawan'] : 'array()';
    $Id = isset($_POST['Id']) ? $_POST['Id'] : 'array()';
    $price = isset($_POST['price']) ? $_POST['price'] : 'array()';
    $quantity = isset($_POST['quantity']) ? $_POST['quantity'] : 'array()';
    $totalItem = isset($_POST['totalItem']) ? $_POST['totalItem'] : 'array()';
    $sum = 0;
    $dateAndTime = date("Y-m-d H:i:s");
    $otp = rand(1000, 9999);
    
    for( $i =0 ; $i < count($totalItem) ; $i++ ) {  
      $sum+=$totalItem[$i];
    }
    $uer = $_SESSION['userId'];
    // echo "<script> alert('".$uer."') </script>";
    $insertQuery = "INSERT INTO `orders` (CustomerID, DateAndTime, TotalBills, OTP , shopID, OrderStatus, CustomerStatus, CustomersNotes) VALUES " ;
    $insertQuery .= "($uer, '$dateAndTime', '$sum', $otp, '$shopId' ,'Pending', NULL, NULL),";
    
    
    $insertQuery = rtrim($insertQuery, ',');

    if ($con->query($insertQuery) === TRUE) {
        echo '<script> alert("Order details inserted successfully!"); </script>';
    } else {
        echo '<script> alert("Error: ' . $con->error . '"); </script>';
    }

    $insertOrderId= mysqli_insert_id($con);
    // echo " <script> alert('" . $insertOrderId."')</script> ;";

    for( $i=0; $i<count($pawan) ; $i++){
      echo "<script> alert('". $pawan[$i]. "')</script>";
      $insertfooddetails = "INSERT INTO `orderdeatils`( `ordersId`, `FoodId`, `Quantity`, `Amount`)  VALUES  ($insertOrderId, $Id[$i], $quantity[$i] ,$totalItem[$i])";
      mysqli_query($con,$insertfooddetails);
    }

    

    // foreach ($pawan as $key => $Id) {
    // }
    
    // echo '<script> alert("'.$sum. '")</script>';
}
?>



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
            $menu = mysqli_query($con, "SELECT DISTINCT foodCatergoryName FROM foodcategory WHERE shopsId = 39");
            while ($menuItem = mysqli_fetch_array($menu)) {
                $categoryName = $menuItem['foodCatergoryName'];
            ?>
                <li data-filter=".<?php echo strtolower($categoryName); ?>">
                    <?php echo $categoryName; ?>
                </li>
            <?php
            }
            ?>
        </ul>
    </div>
</div>


        <div class="row menu-container" data-aos="fade-up" data-aos-delay="400">
  <?php
  $result = mysqli_query($con, "SELECT * FROM fooditem WHERE shopsId = $shopId");
  while ($row = mysqli_fetch_array($result)) {
    $foodcategoryname = $row['foodcategoryId'];
    $category = mysqli_query($con, "SELECT * FROM foodcategory WHERE foodId = $foodcategoryname");
    $food = mysqli_fetch_array($category);
    $imp = isset($food['foodCatergoryName']) ? $food['foodCatergoryName'] : '';
    ?>
    <div class="col-lg-4 menu-item <?php echo $imp ?>" value="1">
      <div class="card" style="height: 29rem;">
        <div class="position-relative">
          <img src="assets/img/menu/lobster-bisque.jpg" class="card-img-top" alt="" data-bs-toggle="tooltip"
               data-bs-placement="top" title="<?php echo isset($row['description']) ? $row['description'] : ''; ?>">
          <div class="overlay">
            <p class="overlay-text">
              <?php echo isset($row['description']) ? $row['description'] : ''; ?>
            </p>
          </div>
        </div>
        <div class="card-body text-center">
          <div class="additional-info">
            <p class="mb-0"><strong>Name:</strong>
              <span data-additional="<?php echo isset($row['FoodName']) ? $row['FoodName'] : ''; ?>">
                <input type="text" style="border: none; width: 113px;" class="foodName"
                       value="<?php echo isset($row['FoodName']) ? $row['FoodName'] : ''; ?> ">
              </span>
            </p>
            <p class="mb-0"><strong>Price:</strong>
              <span class="prices" data-additional="<?php echo isset($row['price']) ? $row['price'] : ''; ?>">
                &#x20b9; <input style="border: none; width: 113px;" type="text"
                                value="<?php echo isset($row['price']) ? $row['price'] : ''; ?>"> </span>
            </p>
            <button class="btn btn-primary cart1 mt-3" id="btn<?php echo isset($row['FoodId']) ? $row['FoodId'] : ''; ?>"
                    value="<?php echo isset($row['FoodId']) ? $row['FoodId'] : ''; ?>">
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

<script src="assets/vendor/aos/aos.js"></script>
  <script src="assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="assets/vendor/glightbox/js/glightbox.min.js"></script>
  <script src="assets/vendor/isotope-layout/isotope.pkgd.min.js"></script>
  <script src="assets/vendor/swiper/swiper-bundle.min.js"></script>
  <script src="assets/vendor/php-email-form/validate.js"></script>
  <script src="https://kit.fontawesome.com/603603feae.js" crossorigin="anonymous"></script>
  <script src="assets/js/main.js"></script>

  <!-- <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script> -->
  <script src="https://ajax.googleapis.com/ajax/libs/jqueryui/1.12.1/jquery-ui.min.js"></script>
<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>



  <script>
    function change(value) {
      alert("Clicked with value: " + value);
    }

    $(document).ready(function () {
      $('.menu-item').on('click', function (event) {
        event.preventDefault();
        const foodName = $(this).find('.additional-info .foodName').val();
        const priceText = $(this).find('.additional-info .prices').find('input').val();
        const price = parseFloat(priceText.replace(/[^\d.]/g, ''));
        const Id = $(this).find('.cart1').val();
        const totalItem = price;
        var tbody = $('#body-cart');
        var row = $('<tr>');
        row.append('<td>' + (tbody.find('tr').length + 1) + '</td>');
        row.append('<td><input type="text" style="background:none ; border:none" name="pawan[]" value="' + foodName + '" class="form-control" >');
        row.append('<input type="hidden" style="background:none ;  border:none" name="Id[]" value=" ' + Id + '" class="form-control" ></td>');
        row.append('<td><input type="text" style="background:none ; border:none" name="price[]" value="' + price + '" class="form-control" ></td>');
        row.append('<td id="quantity" class="quantity-group"> <input type="text" name="quantity[]" class="form-control quantityChange" value="1"></td>');
        row.append('<td><input type="text" style="background:none ; border:none" name="totalItem[]" value="' + totalItem + '" class="form-control" ></td>');
        row.append('<td><button class="remove-item">Remove</button></td>');
        tbody.append(row);

        var popover = row.find('.quantityChange').popover({
          title: '<div class="custom-popover-title">NOTE</div>',
          content: 'You can change the quantity by editing this input field.',
          placement: 'right',
          trigger: 'manual',
          html: true,
        }).popover('show');

        setTimeout(function () {
          popover.popover('dispose');
        }, 2540);

        row.find('.remove-item').on('click', function () {
          popover.popover('dispose');
          row.remove();
        });

        row.find('.quantityChange').on('input', function () {
          updateTotal(row);
        });

        function updateTotal(row) {
          var quantity = parseInt(row.find('.quantityChange').val()) || 0;
          var price = parseFloat(row.find('input[name="price[]"]').val()) || 0;
          var total = quantity * price;
          row.find('input[name="totalItem[]"]').val(total.toFixed(2));
        }
      });
    });
    ob_end_flush();
  </script>
</body>
</html>