<?php 
    include "connect.php";
        $sql = "SELECT * FROM products";
        $data = $pdo->query($sql);
        $divCounter = 0;

        foreach ($data as $row) {
            $divCounter++; 
            $product_desc = $row['product_desc'];
            $dataObject[$divCounter] = $row;
            $htmlOutput[$divCounter]  = '';
            $htmlOutput[$divCounter]  = '<a href="single_product.php?product_id=' . $divCounter . '">';
            $htmlOutput[$divCounter] .= '<div class="card" style="width: 18rem; height: 30em;">';
            $htmlOutput[$divCounter] .= '<img class="card-img-top img-thumbnail" style="height: 15em;" src="img/products/' . $row['product_img'] . '" alt="Card image cap">';
            $htmlOutput[$divCounter] .= '<div class="card-body">';
            $htmlOutput[$divCounter] .= '<h5 class="card-title">' . $row['product_name'] . '</h5>';
            $htmlOutput[$divCounter] .= '<div class="product_desc"><p class="card-text">' . $product_desc . '</p><p class="textFader">&nbsp;</p></div>';
            $htmlOutput[$divCounter] .= '<div class="row cardDesc">';
            $htmlOutput[$divCounter] .= '<div class="col-6">';
            $htmlOutput[$divCounter] .= '<a href="#" class="btn btn-primary">Toevoegen</a>';
            $htmlOutput[$divCounter] .= '</div>';
            $htmlOutput[$divCounter] .= '<div class="col-6">';
            $htmlOutput[$divCounter] .= '<div class ="text-center align-middle" id="oval">';
            $htmlOutput[$divCounter] .= '<span class="font-weight-bold">€ ' . number_format($row['product_price'],2,",",".") . '</span>';
            $htmlOutput[$divCounter] .= '</div>';
            $htmlOutput[$divCounter] .= '</div>';
            $htmlOutput[$divCounter] .= '</div>';
            $htmlOutput[$divCounter] .= '</div>';
            $htmlOutput[$divCounter] .= '</div></a>';
        }
?>