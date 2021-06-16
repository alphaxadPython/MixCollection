
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Checkout | Mix-Collection</title>
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
						<?php 
						include "connection.php";
						$id = $_SESSION['id'];

						$sql = "SELECT sum(quantity) AS 'count' FROM cart WHERE userid ='$id'";
						$result = mysqli_query($conn, $sql);
						$check = mysqli_fetch_assoc($result);


						$count = $check['count'];
						?>
							<li>Item Quantity <span><?php echo $count; ?></span></li>
						<?php ?>

						<?php 
						include "connection.php";
						$id = $_SESSION['id'];

						$sql = "SELECT sum(total) AS 'total' FROM cart WHERE userid ='$id'";
						$result = mysqli_query($conn, $sql);
						$check = mysqli_fetch_assoc($result);


						$total = $check['total'];
						?>
							<li>Total Cost<span><?php echo $total; ?> TSH/=</span></li>
						<?php ?>

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
                                        <label>VISA <i class="fas fa-paypal"></i></label>
                                    </li>
                                    <li>
                                        <input type="radio" name="payy" id="">
                                        <label>Google Pay <i class="fab fa-google-pay text-danger"></i></label>
                                    </li>
                                    <li>
                                        <input type="radio" name="payy" id="">
                                        <label>Western Union</label>
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

    <section id="cart_items">
		<div class="container">
			<h5 class="text-muted"><i class="fa fa-cart-plus" aria-hidden="true"></i> My Cart List</h5>
		<div class="table-responsive cart_info">
                <table class="table table-striped bg-warniing ">
                    <thead class=" text-dark">
					<tr class="cart_menu text-center">
							<td >Photo</td>
							<td>Product</td>
							<td>Price</td>
							<td>Quantity</td>
							<td>Total</td>
							<td>Update</td>
							<td>Delete</td>
						</tr>
                    </thead>
                    <tbody>            
                    <?php
                        include "connection.php";

                        $id = $_SESSION['id'];

                        $sql = "SELECT * FROM cart WHERE userid ='$id'";
                        $check = mysqli_query($conn, $sql);

                        while($row = mysqli_fetch_assoc($check)){
                        
                    ?>
                        <tr> 
                            <td><img src="<?php echo $row['photo']; ?>" style="width: 100px; height: 100px" alt=""></td>
                            <td><?php echo $row['productname']; ?></td>
                            <td><?php echo $row['price']; ?></td>
                            <td><?php echo $row['quantity']; ?></td>
                            <td><?php echo $row['total']; ?></td>
                            <td><a href="cartItem.php?id=<?php echo $row['id'];?>" ><i class="far fa-edit"></i></a></td>
                            <td><a href="singleDelete.php?id=<?php echo $row['id']; ?>"><i class="fas fa-trash text-danger"></i></a></td>
                        </tr>
                    <?php } ?>
                    </tbody>
                </table>
            </div>
		</div>
	</section> <!--/#cart_items-->


    <script src="js/bootstrap.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/proper.js"></script>
    <script src="js/jquery-3.5.1.min.js"></script>
    <script src="js/bootstrap.bundle.js"></script>
    <script src="js/bootstrap.bundle.min.js"></script>
    <script src="js/main.js"></script>

    
</body>
</html>