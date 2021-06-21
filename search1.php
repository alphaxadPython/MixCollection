<?php  session_start(); ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Product Search| Mix Collection</title>
    <link rel="icon" href="logo/logo.ico" type="image/icon type" > 

    <link rel="stylesheet" href="css/bootstrap.css">
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/main.css">
    <link rel="stylesheet" href="css/responsive.css">
    <link rel="stylesheet" href="css/animate.css">
    <link rel="stylesheet" href="css/all.css">
    <link rel="stylesheet" href="css/pages.css">

</head>
<body>
    
    <?php include "b4nav.php" ?>
    <br><br>
    <div class="container ">
    <h2 class="title text-center">Search Results</h2>

        <div class="row">
            <?php 

                include "connection.php";
                $sech = $_SESSION['search'];
                $sql = "SELECT * FROM products WHERE cartegory LIKE '%$sech%' OR productname LIKE '%$sech%' OR cost LIKE '%$sech%'";
                $check = mysqli_query($conn, $sql);

                while($row = mysqli_fetch_assoc($check)){

            ?>
                <div class="col-6 col-md-3">
                <a href="" data-toggle="modal" data-target="#modelId" >
                    <div class="product-image-wrapper card shadow">
                        <div class="single-products">
                            <div class="productinfo text-center">
                                <img src="<?php echo $row['photo']; ?>" style="width: 100%; height: 160px" alt="" />
                                <p style="color: #FE980F"><?php echo $row['cost']; ?>TSH/=</p>
                                <p><?php echo $row['productname']; ?></p>
                                <a href="" data-toggle="modal" data-target="#modelId"  class="btn btn-default add-to-cart"><i class="fa fa-shopping-cart"></i>Add to cart</a>
                            </div>
                            
                    </div>
                </a>
                </div>
            </div>
            <?php } ?>
        </div>
    </div>
    <?php include "loginSign.php" ?>
    <script src="js/bootstrap.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/proper.js"></script>
    <script src="js/jquery-3.5.1.min.js"></script>
    <script src="js/bootstrap.bundle.js"></script>
    <script src="js/bootstrap.bundle.min.js"></script>
    <script src="js/main.js"></script>

    
</body>
</html>