<nav class="navbar navbar-expand-sm navbar-light bg-light">
        <a class="navbar-brand" href="userloged.php"><span style="color: #FE980F">Mix</span> Collection</a>
        <button class="navbar-toggler d-lg-none" type="button" data-toggle="collapse" data-target="#collapsibleNavId" aria-controls="collapsibleNavId"
            aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="collapsibleNavId">
               
        <form class="form-inline my-2 my-lg-0">
                <input class="form-control mr-sm-2" type="text" placeholder="Search...">
                <button class="btn btn-outline-warning my-2 my-sm-0" style="color: #FE980F;" type="submit"><i class="fa fa-search" aria-hidden="true"></i></button>
            </form>
            <ul class="navbar-nav ml-auto mt-2 mt-lg-0">
              
                <li class="nav-item active">
                    <a class="nav-link" href="userloged.php" > <i class="fa fa-home" aria-hidden="true"></i> Home <span class="sr-only">(current)</span></a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="" data-toggle="modal" data-target="#modelId"> <i class="fa fa-user" aria-hidden="true"></i> Profile</a>
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
    </nav>


    
    <!-- Modal -->
    <div class="modal fade" id="modelId" tabindex="-1" role="dialog" aria-labelledby="modelTitleId" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title">My Profile</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                </div>
                <div class="modal-body">
                    <div class="row">
                        <div class="col-md-6">
                            <img src="upload/bob.png" style="width: 100%; height: 250px" alt="">
                        </div>
                        <div class="col-md-6">
                            <h6 class=" text-warning">Username: </h6><span class="text-muted">Alpha Jozee</span>
                            <h6 class=" text-warning">Email: </h6><span class="text-muted">alphajozee@gmail.com</span>
                            <h6 class="mt-2 text-warning">Change Password: </h6>
                            <div class="mt-2 row p-3 login-form">
                               <form action="" method="post">
                                   <div class="row ">
                                    <div class="col-md-6">
                                            <input type="password" name="password1" placeholder="Old Password" required/>
                                        </div>
                                        <div class="col-md-6 ">
                                            <input type="password" name="password1" placeholder="New password" required/>
                                        </div>
                                   </div>
                                   <button class="btn btn-warning text-white w-100" type="submit">Change</button>
                               </form>
                            </div>

                        </div>
                    </div>
                </div>
               
            </div>
        </div>
    </div>
   