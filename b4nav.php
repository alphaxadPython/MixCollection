<nav class="navbar navbar-expand-sm navbar-light bg-light position-sticky fixed-top">
         <a class="navbar-brand" href="index.php"><span style="color: #FE980F">Mix</span> Collection</a>
        <button class="navbar-toggler d-lg-none" type="button" data-toggle="collapse" data-target="#collapsibleNavId" aria-controls="collapsibleNavId"
            aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="collapsibleNavId">
           
            <ul class="navbar-nav ml-auto mt-2 mt-lg-0">
                  
            <form class="form-inline my-2 my-lg-0">
                <input class="form-control mr-sm-2" type="text" placeholder="Search...">
                <button class="btn btn-outline-warning my-2 my-sm-0" type="submit"><i class="fa fa-search" aria-hidden="true"></i></button>
            </form>
                <li class="nav-item active">
                    <a class="nav-link" href="" data-toggle="modal" data-target="#modelId">Login <span class="sr-only">(current)</span></a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="" data-toggle="modal" data-target="#modelId1">Signup</a>
                </li>
             
            </ul>
        </div>
    </nav> <br><br><br>
    <?php include "userServer.php" ?>