<?php
if(!isset($_SESSION)) {
  session_start(); 
}  
include "connect.php";
include "nav_header.php";
?>

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <link rel="stylesheet" href="css/form.css"> 
  <title>Betaalpagina</title>
</head>
<body>
  <div class='container borderform my-5'>
    <div class='container-fluid'>
      <div class='row my-1'>
        <div class='col-xl-2'></div>
        <div class='col-xl-3 mt-3'>
        <h4>Afleveradres:</h4>
        <div class="mt-2">
          <?php $profile = $_SESSION['user_id'];
          $sql = "SELECT * FROM users WHERE user_id = '$profile'";
          $data = $pdo->query($sql); 
          foreach ($data as $row){
            echo  
            $row['user_first_name'] . ' ' . $row['user_middle_name'] . ' ' . $row['user_last_name'] . '<br>'
            .$row['user_streetname'] . ' ' . $row['user_housenumber'] . ' ' . $row['user_number_suffix'] . '<br>'
            .$row['user_place'] . ' ' . $row['user_zipcode']
            ;
          }?>
          </div>
        </div>
        <div class='col-xl-2'></div>
        <div class='col-xl-3 mt-3'>
          <h4>Uw bestelling:</h4>
          <div class="mt-2">
          <?php 
          for ($i=0; $i < count($_SESSION['cart']); $i++) {
            $sql = 'SELECT * FROM products WHERE product_id = ' . $_SESSION['cart'][$i]["p_id"];
            $data = $pdo->query($sql);
            foreach ($data as $row){
              echo $row['product_name'] . '<br>';
            }
          }?>
          </div>
        </div>
        <div class='col-xl-2'></div>
      </div>
      <div class='col-xl-12 text-center mt-3'>
      <div id="paypal-button"></div>
      </div>
    </div>
  </div>
<!-- Modal Payment Success -->
<div class="modal fade bd-example-modal-sm" id="successModal" tabindex="-1" role="dialog" aria-labelledby="mySmallModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-sm">
    <div class="modal-content">
      Uw betaling is succesvol verwerkt. Bedankt voor uw bestelling!

      <a href="order_script.php">Klik hier om terug te gaan</a>
    </div>
  </div>
</div>

<!-- Modal Payment Success -->

<?php include "footer.php" ?>

<script src="https://www.paypalobjects.com/api/checkout.js"></script>
<script>
paypal.Button.render({
    // Configure environment
    env: 'sandbox',
    client: {
      sandbox: 'AdXPhSP01xutXyynAUvGaGbOy2NP-cQXWkw-K8LpY_TrhsV4acNzJmgfd-6D4xx3FS1yJR1-MPH6wa2R',
      production: 'demo_production_client_id'
    },
    // Customize button (optional)
    locale: 'en_US',
    style: {
      size: 'small',
      color: 'gold',
      shape: 'pill',
    },

    // Enable Pay Now checkout flow (optional)
    commit: true,

    // Set up a payment
    payment: function(data, actions) {
      return actions.payment.create({
        transactions: [{
          amount: {
            total: <?php echo("'".$_SESSION['totalPrice']."'");?>,
            currency: 'EUR'
          }
        }]
      });
    },
    // Execute the payment
    onAuthorize: function(data, actions) {
      return actions.payment.execute().then(function() {
       $('#successModal').modal('show')
        // window.location.href = "order_script.php";
      });
    }
  }, '#paypal-button');
  </script>