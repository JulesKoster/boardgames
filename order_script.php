<?php
session_start();

    include "connect.php";
    
    $sql = "SELECT order_number FROM orders";
    $data = $pdo->query($sql);

    foreach($data as $row){
        echo($row['order_number']);
        $order_number = $row['order_number'];
        if($order_number === NULL){
            $order_number = 0;
            echo('leeg');
        }else {
            $order_number++;
            echo'niet leeg';
        }
    }

    for ($i = 0; $i < count($_SESSION['cart']); $i++) {
        $productID = $_SESSION['cart'][$i]['p_id'];
        $userID = $_SESSION['user_id'];
        $amount = $_SESSION['cart'][$i]['p_amount'];
        try {
            $sql = "INSERT INTO orders(user_id, product_id, product_amount, order_number)
            VALUES ('$userID', '$productID', '$amount', '$order_number')";
            $pdo->exec($sql); 
        }
        catch(PDOException $e){
            echo $sql . "<br>" . $e->getMessage();
        }
        echo 'bedankt voor uw bestelling';
    }
    