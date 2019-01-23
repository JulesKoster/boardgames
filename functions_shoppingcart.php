<?php
    // controleren of array $_SESSION['cart'] al bestaat of niet
    function createShopCart($PRODUCT_ID, $PRODUCT_AMOUNT) {
        // bestaat het niet:
        if (empty($_SESSION['cart'])) {
            echo 'sessie is leeg!';
            $_SESSION['cart'] = array(
                array("p_id"=>$PRODUCT_ID,"p_amount"=>$PRODUCT_AMOUNT)
            );
        }
        // bestaat het wel:
        else {
            $_SESSION['cart'] = addToShopCart($PRODUCT_ID, $PRODUCT_AMOUNT, $_SESSION['cart']);
        }
    }

    // nieuwe regel toevoegen aan array $_SESSION['cart'] zonder controle
    // function pushToShopCart($PRODUCT_ID, $PRODUCT_AMOUNT){
    //     $newEntry = array("p_id"=>$PRODUCT_ID,"p_amount"=>$PRODUCT_AMOUNT);
    //     array_push($_SESSION['cart'], $newEntry);
    // }

    function printShopCart($ARRAY){ 
        include 'connect.php';
        $totalPrice = 0;
        for ($i=0; $i < count($ARRAY); $i++) { 
            // echo "Product index: " . $i;
            // echo " | Product id: " . $ARRAY[$i]["p_id"];
            // echo " | Product amount: " . $ARRAY[$i]["p_amount"];
            echo "<br>";
            $sql = 'SELECT * FROM products WHERE product_id = ' . $ARRAY[$i]["p_id"];
            $data = $pdo->query($sql);
            foreach ($data as $row){
                $itemTotal = $row['product_price'] * $ARRAY[$i]["p_amount"];
                $totalPrice = $totalPrice + $itemTotal;
                $_SESSION['totalPrice'] = $totalPrice;
                echo '  <div class="row mt-3 borderBottom">
                            <div class="col-xl-3">
                                <img src="img/products/' . $row['product_img'] . '" height="200px" width="200px">
                            </div>
                            <div class="col-xl-3">
                                <h3><a href="single_product.php?product_id=' . $ARRAY[$i]["p_id"] . '">' . $row['product_name'] . '</a></h3>                                
                            </div>
                            <div class="col-xl-2 text-right">
                                <h4> Aantal: </h4>
                                <select class="custom-select" id="productAmount' . $ARRAY[$i]["p_id"] . '" name="amount" onchange="changeAmount(' . $row["product_id"] . ')">';
                                if ($ARRAY[$i]["p_amount"] == 1) {
                                echo '<option value="1" selected>1</option>
                                <option value="2">2</option>
                                <option value="3">3</option>';
                                }
                                else if ($ARRAY[$i]["p_amount"] == 2) {
                                    echo '<option value="1">1</option>
                                    <option value="2" selected>2</option>
                                    <option value="3">3</option>';
                                    }
                                else if ($ARRAY[$i]["p_amount"] == 3) {
                                    echo '<option value="1">1</option>
                                    <option value="2">2</option>
                                    <option value="3" selected>3</option>';
                                    }
                                echo '</select>
                            </div>
                            <div class="col-xl-2 text-right">
                                <h4>&euro; ' . number_format($itemTotal,2,",",".") . '</h4>
                            </div>
                            <div class="col-xl-2">
                            <h5><a href="remove_shoppingcart.php?item=' . $i . '">Verwijderen?</a></h5>
                            </div>
                        </div>';
                }
            }
        echo "<br>";
        }



    function searchForId($ID, $ARRAY) {
        foreach ($ARRAY as $key => $val) {        
            if ($val['p_id'] == $ID) {           
                return $key;
            }
        }
        return null;
    }

//check if not null. if null push to array. if !null ++ amount.

function addToShopCart($P_ID, $P_AMOUNT, $ARRAY){   //Netter als je functie maakt voor niet alleen SHOPCART
    if(searchForId($P_ID, $ARRAY) == null){
        echo "ID bestaat niet, push nieuwe ID en amount naar shopping cart<br>";
        $newEntry = array("p_id" => $P_ID,"p_amount" => $P_AMOUNT);               
        array_push($ARRAY, $newEntry); 
        // echo "ID: " . $P_ID . "toegevoegd met amount: " . $P_AMOUNT . "<br>"; 
        return $ARRAY;       
    }else{
        echo "ID bestaat, SET amount  <br>";
        $index = searchForId($P_ID, $ARRAY);
        $ARRAY[$index]["p_amount"] = $P_AMOUNT;
        echo "ID: " . $P_ID . " SET amount: " . $P_AMOUNT . " @ index " . $index . "<br>"; 
        return $ARRAY;
    }
    echo "<br>";
}

function removeByIndex($INDEX, $ARRAY) {
    unset($ARRAY[$INDEX]);
    $ARRAY = array_values($ARRAY);
    return $ARRAY;
    // printShopCart($ARRAY);
}
?>