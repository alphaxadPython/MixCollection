<?php

    include "connection.php";

    if isset($_POST['signup']){
        $username = mysqli_real_escape_string($conn, $_POST['username']);
        $email = mysqli_real_escape_string($conn, $_POST['email']);
        $password1 = mysqli_real_escape_string($conn, $_POST['password1']);
        $password2 = mysqli_real_escape_string($conn, $_POST['password2']);


        if($password1 == $password2){

            $sql = "INSERT INTO users values()";
            mysqli_query($conn, $sql);
            
        }
    }







?>