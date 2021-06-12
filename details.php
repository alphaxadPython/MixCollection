<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Product-Details | Mix Collection</title>
    <link rel="stylesheet" href="css/bootstrap.css">
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/main.css">
    <link rel="stylesheet" href="css/responsive.css">
    <link rel="stylesheet" href="css/animate.css">
    <link rel="stylesheet" href="css/all.css">


</head>
<body>
    
    <?php include "nav1.php" ?>

    <div class="d-sm-block d-md-none fixed-top position-sticky">
        <nav class="breadcrumb">
            <a  href="#menu" style="color: #FE980F;"><i class="fas fa-caret-down"></i> Cartegories</a>   
        </nav>
    </div>
   
   
    <div class="section mt-5">
        <div class="container">
            <div class="row">
                <?php include "logedSide.php"; ?>

                <div class="col-sm-9">

                <?php
                    include "connection.php";

                    $id = $_GET['id'];

                    $sql = "SELECT * FROM products where id ='$id'";
                    $check = mysqli_query($conn, $sql);

                    while($row = mysqli_fetch_assoc($check)){
                 ?>
				
                     <div class="row">
                     <div class="col-md-6">
                        <img src="<?php echo $row['photo']; ?>" style="width: 100%; height: 400px" alt="">
                    </div>
                    <div class="col-md-6  login-form">
                        <h5 class="text-muted"><?php echo $row['productname']; ?> </h5>
                        <form action="" method="POST" enctype="multipart/form-data">
                            <small class="text-muted">Product name</small>
                            <input type="text" name="productName" placeholder="Product Name" value="<?php echo $row['productname']; ?>" disabled/>
                            <small class="text-muted">Product cost</small>
                            <input type="text" name="cost" placeholder="Cost" value="<?php echo $row['cost']; ?>" disabled/>
                            <small class="text-muted">available</small>
                            <input type="text" name="quantity" placeholder="Quantity"  value="<?php echo $row['available']; ?>" disabled/>
                            <div class="row">
                                <div class="col-6">
                                    <small class="text-muted">User ratings</small><br>
                                    <i class="fas fa-star text-warning mt-4" ></i><i class="fas fa-star text-warning"></i>  <i class="fas fa-star-half-alt text-warning"></i><i class="fas fa-star-half-alt text-warning"></i><br>
                                </div>
                                <div class="col-6">
                                <small class="text-muted">Choose Quantity</small>
                                    <select name="quantity" id="" value="" class="form-control" placeholder="Product quantity">
                                        <option value="1">1</option>
                                        <option value="2">2</option>
                                        <option value="3">3</option>
                                        <option value="4">4</option>
                                        <option value="5">5</option>
                                        <option value="6">6</option>
                                        <option value="7">7</option>
                                        <option value="8">8</option>
                                        <option value="9">9</option>
                                        <option value="10">10</option>
                                    </select><br>
                                </div>
                        </div>
                            <div class="row">
                                <div class="col-6">
                                    
                                    <button type="submit" name="edit" class="btn btn-default"><i class="fas fa-hand-holding-usd"></i> Buy Now</button>
                                </div>
                                <div class="col-6">
                                    <button type="submit" name="edit" class="btn btn-default"><i class="fa fa-shopping-cart"></i> Add to cart</button>
                                </div>
                            </div>
                        </form>
                    </div>
                     </div>
 

                    <?php } ?>
				
				</div>
            </div>
        </div>
    </div>




    <script src="js/bootstrap.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/proper.js"></script>
    <script src="js/jquery-3.5.1.min.js"></script>
    <script src="js/bootstrap.bundle.js"></script>
    <script src="js/bootstrap.bundle.min.js"></script>
    <script src="js/main.js"></script>

    
</body>
</html>
