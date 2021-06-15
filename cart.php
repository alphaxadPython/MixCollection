<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>My Cart | Mix - Collection</title>
    <link rel="stylesheet" href="css/bootstrap.css">
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/main.css">
    <link rel="stylesheet" href="css/responsive.css">
    <link rel="stylesheet" href="css/animate.css">
    <link rel="stylesheet" href="css/all.css">


</head>
<body>
    
    <?php include "nav1.php" ?>


    <section id="cart_items">
		<div class="container mt-3">
			<h5 class="text-muted mt-4"><i class="fa fa-cart-plus" aria-hidden="true"></i> My Shopping Cart</h5>
			
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
                            <td><a href="cartItem.php?id=<?php echo $row['productid'];?>" ><i class="far fa-edit"></i></a></td>
                            <td><a href="singleDelete.php?id=<?php echo $row['id']; ?>"><i class="fas fa-trash text-danger"></i></a></td>
                        </tr>
                    <?php } ?>
                    </tbody>
                </table>
            </div>
		</div>
	</section> <!--/#cart_items-->

	<section id="do_action">
		<div class="container">
			<div class="heading">
				<h3>What would you like to do next?</h3>
				<p>Either Checkout For Payments, Clear the Cart or Proceed Shopping!!</p>
			</div>
			<div class="row">
				<div class="col-sm-6">
					<div class="chose_area">
						<ul class="user_option">
							<li>
								<input type="checkbox">
								<label>PayPal <i class="fab fa-cc-paypal" style="color: #003a75; font-size: 20px;"></i></label>
							</li>
							<li>
								<input type="checkbox">
								<label>Master Card <i class="fab fa-cc-mastercard" style="color: #FE980F; font-size: 20px;"></i></label>
							</li>
							<li>
								<input type="checkbox">
								<label>Western Union</label>
							</li>
						</ul>
						<a class="btn btn-default update" href="checkout.php">Checkout</a>
					</div>
				</div>
				<div class="col-sm-6">
					<div class="total_area">
						<ul>
							<li>Item Quantity <span>80</span></li>
							<li>Total Cost<span>$61</span></li>
						</ul>
							<a class="btn btn-default update" href="">Clear Cart</a>
							<a class="btn btn-default check_out" href="userloged.php">Proceed Shopping</a>
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