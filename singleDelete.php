<?php


    include "connection.php";

    $ids = $_GET['id'];

    $sql = "DELETE FROM cart WHERE id = '$ids'";
    $check = mysqli_query($conn, $sql);


    echo " 
        <script> alert('One Product Removed From cart!!'); window.location = 'cart.php'; </script>
    ";

?>