<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <title>Winkelwagen</title>
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/css/bootstrap.min.css" integrity="sha384-GJzZqFGwb1QTTN6wy59ffF1BuGJpLSa9DkKMp0DgiMDm4iYMj70gZWKYbI706tWS" crossorigin="anonymous">
        <link rel="stylesheet" type="text/css" media="screen" href="css/product_overview.css" />
        <script>shoppingCartArray = [];</script>
        <script src="js/calculation.js"></script>
        <script src="js/cart.js"></script>
        <?php
            include 'nav_header.php';
            // include "connect.php";
        ?>
        <body>
        <div class='container'>
            <div class='row mt-5'>
                <div class='col-xl-12'>
                    <h1>Winkelmandje</h1>
                    <?php
                    
                    ?>
                </div>
            </div>
            <?php
                include 'functions_shoppingcart.php';
                if (empty($_SESSION['cart'])){
                    echo 'Uw winkelmandje is leeg.';
                }
                else {
                    printShopCart($_SESSION['cart']);
                }
            ?>
        </div>
        <?php

        ?>
        <?php
            include 'footer.php';
            ?>
            <link rel='stylesheet' href='https://use.fontawesome.com/releases/v5.6.3/css/all.css' integrity='sha384-UHRtZLI+pbxtHCWp1t77Bi1L4ZtiqrqD80Kn4Z8NTSRyMA2Fd33n5dQ8lWUE00s/' crossorigin='anonymous'>
        </body>
    </html>
