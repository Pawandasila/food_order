<?php 
          $server = "localhost";
          $username = "root";
          $password = "";
          $database = "food_order";
          $con = mysqli_connect($server, $username, $password, $database);
          if ($con) {
              // Corrected: This is a PHP alert, not a JavaScript alert
              // echo '<script> alert("Connected to the database."); </script>';
          } else {
              // Provide an error message if the connection fails
              echo 'Connection failed: ' . mysqli_connect_error();
          }
?>


<?php
session_start();

if (isset($_POST['action']) && $_POST['action'] == 'deleteDataItem') {
  // Retrieve data from the POST request
  $foodName = $_POST['foodName'];
  $quantity = $_POST['quantity'];
  $price = $_POST['price'];
  $mysqli = new mysqli('your_host', 'your_username', 'your_password', 'your_database');

  if ($mysqli->connect_error) {
    die("Connection failed: " . $mysqli->connect_error);
  }

  $sql = "INSERT INTO orderdeatils (ordersId, FoodId, Quantity, Amount) VALUES (?, ?, ?, ?)";
  $stmt = $mysqli->prepare($sql);
  $stmt->bind_param("ssss", $orderId, $foodId, $quantity, $amount);

  if ($stmt->execute()) {
    echo "Data inserted successfully";
  } else {
    echo "Error inserting data: " . $stmt->error;
  }

  $stmt->close();
  $mysqli->close();
}
?>
