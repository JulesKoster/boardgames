<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/css/bootstrap.min.css" integrity="sha384-GJzZqFGwb1QTTN6wy59ffF1BuGJpLSa9DkKMp0DgiMDm4iYMj70gZWKYbI706tWS" crossorigin="anonymous">

    <title>Forgot Password</title>
  </head>
  <body>
    <h1>Test</h1>
    
    <div class="container">
  <a href="#" class="btn btn-link btn-fill" data-target="#pwdModal" data-toggle="modal">Wachtwoord vergeten?</a>
</div>

<!--modal-->
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
                                    <input class="btn btn-lg btn-dark btn-block" value="Verander Wachtwoord" type="submit">
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

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.6/umd/popper.min.js" integrity="sha384-wHAiFfRlMFy6i5SRaxvfOCifBUQy1xHdJ/yoi7FRNXMRBu5WHdZYu1hA6ZOblgut" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/js/bootstrap.min.js" integrity="sha384-B0UglyR+jN6CkvvICOB2joaf5I4l3gm9GU6Hc1og6Ls7i6U/mkkaduKaBhlAXv9k" crossorigin="anonymous"></script>
  </body>
</html>








