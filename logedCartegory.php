<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cartegories | Mix Collection</title>
    <link rel="stylesheet" href="css/all.css">
    <link rel="stylesheet" href="css/bootstrap.css">
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/main.css">
    <link rel="stylesheet" href="css/responsive.css">
    <link rel="stylesheet" href="css/animate.css">
    <link rel="stylesheet" href="css/pages.css">
    
</head>
<body>
    
    <?php include "nav1.php"; ?>
     <br>


    <div class="d-sm-block d-md-none fixed-top position-sticky">
        <nav class="breadcrumb">
            <a  href="#menu" style="color: #FE980F;"><i class="fas fa-caret-down"></i> Cartegories</a>  
        </nav>
    </div>

    
    <div class="section">
        <div class="container">
            <div class="row">
              <?php include "logedSide.php" ?>

                <div class="col-sm-9">

                    <div class="features_items"><!--features_items-->
                         <?php 

                            include "connection.php";
                            $cartegory = $_GET['cartegory'];
                            $sql = "SELECT cartegory FROM products WHERE cartegory ='$cartegory'";
                            $check = mysqli_query($conn, $sql);
                            $row = mysqli_fetch_assoc($check)
                        ?>
                        <h2 class="title text-center">Available <?php echo $row['cartegory']; ?></h2>
                        <?php  ?>
                    
                        <div class="row">
                           <?php 

                                include "connection.php";
                                $cartegory = $_GET['cartegory'];
                                $sql = "SELECT * FROM products WHERE cartegory ='$cartegory'";
                                $check = mysqli_query($conn, $sql);

                                while($row = mysqli_fetch_assoc($check)){


                            ?>
                             <div class="col-6 col-md-3">
                                <a href="details.php?id=<?php echo $row['id']; ?>">
                                    <div class="product-image-wrapper card shadow">
                                        <div class="single-products">
                                            <div class="productinfo text-center">
                                                <img src="<?php echo $row['photo']; ?>" style="width: 100%; height: 160px" alt="" />
                                                <p style="color: #FE980F"><?php echo $row['cost']; ?>TSH/=</p>
                                                <p><?php echo $row['productname']; ?></p>
                                                <a href=""  data-toggle="modal" data-target="#modelId" class="btn btn-default add-to-cart"><i class="fa fa-shopping-cart"></i>Add to cart</a>
                                            </div>
                                            
                                    </div>
                                </a>
                                </div>
                            </div>
                            <?php } ?>
                        </div>
						
				    </div><!--features_items-->

                    <nav aria-label="pages navigation">
                      <ul class="pagi justify-content-center">
                        <li class="pages-item disabled">
                          <a class="pages-link" href="#" aria-label="Previous">
                            <span aria-hidden="true">&laquo;</span>
                            <span class="sr-only">Previous</span>
                          </a>
                        </li>
                        <li class="pages-item active"><a class="pages-link" href="index.php">1</a></li>
                        <li class="pages-item"><a class="pages-link" href="#">2</a></li>
                        <li class="pages-item">
                          <a class="pages-link" href="#" aria-label="Next">
                            <span aria-hidden="true">&raquo;</span>
                            <span class="sr-only">Next</span>
                          </a>
                        </li>
                      </ul>
                    </nav>
                    
                </div>
            </div>
        </div>
    </div>

    <?php include "loginSign.php" ?>

    <script src="js/bootstrap.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/proper.js"></script>
    <script src="js/jquery-3.5.1.min.js"></script>
    <script src="js/bootstrap.bundle.js"></script>
    <script src="js/bootstrap.bundle.min.js"></script>
</body>
</html>