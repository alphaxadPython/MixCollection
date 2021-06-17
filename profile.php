<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>My Profile | Mix Collection</title>
    <link rel="icon" href="logo/logo.ico" type="image/icon type" > 

    <link rel="stylesheet" href="css/bootstrap.css">
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/main.css">
    <link rel="stylesheet" href="css/responsive.css">
    <link rel="stylesheet" href="css/animate.css">
    <link rel="stylesheet" href="css/all.css">
    <link rel="stylesheet" href="css/pages.css">

</head>
<body>
    
    <?php include "nav1.php" ?>
    <br><br>
 
    <div class="container">
    <h4 class="text-muted"><i class="fa fa-user" aria-hidden="true"></i> My Profile</h4>
        <div class="card">
            <div class="card-body">
                <div class="row">
                    <?php 
                        include "connection.php";

                        $id = $_SESSION['id'];

                        $sql = "SELECT * FROM users WHERE id ='$id'";
                        $check = mysqli_query($conn, $sql);

                        while($row = mysqli_fetch_assoc($check)){
                    ?>
                    <div class="col-md-6">
                        <img src="upload/alan.jpg" style="width: 100%; height: 300px" alt="">
                    </div>
                    <div class="col-md-6">
                            
                            <div class="row">
                                
                                <div class="col-6">
                                <h6 class=" text-warning">Username: </h6><span class="text-muted"><?php echo $row['username']; ?></span>
                                    
                                </div>
                                <div class="col-6">
                                <h6 class=" text-warning">Email: </h6><span class="text-muted"><?php echo $row['email']; ?></span>
                                    
                                </div>
                                
                            </div>
                            

                    
                        <h6 class="mt-2 text-warning"><i class="fa fa-unlock" aria-hidden="true"></i> Change Password: </h6>
                        <div class="mt-2 row p-3 login-form">
                            <form action="" method="post">
                                <div class="row ">
                                <div class="col-md-12">
                                        <input type="password" name="password1" placeholder="Old Password" required/>
                                    </div>
                                    <div class="col-md-12 ">
                                        <input type="password" name="password1" placeholder="New password" required/>
                                    </div>
                                </div>
                                <button class="btn btn-warning text-white w-100" type="submit">Change Passowrd</button>
                            </form>
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