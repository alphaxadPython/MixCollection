<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Product-Details | Mix Collection</title>
    <link rel="stylesheet" href="css/bootstrap.css">
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/main.css">
    <link rel="stylesheet" href="css/responsive.css">
    <link rel="stylesheet" href="css/animate.css">
    <link rel="stylesheet" href="css/all.css">


</head>
<body>
    
    <?php include "nav1.php" ?>

    <div class="container">
        <nav class="breadcrumb">
          
            <span class="breadcrumb-item active">Product name</span>
        </nav>
    </div>
   
    <div class="section">
        <div class="container">
            <div class="row">
                <?php include "logedSide.php"; ?>

                <div class="col-sm-9 padding-right">

                <?php
                    include "connection.php";

                    $id = $_GET['id'];

                    $sql = "SELECT * FROM products where id ='$id'";
                    $check = mysqli_query($conn, $sql);

                    while($row = mysqli_fetch_assoc($check)){
                 ?>
				
					<div class="card">
						<div class="card-body">
							<div class="row">
								<div class="col-xs-6 col-sm-6 col-md-6 col-lg-6">
									<img src="<?php echo $row['photo']; ?>" style="width: 100%; height: 400px" alt="">
								</div>
								<div class="col-xs-6 col-sm-6 col-md-6 col-lg-6 login-form">
									<h5 class="text-muted"><?php echo $row['productname']; ?> </h5>
									<form action="" method="POST" enctype="multipart/form-data">
										<small class="text-muted">Product name</small>
										<input type="text" name="productName" placeholder="Product Name" value="<?php echo $row['productname']; ?>" disabled/>
										<small class="text-muted">Product cost</small>
										<input type="text" name="cost" placeholder="Cost" value="<?php echo $row['cost']; ?>" disabled/>
										<small class="text-muted">available</small>
										<input type="text" name="quantity" placeholder="Quantity"  value="<?php echo $row['available']; ?>" disabled/>
										<small class="text-muted">Update Photo</small>
										<small class="text-muted">Choose Quantity</small>
										<input type="checkbox" name=""  class="text-warning bg-warning" id="">
										<select name="quantity" id="" value="" class="form-control" placeholder="Product quantity">
											<option value="1">1</option>
											<option value="2">2</option>
											<option value="3">3</option>
											<option value="4">4</option>
											<option value="5">5</option>
											<option value="6">6</option>
											<option value="7">7</option>
											<option value="8">8</option>
											<option value="9">9</option>
											<option value="10">10</option>
										</select><br>
										<button type="submit" name="edit" class="btn btn-default">Edit Product</button>
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
