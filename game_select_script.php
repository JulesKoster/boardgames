<?php

$age = $_GET['age'];
$players = $_GET['players'];
$time = $_GET['time'];
$category = $_GET['category']; 
$classic = $_GET['classic'];
$travel = $_GET['travel'];

include "connect.php";


$sql = "SELECT * FROM products WHERE product_age <= '$age' AND product_min_players <= '$players' 
AND product_max_players >= '$players' AND product_playtime <= '$time' AND Product_category = '$category'
AND product_classic = $classic AND product_travelversion = '$travel' ";
$data = $pdo->query($sql);

foreach($data as $row){

    echo $row['product_id'] . ' ' . $row['product_name'] . ' ' . $row['product_classic'] . '<br>';
}
