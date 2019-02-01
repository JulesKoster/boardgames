<?php
  if(!isset($_SESSION)) {
    session_start(); 
}
?>
<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <title>Winkelwagen</title>
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/css/bootstrap.min.css" integrity="sha384-GJzZqFGwb1QTTN6wy59ffF1BuGJpLSa9DkKMp0DgiMDm4iYMj70gZWKYbI706tWS" crossorigin="anonymous">
        <link rel="stylesheet" type="text/css" media="screen" href="css/product_overview.css">
        <link rel='stylesheet' href='https://use.fontawesome.com/releases/v5.6.3/css/all.css' integrity='sha384-UHRtZLI+pbxtHCWp1t77Bi1L4ZtiqrqD80Kn4Z8NTSRyMA2Fd33n5dQ8lWUE00s/' crossorigin='anonymous'>
        
        <?php
            include 'nav_header.php';
        ?>
    </head>
    <body>
        <div class='container'>
            <div class='row mt-5'>
                <div class='col-xl-12'>
                    <h3>WINKELMANDJE</h3>
                </div>
            </div>
            <?php
                include 'functions_shoppingcart.php';
                if (empty($_SESSION['cart'])){
                    //shopping cart is empty
                    echo 'Uw winkelmandje is leeg.';
                    $_SESSION['totalPrice'] = 0;
                }
                else {
                    //display every item in shopping cart
                    printShopCart($_SESSION['cart']);
                }
            ?>
            <div class='row text-right'>
                <div class='col-xl-12'>
                    <h3>Totaal: &euro; 
                    <?php
                        if (empty($_SESSION['totalPrice'])) {
                            $_SESSION['totalPrice'] = 0;
                        }
                        //display the total price in 1.234,56
                        echo number_format($_SESSION['totalPrice'],2,",",".");
                    ?>
                    </h3>
                </div>
                <?php
                    if(empty($_SESSION['cart'])) {
                        echo '<div user-select: none><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br></div>';
                    }
                    if(!empty($_SESSION['cart'])){
                        //check if there are items in shopping cart
                        echo'<div class="col-xl-12 my-5">
                            <a class="btn btn-outline-dark shadow-none" href="checkout.php">bestellen</a>
                        </div>';
                }
                ?>
                </div>
            </div>
            <?php
                include 'footer.php';
            ?>
            <link rel='stylesheet' href='https://use.fontawesome.com/releases/v5.6.3/css/all.css' integrity='sha384-UHRtZLI+pbxtHCWp1t77Bi1L4ZtiqrqD80Kn4Z8NTSRyMA2Fd33n5dQ8lWUE00s/' crossorigin='anonymous'>
            <script src="js/calculation.js"></script>
    </body>
</html>
