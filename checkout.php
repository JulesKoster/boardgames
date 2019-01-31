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
    <link rel="stylesheet" href="css/form.css"> 
    <title>check out</title>
  
<?php
    include "connect.php";
    include "nav_header.php";
        $profile = $_SESSION['user_id'];
        $sql = "SELECT * FROM users WHERE user_id = '$profile'";
        $data = $pdo->query($sql); 
        foreach ($data as $row){
        ?>
    <div class='container borderform my-5'>
    <div class='container-fluid'>
        <div class='row mt-3'>
            <div class='col-xl-12 text-center'>
                <h1>Controleer je gegevens</h1>
            </div>
        </div>
        <div class='row my-1'>
        <div class='col-xl-3'></div>
            <div class='col-xl-3'>
                <label for="first_name">Voornaam: </label>
                <form class="form-group" action="checkout_script.php" method="POST" autocomplete=off>
                <input type="text" class="form-control" name="first_name" id="first_name" value="<?php echo $row['user_first_name'] ?>" autofocus required>
                <label for="middle_name">Tussenvoegsel: </label>
                <input type="text" class="form-control" name="middle_name" id="middle_name" value="<?php echo $row['user_middle_name'] ?>">
                <label for="last_name">Achternaam: </label>
                <input type="text" class="form-control" name="last_name" id="last_name" value="<?php echo $row['user_last_name'] ?>" required>
                <label for="phone">Telefoonnummer: </label>
                <input type="tel" class="form-control" name="phone" id="phone" value="<?php echo $row['user_phone'] ?>" required>
            </div>
            <div class='col-xl-3'>
                <label for="place">Plaatsnaam: </label>
                <input type="text" class="form-control" name="place" id="place" value="<?php echo $row['user_place'] ?>" required>
                <label for="streetname">Straatnaam: </label>
                <input type="text" class="form-control" name="streetname" id="streetname" value="<?php echo $row['user_streetname'] ?>" required>
                <label for="housenumber">Huisnummer: </label>
                <input type="text" class="form-control" name="housenumber" id="housenumber" value="<?php echo $row['user_housenumber'] ?>" required>
                <label for="number_suffix">Toevoeging: </label>
                <input type="text" class="form-control" name="number_suffix" id="number_suffix" value="<?php echo $row['user_number_suffix'] ?>">
                <label for="zipcode">Postcode: </label>
                <input type="text" class="form-control" name="zipcode" id="zipcode" value="<?php echo $row['user_zipcode'] ?>" pattern="[1-9][0-9]{3}[A-Za-z]{2}" title="Graag vier cijfers met twee letters invullen (1234AB)"  required>
            </div>
        </div>
        <div class='row my-4'>
            <div class='col-xl-12 text-center'>
                <button id="formbutton" type="submit" name="changeInfo" class="btn btn-secondary">Betalen</button>
            </div>
        </div>
    </div>   
    </div>
<?php
        }
 include "footer.php"
?>