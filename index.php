<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Mix | Collection</title>
    <link rel="stylesheet" href="css/bootstrap.css">
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/main.css">
    <link rel="stylesheet" href="css/responsive.css">
    <link rel="stylesheet" href="css/animate.css">
    <link rel="stylesheet" href="css/all.css">


</head>
<body>
    
    <nav class="navbar navbar-expand-sm navbar-light bg-light fixed-top">
    <a class="navbar-brand" href="index.php"><span style="color: #FE980F">Mix</span> Collection</a>
        <button class="navbar-toggler d-lg-none" type="button" data-toggle="collapse" data-target="#collapsibleNavId" aria-controls="collapsibleNavId"
            aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="collapsibleNavId">
           
            <ul class="navbar-nav ml-auto mt-2 mt-lg-0">
                  
            <form class="form-inline my-2 my-lg-0">
                <input class="form-control mr-sm-2" type="text" placeholder="Search...">
                <button class="btn btn-outline-warning my-2 my-sm-0" type="submit"><i class="fa fa-search" aria-hidden="true"></i></button>
            </form>
                <li class="nav-item active">
                    <a class="nav-link" href="" data-toggle="modal" data-target="#modelId">Login <span class="sr-only">(current)</span></a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="" data-toggle="modal" data-target="#modelId1">Signup</a>
                </li>
             
            </ul>
        </div>
    </nav> <br><br><br>
    <?php include "userServer.php" ?>



   
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
                        <button type="button" class="btn btn-default get" data-toggle="modal" data-target="#modelId">Shop now</button>
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
                    <button type="button" class="btn btn-default get" data-toggle="modal" data-target="#modelId">Shop now</button>
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
                        <button type="button" class="btn btn-default get" data-toggle="modal" data-target="#modelId">Shop now</button>
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
                <div class="col-sm-3">
                    <div class="left-sidebar">
                        <h2>Categories</h2>
                        <div class="panel-group category-products" id="accordian"><!--category-productsr-->
                            <div class="panel panel-default">
                                <div class="panel-heading">
                                    <h4 class="panel-title">
                                        <a data-toggle="collapse" data-parent="#accordian" href="#sportswear">
                                            <b>Sportings</b>
                                            <span class="badge pull-right"><i class="fa fa-plus"></i></span>

                                        </a>
                                    </h4>
                                </div>
                                <div id="sportswear" class="panel-collapse collapse">
                                    <div class="panel-body">
                                        <ul>
                                            <li><a href="#">Jersey </a></li>
                                            <li><a href="#">Balls </a></li>
                                            <li><a href="#">Sport shoes </a></li>
                                            <li><a href="#">Sport Facilities</a></li>
                                            
                                        </ul>
                                    </div>
                                </div>
                            </div>
                            <div class="panel panel-default">
                                <div class="panel-heading">
                                    <h4 class="panel-title">
                                        <a data-toggle="collapse" data-parent="#accordian" href="#electronics">
                                            <b>Electronics</b>
                                            <span class="badge pull-right"><i class="fa fa-plus"></i></span>

                                        </a>
                                    </h4>
                                </div>
                                <div id="electronics" class="panel-collapse collapse">
                                    <div class="panel-body">
                                        <ul>
                                            <li><a href="#">Phones & Tablets </a></li>
                                            <li><a href="#">Laptops & Tablets </a></li>
                                            <li><a href="#">TV's & Accessories </a></li>
                                            <li><a href="#">Music Instruments</a></li>
                                            
                                        </ul>
                                    </div>
                                </div>
                            </div>
                            <div class="panel panel-default">
                                <div class="panel-heading">
                                    <h4 class="panel-title">
                                        <a data-toggle="collapse" data-parent="#accordian" href="#mens">
                                            <b>Mens Clothing</b>
                                            <span class="badge pull-right"><i class="fa fa-plus"></i></span>

                                        </a>
                                    </h4>
                                </div>
                                <div id="mens" class="panel-collapse collapse">
                                    <div class="panel-body">
                                        <ul>
                                            <li><a href="#">Shirts & T-shirts</a></li>
                                            <li><a href="#">Trouser & Shorts</a></li>
                                            <li><a href="#">Shoes</a></li>
                                            <li><a href="#">Pants & socks</a></li>
                                            <li><a href="#">Fashion</a></li>
                                            
                                        </ul>
                                    </div>
                                </div>
                            </div>
                            
                            <div class="panel panel-default">
                                <div class="panel-heading">
                                    <h4 class="panel-title">
                                        <a data-toggle="collapse" data-parent="#accordian" href="#womens">
                                            <b>Women Clothing</b>
                                             <span class="badge pull-right"><i class="fa fa-plus"></i></span>

                                        </a>
                                    </h4>
                                </div>
                                <div id="womens" class="panel-collapse collapse">
                                    <div class="panel-body">
                                        <ul>
                                            <li><a href="#">Skirts & Gouwns</a></li>
                                            <li><a href="#">Jeans & trouser</a></li>
                                            <li><a href="#">Body Tights</a></li>
                                            <li><a href="#">Pants & socks</a></li>
                                            <li><a href="#">Fashion</a></li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                            <div class="panel panel-default">
                                <div class="panel-heading">
                                    <h4 class="panel-title"><a href="#"><b>Bags & Watches</b></a></h4>
                                </div>
                            </div>
                            
                            <div class="panel panel-default">
                                <div class="panel-heading">
                                    <h4 class="panel-title"><a href="#"><b>Home Appliance</b></a></h4>
                                </div>
                            </div>
                            <div class="panel panel-default">
                                <div class="panel-heading">
                                    <h4 class="panel-title"><a href="#"><b>Healthy & Beauty</b></a></h4>
                                </div>
                            </div>
                            <div class="panel panel-default">
                                <div class="panel-heading">
                                    <h4 class="panel-title"><a href="#"><b>Stationaries</b></a></h4>
                                </div>
                            </div>
                        </div><!--/category-products-->
                    </div>
                </div>

                <div class="col-sm-9">
                    <div class="features_items"><!--features_items-->
                        <h2 class="title text-center">Most Shopped</h2>
                    
                        <div class="row">
                            <div class="col-md-3 col-sm">
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
                            <div class="col-md-3 col-sm">
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
                            <div class="col-md-3 col-sm">
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
                            <div class="col-md-3 col-sm">
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

                    <div class="features_items"><!--features_items-->
                        <h2 class="title text-center">Fashion Trends</h2>
                    
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



 
    
    <!-- Modal fo login form -->
    <div class="modal fade" id="modelId" tabindex="-1" role="dialog" aria-labelledby="modelTitleId" aria-hidden="true">
		<div class="modal-dialog" role="document">
			<div class="modal-content">
				<div class="modal-header">
					<h5 class="modal-title text-muted">Login Please</h5>
						<button type="button" class="close" data-dismiss="modal" aria-label="Close">
							<span aria-hidden="true">&times;</span>
						</button>
				</div>
				<div class="modal-body login-form">
				<form action="" method="POST">
					<input type="text" name="username" placeholder="Username" />
					<input type="password" name="password" placeholder="password" />
					<span class="text-muted">
						<input type="checkbox" class="checkbox"> Keep me signed in
						
					</span>
					<button type="submit" name="login" class="btn btn-default">Login</button>
				</form>
				</div>
				
			</div>
		</div>
	</div>


    <!-- Signup modal for the new users -->
    <div class="modal fade" id="modelId1" tabindex="-1" role="dialog" aria-labelledby="modelTitleId" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title text-muted">New User Signup</h5>
                       
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                </div>
                <div class="modal-body">
                <div class="signup-form"><!--sign up form-->
						
						<form action="" method="POST">
							<input type="text" name="username" placeholder="Username"/>
							<input type="email" name="email" placeholder="Email Address"/>
                            <div class="row">
                                <div class="col-md-6">
						        	<input type="password" name="password1" placeholder="Password"/>
                                </div>
                                <div class="col-md-6">
						        	<input type="password" name="password2" placeholder="Confirm Password"/>
                                </div>
                            </div>
							<button class="btn btn default" type="submit" name="signup">Signup</button>
						</form>
					</div><!--/sign up form-->
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
</body>
</html>