<?php

    session_start();

    include "connection.php";
    // register the user signed ins

    if(isset($_POST['signup'])){
        $username = mysqli_real_escape_string($conn, $_POST['username']);
        $email = mysqli_real_escape_string($conn, $_POST['email']);
        $password1 = mysqli_real_escape_string($conn, $_POST['password1']);
        $password2 = mysqli_real_escape_string($conn, $_POST['password2']);

        if($password1 == $password2){

           $query = "SELECT * FROM users WHERE username ='$username'";
           $check = mysqli_query($conn, $query);
           $row = mysqli_fetch_assoc($check);

           if(mysqli_num_rows($check) != 1){
         
            $sql = "INSERT INTO `users`(`username`, `email`, `password`) VALUES ('$username','$email','$password1')";
            mysqli_query($conn, $sql);

            $_SESSION['username'] = $row['username'];
            $_SESSION['id'] = $row['id'];
 
            header('location: userloged.php');

           }else{
                
                echo ' 
                <div class="container text-center">
                    <div class="alert alert-danger alert-dismissible fade show" role="alert">
                        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                            <span class="sr-only">Close</span>
                        </button>
                        This Username Already exist!! Please Try Again!
                    </div>
                </div>
            ';

           }
            
        }else{
            echo ' 
            <div class="container text-center">
                <div class="alert alert-danger alert-dismissible fade show" role="alert">
                    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                        <span class="sr-only">Close</span>
                    </button>
                    The Two Passwords Do not Match!!
                </div>
            </div>
        ';
        }
    }


    // login the users here

    if(isset($_POST['login'])){
        $username = mysqli_real_escape_string($conn, $_POST['username']);
        $password = mysqli_real_escape_string($conn, $_POST['password']);

        $sql = "SELECT * FROM users WHERE username ='$username' AND password ='$password'";
        $check = mysqli_query($conn, $sql);
        $row = mysqli_fetch_assoc($check);

        if(mysqli_num_rows($check) == 1){
            $_SESSION['username'] = $row['username'];
            $_SESSION['id'] = $row['id'];

            header("location: userloged.php");
        }else{
            echo ' 
            <div class="container text-center">
                <div class="alert alert-danger alert-dismissible fade show" role="alert">
                    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                        <span class="sr-only">Close</span>
                    </button>
                    There is No user with such Account!!
                </div>
            </div>
        ';
        }        
    }






?>