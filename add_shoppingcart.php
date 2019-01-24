<?php
    session_start();
    $PRODUCT_ID = $_GET['id'];
    $PRODUCT_AMOUNT = $_GET['amount'];
    echo $PRODUCT_ID . '<br>';
    echo $PRODUCT_AMOUNT . '<br>';
    include 'functions_shoppingcart.php';
    createShopCart($PRODUCT_ID, $PRODUCT_AMOUNT);
?>