<?php

    session_start();

    if(!isset($_SESSION['username'])){
        header('location : index.php');
    }

    if(isset($_GET['logout'])){
        sesstion_destroy();
        unset($_SESSION['username']);
        header('location : index.php');
    }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
        <?php if(isset($_SESSION['useername']));?>
        <p><a href ="login.php">logout</p>

</body>
</html>