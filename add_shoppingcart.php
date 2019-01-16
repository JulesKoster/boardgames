<?php
    session_start();
    if(empty($_SESSION['cart'])){
        $_SESSION['cart'] = array();
    }
    
    
    if (in_array($_GET['id'], $_SESSION['cart']))
    {
        echo "Match found";
    }
    else
    {
        array_push($_SESSION['cart'], $_GET['id']);
        echo ($_SESSION['cart']);
        echo "<br>Match not found";
    }

?>