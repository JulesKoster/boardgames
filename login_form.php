<?php
include 'nav_header.php';
?>

<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>Login</title>
        <link rel="stylesheet" type="text/css" href="css/stylejules.css">
    </head>
    <body>
        <!-- <div class="form-wrapper">
            <div class="contact-form">
            <h1>Login</h1>
            <form action="login.php" method="post">
            <label for="useremail">Username</label>
            <input type="text" id="userEmail" name="userEmail" placeholder="Enter your E-mail"><br>
            <label for="password">Password</label>
            <input type="password" id="password" name="password" placeholder="Enter your password"><br>
            <button type="submit" class="login" name="login" value="Login">Login</button>
            </form>
            </div>  
        </div>    -->

    <!-- Login Form -->    
    <div class="container borderform">
        <div class="row justify-content-center">
            <div class="col-xl-6">
                <form action="login.php" method="post">
                <div class="form-group mb-0">
                    <label for="InputEmail1"></label>
                    <div class="input-group">
                        <div class="input-group-prepend"> 
                            <span class="input-group-text" id="inputGroupPrepend"><i class="fas fa-envelope"></i></span>   
                        </div> 
                        <input type="email" class="form-control" id="email" name="email" aria-describedby="emailInput" placeholder="Voer hier uw e-mail adres in" title="Voer dit veld in" required autofocus>            
                    </div>
                </div>
                    <div class="form-group">
                        <label for="Inputpassword1"></label> 
                        <div class="input-group">
                            <div class="input-group-prepend"> 
                            <span class="input-group-text" id="inputGroupPrepend"><i class="fas fa-key"></i></span> 
                            </div>  
                        <input type="password" class="form-control" id="password" name="password" aria-describedby="passwordInput" placeholder="Voer hier uw wachtwoord in" pattern=".{8,}" title="Minimaal 8 tekens" required>
                        </div>
                        <a href="#" class="btn btn-link btn-fill">Wachtwoord vergeten?</a>
                    </div>
                        <button type="submit" name="login" value="Login" class="btn btn-dark">Login</button>
                </form>
            </div>                     
            </div>
        </div>
    </div>
    </div>
    <!-- Login Form -->




<?php
include 'footer.php'
?>
</body>
</html>
