<?php
  if(!isset($_SESSION)) {
    session_start(); 
}  
include "nav_header.php"
?>

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
                <div class='col-xl-3'></div>
                <div class='col-xl-3'>

                </div>
                <div class='col-xl-3'>
                
                </div>
            </div>
            <div class='col-xl-12 text-center'>
            <div id="paypal-button"></div>
            </div>
        </div>
    </div>
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
        window.alert('Bedankt voor uw aankoop');
        window.location.href = "order_script.php";
      });
    }
  }, '#paypal-button');
  </script>