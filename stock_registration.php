<?php
$mysql = "localhost"; $user = "root"; $password = "";
try {
    $option = new PDO("mysql:host=$mysql;dbname=stock_tracking;charset=utf8", $user, $password);
    $option->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    }
catch(PDOException $e)
    {echo "Error: " . $e->getMessage();}
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
            <form action="back/stock_save.php" method="POST">
                <div class="form-group">
                    <label for="Name">Stock Name</label>
                    <input type="text" class="form-control" name="Name" id="Name" placeholder="Stock Name">
                </div>
                <div class="form-group">
                    <label for="Brand">Brand</label>
                    <input type="text" class="form-control" name="Brand" id="Brand" placeholder="Brand">
                </div>
                <div class="form-group">
                    <label for="Brand">Price</label>
                    <input type="text" class="form-control" name="Price" id="Price" placeholder="Price">
                </div>
                <div class="form-group">
                    <label for="Count">Product Count</label>
                    <input type="text" class="form-control" name="Count" id="Count" placeholder="Count">
                </div> <br>
                <button type="submit" class="btn btn-primary">Save Stock</button>
            </form>
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
