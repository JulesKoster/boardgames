<?php
session_start();
    $productId = $_GET['id'];
    $shoppingCartArray = $_SESSION['cart'];
    if (in_array($productId, $_SESSION['cart'])) {
        $newArray = array_diff($shoppingCartArray, array($productId));
        $_SESSION['cart'] = $newArray;
    }
    header('Location: view_shoppingcart.php'); 
?>