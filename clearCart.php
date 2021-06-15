<?php

    session_start();
    include "connection.php";

    $ids = $_SESSION['id'];

    $sql = "DELETE FROM cart WHERE userid = '$ids'";
    $check = mysqli_query($conn, $sql);


    echo " 
        <script> alert('Cart Cleared Successfully!!'); window.location = 'cart.php'; </script>
    ";
    

?>