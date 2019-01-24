<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>index.php</title>
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/css/bootstrap.min.css" integrity="sha384-GJzZqFGwb1QTTN6wy59ffF1BuGJpLSa9DkKMp0DgiMDm4iYMj70gZWKYbI706tWS" crossorigin="anonymous">
    <?php
        include 'select_product_overview.php';
        header("Content-Type: text/html; charset=ISO-8859-1");
    ?> 
    <?php include "nav_header.php"?>

<!-- <a href="product_overview.php">klik hier</a> -->
<div id="carouselExampleControls" class="carousel slide" data-ride="carousel">
  <div class="carousel-inner">
    <div class="carousel-item active">
      <img class="d-block w-100" src="img/slider/monopolyBord.jpg" alt="Bordspel">
    </div>
    <div class="carousel-item">
      <img class="d-block w-100" src=img/slider/hasbro.jpg alt="Stapel spelletjes">
    </div>
    <div class="carousel-item">
      <img class="d-block w-100" src=img/slider/spelstapel.jpg alt="Stapel spelletjes">
    </div>
    <div class="carousel-item">
      <img class="d-block w-100" src=img/slider/stapel.jpg alt="Stapel spelletjes">
    </div>
    <div class="carousel-item">
      <img class="d-block w-100" src=img/slider/reisspellen.jpg alt="Reis spelletjes">
    </div>
    <div class="carousel-item">
      <img class="d-block w-100" src=img/slider/pionnen.jpg alt="Bordspel">
    </div>
    <div class="carousel-item">
      <img class="d-block w-100" src=img/slider/bastion.jpg alt="Bordspel">
    </div>
    <div class="carousel-item">
      <img class="d-block w-100" src=img/slider/biljart.jpg alt="Spelkamer">
    </div>
    <div class="carousel-item">
      <img class="d-block w-100" src=img/slider/schaak_hand.jpg alt="Schaakspel">
    </div>
    <div class="carousel-item">
      <img class="d-block w-100" src=img/slider/fake_gamers.jpg alt="Fake gamers">
    </div>
    <div class="carousel-item">
      <img class="d-block w-100" src=img/slider/spaceboard.jpg alt="Bordspel">
    </div>
    <div class="carousel-item">
      <img class="d-block w-100" src=img/slider/blood_rage.jpg alt="Bordspel">
    </div>
    <!-- <div class="carousel-item">
      <img class="d-block w-100" src=img/slider/d20_dobbelstenen.jpg alt="Dobbelstenen">
    </div> -->

  </div>
  <a class="carousel-control-prev" href="#carouselExampleControls" role="button" data-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="sr-only">Previous</span>
  </a>
  <a class="carousel-control-next" href="#carouselExampleControls" role="button" data-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="sr-only">Next</span>
  </a>
</div>
<?php
        include "footer.php";
        ?>

    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.6/umd/popper.min.js" integrity="sha384-wHAiFfRlMFy6i5SRaxvfOCifBUQy1xHdJ/yoi7FRNXMRBu5WHdZYu1hA6ZObmdut" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/js/bootstrap.min.js" integrity="sha384-B0UglyR+jN6CkvvICOB2joaf5I4l3gm9GU6Hc1og6Ls7i6U/mkkaduKaBhlAXv9k" crossorigin="anonymous"></script>
    <link rel='stylesheet' href='https://use.fontawesome.com/releases/v5.6.3/css/all.css' integrity='sha384-UHRtZLI+pbxtHCWp1t77Bi1L4ZtiqrqD80Kn4Z8NTSRyMA2Fd33n5dQ8lWUE00s/' crossorigin='anonymous'>

    <script src="js/cart.js"></script>
</body>
</html>
