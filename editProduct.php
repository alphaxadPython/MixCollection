
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Products Edit | Mix Collection</title>
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
		$id2 = $_GET['id'];

		include "connection.php"; 

		if(isset($_POST['edit'])) { 
				
			$productName = mysqli_real_escape_string($conn, $_POST['productName']);
			$cost = mysqli_real_escape_string($conn, $_POST['cost']);
			$quantity = mysqli_real_escape_string($conn, $_POST['quantity']);
			$cartegory = mysqli_real_escape_string($conn, $_POST['cartegory']);

			
			$fileName = $_FILES['file']['name'];
			$fileTmp = $_FILES['file']['tmp_name'];
			$fileSize = $_FILES['file']['size'];
			$filesError = $_FILES['file']['error'];
			$fileType = $_FILES['file']['type'];
			
			$fileExt = explode('.',$_FILES['file']['name']);
			$fileActualExt = strtolower(end($fileExt));
			$allowed = array('jpg','jpeg','png','webp');
			if(in_array($fileActualExt,$allowed)){
				if($_FILES['file']['error'] ===  0){
					if($_FILES['file']['size'] < 100000000){            
						
						$fileDestination = 'upload/'.$fileName;
						move_uploaded_file($_FILES['file']['tmp_name'],$fileDestination);

						$sql = "UPDATE `products` SET `productname`='$productName',`quantity`='$quantity',`available`='$quantity',`cost`='$cost',`cartegory`='$cartegory',`photo`='$fileDestination' WHERE id ='$id2'";
						mysqli_query($conn, $sql);
				
						header("location: Add.php");

					}else{
						echo " <script> alert('The image uploaded is too large'); </script> ";
					}
				}else{
					echo " <script> alert('You have an error on uploading the image'); </script> ";
				}
			}else{
				echo " <script> alert('Check The image Field Please!!'); </script> ";
			}

		}

	?>

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
							<img src="<?php echo $row['photo']; ?>" style="width: 100%; height: 400px" alt="">
						</div>
						<div class="col-xs-6 col-sm-6 col-md-6 col-lg-6 login-form">
							<h5 class="text-muted">Edit Product </h5>
							<form action="" method="POST" enctype="multipart/form-data">
								<small class="text-muted">Product name</small>
								<input type="text" name="productName" placeholder="Product Name" value="<?php echo $row['productname']; ?>"/>
								<small class="text-muted">Product cost</small>
								<input type="number" name="cost" placeholder="Cost" value="<?php echo $row['cost']; ?>"/>
								<small class="text-muted">available</small>
								<input type="number" name="quantity" placeholder="Quantity"  value="<?php echo $row['available']; ?>"/>
								<small class="text-muted">Update Photo</small>
								<input type="file" name="file" placeholder="Photo" class="form-control" required/>
								<small class="text-muted">Product cartegory</small>
								<select name="cartegory" id="" value="" class="form-control" placeholder="Product cartegory">
									<option value="<?php echo $row['cartegory']; ?>"><?php echo $row['cartegory']; ?></option>
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
								<button type="submit" name="edit" class="btn btn-default">Edit Product</button>
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