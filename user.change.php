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
    <title>Wijzig je persoonlijke gegevens</title>
</head>    

    <?php
        include "nav_header.php";
        include "connect.php";
        $successMessage;
        $showsuccessMessage = false;

        if (empty($_SESSION['user_id'])) {
        }
        $profile = $_SESSION['user_id'];
        $sql = "SELECT * FROM users WHERE user_id = '$profile'";
        $data = $pdo->query($sql); 
        foreach ($data as $row){
            ?>
    <div class='container borderform my-5'>
        <div class='row mt-3'>
            <div class='col-xl-12 text-center'>
                <h1>Wijzig je persoonlijke gegevens</h1>
            </div>
        </div>
        <div class='row my-1'>
            <div class='col-xl-3'></div>
            <div class='col-xl-3'>
                <label for="first_name">Voornaam: </label>
                <form class="form-group" action="change_personal_info.php" method="POST" autocomplete=off>
                <input type="text" class="form-control shadow-none" name="first_name" id="first_name" value="<?php echo $row['user_first_name'] ?>" autofocus>
                <label for="middle_name">Tussenvoegsel: </label>
                <input type="text" class="form-control shadow-none" name="middle_name" id="middle_name" value="<?php echo $row['user_middle_name'] ?>">
                <label for="last_name">Achternaam: </label>
                <input type="text" class="form-control shadow-none" name="last_name" id="last_name" value="<?php echo $row['user_last_name'] ?>">
                <label for="phone">Telefoonnummer: </label>
                <input type="tel" class="form-control shadow-none" name="phone" id="phone" value="<?php echo $row['user_phone'] ?>">
            </div>
            <div class='col-xl-3'>
                <label for="place">Plaatsnaam: </label>
                <input type="text" class="form-control shadow-none" name="place" id="place" value="<?php echo $row['user_place'] ?>">
                <label for="streetname">Straatnaam: </label>
                <input type="text" class="form-control shadow-none" name="streetname" id="streetname" value="<?php echo $row['user_streetname'] ?>">
                <label for="housenumber">Huisnummer: </label>
                <input type="text" class="form-control shadow-none" name="housenumber" id="housenumber" value="<?php echo $row['user_housenumber'] ?>">
                <label for="number_suffix">Toevoeging: </label>
                <input type="text" class="form-control shadow-none" name="number_suffix" id="number_suffix" value="<?php echo $row['user_number_suffix'] ?>">
                <label for="zipcode">Postcode: </label>
                <input type="text" class="form-control shadow-none" name="zipcode" id="zipcode" value="<?php echo $row['user_zipcode'] ?>" pattern="[1-9][0-9]{3}[A-Za-z]{2}" title="Graag vier cijfers met twee letters invullen (1234AB)">
            </div>
        </div>
        <div class='row my-4'>
            <div class='col-xl-12 text-center'>
                <button id="formbutton" type="submit" name="changeInfo" class="btn btn-secondary">Wijzigen</button>   
                <?php 
                if(isset($_POST['changeInfo']))
                $successMessage = 'Uw persoonlijke gegevens zijn gewijzigd.';
                $showsuccessMessage = true;

                ?>             
            </div>
        </div>
    </div>            
    </body>
    </html> 
   
             
              
             
          

     <!-- Optional JavaScript -->
     <script src="js/passwordverify.js"></script>
        <!-- jQuery first, then Popper.js, then Bootstrap JS -->
        <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.6/umd/popper.min.js" integrity="sha384-wHAiFfRlMFy6i5SRaxvfOCifBUQy1xHdJ/yoi7FRNXMRBu5WHdZYu1hA6ZOblgut" crossorigin="anonymous"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/js/bootstrap.min.js" integrity="sha384-B0UglyR+jN6CkvvICOB2joaf5I4l3gm9GU6Hc1og6Ls7i6U/mkkaduKaBhlAXv9k" crossorigin="anonymous"></script>
  
<?php   
    include "footer.php";
        }
?>