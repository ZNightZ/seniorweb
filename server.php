<?php
    session_start();
    include('dbconfig.php');

    $errors = array();

    if(isset($_POST['loginbtn'])){
        $username = mysqli_real_escape_string($connection, $_POST['username']);
        $password = mysqli_real_escape_string($connection, $_POST['password']);

        if(empty($username)){
            array_push($errors,"username is required");
        }
        if(empty($password)){
            array_push($errors,"password is required");
        }
        if(count($errors) == 0){
            $query = "SELECT * FROM admin WHERE Username = '$username' AND Password = '$password' ";
            $result = mysqli_query($connection,$query);

            if(mysqli_num_rows($result) == 1){
                $_SESSION['username'] = $username;
                header("location:admin_homepage.php");
            } else {
                array_push($errors , "wrong username or password");
                $_SESSION['error'] = "Wrong username or password";
                header("location: login.php");
                
            }
        }
    }
?>