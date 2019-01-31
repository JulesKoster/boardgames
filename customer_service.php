     <?php
        if(!isset($_SESSION)) {
            session_start(); 
        }
     ?>
<!doctype html>
    <html lang="en">
      <head>
        <title>Klantenservice</title>
        <!-- Required meta tags -->
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <!-- Custom CSS -->
        <link rel="stylesheet" type="text/css" href="css/stylejules.css">
        <!-- Bootstrap CSS -->
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/css/bootstrap.min.css" integrity="sha384-GJzZqFGwb1QTTN6wy59ffF1BuGJpLSa9DkKMp0DgiMDm4iYMj70gZWKYbI706tWS" crossorigin="anonymous">
             
        <!-- Optional JavaScript -->
        
        <!-- jQuery first, then Popper.js, then Bootstrap JS -->
        <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.6/umd/popper.min.js" integrity="sha384-wHAiFfRlMFy6i5SRaxvfOCifBUQy1xHdJ/yoi7FRNXMRBu5WHdZYu1hA6ZOblgut" crossorigin="anonymous"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/js/bootstrap.min.js" integrity="sha384-B0UglyR+jN6CkvvICOB2joaf5I4l3gm9GU6Hc1og6Ls7i6U/mkkaduKaBhlAXv9k" crossorigin="anonymous"></script>
        <link rel="stylesheet" type="text/css" href="css/form.css">
    </head>
    <?php
        include 'nav_header.php';
    ?>

<!-- Customer Service -->
<div class="container borderform my-5"> 
    <div class="row justify-content-center m-lg-4 m-sm-1">
        <div class="col-md-6 col-sm-12">            
          <h5 ><p class="mt-5" style="color:#70CB63; font-weight:800;">Neem gerust contact op, wij helpen je graag</p></h5>
          <h2><a href="076-1234567"></a><span>076-1234567</span></h2>
        </div> 
        <div class="col-3 d-none d-sm-block">
            <img src="img/klantenservice.jpg" class="img-fluid" alt="Klantenservice"> 
        </div>
        <div class="col">
    </div>


<div class="container">
    <div class="row">
        <div class="col-lg-6 col-sm-12">
        <ul class="list-group list-group-flush">
        <li class="list-group-item list-group-item-warning "><a href="#">VEEL GESTELDE VRAGEN </a>
            <li class="list-group-item"><a href="#">Wat zijn de levertijden? </a>
            <li class="list-group-item"><a href="#">Heb ik garantie? </a>
            <li class="list-group-item"><a href="#">Rekenen jullie verzendkosten? </a>
            <li class="list-group-item"><a href="#">Hoe kan ik iets retourneren? </a>
            <li class="list-group-item"><a href="#">Kan ik ook iets afhalen? </a>
        </ul>    
        </div>
        <!-- 3 of 3 -->
    <div class="col-lg-6 col-sm-12">
        <ul class="list-group list-group-flush text-right mt-sm-2">
                <li class="list-group-item"><a href="https://www.facebook.com">Stel een vraag via Facebook <img src="img/icons/if_2018_social_media_popular_app_logo_facebook_3225194.png" width="32" height="32"></a></li>
                <li class="list-group-item"><a href="https://www.twitter.com">Stel een vraag via Twitter <img src="img/icons/if_2018_social_media_popular_app_logo_twitter_3225183.png" width="32" height="32"></a></li>
                <li class="list-group-item"><a href="mailto:klantenservice@board.kopp.es">Klantenservice@board.kopp.es <img src="img/icons/iconfinder_Rounded-29_2024646.png" width="32" height="32"></a></li></li>
            </ul>    
        </div>
 
        </div>
        </div>   

</div>
</div>
<!-- Customer Service -->
</body>
</html>

<?php
include 'footer.php'
?>
