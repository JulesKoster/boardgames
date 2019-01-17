<?php
    $product_id = $row['product_id'];
    $amount = 1;
    $totalPrice[$divCounter] = $amount * $row['product_price'];
    echo "product id is: " . $row['product_id'] . "<br>";
    echo "naam is: " . $row['product_name'] . "<br>";
    echo "enkel prijs is: " . $row['product_price'] . "<br>";
    echo "aantal is: <select name='amount' onchange='calculator($divCounter, $product_id)' id='productDivId" . $divCounter . "'>
        <option value='1'>1</option>
        <option value='2'>2</option>
        <option value='3'>3</option>
        </select><br>";
    echo "totaalprijs is: " . $totalPrice[$divCounter]  . "<br><br><br><br><br>";
?>