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
    </head>
    <body>
        <?php
            session_start();
            include 'nav_header.php';
            include "connect_local.php";
            $productID = implode(',', $_SESSION['cart']);
            // $productID = '1,2';
            // echo ($productID . '<br>');
            $sql = 'SELECT * FROM products WHERE product_id IN (' . $productID . ')';
            // echo $sql;
            $data = $pdo->query($sql);
        ?>
            <div class='container'>
        <?php
            $product_order_total_price = 0;
            $divCounter = 0;
            foreach ($data as $row){
                // var_dump ($shoppingCartArray[0]);
                $productArray = array($row['product_id'], $row['product_price'], $amount);
                echo '<div class="row borderBottom mt-5 mb-5">
                    <div class="col-xl-3">
                    <img src="img/products/' . $row['product_img'] . '" width="200px" height="200px"></div>
                    <div class="col-xl-9">
                    <div class="row d-flex justify-content-between mt-5">
                    <div class="col-xl-4">
                    <h3>' . $row['product_name'] . '</h3>
                    </div>
                    <div class="col-xl-4">
                    <h5> Aantal:
                    <select class="custom-select">
                    <option value="1">1</option>
                    <option value="2">2</option>
                    <option value="3">3</option>
                  </select></h5>
                  </div>
                  <div class="col-xl-4 text-right">
                    <h3 id="' . $row['product_id'] . '">€ ' . number_format($row['product_price'],2,",",".") . '</h3>
                    </div>
                    </div>
                    </div>
                    </div>';
                    $divCounter++;
            }
            echo '</div>';
            echo '<div class="text-center"><h1>Totaal: € <span id="divTotalPrice">' . $product_order_total_price . '</span></h1></div>';
            include 'footer.php';
        ?>
        <link rel='stylesheet' href='https://use.fontawesome.com/releases/v5.6.3/css/all.css' integrity='sha384-UHRtZLI+pbxtHCWp1t77Bi1L4ZtiqrqD80Kn4Z8NTSRyMA2Fd33n5dQ8lWUE00s/' crossorigin='anonymous'>
    </body>
</html>

<!-- document.getElementByID('product_id') -->


<!-- <div class="d-flex col-xl-10 board">
                    <img src="img/products/' . $row['product_img'] . '" width="200px" height="200px">
                    <div class="d-flex justify-content-between board">
                    <h3 class="col-xl-4">' . $row['product_name'] . '</h3>
                    <h3 class="col-xl-4">€ ' . $row['product_price'] . '</h3>
                    <h3 class="col-xl-4"> Aantal: </h3>
                    </div>
                </div> -->