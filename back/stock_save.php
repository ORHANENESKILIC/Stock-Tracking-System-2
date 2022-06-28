<?php

$db = new PDO("mysql:host=localhost;dbname=stock_tracking;charset=utf8", "root", "");
$name = $_POST['Name']; $brand = $_POST['Brand']; $price = $_POST['Price']; $count = $_POST['Count'];
if (!$name || !$brand || !$price || !$count) {
    die("don't leave empty space");
}
$option = $db->prepare("INSERT INTO products SET Product_Name = ?, product_Brand = ?, product_Price = ?, Product_Quantity = ?");
$option->execute([$name, $brand, $price, $count]);

if ($option) {
    echo '<script>alert("transaction successful")</script>';
    header("refresh:1; url=../product_information.php");
}else {
    echo "error ";
}

?>