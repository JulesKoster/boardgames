<?php
include 'connect.php';
session_start();
    $user_first_name = $_POST['first_name'];
    $user_middle_name = $_POST['middle_name'];
    $user_last_name = $_POST['last_name'];
    $user_place = $_POST['place'];
    $user_streetname = $_POST['streetname'];
    $user_housenumber = $_POST['housenumber'];
    $user_number_suffix = $_POST['number_suffix'];
    $user_zipcode = $_POST['zipcode'];
    $user_phone = $_POST['phone'];
    $user_email = $_SESSION['user_email'];

    try {
        $sql = "UPDATE users SET user_first_name = '$user_first_name', user_middle_name = '$user_middle_name', user_last_name = '$user_last_name', 
        user_place = '$user_place', user_streetname ='$user_streetname', user_housenumber ='$user_housenumber', user_number_suffix ='$user_number_suffix', 
        user_zipcode = '$user_zipcode', user_phone = '$user_phone' WHERE user_email = '$user_email'";
        // use exec() because no results are returned
        $pdo->exec($sql);
        echo "Gegevens gewijzigd!";
        header('Location: user.home.php');
    }
catch(PDOException $e)
    {
        echo $sql . "<br>" . $e->getMessage();
    }


?>