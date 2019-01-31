<?php
  if(!isset($_SESSION)) {
    session_start(); 
}
?>
<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>Inloggen</title>
        <link rel="stylesheet" type="text/css" href="css/form.css">
        <?php
        include 'nav_header.php';  
        include 'login.php';              
        ?>
    </head>    

    <!-- Login Form -->    
    <div class="container borderform my-5">
        <div class="row justify-content-center ">
            <div class="col-xl-6 m-3 px-2 formContainer">
                <form action="login.php" method="post">
                <div class="form-group mb-0 ">
                    <label for="InputEmail1"></label>
                    <div class="input-group col">
                        <div class="input-group-prepend"> 
                            <span class="input-group-text" id="inputGroupPrepend"><i class="fas fa-envelope"></i></span>   
                        </div> 
                        <input type="text" class="form-control shadow-none" id="userEmail" name="userEmail" aria-describedby="emailInput" placeholder="Voer hier je e-mail adres in" title="Voer dit veld in" required autofocus>            
                    </div>
                </div>
                    <div class="form-group">
                        <label for="Inputpassword1"></label> 
                        <div class="input-group col">
                            <div class="input-group-prepend"> 
                            <span class="input-group-text" id="inputGroupPrepend"><i class="fas fa-key"></i></span> 
                            </div>  
                        <input type="password" class="form-control shadow-none" id="password" name="password" aria-describedby="passwordInput" placeholder="Voer je wachtwoord in in" required>
                        </div>
                        <br>
                        <a href="#" data-target="#pwdModal" data-toggle="modal">Wachtwoord vergeten?</a>
                    </div>
                        <button type="submit" name="login" value="Login" class="btn btn-outline-secondary shadow-none mb-2">Inloggen</button>
                        <?php
                        // if ($showLoginError) {
                        //     echo ($errorMessage);
                        // }
                        // if ($showPasswordMessage) {
                        //    echo ($passwordMessage);
                        // }                       
                        ?>
                        <div><a href="register_form.php">Nog geen account? Maak hier een account aan!</a>
                  </form>
            </div>                     
            </div>
        </div>
    </div>
    </div>
    <!-- Login Form -->

    <!-- Modal Password Reset -->
<div id="pwdModal" class="modal fade" tabindex="-1" role="dialog" aria-hidden="true">
  <div class="modal-dialog ">
  <div class="modal-content">
      <div class="modal-header">
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
                                        <input class="form-control shadow-none input-lg" placeholder="E-mailadres" name="userEmail" type="text">
                                    </div>
                                        <div class="form-group">
                                            <input type="password" class="form-control shadow-none input-lg" id="password" name="userPassword" aria-describedby="passwordInput" placeholder="Voer hier uw wachtwoord in" required>
                                        </div>  
                                    <div class="form-group">
                                    <input type="password" class="form-control shadow-none input-lg" id="confirmPassword" name="userConfirmPassword" aria-describedby="passwordInput" placeholder="Herhaal uw wachtwoord" required>
                                    </div>
                                    <input class="btn btn-outline-secondary btn-lg btn-block shadow-none"  id="newPassword" name="newPassword" value="Verander Wachtwoord" type="submit">
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
                    </div>
                    <br>
<!-- Modal Password Reset -->
<?php
include 'footer.php';
?>
</body>
</html>
