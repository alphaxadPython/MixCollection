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
						<a class="btn btn-default update" href="">Checkout</a>
					</div>
				</div>
				<div class="col-sm-6">
					<div class="total_area">
						<ul>
							<li>Item Quantity <span>80</span></li>
							<li>Total Cost<span>$61</span></li>
						</ul>
							<a class="btn btn-default update" href="">Clear Cart</a>
							<a class="btn btn-default check_out" href="">Proceed Shopping</a>
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