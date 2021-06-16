<?php  session_start(); ?>
<nav class="navbar navbar-expand-sm navbar-light bg-light fixed-top">
        <a class="navbar-brand" href="userloged.php"><img src="logo/logo.png" style="width: 35px; height: 35px;" alt=""> <span style="color: #FE980F">Mix</span> Collection</a>
        <button class="navbar-toggler d-lg-none" type="button" data-toggle="collapse" data-target="#collapsibleNavId" aria-controls="collapsibleNavId"
            aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="collapsibleNavId">
               
        <form class="form-inline my-2 my-lg-0" action="" method="POST">
                <input class="form-control mr-sm-2" type="text" name="search" placeholder="Search...">
                <button class="btn btn-outline-warning my-2 my-sm-0" name="sech" style="color: #FE980F;" type="submit"><i class="fa fa-search" aria-hidden="true"></i></button>

            </form>
            <?php 
                    include "connection.php";

                    if(isset($_POST['sech'])){
                        $_SESSION['search'] = mysqli_real_escape_string($conn, $_POST['search']);
                        header('location: search.php');
                    }

            ?>
            <ul class="navbar-nav ml-auto mt-2 mt-lg-0">
              
                <li class="nav-item active">
                    <a class="nav-link" href="userloged.php" > <i class="fa fa-home" aria-hidden="true"></i> Home <span class="sr-only">(current)</span></a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="profile.php" > <i class="fa fa-user" aria-hidden="true"></i> Profile</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="cart.php"> <i class="fa fa-cart-plus" aria-hidden="true"></i> Cart <span class="badge badge-pill badge-warning text-white">
                    <?php 
						include "connection.php";
						$id = $_SESSION['id'];

						$sql = "SELECT count(userid) AS 'count' FROM cart WHERE userid ='$id'";
						$result = mysqli_query($conn, $sql);
						$check = mysqli_fetch_assoc($result);


						$count = $check['count'];

                        echo $count;
						?>
						
                    </span></a>
                </li><li class="nav-item">
                    <a class="nav-link" href="checkout.php"> <i class="fa fa-star" aria-hidden="true"></i> Checkout</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="index.php"><i class="fa fa-unlock" aria-hidden="true"></i> Logout</a>
                </li>
             
            </ul>
        </div>
    </nav> <br><br>


    
 
   