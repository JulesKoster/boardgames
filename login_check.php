<?php
session_start();
    if(isset($_SESSION['role'])&& $_SESSION['role']=='admin'){
        header('location: admin.home.php');
        echo 'admin';
    }else if(isset($_SESSION['role']) && $_SESSION['role']='user'){
        header('location: user.home.php');
        echo 'user';
    }
?>
