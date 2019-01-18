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
</head>
<body>

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

foreach($data as $row){

    echo '<a href="single_product.php?product_id=' . $row['product_id'] . '">
    <div class="card" style="width: 18rem; height: 30em;">
    <img class="card-img-top img-thumbnail" style="height: 15em;" src="img/products/' . $row['product_img'] . '" alt="Card image cap">
    <div class="card-body">
    <h5 class="card-title">' . $row['product_name'] . '</h5>
    <div class="product_desc"><p class="card-text">' . $row['product_desc'] . '</p><p class="textFader">&nbsp;</p></div>
    <div class="row cardDesc">
    <div class="col-6">
    <a href="#" class="btn btn-primary">Toevoegen</a>
    </div>
    <div class="col-6">
    <div class ="text-center align-middle" id="oval">
    <span class="font-weight-bold">€ ' . number_format($row['product_price'],2,",",".") . ' </span>
    </div>
    </div>
    </div>
    </div>
    </div></a>';
}
?>

</body>
</html>
