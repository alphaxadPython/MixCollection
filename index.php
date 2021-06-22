<?php session_start(); ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Welcome | Mix - Collection</title>
    <link rel="icon" href="logo/logo.ico" type="image/icon type" > 
    <link rel="stylesheet" href="css/all.css">
    <link rel="stylesheet" href="css/bootstrap.css">
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/main.css">
    <link rel="stylesheet" href="css/responsive.css">
    <link rel="stylesheet" href="css/animate.css">
    <link rel="stylesheet" href="css/pages.css">
    
</head>
<body>

    <nav class="navbar navbar-expand-sm navbar-light bg-light position-sticky fixed-top">
            <a class="navbar-brand" href="index.php"> <img src="logo/logo.png" style="width: 30px; height: 30px; border-radius: 50%" alt=""> <span style="color: #FE980F">Mix</span> Collection</a>
        <button class="navbar-toggler d-lg-none" type="button" data-toggle="collapse" data-target="#collapsibleNavId" aria-controls="collapsibleNavId"
            aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="collapsibleNavId">
            
            <ul class="navbar-nav ml-auto mt-2 mt-lg-0">
                    
            <form class="form-inline my-2 my-lg-0" action="" method="POST">
                <input class="form-control mr-sm-2" name="search" type="text" placeholder="Search...">
                <button class="btn btn-outline-warning my-2 my-sm-0" name="sech" type="submit"><i class="fa fa-search" aria-hidden="true"></i></button>
            </form>
            <?php 
                    include "connection.php";

                    if(isset($_POST['sech'])){
                        $_SESSION['search'] = mysqli_real_escape_string($conn, $_POST['search']);
                        header('location: search1.php');
                    }

            ?>
                <li class="nav-item active">
                    <a class="nav-link" href="" data-toggle="modal" data-target="#modelId">Login <span class="sr-only">(current)</span></a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="" data-toggle="modal" data-target="#modelId1">Signup</a>
                </li>
                
            </ul>
        </div>
    </nav> <br>
    <?php include "userServer.php" ?>

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