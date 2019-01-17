<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Overzicht spellen</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/css/bootstrap.min.css" integrity="sha384-GJzZqFGwb1QTTN6wy59ffF1BuGJpLSa9DkKMp0DgiMDm4iYMj70gZWKYbI706tWS" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" media="screen" href="css/product_overview.css" />
    <?php
        include 'select_product_overview.php'
    ?> 
</head>
<body>
    <?php include "nav_header.php"?>
    <div class='container-fluid text-center mt-5'>
        <div class='row'>
            <div class='col-lg-1'>
            </div>
            <div class='col-lg-5'>
                <div class="row mt-5 mb-5" style='padding-left: 10em;'>
                    <div class="col-lg-6 d-flex justify-content-center">
                        <div><?php echo $htmlOutput[1];?></div>
                    </div>
                    <div class="col-lg-6 d-flex justify-content-center">
                        <div><?php echo $htmlOutput[2];?></div>
                    </div>
                </div>
                <div class="row mt-5 mb-5" style='padding-left: 10em;'>
                    <div class="col-lg-6 d-flex justify-content-center">
                    <div><?php echo $htmlOutput[3];?></div>
                    </div>                        
                    <div class="col-lg-6 d-flex justify-content-center">
                    <div><?php echo $htmlOutput[4];?></div>
                    </div>
                </div>
            </div>
            <div class='col-lg-4'>
                <div class='row'>
                    <div class='col-lg-12'>
                        <div class='bigSquare'>
                            <a href='single_product.php?product_id=2'>
                            <div class="card" style="width: 30rem; min-height: 37em;">
                                <div class="ribbon"><span>Sale</span></div>
                                <img class="card-img-top img-thumbnail" style='min-height: 15em;' src="img/products/monopoly.jpg" alt="Card image cap"> 
                                <div class="card-body">
                                    <h5 class="card-title">Monopoly</h5>
                                    <p class="card-text">Monopoly Classic is het beroemde vastgoedspel voor snelle onderhandelaars waarin spelers kopen, verkopen, onderhandelen en ruilen om de ultieme rijkdom te behalen. </p>
                                    <div class='row'>
                                        <div class='col-lg-6'>
                                            <a href="#" class="btn btn-primary">Toevoegen</a>
                                        </div>
                                        <div class='col-lg-6'>
                                            <div class ='text-center align-middle' id='oval'>
                                                <span class='font-weight-bold'>€ 39,99</span>
                                            </div>
                                        </div>
                                    </div> <!-- row -->
                                </div> <!-- card-body -->
                                </a>
                            </div> <!-- card -->
                        </div> <!-- bigSquare-->
                    </div>
                </div>
            </div>
        </div>
        <div class='row mt-5 mb-5'>
            <div class='col-lg-1'></div>
            <div class='col-lg-10'>
                <div class='row ml-auto'>
                    <div class='col-lg-4 d-flex justify-content-center'>
                        <div><?php echo $htmlOutput[5];?></div>
                    </div>
                    <div class='col-lg-4 d-flex justify-content-center'>
                        <div><?php echo $htmlOutput[6];?></div>
                    </div>
                    <div class='col-lg-4 d-flex justify-content-center'>
                        <div><?php echo $htmlOutput[7];?></div>
                    </div>
                </div>
            </div>
        </div>
        <div class='row mt-5 mb-5'>
            <div class='col-lg-1'></div>
            <div class='col-lg-10'>
                <div class='row ml-auto'>
                    <div class='col-lg-4 d-flex justify-content-center'>
                        <div><?php echo $htmlOutput[8];?></div>
                    </div>
                    <div class='col-lg-4 d-flex justify-content-center'>
                        <div><?php echo $htmlOutput[9];?></div>
                    </div>
                    <div class='col-lg-4 d-flex justify-content-center'>
                        <div><?php echo $htmlOutput[10];?></div>
                    </div>
                </div>
            </div>
        </div>
    </div>
        <?php
        include "footer.php";
        ?>

    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.6/umd/popper.min.js" integrity="sha384-wHAiFfRlMFy6i5SRaxvfOCifBUQy1xHdJ/yoi7FRNXMRBu5WHdZYu1hA6ZOblgut" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/js/bootstrap.min.js" integrity="sha384-B0UglyR+jN6CkvvICOB2joaf5I4l3gm9GU6Hc1og6Ls7i6U/mkkaduKaBhlAXv9k" crossorigin="anonymous"></script>
    <link rel='stylesheet' href='https://use.fontawesome.com/releases/v5.6.3/css/all.css' integrity='sha384-UHRtZLI+pbxtHCWp1t77Bi1L4ZtiqrqD80Kn4Z8NTSRyMA2Fd33n5dQ8lWUE00s/' crossorigin='anonymous'>

    <script src="main.js"></script>
</body>
</html>
