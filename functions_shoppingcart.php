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
            echo " bestaat ";
            $_SESSION['cart'] = addToShopCart($PRODUCT_ID, $PRODUCT_AMOUNT, $_SESSION['cart']);
        }
    }


    function printShopCart($ARRAY){ 
        include 'connect.php';
        $totalPrice = 0;
        for ($i=0; $i < count($ARRAY); $i++) { 
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
                                <option value="3">3</option>
                                <option value="4">4</option>
                                <option value="5">5</option>';
                                }
                                else if ($ARRAY[$i]["p_amount"] == 2) {
                                    echo '<option value="1">1</option>
                                    <option value="2" selected>2</option>
                                    <option value="3">3</option>
                                    <option value="4">4</option>
                                    <option value="5">5</option>';
                                    }
                                else if ($ARRAY[$i]["p_amount"] == 3) {
                                    echo '<option value="1">1</option>
                                    <option value="2">2</option>
                                    <option value="3" selected>3</option>
                                    <option value="4">4</option>
                                    <option value="5">5</option>';
                                    }
                                else if ($ARRAY[$i]["p_amount"] == 4) {
                                    echo '<option value="1">1</option>
                                    <option value="2">2</option>
                                    <option value="3">3</option>
                                    <option value="4" selected>4</option>
                                    <option value="5">5</option>';
                                    }
                                else if ($ARRAY[$i]["p_amount"] == 5) {
                                    echo '<option value="1">1</option>
                                    <option value="2">2</option>
                                    <option value="3">3</option>
                                    <option value="4">4</option>
                                    <option value="5" selected>5</option>';
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
        $foundID = "NOTFOUND";
        for($i = 0; $i < count($ARRAY); $i++){
            if($ARRAY[$i]['p_id'] == $ID){    
                echo " match ";           
                $foundID = $i;
                break;
            }
        }
        return $foundID;
    }



//check if not null. if null push to array. if !null ++ amount.

function addToShopCart($P_ID, $P_AMOUNT, $ARRAY){   //Netter als je functie maakt voor niet alleen SHOPCART
    $hallo = searchForId($P_ID, $ARRAY);
    if($hallo === "NOTFOUND"){
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