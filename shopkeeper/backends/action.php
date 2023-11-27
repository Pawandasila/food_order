<?php
$server = "localhost";
$username = "root";
$password = "";
$database = "food_order";  // Adjust the database name to match your configuration

// Create a database connection
$con = mysqli_connect($server, $username, $password, $database);

// Check if the connection was successful
if (!$con) {
    die("Connection failed: " . mysqli_connect_error());
}

if (isset($_POST['action']) && $_POST['action'] == 'insertdata') {
    $ShopName = $_POST["category"];
    $shopkeeperName = $_POST["shopkeeperName"];
    $ShopDescription = $_POST["newItem"];
    $username = $_POST["username"];
    $contactNo = $_POST["contactNo"];

    $sql = "INSERT INTO `shops`(`ShopName`, `ShopkeeperName`, `ShopDescription`, `UserName`, `ContactNo`) VALUES ('$ShopName','$shopkeeperName','$ShopDescription','$username',$contactNo)";

    if (mysqli_query($con, $sql)) {
        echo "1"; // Success
    } else {
        echo "0"; // Error
    }

    // Close the database connection
    mysqli_close($con);
    exit();
}
?>
