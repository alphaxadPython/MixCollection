<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cartegories | MixCollection</title>
    <link rel="stylesheet" href="css/bootstrap.css">
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/main.css">
    <link rel="stylesheet" href="css/responsive.css">
    <link rel="stylesheet" href="css/animate.css">
    <link rel="stylesheet" href="css/all.css">
    

</head>
<body>

    <?php include "b4nav.php"; ?>
   
        <div class="section">
            <div id="slider-carousel" class="carousel slide" data-ride="carousel">
                <ol class="carousel-indicators">
                    <li data-target="#carouselId" data-slide-to="0" class="active"></li>
                    <li data-target="#carouselId" data-slide-to="1"></li>
                    <li data-target="#carouselId" data-slide-to="2"></li>
                </ol>
                <div class="carousel-inner" role="listbox">
                    <div class="carousel-item active">
                        <div class="item active">
                            <div class="col-sm-6">
                                <h1><span>MIX</span>-COLLECTION</h1>
                                <h2>Cheap Products Available !!</h2>
                                <p>We offer quality, cheap and fast delivered products.. Please shop with us now!! Shop five products get six more!! </p>
                                <button type="button" class="btn btn-default get">Shop now</button>
                            </div>
                            <div class="col-sm-6">
                                <img src="images/home/girl1.jpg" class="girl img-responsive" alt="" />
                                <img src="images/home/pricing.png"  class="pricing" alt="" />
                            </div>
                        </div>
                    </div>
                    <div class="carousel-item">
                    <div class="item">
                        <div class="col-sm-6">
                                <h1><span>MIX</span>-COLLECTION</h1>
                            <h2>Free Products delivery!!</h2>
                            <p>We offer quality, cheap and fast delivered products.. Please shop with us now!! Shop five products get six more!! </p>
                            <button type="button" class="btn btn-default get">Shop now</button>
                        </div>
                        <div class="col-sm-6">
                            <img src="images/home/girl2.jpg" class="girl img-responsive" alt="" />
                            <img src="images/home/pricing.png"  class="pricing" alt="" />
                        </div>
                    </div>
                    </div>
                    <div class="carousel-item">
                        <div class="item">
                            <div class="col-sm-6">
                                <h1><span>MIX</span>-COLLECTION</h1>
                                <h2>Multiple cartegories!!</h2>
                                <p>We offer quality, cheap and fast delivered products.. Please shop with us now!! Shop five products get six more!! </p>
                                <button type="button" class="btn btn-default get">Shop now</button>
                            </div>
                            <div class="col-sm-6">
                                <img src="images/home/girl3.jpg" class="girl img-responsive" alt="" />
                                <img src="images/home/pricing.png" class="pricing" alt="" />
                            </div>
                        </div>
                    </div>
                </div>
                <a href="#slider-carousel" class="left control-carousel hidden-xs" data-slide="prev">
                                <i class="fa fa-angle-left"></i>
                </a>
                <a href="#slider-carousel" class="right control-carousel hidden-xs" data-slide="next">
                                <i class="fa fa-angle-right"></i>
                </a>
            </div>
        </div> <br>
        
        <div class="section">
            <div class="container-fluid">
                <div class="row">
                <?php include "sideMenue.php" ?>

                    <div class="col-sm-9">
                        <div class="features_items"><!--features_items-->
                            <h2 class="title text-center">Available <?php $cartegory = $_GET['cartegory']; echo $cartegory; ?></h2>
                        
                            <div class="row">

                                 
                                <?php 

                                    include "connection.php";

                                    $cartegory = $_GET['cartegory'];

                                    $sql = "SELECT * FROM products WHERE cartegory ='$cartegory'";
                                    $check = mysqli_query($conn, $sql);

                                    while($row = mysqli_fetch_assoc($check)){

                                ?>
                                <div class="col-sm-3">
                                    <a href=""  data-toggle="modal" data-target="#modelId">
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
                            .
                        </div><!--features_items-->


                        <div class="features_items"><!--features_items-->
                            <h2 class="title text-center">Trending <?php echo $cartegory; ?></h2>
                        
                            <div class="row">
                                <div class="col-sm-3">
                                    <div class="product-image-wrapper">
                                        <div class="single-products">
                                            <div class="productinfo text-center">
                                                <img src="images/home/gallery1.jpg" alt="" />
                                                <h2>$56</h2>
                                                <p>Easy Polo Black Edition</p>
                                                <a href="#" class="btn btn-default add-to-cart"><i class="fa fa-shopping-cart"></i>Add to cart</a>
                                            </div>
                                            
                                        </div>
                                    </div>
                                </div>
                                <div class="col-sm-3">
                                    <div class="product-image-wrapper">
                                        <div class="single-products">
                                            <div class="productinfo text-center">
                                                <img src="images/home/gallery2.jpg" alt="" />
                                                <h2>$56</h2>
                                                <p>Easy Polo Black Edition</p>
                                                <a href="#" class="btn btn-default add-to-cart"><i class="fa fa-shopping-cart"></i>Add to cart</a>
                                            </div>
                                            
                                        </div>
                                    </div>
                                </div>
                                <div class="col-sm-3">
                                    <div class="product-image-wrapper">
                                        <div class="single-products">
                                            <div class="productinfo text-center">
                                                <img src="images/home/gallery3.jpg" alt="" />
                                                <h2>$56</h2>
                                                <p>Easy Polo Black Edition</p>
                                                <a href="#" class="btn btn-default add-to-cart"><i class="fa fa-shopping-cart"></i>Add to cart</a>
                                            </div>
                                            
                                        </div>
                                    </div>
                                </div>
                                <div class="col-sm-3">
                                    <div class="product-image-wrapper">
                                        <div class="single-products">
                                            <div class="productinfo text-center">
                                                <img src="images/home/gallery4.jpg" alt="" />
                                                <h2>$56</h2>
                                                <p>Easy Polo Black Edition</p>
                                                <a href="#" class="btn btn-default add-to-cart"><i class="fa fa-shopping-cart"></i>Add to cart</a>
                                            </div>
                                            
                                        </div>
                                    </div>
                                </div>
                            </div>
                            .
                        </div><!--features_items-->



                        
                        
                        
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
    <script src="js/main.js"></script>

    
</body>
</html>