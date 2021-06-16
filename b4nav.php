<?php session_start(); ?>
<nav class="navbar navbar-expand-sm navbar-light bg-light position-sticky fixed-top">
         <a class="navbar-brand" href="index.php"> <img src="logo/logo.png" style="width: 30px; height: 30px; border-radius: 50%" alt=""> <span style="color: #FE980F">Mix</span> Collection</a>
        <button class="navbar-toggler d-lg-none" type="button" data-toggle="collapse" data-target="#collapsibleNavId" aria-controls="collapsibleNavId"
            aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="collapsibleNavId">
           
            <ul class="navbar-nav ml-auto mt-2 mt-lg-0">
                  
            <form class="form-inline my-2 my-lg-0" action="" method="POST">
                <input class="form-control mr-sm-2" name="search" type="text" placeholder="Search...">
                <button class="btn btn-outline-warning my-2 my-sm-0" name="sech" type="submit"><i class="fa fa-search" aria-hidden="true"></i></button>
            </form>
            <?php 
                    include "connection.php";

                    if(isset($_POST['sech'])){
                        $_SESSION['search'] = mysqli_real_escape_string($conn, $_POST['search']);
                        header('location: search1.php');
                    }

            ?>
                <li class="nav-item active">
                    <a class="nav-link" href="" data-toggle="modal" data-target="#modelId">Login <span class="sr-only">(current)</span></a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="" data-toggle="modal" data-target="#modelId1">Signup</a>
                </li>
             
            </ul>
        </div>
    </nav> <br>
    <?php include "userServer.php" ?>