<!DOCTYPE html>
<html lang="en">
<head>
<?php session_start() ?>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/css/bootstrap.min.css" integrity="sha384-GJzZqFGwb1QTTN6wy59ffF1BuGJpLSa9DkKMp0DgiMDm4iYMj70gZWKYbI706tWS" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.6/umd/popper.min.js" integrity="sha384-wHAiFfRlMFy6i5SRaxvfOCifBUQy1xHdJ/yoi7FRNXMRBu5WHdZYu1hA6ZOblgut" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/js/bootstrap.min.js" integrity="sha384-B0UglyR+jN6CkvvICOB2joaf5I4l3gm9GU6Hc1og6Ls7i6U/mkkaduKaBhlAXv9k" crossorigin="anonymous"></script>
    <link rel="stylesheet" type="text/css" media="screen" href="css/nav_header.css" />
    <link rel='stylesheet' href='https://use.fontawesome.com/releases/v5.6.3/css/all.css' integrity='sha384-UHRtZLI+pbxtHCWp1t77Bi1L4ZtiqrqD80Kn4Z8NTSRyMA2Fd33n5dQ8lWUE00s/' crossorigin='anonymous'>
    <title>Header Navbar</title>
</head>

<body>
    <div class="container-fluid wrapperNavHeader">
          <div class="row headerMenu px-5 py-2 align-items-center">
            <div class="logo flex-fill">
                  <ul class="list-inline"> 
                    <li class="list-inline-item pawnIcon ">
                      <i class='fas fa-chess-pawn'></i>
                    </li>
                    <li class="list-inline-item shopName ">
                      <p>BOARDGAMES</p>
                    </li> 
                  </ul>
            </div><!-- logo -->

            <div class="searchBox flex-fill">
              <form action ="search_single_product.php" class="form-inline my-2 my-lg-0" #id="search">
                  <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search" name="product_name">
                  <button class="btn btn-light my-sm-0" type="submit">Search</button>
                </form>
            </div>

            <div class="menuService flex-fill d-none d-sm-block">
                 <ul class="list-inline">  
                    <li class="list-inline-item">
                        <a href="#">Klantenservice</a>
                    </li>
                    <li class="list-inline-item">
                        <a href="#">Inloggen</a>
                    </li>
                    <li class="list-inline-item">
                        <a href="#">Registreren</a>
                    </li>
                    <li class="list-inline-item">
                        <a href="#">Spelwijzer</a>
                    </li>
                    <li class="list-inline-item">
                        <a href="#" class="wishlist">Verlanglijst</a>
                        <span class="count">0</span>
                    </li>
                  </ul>   
            </div>

            <div class="shoppingCart flex-fill" id="shoppingCart">
              <ul class="list-inline">  
                <li class="list-inline-item price">
                    <span class="price">0,00</span>
                </li> 
                  <li class="list-inline-item">
                    <a href="view_shoppingcart.php">
                      <i class='fas fa-shopping-cart'></i></a>
                    </li>
                    <li class="list-inline-item">
                    <span class="count"><?php echo count($_SESSION['cart']); ?>
                    </span>
                    </li>
                  </ul>
            </div>
          </div><!--headerMenu-->

          <nav class="navbar navbar-expand-lg navbar-dark container-fluid">
          <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarTogglerDemo03"                       aria-controls="navbarTogglerDemo03" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
          <div class="collapse navbar-collapse" id="navbarTogglerDemo03">
            <ul class="navbar-nav mr-auto mt-2 mt-lg-0">
              <li class="nav-item">
                <a class="nav-link" href="product_overview.php">
                   <i class='fas fa-home' ></i></a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="#"></a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="#">bordspel</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="#">kaartspel</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="#">dobbelspel</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="#">denkspel</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="#">spelkamer</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="#">reisversie</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="#">kickstarter</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="#">klassiekers</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="#">overige</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="#"></a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="#"></a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="#"></a>
              </li>
            </ul>
          </div>
        </nav> 
    </div> <!--wrapperNavHeader-->   
            
</body>
</html>
