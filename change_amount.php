<?php
session_start();
    $product_id = $_GET['id'];
    $product_amount = $_GET['amount'];
    echo ($product_id . "<br>");
    echo ($product_amount . "<br>");
    include ('functions_shoppingcart.php');
    $_SESSION['cart'] = addToShopCart($product_id, $product_amount, $_SESSION['cart']);
    header("Location: view_shoppingcart.php");
?>