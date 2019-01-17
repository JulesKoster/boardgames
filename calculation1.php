<?php
    session_start();
    echo $_GET['id'];
    echo $_GET['amount'];
    // include "connect_local.php";

    // $product_id = $_GET['id'];
    // $product_amount = $_GET['amount'];

    // $sql = 'SELECT * FROM products WHERE product_id IN (' . $product_id . ')';
    // $data = $pdo->query($sql);
    

    // foreach ($data as $row){
    //     $total_price = number_format($row['product_price'] * $product_amount,2,",",".");
    //     echo ($total_price);
    // }


?>