<?php
// include 'nav_header.php';

session_start();

    if(isset($_SESSION['role'])&& $_SESSION['role']=='admin'){
        header('location: admin.home.php');
    }else{


echo("Welkom gebruiker");

// include 'footer.php';
    }

//breaks down after including nav_header.php and footer.php internernal server error
?>

