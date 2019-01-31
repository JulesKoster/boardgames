<?php
    if(!isset($_SESSION)) {
        session_start(); 
    }
    $PRODUCT_ID = $_GET['id'];
    $PRODUCT_AMOUNT = $_GET['amount'];
    include 'functions_shoppingcart.php';
    createShopCart($PRODUCT_ID, $PRODUCT_AMOUNT);
?>