<?php
$server = "localhost";
$username = "root";
$password = "";
$database = "food_order"; 

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

if (isset($_POST['action']) && $_POST['action'] == 'shopInsertCategory') {
    $FoodId = $_POST["FoodId"];
    $FoodName = $_POST["FoodName"];
    $price = $_POST["price"];
    $description = $_POST["description"];
    $foodcategoryId = $_POST["foodcategoryId"];
    $shopsId = $_POST["shopsId"];
    $offers = $_POST["offers"];
    $available = $_POST["available"];
    $TimeTaken = $_POST["TimeTaken"];
    
    $sql = "INSERT INTO fooditem (FoodName, price, description, foodcategoryId, shopsId, offers, available, TimeTaken)
    VALUES ('$FoodName', '$price', '$description', '$foodcategoryId', '$shopsId', '$offers', '$available', '$TimeTaken')";
    if (mysqli_query($con, $sql)) {
        echo "1"; // Success
    } else {
        echo "0"; // Error
    }

    // Close the database connection
    mysqli_close($con);
    exit();
}


if (isset($_POST['action']) && $_POST['action'] == 'editCategory') {
    $foodId = $_POST["foodId"];
    $FoodName = $_POST["FoodName"];
    $price = $_POST["price"];
    $description = $_POST["description"];
    $foodcategoryId = $_POST["foodcategoryId"];
    $shopsId = $_POST["shopsId"];
    $offers = $_POST["offers"];
    $available = $_POST["available"];
    $TimeTaken = $_POST["TimeTaken"];

    $sql = "UPDATE fooditem SET 
        FoodName = '$FoodName',
        price = '$price',
        description = '$description',
        foodcategoryId = '$foodcategoryId',
        shopsId = '$shopsId',
        offers = '$offers',
        available = '$available',
        TimeTaken = '$TimeTaken'
        WHERE FoodId = $foodId";

    if (mysqli_query($con, $sql)) {
        echo "1"; // Success
    } else {
        echo "0"; // Error
    }

    // Close the database connection
    mysqli_close($con);
    exit();
}


if (isset($_POST['action']) && $_POST['action'] == 'deleteData') {
    $foodId = $_POST["FoodId"];
   

    $sql= "DELETE FROM `foodcategory` WHERE FoodId = $FoodId";
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
