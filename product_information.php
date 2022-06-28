<?php
$mysql = "localhost";
$user = "root";
$password = "";
try {
    $conn = new PDO("mysql:host=$mysql;dbname=stock_tracking;charset=utf8", $user, $password);
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    }
catch(PDOException $e)
    {
    echo "Error: " . $e->getMessage();
    }
?>
<?php
include("back/db_connect.php"); $query=$db->prepare('select * from products'); $query->execute();
$stocks=$query-> fetchAll(PDO::FETCH_OBJ);


?>


<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
        <meta name="description" content="" />
        <meta name="author" content="" />
        <title>Stock Tracking System</title>
        <!-- Favicon-->
        <link rel="icon" type="image/x-icon" href="assets/favicon.ico" />
        <!-- Font Awesome icons (free version)-->
        <script src="https://use.fontawesome.com/releases/v6.1.0/js/all.js" crossorigin="anonymous"></script>
        <!-- Simple line icons-->
        <link href="https://cdnjs.cloudflare.com/ajax/libs/simple-line-icons/2.5.5/css/simple-line-icons.min.css" rel="stylesheet" />
        <!-- Google fonts-->
        <link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,700,300italic,400italic,700italic" rel="stylesheet" type="text/css" />
        <!-- Core theme CSS (includes Bootstrap)-->
        <link href="css/styles.css" rel="stylesheet" />
    </head>
    <body id="page-top">
        <!-- Navigation-->
        <a class="menu-toggle rounded" href="#"><i class="fas fa-bars"></i></a>
        <nav id="sidebar-wrapper">
            <ul class="sidebar-nav">
                <li class="sidebar-brand"><a href="#page-top">Stock Tracking System</a></li>
                <li class="sidebar-nav-item"><a href="index.php">Home</a></li>
                <li class="sidebar-nav-item"><a href="stock_registration.php">Stock Registration</a></li>
                <li class="sidebar-nav-item"><a href="product_information.php">Product Information</a></li>
            </ul>
        </nav>
        <!-- Header-->
        <header class="masthead d-flex align-items-center">
            <div class="container px-4 px-lg-5 text-center">
            
<table class="table table-dark" id="product">
  <tr>
    <th>No</th>
    <th>Product Name</th>
    <th>Product Brand</th>
    <th>Product Price ($)</th>
    <th>Product Quantity</th>                 
    <th>Edit</th>
  </tr>
  <?php 
  foreach($stocks as $stok){?>
			  
			<tr>
        <td><?= $stok->id ?></td>
			  <td><?= $stok->Product_Name ?></td>
              <td><?= $stok->Product_Brand ?></td>
			  <td><?= $stok->Product_Price ?></td>
              <td><?= $stok->Product_Quantity ?></td>
        
              <td>
                <a href="back/product_delete.php?id=<?php echo $stok->id; ?>" >
                <button class="btn btn-danger" >Delete</button></a>
                <a href="product_update.php?id=<?php echo $stok->id; ?>"> 
                <button class="btn btn-warning">Update</button></a> 
              </td>
<?php } ?>
</table>

            
            </div>
        </header>
       
        <!-- Scroll to Top Button-->
        <a class="scroll-to-top rounded" href="#page-top"><i class="fas fa-angle-up"></i></a>
        <!-- Bootstrap core JS-->
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
        <!-- Core theme JS-->
        <script src="js/scripts.js"></script>
    </body>
</html>
