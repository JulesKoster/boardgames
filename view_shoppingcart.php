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
        <?php
            include 'nav_header.php';
            include "connect.php";
            $productID = implode(',', $_SESSION['cart']);
            if ( $productID == NULL ) {
                $productID = 0;
            }
            $sql = 'SELECT * FROM products WHERE product_id IN (' . $productID . ')';
            // echo $sql;
            $data = $pdo->query($sql);
        ?>
            <div class='container'>
        <?php
            // $product_order_total_price = sum($_SESSION['cart']);
            $product_order_total_price = 0;
            $divCounter = 0;
            if ($productID == 0) {
                echo "<h2 class='mt-5'>Er zijn geen producten in uw winkelwagen.</h2>";
            }
            foreach ($data as $row){
                $amount = 1;
                // var_dump ($shoppingCartArray[0]);
                $productArray = array($row['product_id'], $row['product_price'], $amount);
                echo '<div class="row borderBottom mt-2 mb-2">
                    <div class="col-xl-3">
                    <a href="single_product.php?product_id=' . $row['product_id'] . '"><img src="img/products/' . $row['product_img'] . '" width="200px" height="200px"></a></div>
                    <div class="col-xl-9">
                    <div class="row d-flex justify-content-between mt-2">
                    <div class="col-xl-4">
                    <a href="single_product.php?product_id=' . $row['product_id'] . '"><h3>' . $row['product_name'] . '</h3></a>
                    </div>
                    <div class="col-xl-2">
                    <h5> Aantal:
                    <select class="custom-select" onchange="calculateTotalPrice(' . $row['product_id'] . ', ' . $divCounter . ')">
                    <option value="1">1</option>
                    <option value="2">2</option>
                    <option value="3">3</option>
                  </select></h5>
                  </div>
                  <div class="col-xl-4 text-right">
                    <h3 id="' . $row['product_id'] . '">€ ' . number_format($row['product_price'],2,",",".") . '</h3>
                    </div>
                    <div class="col-xl-2 text-right">
                    <a href="remove_shoppingcart.php?id=' . $row['product_id'] . '">Verwijderen?</a>
                    
                    </div>
                    </div>
                    </div>
                    </div>';
                    $divCounter++;
                    $product_order_total_price = $product_order_total_price + $row['product_price'];
            }
            if ($productID != 0 ) {
                echo '<div class="text-right"><h2>Totaal: € <span id="divTotalPrice">' . $product_order_total_price . '</span></h2></div>';
            }
            echo '</div>';
            include 'footer.php';
        ?>
        <link rel='stylesheet' href='https://use.fontawesome.com/releases/v5.6.3/css/all.css' integrity='sha384-UHRtZLI+pbxtHCWp1t77Bi1L4ZtiqrqD80Kn4Z8NTSRyMA2Fd33n5dQ8lWUE00s/' crossorigin='anonymous'>
    </body>
</html>

<!-- dit moet uiteindelijk regel vervangen waar a href verwijderen staat 
<p id="removeCart' . $row['product_id'] . '" onclick="removeFromCart(' . $row['product_id'] . ')">Verwijderen?</p> -->