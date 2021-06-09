<?php

    include "connection.php";

    if(isset($_POST['add'])){
        $productName = mysqli_real_escape_string($conn, $_POST['productName']);
        $cost = mysqli_real_escape_string($conn, $_POST['cost']);
        $quantity = mysqli_real_escape_string($conn, $_POST['quantity']);
        $cartegory = mysqli_real_escape_string($conn, $_POST['cartegory']);

        
        $fileName = $_FILES['file']['name'];
        $fileTmp = $_FILES['file']['tmp_name'];
        $fileSize = $_FILES['file']['size'];
        $filesError = $_FILES['file']['error'];
        $fileType = $_FILES['file']['type'];
        
        $fileExt = explode('.',$_FILES['file']['name']);
        $fileActualExt = strtolower(end($fileExt));
        $allowed = array('jpg','jpeg','png','webp');
        if(in_array($fileActualExt,$allowed)){
            if($_FILES['file']['error'] ===  0){
                if($_FILES['file']['size'] < 100000000){            
                    
                    $fileDestination = 'upload/'.$fileName;
                    move_uploaded_file($_FILES['file']['tmp_name'],$fileDestination);

                    $sql = "INSERT INTO `products`(`productname`, `quantity`, `available`, `cost`, `cartegory`, `photo`) VALUES ('$productName','$quantity','$quantity','$cost','$cartegory','$fileDestination')";
                      mysqli_query($conn, $sql);
            
                    header("location: Add.php");

                }else{
                    echo " <script> alert('The image uploaded is too large'); </script> ";
                }
            }else{
                echo " <script> alert('You have an error on uploading the image'); </script> ";
            }
        }else{
            echo " <script> alert('Check The image Field Please!!'); </script> ";
        }

    }


?>