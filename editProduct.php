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

   
	<!-- edit product models -->
	<?php
		include "connection.php";

		$id = $_GET['id'];

		$sql = "SELECT * FROM products where id ='$id'";
		$check = mysqli_query($conn, $sql);

		while($row = mysqli_fetch_assoc($check)){
	?>
		<div class="container">
			
			<div class="card">
				<div class="card-body">
					<div class="row">
						<div class="col-xs-6 col-sm-6 col-md-6 col-lg-6">
							<img src="<?php echo $row['photo']; ?>" style="width: 100%; height: 300px" alt="">
						</div>
						<div class="col-xs-6 col-sm-6 col-md-6 col-lg-6 login-form">
							<h5 class="text-muted">Edit Product </h5>
							<form action="" method="POST" enctype="multipart/form-data">
								<input type="text" name="productName" placeholder="Product Name" value="<?php echo $row['productname']; ?>"/>
								<input type="number" name="cost" placeholder="Cost" value="<?php echo $row['cost']; ?>"/>
								<input type="number" name="quantity" placeholder="Quantity"  value="<?php echo $row['quantity']; ?>"/>
								
								<input type="file" name="file" placeholder="Photo" class="form-control" />
								<select name="cartegory" id="" value="<?php $row['cartegory']; ?>" class="form-control" placeholder="Product cartegory">
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
								<button type="submit" name="add" class="btn btn-default">Edit Product</button>
							</form>
						</div>
					
					</div>
				</div>
			</div>
			
		</div>
		
	<?php }?>

    <script src="js/bootstrap.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/proper.js"></script>
    <script src="js/jquery-3.5.1.min.js"></script>
    <script src="js/bootstrap.bundle.js"></script>
    <script src="js/bootstrap.bundle.min.js"></script>
    <script src="js/main.js"></script>

    
</body>
</html>