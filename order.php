<?php 
session_start();    
echo '<div id="totalPrice">' . $_SESSION['totalPrice'] . '</div>';
?>
<div id="paypal-button"></div>
<script src="https://www.paypalobjects.com/api/checkout.js"></script>
<script src="js/paypal.js" ></script>