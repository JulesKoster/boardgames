<html>
<body>
<form action='add_shoppingcart.php' method='get'>
product id: <input type="text" name="id"><br>
product amount: <input type='text' name='amount'><br>
<button type='submit' value='Submit'>Submit</button>
</form>
<form action='clear_shoppingcart.php'>
<button type='submit'>reset session</button>
</form>
<?php
    session_start();
    function printShopCart($ARRAY){ 
        include 'connect.php';
        for ($i=0; $i < count($ARRAY); $i++) { 
            echo "Product index: " . $i;
            echo " | Product id: " . $ARRAY[$i]["p_id"];
            echo " | Product amount: " . $ARRAY[$i]["p_amount"];
            echo "<br>";
            $sql = 'SELECT * FROM products WHERE product_id = ' . $ARRAY[$i]["p_id"];
            $data = $pdo->query($sql);
            foreach ($data as $row){
                echo '<h1>' . $row['product_name'] . '</h1>';
                }
            }
        echo "<br>";
        }
        printShopCart($_SESSION['cart']);
    
?>
</body>
</html>