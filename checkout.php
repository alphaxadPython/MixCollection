<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="css/bootstrap.css">
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/main.css">
    <link rel="stylesheet" href="css/responsive.css">
    <link rel="stylesheet" href="css/animate.css">
    <link rel="stylesheet" href="css/all.css">


</head>
<body>
    
    <nav class="navbar navbar-expand-sm navbar-light bg-light">
        <a class="navbar-brand" href="#">Mix Collection</a>
        <button class="navbar-toggler d-lg-none" type="button" data-toggle="collapse" data-target="#collapsibleNavId" aria-controls="collapsibleNavId"
            aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="collapsibleNavId">
               
        <form class="form-inline my-2 my-lg-0">
                <input class="form-control mr-sm-2" type="text" placeholder="Search...">
                <button class="btn btn-outline-success my-2 my-sm-0" type="submit"><i class="fa fa-search" aria-hidden="true"></i></button>
            </form>
            <ul class="navbar-nav ml-auto mt-2 mt-lg-0">
              
                <li class="nav-item active">
                    <a class="nav-link" href="" > <i class="fa fa-home" aria-hidden="true"></i> Home <span class="sr-only">(current)</span></a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href=""> <i class="fa fa-user" aria-hidden="true"></i> Profile</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href=""> <i class="fa fa-cart-plus" aria-hidden="true"></i> Cart</a>
                </li><li class="nav-item">
                    <a class="nav-link" href=""> <i class="fa fa-star" aria-hidden="true"></i> Checkout</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href=""><i class="fa fa-unlock" aria-hidden="true"></i> Logout</a>
                </li>
             
            </ul>
        </div>
    </nav> <br>

    <section class="container">
        <nav class="breadcrumb">
            <a class="breadcrumb-item" href="#">Home</a>
            <a class="breadcrumb-item" href="#">Shopping cart</a>
            <span class="breadcrumb-item active">Checkout</span>
        </nav>
    </section>
   
	<section id="do_action">
		<div class="container">
			<div class="heading">
				<h3>You are about to make Payments!!!</h3>
				<p>Please Provide Your Valid details To avoid unnecessary Problems, such as Products Delivery Problems!!</p>
			</div>
			<div class="row">
				<div class="col-sm-6">
					<div class="card">
                        <div class="card-body">
                        <div class="shopper-info">
							<p>Shopper Information</p>
							<form>
								<input type="text" placeholder="Username">
								<input type="text" placeholder="Email">
								<input type="password" placeholder="Account Number">
								<input type="password" placeholder="Password">
								<input type="text" placeholder="Phone Number">
								<input type="password" placeholder="Country">
								<input type="password" placeholder="Delivery Area">
							</form>
							<a class="btn btn-primary" href="">Submit</a>
							<a class="btn btn-primary" href="">Cancel</a>
						</div>
                        </div>
                    </div>
				</div> <br><br>
				<div class="col-sm-6">
					<div class="total_area">
						<ul>
							<li>Item Quantity <span>80</span></li>
							<li>Total Cost<span>$61</span></li>
							<li>Total Cost<span>$61</span></li>
						</ul>
						
					</div>

                    <div class="chose_area">
						<div class="row">
                            <div class="col-md-6">
                                    <ul class="user_option">
                                    <li>
                                        <input type="checkbox">
                                        <label>PayPal <i class="fas fa-paypal"></i></label>
                                    </li>
                                    <li>
                                        <input type="checkbox">
                                        <label>Master Card</label>
                                    </li>
                                    <li>
                                        <input type="checkbox">
                                        <label>Western Union</label>
                                    </li>
                                </ul>
                            </div>
                            <div class="col-md-6">
                                    <ul class="user_option">
                                    <li>
                                        <input type="checkbox">
                                        <label>PayPal <i class="fas fa-paypal"></i></label>
                                    </li>
                                    <li>
                                        <input type="checkbox">
                                        <label>Master Card</label>
                                    </li>
                                    <li>
                                        <input type="checkbox">
                                        <label>Western Union</label>
                                    </li>
                                </ul>
                            </div>
                        </div>
					</div>
				</div>
			</div>
		</div>
	</section><!--/#do_action-->




    <script src="js/bootstrap.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/proper.js"></script>
    <script src="js/jquery-3.5.1.min.js"></script>
    <script src="js/bootstrap.bundle.js"></script>
    <script src="js/bootstrap.bundle.min.js"></script>
    <script src="js/main.js"></script>

    
</body>
</html>