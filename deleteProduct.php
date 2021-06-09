<?php


    include "connection.php";

    $ids = $_GET['id'];

    $sql = "DELETE FROM products WHERE id = '$ids'";
    $check = mysqli_query($conn, $sql);


    echo " 
        <script> alert('Product Deleted successfully!!!'); window.location = 'Add.php'; </script>
    ";

?>