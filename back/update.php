<?php

$db = new PDO("mysql:host=localhost;dbname=stock_tracking;charset=utf8", "root", "");

$id = $_GET["id"];
$newname = $_POST['NewName']; $newbrand = $_POST['NewBrand']; $newprice = $_POST['NewPrice']; $newcount = $_POST['NewCount'];


if (!$newname || !$newbrand || !$newprice || !$newcount) {
    die("");
}

$update = $db->prepare("UPDATE products SET Product_Name = ?, product_Brand = ?, product_Price = ?, Product_Quantity = ? where id= ?");
$update->execute([$newname, $newbrand, $newprice, $newcount, $id]);

if ($update) {
    echo '<script>alert("Updated")</script>';
    header("refresh:1; url=../product_information.php");
}else {
    echo "ERROR ";
}

?>
