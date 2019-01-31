<?php
  if(!isset($_SESSION)) {
    session_start(); 
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/css/bootstrap.min.css" integrity="sha384-GJzZqFGwb1QTTN6wy59ffF1BuGJpLSa9DkKMp0DgiMDm4iYMj70gZWKYbI706tWS" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="css/form.css">
    <title>Persoonlijke pagina</title>
</head>  
      <?php
        include 'nav_header.php';
        require 'connect.php';

        if(!isset($_SESSION['user_id'])){

        ?>
        <br>
        Je bent niet ingelogd. Klik <a href="login_form.php">hier</a> om in te loggen.
        <div style="user-select:none"><br><br><br><br><br><br><br><br><br><br></div>
        <?php

        }else{
                

            $profile = $_SESSION['user_id'];
            $sql = "SELECT * FROM users WHERE user_id = '$profile'";
            $data = $pdo->query($sql); 
            foreach ($data as $row){
                echo '<div class="container borderform my-5 ">
                <div class=" row justify-content-center">
                <div class="col-xl-6 m-3 px-2 formContainer">
                <h1 class="text-align-center">Welkom ' . (empty($row["user_first_name"])?"":$row['user_first_name']) . (empty($row["user_middle_name"])?"":' ' . $row['user_middle_name']) . (empty($row["user_streetname"])?"":' ' . $row['user_last_name']) . '</h1>
                <div class=" row justify-content-center mt-3">
                <div class="col-xl-6 persInfo">
                <h5>PERSOONLIJKE GEGEVENS:</h5>
                Mailadres: ' . $row['user_email'] . '<br>'
                .(empty($row["user_place"])?"":'Plaatsnaam: ' . $row['user_place'] . '<br>')
                .(empty($row["user_streetname"])?"":'Straatnaam: ' . $row['user_streetname'] . '<br>')
                .(empty($row["user_housenumber"])?"":'huisnummer: ' . $row['user_housenumber']) . (empty($row["user_number_suffix"])?"":' ' . $row['user_number_suffix'] . '<br>')
                .(empty($row["user_zipcode"])?"":'Postcode: ' . $row['user_zipcode'] . '<br>')
                .(empty($row["user_phone"])?"":'telefoonnummer: ' . $row['user_phone'] . '<br>').'
                <a href="user.change.php"><button type="button" class="btn btn-outline-secondary shadow-none my-3">Wijzig persoonlijke gegevens</a>
                </div>
                </div>
                </div>
                </div>
                </div>';
                
            }
        }
    

    ?>
   <br>
   <br>
   <br>
   <br>


    <!-- Optional JavaScript -->
        <script src="js/passwordverify.js"></script>
        <!-- jQuery first, then Popper.js, then Bootstrap JS -->
        <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.6/umd/popper.min.js" integrity="sha384-wHAiFfRlMFy6i5SRaxvfOCifBUQy1xHdJ/yoi7FRNXMRBu5WHdZYu1hA6ZOblgut" crossorigin="anonymous"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/js/bootstrap.min.js" integrity="sha384-B0UglyR+jN6CkvvICOB2joaf5I4l3gm9GU6Hc1og6Ls7i6U/mkkaduKaBhlAXv9k" crossorigin="anonymous"></script>
   
<?php   
    include "footer.php";
?>