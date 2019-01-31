<?php
    if(!isset($_SESSION)) {
        session_start(); 
    }
    $item = $_GET['item'];
    include 'functions_shoppingcart.php';
    $_SESSION['cart'] = removeByIndex($item, $_SESSION['cart']);
    header('Location: view_shoppingcart.php'); 
?>