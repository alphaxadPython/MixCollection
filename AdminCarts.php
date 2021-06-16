<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Adin Carts| Mix - Collection</title>
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
		<div class="container mt-3">
			<h5 class="text-muted mt-4"><i class="fa fa-cart-plus" aria-hidden="true"></i> All Items in Cart</h5>
			
		<div class="table-responsive cart_info">
                <table class="table table-striped bg-warniing ">
                    <thead class=" text-dark">
					<tr class="cart_menu text-center">
							<td >Photo</td>
							<td>Product</td>
							<td>Price</td>
							<td>Quantity</td>
							<td>Total</td>
							<td>Delete</td>
						</tr>
                    </thead>
                    <tbody>            
                    <?php
                        include "connection.php";


                        $sql = "SELECT * FROM cart";
                        $check = mysqli_query($conn, $sql);

                        while($row = mysqli_fetch_assoc($check)){
                        
                    ?>
                        <tr> 
                            <td><img src="<?php echo $row['photo']; ?>" style="width: 100px; height: 100px" alt=""></td>
                            <td><?php echo $row['productname']; ?></td>
                            <td><?php echo $row['price']; ?></td>
                            <td><?php echo $row['quantity']; ?></td>
                            <td><?php echo $row['total']; ?></td>
                            <td><a href="singleDelete.php?id=<?php echo $row['id']; ?>"><i class="fas fa-trash text-danger"></i></a></td>
                        </tr>
                    <?php } ?>
                    </tbody>
                </table>
            </div>
		</div>
	</section>

	<section id="do_action d-sm-none d-md-block">
		<div class="container">
			<div class="heading">
				<h3><i class="fa fa-question-circle" aria-hidden="true"></i> Cart List Summary!!</h3>
			</div>
			<div class="row">
				<div class="col-sm-12">
					<div class="total_area">
					
						<ul>
						<?php 
                            include "connection.php";

                            $sql = "SELECT sum(quantity) AS 'count' FROM cart";
                            $result = mysqli_query($conn, $sql);
                            $check = mysqli_fetch_assoc($result);
                            $count = $check['count'];
						?>
							<li>Total Items <span><?php echo $count; ?></span></li>
						<?php ?>

						<?php 
                            include "connection.php";

                            $sql = "SELECT sum(total) AS 'total' FROM cart";
                            $result = mysqli_query($conn, $sql);
                            $check = mysqli_fetch_assoc($result);
                            $total = $check['total'];
						?>
							<li>Total Cost<span><?php echo $total; ?> TSH/=</span></li>
						<?php ?>

						</ul>
				
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