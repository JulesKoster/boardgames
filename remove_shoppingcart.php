<?php
    if(!isset($_SESSION)) {
    session_start(); 
    }
    $item = $_GET['item'];
    include 'functions_shoppingcart.php';
    $_SESSION['cart'] = removeByIndex($item, $_SESSION['cart']);

    // $shoppingCartArray = $_SESSION['cart'];
    // if (in_array($productId, $_SESSION['cart'])) {
    //     $newArray = array_diff($shoppingCartArray, array($productId));
    //     $_SESSION['cart'] = $newArray;
    // }
    header('Location: view_shoppingcart.php'); 
?>