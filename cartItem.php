<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cart-Item | Mix Collection</title>
    <link rel="icon" href="logo/logo.ico" type="image/icon type" > 
    <link rel="stylesheet" href="css/bootstrap.css">
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/main.css">
    <link rel="stylesheet" href="css/responsive.css">
    <link rel="stylesheet" href="css/animate.css">
    <link rel="stylesheet" href="css/all.css">

</head>
<body>
    
   <?php include "nav1.php" ?>

   <?php 
        include "connection.php";
        $id = $_GET['id'];
        $idp = $price ="";

        if(isset($_POST['edit'])) {
            $quantity = mysqli_real_escape_string($conn, $_POST['quantity']);

            $qry = "SELECT price FROM cart WHERE id ='$id'";
            $check = mysqli_query($conn, $qry);

            $row = mysqli_fetch_assoc($check);

            $price = $row['price'];

            $idp = $row['productid'];
            
            $total = $quantity * $price;

            $sql = "UPDATE cart SET quantity ='$quantity', total ='$total' WHERE id ='$id'";
            mysqli_query($conn, $sql);

            header('location: cart.php');
        }else if(isset($_POST['check'])){
            $_SESSION['quantity'] = mysqli_real_escape_string($conn, $_POST['quantity']);
            $_SESSION['idp'] = $idp;
            $_SESSION['cost'] = $price;
            header('location: checkout1.php');
        }

   ?>

    <div class="section mt-3">
        <div class="container">
            <h4 class="text-muted"> <i class="fa fa-cart-plus" aria-hidden="true"></i> Edit Quantity</h4>
            <div class="row">
                <div class="col-sm-12">

                <?php
                    include "connection.php";

                    $id = $_GET['id'];

                    $sql = "SELECT * FROM cart where id ='$id'";
                    $check = mysqli_query($conn, $sql);
                    while($row = mysqli_fetch_assoc($check)){
                    ?>
                
                        <div class="card">
                        <div class="card-body">
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
                                    <input type="text" name="cost" placeholder="Cost" value="<?php echo $row['price']; ?>" disabled/>
                                    <div class="row">
                                        <div class="col-6">
                                            <small class="text-muted">User ratings</small><br>
                                            <i class="fas fa-star text-warning mt-4" ></i><i class="fas fa-star text-warning"></i>  <i class="fas fa-star-half-alt text-warning"></i><i class="fas fa-star-half-alt text-warning"></i><br>
                                        </div>
                                        <div class="col-6">
                                        <small class="text-muted">Update Quantity</small>
                                            <select name="quantity" id="" value="<?php echo $row['quantity']; ?>" class="form-control" placeholder="Product quantity">
                                                <option value="<?php echo $row['quantity']; ?>"><?php echo $row['quantity']; ?></option>
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
                                    <div class="row">
                                        <div class="col-6">
                                               <button type="submit" name="check" class="btn w-100"><i class="fas fa-hand-holding-usd"></i> Buy Now</button>

                                        </div>
                                        <div class="col-6">
                                            <button type="submit" name="edit" class="btn w-100">Edit Quantity</button>
                                        </div>
                                    </div>
                                </div>
                                </form>
                            </div>
                        </div>
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







