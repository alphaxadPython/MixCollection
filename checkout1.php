<?php  session_start(); ?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Checkout | Mix-Collection</title>
    <link rel="icon" href="logo/logo.ico" type="image/icon type" > 
    <link rel="stylesheet" href="css/bootstrap.css">
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/main.css">
    <link rel="stylesheet" href="css/responsive.css">
    <link rel="stylesheet" href="css/animate.css">
    <link rel="stylesheet" href="css/all.css">
</head>
<body>
    
    <?php include "nav1.php" ?> <br><br>
    <?php 
        include "checkoutServer.php";
    ?>
	<section id="do_action">
		<div class="container">
			<div class="heading">
				<h3><i class="fas fa-hand-holding-usd"></i> Make Payments!!</h3>
			</div>
			<div class="row">
			
				<div class="col-sm-6">
					<div class="total_area">
                    <ul>
							<li>Item Quantity <span><?php echo $_SESSION['quantity']; ?></span></li>

							<li>Total Cost<span><?php echo $_SESSION['quantity'] * $_SESSION['cost']; ?> TSH/=</span></li>
						</ul>

						
					</div>
                    <h5>Select Payment Mean: </h5>

                    <div class="chose_area">
                    
						<div class="row">
                            <div class="col-md-6">
                                    <ul class="user_option">
                                    <li>
                                        <input type="radio" name="payy" id="">
                                        <label>PayPal <i class="fab fa-paypal text-primary"></i> </label>
                                    </li>
                                    <li>
                                        <input type="radio" name="payy" id="">
                                        <label>Master Card <i class="fab fa-cc-mastercard text-warning"></i></label>
                                    </li>
                                    <li>
                                        <input type="radio" name="payy" id="">
                                        <label> E-Wallet <i class="fab fa-google-wallet text-primary"></i></label>
                                    </li>
                                </ul>
                            </div>
                            <div class="col-md-6">
                                    <ul class="user_option">
                                    <li>
                                        <input type="radio" name="payy" id="">
                                        <label>VISA <i class="fab fa-cc-visa text-danger"></i></label>
                                    </li>
                                    <li>
                                        <input type="radio" name="payy" id="">
                                        <label>Google Pay <i class="fab fa-google-pay text-danger" style="font-size: 25px"></i></label>
                                    </li>
                                    <li>
                                        <input type="radio" name="payy" id="">
                                        <label>Apple Pay <i class="fab fa-apple-pay text-success" style="font-size: 25px"></i></label>
                                    </li>
                                </ul>
                            </div>
                        </div>
					</div>
				</div>
                <div class="col-sm-6">
					<div class="card">
                        <div class="card-body">
                        <div class="login-form">
							<p>Shopper Information</p>
							<form action="" method="POST">
								<input type="text" placeholder="Account Number" name="accno" required>
								<input type="text" placeholder="Receipt Code" name="receipt" required>
								<input type="number" placeholder="Phone Number" name="phone" required>
								<input type="text" placeholder="Country" name="country" required>
								<input type="text" placeholder="Delivery Area" name="delivery" required>
                                <button class="btn" type="submit" name="check">BUY NOW</button>
							</form>
						</div>
                        </div>
                    </div>
				</div>
			</div>
		</div>
	</section><!--/#do_action-->

    <div class="section">
        <div class="container">
                <h4 class="text-muted"><i class="fa fa-cart-plus" aria-hidden="true"></i> Item Shopped</h4>
            <div class="row">

                <div class="col-sm-12">

                <?php
                    include "connection.php";

                    $id = $_SESSION['idp'];

                    $sql = "SELECT * FROM products where id ='$id'";
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
                                        <input type="text" name="quantity" placeholder="Quantity"  value="<?php echo $_SESSION['quantity'] ?>" disabled/>
                                           
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