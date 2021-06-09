<?php include "serverProducts.php" ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Products | Mix Collection</title>
    <link rel="stylesheet" href="css/bootstrap.css">
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/main.css">
    <link rel="stylesheet" href="css/responsive.css">
    <link rel="stylesheet" href="css/animate.css">
    <link rel="stylesheet" href="css/all.css">

</head>
<body>
    
   <?php include "nav2.php" ?>

    <section id="cart_items">
		<div class="container">
		
            <nav class="breadcrumb">
                <a class="breadcrumb-item" href="admin.php">Home</a>
                <a class="breadcrumb-item" href="Add.php">Products</a>
                <span class="breadcrumb-item active">Add Product</span>
            </nav>

			<div class="table-responsive cart_info">
				<table class="table table-condensed">
					<thead>
						<tr class="cart_menu text-center">
							<td class="image">Item</td>
							<td class="description"></td>
							<td class="price">Price</td>
							<td class="quantity">Registered</td>
							<td class="total">Available</td>
							<td>Manage</td>
						</tr>
					</thead>
					<tbody>
					<?php
							include "connection.php";

							$sql = "SELECT * FROM products";
							$check = mysqli_query($conn, $sql);

							while($row = mysqli_fetch_assoc($check)){
					?>
						<tr class="text-center">
							<td class="cart_product">
								<a href=""><img src="<?php echo $row['photo']; ?>" style="width: 75px; height: 50px" alt=""></a>
							</td>
							<td class="cart_description">
								<p class="text-muted"><?php echo $row['productname']; ?></p>
							</td>
							<td class="cart_price">
								<p><?php echo $row['cost']; ?></p>
							</td>
							<td class="cart_quantity">
                                <p><?php echo $row['quantity']; ?></p>
							</td>
							<td class="cart_total">
								<p class="cart_total_price"><?php echo $row['available']; ?></p>
							</td>
							<td class="cart_delete">
                                 <a class="cart_quantity_delete" href="editProduct.php?id=<?php echo $row['id']; ?>" data-toggle="tooltip" data-placement="top" title="Edit this Item"> <i class="fas fa-edit" ></i></a>
							    <a class="cart_quantity_delete" href="" data-toggle="tooltip" data-placement="top" title="Delete This Item"><i class="fa fa-trash" aria-hidden="true"></i> </a>
							</td>
						</tr>

					<?php }?>

					</tbody>
				</table>
			</div>
		</div>
	</section> <!--/#cart_items-->

    <section class="container text-center">
        <button class="btn  mb-2 update" data-toggle="modal" data-target="#modelId">Add New Product</button> 
    </section>

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

<!-- Modal -->
<div class="modal fade" id="modelId" tabindex="-1" role="dialog" aria-labelledby="modelTitleId" aria-hidden="true">
	<div class="modal-dialog" role="document">
		<div class="modal-content">
			<div class="modal-header">
				<h5 class="modal-title">Add New Product</h5>
					<button type="button" class="close" data-dismiss="modal" aria-label="Close">
						<span aria-hidden="true">&times;</span>
					</button>
			</div>
			<div class="modal-body login-form">
			<form action="" method="POST" enctype="multipart/form-data">
				<input type="text" name="productName" placeholder="Product Name" />
				<input type="number" name="cost" placeholder="Cost" />
				<input type="number" name="quantity" placeholder="Quantity"  />
				
				<input type="file" name="file" placeholder="Photo" class="form-control" />
				<select name="cartegory" id="" class="form-control" placeholder="Product cartegory">
					<option value="" Disabled>Product Cartegory</option>
					<option value="jezi">Jersey</option>
					<option value="spoti">Sport Facilities</option>
					<option value="phone">Phone & Tablets</option>
					<option value="laptop">Laptops & Computers</option>
					<option value="Tv">Tv & electronics</option>
					<option value="shirt">Shirt & Tshirts</option> 
					<option value="short">Trousers & shorts</option>
					<option value="menshoo">Men Shoes</option>
					<option value="bag">Bags & Watches</option>
					<option value="app">Home Appliances</option>
					<option value="beauty">Healty & Beauty</option>
					<option value="station">Stationalies</option>
					<option value="skirt">Skirts & Jeans</option>
					<option value="tight">Body Tights</option>
					<option value="womenshooo">Women Shoes</option>
				</select><br>

				<button type="submit" name="add" class="btn btn-default">Add Product</button>
			</form>
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