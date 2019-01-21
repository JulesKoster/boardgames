<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/css/bootstrap.min.css" integrity="sha384-GJzZqFGwb1QTTN6wy59ffF1BuGJpLSa9DkKMp0DgiMDm4iYMj70gZWKYbI706tWS" crossorigin="anonymous">
    <title>User Page</title>
<?php include 'nav_header.php';

    if(isset($_SESSION['role'])&& $_SESSION['role']=='admin'){
        header('location: admin.home.php');
    }else{
        require 'connect.php';
        $profile = $_SESSION['user_id'];
        $sql = "SELECT * FROM users WHERE user_id = '$profile'";
        $data = $pdo->query($sql); 
        foreach ($data as $row){
            echo '<div class="container ">
            <div class=" row justify-content-center mt-3">
            <h1 class="text-align-center">welkom ' . (empty($row["user_first_name"])?"":$row['user_first_name']) . (empty($row["user_middle_name"])?"":' ' . $row['user_middle_name']) . (empty($row["user_streetname"])?"":' ' . $row['user_last_name']) . '</h1>
            </div>
            <div class=" row justify-content-center mt-3">
            <div class="col-xl-6 border rounded">
            <h2>Persoonlijke gegevens:</h2>
            Mailadres: ' . $row['user_email'] . '<br>'
            .(empty($row["user_place"])?"":'Plaatsnaam: ' . $row['user_place'] . '<br>')
            .(empty($row["user_streetname"])?"":'Straatnaam: ' . $row['user_streetname'] . '<br>')
            .(empty($row["user_housenumber"])?"":'huisnummer: ' . $row['user_housenumber']) . (empty($row["user_number_suffix"])?"":' ' . $row['user_number_suffix'] . '<br>')
            .(empty($row["user_zipcode"])?"":'Postcode: ' . $row['user_zipcode'] . '<br>')
            .(empty($row["user_phone"])?"":'telefoonnummer: ' . $row['user_phone'] . '<br>').'
            <a class="btn btn-dark m-2" href="#">Wijzig persoonlijke gegevens</a>
            </div>
            </div>';
            
        }
    }
    include "footer.php"
?>