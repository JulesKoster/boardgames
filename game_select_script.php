<?php
    if(!isset($_SESSION)) {
        session_start(); 
    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/css/bootstrap.min.css" 
    integrity="sha384-GJzZqFGwb1QTTN6wy59ffF1BuGJpLSa9DkKMp0DgiMDm4iYMj70gZWKYbI706tWS" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" media="screen" href="css/product_overview.css" />
    <title>Document</title>

<?php
include "nav_header.php";?>

    <div class="container-fluid mt-5">
        <div class="row my-5">
            <div class="col-lg-12 6cardWrapper">
                <div class="row justify-content-around my-3">
<?php

    $age = $_POST['age'];
    $players = $_POST['players'];
    $time = $_POST['time'];
    $category = $_POST['category']; 
    $classic = $_POST['classic'];
    $travel = $_POST['travel'];

    include "connect.php";

    $sql = "SELECT * FROM products WHERE product_age <= '$age' AND product_min_players <= '$players' 
    AND product_max_players >= '$players' AND product_playtime <= '$time' AND Product_category = '$category'
    AND product_classic = $classic AND product_travelversion = '$travel' ";
    $data = $pdo->query($sql);

    if($data->rowCount() == 0){
        echo '<div class="card p-2">
        <h1>Sorry, er zijn geen resultaten gevonden</h1>
        </div>';
    }else if($data->rowcount() >0){
        foreach($data as $row){
            
            
                echo '<a href="single_product.php?product_id=' . $row['product_id'] . '">
                <div class="card my-5 p-1" style="width: 22em; height: 31em;">
                <img class="card-img-top img-thumbnail mt-1" style="height: 15em;" src="img/products/' . $row['product_img'] . '" alt="Card image cap"></a>
                '.($row['product_kickstarter'] == 1?'<div class="kickstarter"><img src="img/kickstarter-funded.png" width="70px" height="70px"></div>':"").'
                <div class="card-body">
                <h5 class="card-title">' . $row['product_name'] . '</h5>
                <div class="productDesc"><p class="card-text">' . $row['product_desc'] . '</p><p class="textFader">&nbsp;</p></div>
                <div class="row cardDesc d-flex py-2">
                <div class="col-6 buttonBox">
                <button type="button" class="btn btn-primary btn-lg " onclick=addToCart(' . $row['product_id'] . ')>toevoegen</button>
                </div>
                <div class="col-6 priceBox">
                <span class="font-weight-bold">&euro; ' . number_format($row['product_price'],2,",",".") . '</span>
                </div>
                </div>
                </div>
                </div>';     
            
        }
    }

    include 'footer.php';
?>
</body>
</html>
