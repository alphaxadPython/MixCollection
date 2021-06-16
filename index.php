<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>  Mix | Collection</title>
    <link rel="stylesheet" href="css/all.css">
    <link rel="stylesheet" href="css/bootstrap.css">
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/main.css">
    <link rel="stylesheet" href="css/responsive.css">
    <link rel="stylesheet" href="css/animate.css">
    <link rel="stylesheet" href="css/pages.css">
    
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
            <div class="carousel-inner pl-3" role="listbox">

                <div class="carousel-item active ">
                    <div class="item active row">
                        <div class="col-sm-6">
                            <h1><span>MIX</span>-COLLECTION</h1>
                            <h2>Cheap Products Available !!</h2>
                            <p>We offer quality, cheap and fast delivered products.. Please shop with us now!! Shop five products get six more!! </p>
                            <button type="button" class="btn btn-default get" data-toggle="modal" data-target="#modelId">Shop Now</button>
                        </div>
                        <div class="col-sm-6">
                            <img src="upload/product10.jpg" class="girl img-responsive" alt="" />
                        </div>
                    </div>
                </div>
                <div class="carousel-item">
                <div class="item row">
                    <div class="col-sm-6">
                            <h1><span>MIX</span>-COLLECTION</h1>
                        <h2>Free Products delivery!!</h2>
                        <p>We offer quality, cheap and fast delivered products.. Please shop with us now!! Shop five products get six more!! </p>
                        <button type="button" class="btn btn-default get" data-toggle="modal" data-target="#modelId">Shop Now</button>
                    </div>
                    <div class="col-sm-6">
                            <img src="upload/product11.jpg" class="girl img-responsive" alt="" />
                    </div>
                </div>
                </div>
                <div class="carousel-item">
                    <div class="item row">
                        <div class="col-sm-6">
                            <h1><span>MIX</span>-COLLECTION</h1>
                            <h2>Multiple cartegories!!</h2>
                            <p>We offer quality, cheap and fast delivered products.. Please shop with us now!! Shop five products get six more!! </p>
                            <button type="button" class="btn btn-default get" data-toggle="modal" data-target="#modelId">Shop Now</button>
                        </div>
                        <div class="col-sm-6">
                            <img src="upload/product8.jpg" class="girl img-responsive" alt="" />
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

    <div class="d-sm-block d-md-none fixed-top position-sticky">
        <nav class="breadcrumb">
            <a  href="#menu" style="color: #FE980F;"><i class="fas fa-caret-down"></i> Cartegories</a>  
        </nav>
    </div>

    
    <div class="section">
        <div class="container">
            <div class="row">
              <?php include "sideMenue.php" ?>

                <div class="col-sm-9">

                    <div class="features_items"><!--features_items-->
                        <h2 class="title text-center">Available Products</h2>
                    
                        <div class="row">
                           <?php 

                                include "connection.php";
                                $sql = "SELECT * FROM products";
                                $check = mysqli_query($conn, $sql);

                                while($row = mysqli_fetch_assoc($check)){

                            ?>
                             <div class="col-6 col-md-3">
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