<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <script src="js/delete_product.js"></script>
    <title>Product verwijderen</title>

<?php
include "nav_header.php";
?>

<div class="container registerform">
    <div class="row justify-content-center mt-3 mb-3">

        <div id="phpOutput" class="col-xl-10 border rounded">
<?php
include "connect.php";

$sql = "SELECT * FROM products";
$data = $pdo->query($sql);

foreach($data as $row){
    echo    '<div class="row border-bottom m-2 p-2"> 
                <div class="col-xl-3">
                    <a href="single_product.php?product_id=' . $row['product_id'] . '"><img src="img/products/' . $row['product_img'] . '" width="200px" height="200px">
                    </a>
                </div>
                <div class="col-xl-9">
                    <div class="row d-flex justify-content-between mt-2">
                        <div class="col-xl-4">
                            <h3>' . $row['product_name'] . '</h3>
                        </div>
                        <div class="col-xl-2 text-right">
                        <button onclick="deleteProduct(' . $row['product_id'] . ')" class="btn btn-link">Verwijderen?</button>
                        </div>
                    </div>
                    
                </div>
            </div>'; 
}