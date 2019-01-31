<?php
  if(!isset($_SESSION)) {
    session_start(); 
}
?>
<!DOCTYPE html>
    <html>
        <head>
            <meta charset="utf-8">
            <meta http-equiv="X-UA-Compatible" content="IE=edge">
            <meta name="viewport" content="width=device-width, initial-scale=1">
            <link rel='stylesheet' href='https://use.fontawesome.com/releases/v5.6.3/css/all.css' integrity='sha384-UHRtZLI+pbxtHCWp1t77Bi1L4ZtiqrqD80Kn4Z8NTSRyMA2Fd33n5dQ8lWUE00s/' crossorigin='anonymous'>
            <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/css/bootstrap.min.css" integrity="sha384-GJzZqFGwb1QTTN6wy59ffF1BuGJpLSa9DkKMp0DgiMDm4iYMj70gZWKYbI706tWS" crossorigin="anonymous">
            <link rel="stylesheet" type="text/css" media="screen" href="css/product_overview.css" />
            <title>Overzicht spellen</title>
        </head>
        <?php
            include 'select_product_overview.php';
            include "nav_header.php";
        ?>
        <div class="container-fluid betweenBar"></div>
            <div class="container-fluid">
                    <div class="row"> <!-- cardWrapper6 -->
                        <div class="col-lg-12 col-md-12 mt-5  cardWrapper6">
                            <div class="row justify-content-around">
                                <div class='col-lg-4 col-md-6 d-flex justify-content-center bg-color1'>
                                    <div><?php echo $htmlOutput[1];?></div>
                                </div>
                                <div class='col-lg-4 col-md-6 d-flex justify-content-center bg-color2'>
                                    <div><?php echo $htmlOutput[2];?></div>
                                </div>
                                <div class='col-lg-4 col-md-6 d-flex justify-content-center bg-color1'>
                                    <div class="card" style="width: 30rem; min-height: 37em;">
                                        <div class="ribbon"><span>Sale</span></div>
                                            <img class="card-img-top img-thumbnail" style='min-height: 15em;' src="img/products/monopoly.jpg" alt="Card image cap"> 
                                                <div class="card-body">
                                                    <h5 class="card-title">Monopoly</h5>
                                                        <div class="productDesc"><p class="card-text"><p class="textFader">&nbsp;</p>Monopoly Classic is het beroemde vastgoedspel voor snelle onderhandelaars waarin spelers kopen, verkopen, onderhandelen en ruilen om de ultieme rijkdom te behalen. </p></div>
                                                            <div class="row">
                                                                <div class="col-12 buttonBox">
                                                                    <button type="button" class="btn btn-primary btn-block shadow-none" onclick=addToCart()>toevoegen    <span class='font-weight-bold'>€ 39,99</span></button>
                                                                </div>
                                                            </div>
                                                    </div>
                                                </div>
                                            <div>
                                    </div><!--sale--> 
                                </div>
                            </div>
                            <div class="row justify-content-around">
                                <div class='col-lg-4 col-md-6 d-flex justify-content-center bg-color2'>
                                    <div><?php echo $htmlOutput[3];?></div>
                                </div>
                                <div class='col-lg-4 col-md-6 d-flex justify-content-center bg-color1'>
                                    <div><?php echo $htmlOutput[4];?></div>
                                </div>
                                    <div class='col-lg-4 col-md-6 d-flex justify-content-center bg-color2'><div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
                    <div class="row"> <!-- cardWrapper6 -->
                        <div class="col-lg-12 col-md-12  cardWrapper6">
                            <div class="row justify-content-around">
                                <div class='col-lg-4 col-md-6 d-flex justify-content-center bg-color1'>
                                    <div><?php echo $htmlOutput[5];?></div>
                                </div>
                                <div class='col-lg-4 col-md-6 d-flex justify-content-center bg-color2'>
                                    <div><?php echo $htmlOutput[6];?></div>
                                </div>
                                <div class='col-lg-4 col-md-6 d-flex justify-content-center bg-color1'>
                                    <div><?php echo $htmlOutput[7];?></div>
                                </div>
                        
                    </div>
                    <div class="row justify-content-around">
                                <div class='col-lg-4 col-md-6 d-flex justify-content-center bg-color2'>
                                    <div><?php echo $htmlOutput[8];?></div>
                                </div>
                                <div class='col-lg-4 col-md-6 d-flex justify-content-center bg-color1'>
                                    <div><?php echo $htmlOutput[9];?></div>
                                </div>
                                <div class='col-lg-4 col-md-6 d-flex justify-content-center bg-color2'>
                                    <div><?php echo $htmlOutput[10];?></div>
                                <button onclick="topFunction()" id="buttonTop" title="Go to top">Top</button>    
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            
        <?php
        include "footer.php";
        ?>

    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.6/umd/popper.min.js" integrity="sha384-wHAiFfRlMFy6i5SRaxvfOCifBUQy1xHdJ/yoi7FRNXMRBu5WHdZYu1hA6ZObmdut" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/js/bootstrap.min.js" integrity="sha384-B0UglyR+jN6CkvvICOB2joaf5I4l3gm9GU6Hc1og6Ls7i6U/mkkaduKaBhlAXv9k" crossorigin="anonymous"></script>
    <script src="js/cart.js"></script>
    <script src ="js/backtotop.js"></script>  
  </body>
</html>

