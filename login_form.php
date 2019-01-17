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

        <!-- <form>
        
            <div class="form-group row">
                <label for="inputEmail3" class="col-sm-2 col-form-label">Email</label>
                <div class="col-sm-10">
                <input type="email" class="form-control" id="inputEmail3" placeholder="Email">
                </div>
            </div>
            <div class="form-group row">
                <label for="inputPassword3" class="col-sm-2 col-form-label">Password</label>
                <div class="col-sm-10">
                <input type="password" class="form-control" id="inputPassword3" placeholder="Password">
                </div>
            </div>
            <div class="form-group row">
                <div class="col-sm-10">
                <button type="submit" class="btn btn-primary">Sign in</button>
                </div>
            </div>
            </form> -->
        





    <!-- Login Form -->    
    <div class="container borderform">
        <div class="row justify-content-center">
            <div class="col-xl-6">
                <form action="login.php" method="post">
                <div class="form-group mb-0">
                    <label for="InputEmail1"></label>
                    <div class="input-group col">
                        <div class="input-group-prepend"> 
                            <span class="input-group-text" id="inputGroupPrepend"><i class="fas fa-envelope"></i></span>   
                        </div> 
                        <input type="text" class="form-control" id="userEmail" name="userEmail" aria-describedby="emailInput" placeholder="Voer hier uw e-mail adres in" title="Voer dit veld in" required autofocus>            
                    </div>
                </div>
                    <div class="form-group">
                        <label for="Inputpassword1"></label> 
                        <div class="input-group col">
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
