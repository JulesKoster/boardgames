<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>Login</title>
        <link rel="stylesheet" type="text/css" href="css/stylejules.css">
        <?php include "nav_header.php" ?>
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
                        <a href="#" class="btn btn-link btn-fill" data-target="#pwdModal" data-toggle="modal">Wachtwoord vergeten?</a>
                    </div>
                        <button type="submit" name="login" value="Login" class="btn btn-dark">Login</button>
                </form>
            </div>                     
            </div>
        </div>
    </div>
    </div>
    <!-- Login Form -->

    <!-- Modal Password Reset -->
<div id="pwdModal" class="modal fade" tabindex="-1" role="dialog" aria-hidden="true">
  <div class="modal-dialog">
  <div class="modal-content">
      <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
          <h1 class="text-center">Wachtwoord herstellen</h1>
      </div>
      <div class="modal-body">
          <div class="col-md-12">
                <div class="panel panel-default">
                    <div class="panel-body">
                        <div class="text-center">
                          
                          <p>Wachtwoord vergeten? Stel hier een nieuw wachtwoord in.</p>
                            <div class="panel-body">
                                <form action="forgot_password_control.php" method="post">
                                    <div class="form-group">
                                        <input class="form-control input-lg" placeholder="E-mailadres" name="email" type="text">
                                    </div>
                                        <div class="form-group">
                                            <input type="password" class="form-control input-lg" id="password" name="password" aria-describedby="passwordInput" placeholder="Voer hier uw wachtwoord in" pattern=".{8,}" title="Minimaal 8 tekens" required>
                                        </div>  
                                    <div class="form-group">
                                    <input type="password" class="form-control input-lg" id="confirmPassword" name="password" aria-describedby="passwordInput" placeholder="Herhaal uw wachtwoord" pattern=".{8,}" title="Minimaal 8 tekens" required>
                                    </div>
                                    <input class="btn btn-lg btn-dark btn-block"  id="changePassword" name="changePassword" value="Verander Wachtwoord" type="submit">
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
      </div>
      <div class="modal-footer">
          <div class="col-md-12">
          <button class="btn" data-dismiss="modal" aria-hidden="true">Sluit</button>
		  </div>	
      </div>
  </div>
  </div>
</div>
<!-- Modal Password Reset -->




<?php
include 'footer.php'
?>
</body>
</html>
