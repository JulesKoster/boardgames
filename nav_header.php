<?php 
  if(!isset($_SESSION)) {
    session_start(); 
}
 ?>
 <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/css/bootstrap.min.css" integrity="sha384-GJzZqFGwb1QTTN6wy59ffF1BuGJpLSa9DkKMp0DgiMDm4iYMj70gZWKYbI706tWS" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.6/umd/popper.min.js" integrity="sha384-wHAiFfRlMFy6i5SRaxvfOCifBUQy1xHdJ/yoi7FRNXMRBu5WHdZYu1hA6ZOblgut" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/js/bootstrap.min.js" integrity="sha384-B0UglyR+jN6CkvvICOB2joaf5I4l3gm9GU6Hc1og6Ls7i6U/mkkaduKaBhlAXv9k" crossorigin="anonymous"></script>
    <link rel="stylesheet" type="text/css" media="screen" href="css/nav_header.css" />
    <link rel='stylesheet' href='https://use.fontawesome.com/releases/v5.6.3/css/all.css' integrity='sha384-UHRtZLI+pbxtHCWp1t77Bi1L4ZtiqrqD80Kn4Z8NTSRyMA2Fd33n5dQ8lWUE00s/' crossorigin='anonymous'>
</head>

<body>
    <!-- <div class="container-fluid wrapperNavHeader ">
     
          <div class="row headerMenu  align-items-center "> -->
          <div class="container-fluid headerMenu ">
          <div class="row align-items-center px-5">
            <div class="logo flex-fill">
                  <ul class="list-inline"> 
                    <li class="list-inline-item shopName ">
                      <p>Game ON</p>
                    </li> 
                    <li class="list-inline-item pawnIcon">
                      <i class='fas fa-chess-pawn fa-rotate-180 fa-2x'></i>
                    </li>
                  </ul>
            </div><!-- logo -->

            <div class="searchBox flex-fill">
              <form action ="search_single_product.php" class="form-inline my-2 my-lg-0" #id="search">
                  <input class="form-control col-lg-10 type="search" placeholder="Wat zoek je?" aria-label="Search" name="product_name">
                  <button class="btn btn-light" type="submit"><i class="fas fa-search xl-3"></i></button>
                </form>
            </div>

            <div class="menuService flex-fill d-none d-sm-block">
                 <ul class="list-inline">  
                    <li class="list-inline-item">
                        <a href="customer_service.php">klantenservice</a>
                    </li>
                    <li class="list-inline-item">
                        <a href="login_form.php">inloggen</a>
                    </li>
                    <li class="list-inline-item">
                        <a href="register_form.php">registreren</a>
                    </li>
                    <!-- <li class="list-inline-item">
                      <a href="#" class="wishlist">verlanglijst</a>
                      <span class="count">0</span>
                    </li> -->
                            <li class="list-inline-item">
                                <a href="game_select.php">spelwijzer
                                <img src="img/questionCloud.png" width="70px" height="70px"/></a>
                            </li>
                  </ul>   
            </div>

            <div class="spelwijzer flex-fill">
            </div>


            <div class="personalPage flex-fill">
            <a href="user.home.php">
            <img src="img/personalPage.png" width="80px" height="80px"/>
            </a>
            </div>

            <div class="shoppingCart flex-fill" id="shoppingCart">

              <button type="button" class="btn btn-primary btn-lg">
                <span class="price">0,00</span>
                  <a href="view_shoppingcart.php">
                    <i class='fas fa-shopping-cart'></i></a>
                  <span class="badge badge-light count">
                  <?php 
                    if (empty($_SESSION['cart'])){
                      echo'0';
                      }
                      else{
                        echo count($_SESSION['cart']);
                      }; 
                      ?>
                  </span>
                  </button>
            </div>
          </div><!--headerMenu-->
        </div> <!--wrapperNavHeader-->   


          <nav class="navbar navbar-expand-lg navbar-dark container-fluid">
          <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarTogglerDemo03"                       aria-controls="navbarTogglerDemo03" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
          <div class="collapse navbar-collapse" id="navbarTogglerDemo03">
            <ul class="navbar-nav mr-auto ml-lg-5 mt-2 mt-lg-0">
              <li class="nav-item">
                <a class="nav-link" href="index.php">
                   <i class="fas fa-home" ></i></a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="#"></a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="product_overview.php?category=bordspel">bordspel</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="product_overview.php?category=kaartspel">kaartspel</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="product_overview.php?category=dobbelspel">dobbelspel</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="product_overview.php?category=denkspel">denkspel</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="product_overview.php?category=spelkamer">spelkamer</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="product_overview.php?travelversion=1">reisversie</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="product_overview.php?kickstarter=1">kickstarter</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="product_overview.php?classic=1">klassiekers</a>
              </li>
              <li class="nav-item">

                <a class="nav-link" href="product_overview.php?category=overige">overige</a>
              </li>
            </ul>
          </div>
        </nav> 
    <!-- </div> wrapperNavHeader-->   
    
    <!-- Optional JavaScript -->
        <script src="js/passwordverify.js"></script>
        <!-- jQuery first, then Popper.js, then Bootstrap JS -->
        <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.6/umd/popper.min.js" integrity="sha384-wHAiFfRlMFy6i5SRaxvfOCifBUQy1xHdJ/yoi7FRNXMRBu5WHdZYu1hA6ZOblgut" crossorigin="anonymous"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/js/bootstrap.min.js" integrity="sha384-B0UglyR+jN6CkvvICOB2joaf5I4l3gm9GU6Hc1og6Ls7i6U/mkkaduKaBhlAXv9k" crossorigin="anonymous"></script>
</body>
</html>
