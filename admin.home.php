<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/css/bootstrap.min.css" integrity="sha384-GJzZqFGwb1QTTN6wy59ffF1BuGJpLSa9DkKMp0DgiMDm4iYMj70gZWKYbI706tWS" crossorigin="anonymous">
    <title>Admin Page</title>
    <?php
    if(!isset($_SESSION)) {
        session_start(); 
    }
    include "nav_header.php"; 
           
?> 
    <div class="container ">
        <div class=" row justify-content-center mt-3">
            <?php echo'<h1 class="text-align-center">welkom ' . $_SESSION['user_email'] . '</h1>'; ?>
        </div>
        <div class=" row justify-content-center mt-3">
            <div class="col-xl-6 border rounded">
                <p class="m-2">Met deze knop kunt u nieuwe producten toevoegen</p>
                <a class='btn btn-dark m-2' href='add_product_form.php'> Producten toevoegen </a>
                <p class="m-2">Met deze knop kunt u producten verwijderen</p>
                <a class='btn btn-dark m-2' href='delete_product_form.php'> Producten verwijderen </a>
                <p class="m-2">Met deze knop kunt u producten in de uit verkoop zetten met een nieuwe prijs</p>
                <a class='btn btn-dark m-2' href='#'> sales aanpassen </a>
                <p class="m-2">Met deze knop kunt u de rollen van de gebruikers aanpassen</p>
                <a class='btn btn-dark m-2' href='#'> rollen aanpassen </a>
            
            </div>
        </div>
    </div>

        
    <?php include "footer.php" ?>
</body>
</html>