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
    
    <?php include "nav2.php" ?>

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