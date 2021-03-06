<?php 
    include "connect.php";

    if (!empty($_GET['classic'])) {
        $classic = $_GET['classic'];
        $sql = "SELECT * FROM products WHERE product_classic = '$classic'";
    }else if(!empty($_GET['category'])){

        $category = $_GET['category'];
        $sql = "SELECT * FROM products WHERE product_category = '$category'";
    }else if (!empty($_GET['travelversion'])){
        $travelversion = $_GET['travelversion'];
        $sql = "SELECT * FROM products WHERE product_travelversion = '$travelversion'";
    }else if (!empty($_GET['kickstarter'])){
     $kickstarter = $_GET['kickstarter'];
     $sql = "SELECT * FROM products WHERE product_kickstarter = '$kickstarter'";
    }else{
        $sql = "SELECT * FROM products";
    }
       
        $data = $pdo->query($sql);
        $divCounter = 0;

        foreach ($data as $row) {
            $divCounter++; 
            $product_desc = $row['product_desc'];
            $dataObject[$divCounter] = $row;
            $htmlOutput[$divCounter]  = '';
            $htmlOutput[$divCounter]  = '<a href="single_product.php?product_id=' . $row['product_id'] . '">';
            $htmlOutput[$divCounter] .= '<div class="card my-5 p-1" style="width: 22em; height: 31em;">';
            $htmlOutput[$divCounter] .= '<img class="card-img-top img-thumbnail mt-1" style="height: 15em;" src="img/products/' . $row['product_img'] . '" alt="Card image cap"></a>';
            if ($row['product_kickstarter'] == 1) {
                $htmlOutput[$divCounter] .= '<div class="kickstarter"><img src="img/kickstarter-funded.png" width="70px" height="70px"></div>';
            }
            $htmlOutput[$divCounter] .= '<div class="card-body">';
            $htmlOutput[$divCounter] .= '<h5 class="card-title">' . $row['product_name'] . '</h5>';
            $htmlOutput[$divCounter] .= '<div class="productDesc"><p class="card-text">' . $product_desc . '</p><p class="textFader">&nbsp;</p></div>';
            $htmlOutput[$divCounter] .= '<div class="row cardDesc d-flex p-2">';
            $htmlOutput[$divCounter] .= '<div class="col-12 buttonBox">';
            $htmlOutput[$divCounter] .= '<button type="button" class="btn btn-primary btn-block shadow-none cartChecker" data-toggle="popover" data-content="Dit product zit in uw winkelwagen" data-placement="bottom" onclick=addToCart(' . $row['product_id'] . ')>toevoegen      ';
            $htmlOutput[$divCounter] .= '<span class="font-weight-bold">&euro; ' . number_format($row['product_price'],2,",",".") . '</span></button>';
            $htmlOutput[$divCounter] .= '</div>';
            $htmlOutput[$divCounter] .= '</div>';
            $htmlOutput[$divCounter] .= '</div>';
            $htmlOutput[$divCounter] .= '</div>';
        }
?>