<?php
    $productId = $_GET['id'];
    // $shoppingCartArray = $_SESSION['cart'];
    if (in_array($productId, $_SESSION['cart'])) {
        $key = array_search($productId, $_SESSION['cart']);
        unset($_SESSION['cart'][$key]);
        // $_SESSION['cart'] = $shoppingCartArray;
    }
?>