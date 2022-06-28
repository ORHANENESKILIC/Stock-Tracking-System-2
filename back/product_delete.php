<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "stock_tracking";
try {
    $con = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);

    $con->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

    $sql = "DELETE FROM products WHERE id='" . $_GET["id"] . "'";

    $con->exec($sql);

    echo '<script>alert("transaction successful...")</script>';

    header("refresh:1; url=../product_information.php");

    }

catch(PDOException $e)
    {
    echo $sql . "
" . $e->getMessage();
    }

$con = null;
?>