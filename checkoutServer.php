<?php
    include "connection.php";

    if(isset($_POST['check'])){
        $accno = mysqli_real_escape_string($conn, $_POST['accno']);
        $receipt = mysqli_real_escape_string($conn, $_POST['receipt']);
        $phone = mysqli_real_escape_string($conn, $_POST['phone']);
        $country = mysqli_real_escape_string($conn, $_POST['country']);
        $delivery = mysqli_real_escape_string($conn, $_POST['delivery']);

        $sql = "INSERT INTO `checkout`(`phone`, `accountNo`, `country`, `deliveryLocation`, `receipt`) VALUES ('$phone','$accno','$country','$delivery','$receipt')";
        mysqli_query($conn, $sql);

        $ids = $_SESSION['id'];

        $sql = "DELETE FROM cart WHERE userid = '$ids'";
        $check = mysqli_query($conn, $sql);

        echo ' 
        <div class="container text-center">
            <div class="alert alert-success alert-dismissible fade show" role="alert">
                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                    <span class="sr-only">Close</span>
                </button>
                Payments Made Successfully!! 
            </div>
        </div>
    ';

    


    }
