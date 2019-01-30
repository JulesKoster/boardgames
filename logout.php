<?php
if(!isset($_SESSION)) {
    session_start(); 
    session_destroy();    
}
?>

<!doctype html>
    <html lang="en">
      <head>
        <title>Uitloggen</title>
        <!-- Required meta tags -->
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <!-- Custom CSS -->
        <link rel="stylesheet" type="text/css" href="css/stylejules.css">
        <!-- Bootstrap CSS -->
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/css/bootstrap.min.css" integrity="sha384-GJzZqFGwb1QTTN6wy59ffF1BuGJpLSa9DkKMp0DgiMDm4iYMj70gZWKYbI706tWS" crossorigin="anonymous">
        <?php
            include 'nav_header.php';           
        ?>
    </head>
        <div class="container"> 
            <div class="row justify-content-center m-5">
                <div class="col-6 borderform">                    
                           <!-- <i class="fas fa-sign-out-alt"></i>                           -->
                        <?php                         
                        echo '<h1>Je bent nu uitgelogd</h1>';
                        ?>
                    <br>
                    <br>
                    <a href="index.php"><button class="btn btn-dark">Klik hier om terug te gaan</button></a>
                </div>
                <div class="col-6">  
                <img src="img/logout.jpg" class="img-fluid" alt="logout">
                </div>   
            </div> 
        </div>               
           


     <!-- Optional JavaScript -->
        <script src="js/passwordverify.js"></script>
        <!-- jQuery first, then Popper.js, then Bootstrap JS -->
        <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.6/umd/popper.min.js" integrity="sha384-wHAiFfRlMFy6i5SRaxvfOCifBUQy1xHdJ/yoi7FRNXMRBu5WHdZYu1hA6ZOblgut" crossorigin="anonymous"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/js/bootstrap.min.js" integrity="sha384-B0UglyR+jN6CkvvICOB2joaf5I4l3gm9GU6Hc1og6Ls7i6U/mkkaduKaBhlAXv9k" crossorigin="anonymous"></script>
        
    
<?php
include 'footer.php'
?>

</body>
</html>
