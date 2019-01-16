    <link rel="stylesheet" type="text/css" media="screen" href="css/nav_header.css" />
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
                    <a href="#">
                      <i class='fas fa-shopping-cart'></i></a>
                    </li>
                    <li class="list-inline-item">
                    <span class="count">0</span>
                    </li>
                  </ul>
            </div>
          </div><!--headerMenu-->

          <nav class="navbar navbar-expand-lg navbar-dark container-fluid">
          <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarTogglerDemo03" aria-controls="navbarTogglerDemo03" aria-expanded="false" aria-label="Toggle navigation">
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
                <a class="nav-link" href="#">actiespel</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="#">breinbrekers</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="#">reisversie</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="#">wargaming</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="#">kickstarter</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="#">vloerspel</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="#">spelkamer</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="#">klassiekers</a>
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
