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
    
    <?php include "nav1.php" ?>


    <section id="cart_items">
		<div class="container">
		
            <nav class="breadcrumb">
                <a class="breadcrumb-item" href="#">Home</a>
                <a class="breadcrumb-item" href="#">Cartegories</a>
                <span class="breadcrumb-item active">Shopping Cart</span>
            </nav>

			<div class="table-responsive cart_info">
				<table class="table table-condensed">
					<thead>
						<tr class="cart_menu text-center">
							<td class="image">Item</td>
							<td class="description"></td>
							<td class="price">Price</td>
							<td class="quantity">Quantity</td>
							<td class="total">Total</td>
							<td>Manage</td>
						</tr>
					</thead>
					<tbody>
						<tr class="text-center">
							<td class="cart_product">
								<a href=""><img src="images/cart/one.png" alt=""></a>
							</td>
							<td class="cart_description">
								<p class="text-muted">Colorblock</p>
							</td>
							<td class="cart_price">
								<p>$59</p>
							</td>
							<td class="cart_quantity">
                                <p>6</p>
							</td>
							<td class="cart_total">
								<p class="cart_total_price">$59</p>
							</td>
							<td class="cart_delete">
                                 <a class="cart_quantity_delete" href="" data-toggle="tooltip" data-placement="top" title="Edit this Item"> <i class="fas fa-edit" ></i></a>
							    <a class="cart_quantity_delete" href="" data-toggle="tooltip" data-placement="top" title="Delete This Item"><i class="fa fa-trash" aria-hidden="true"></i> </a>
							</td>
						</tr>

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
							<a class="btn btn-default check_out" href="loged.php">Proceed Shopping</a>
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