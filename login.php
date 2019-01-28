<?php
//login.php


// /**
//  * Start the session.
//  */
if(!isset($_SESSION)) {
    session_start(); 
}

/**
 * Include ircmaxell's password_compat library.
 */
require 'lib/password.php';

/**
 * Include our MySQL connection.
 */
require 'connect.php';

$errorMessage;
$showLoginError = false;
$passwordMessage;
$showPasswordMessage = false;


//If the POST var "login" exists (our submit button), then we can
//assume that the user has submitted the login form.
if(isset($_POST['login'])){
    
    //Retrieve the field values from our login form.
    $userEmail = !empty($_POST['userEmail']) ? trim($_POST['userEmail']) : null;
    $passwordAttempt = !empty($_POST['password']) ? trim($_POST['password']) : null;

    //Retrieve the user account information for the given user email.

    $sql = "SELECT user_id, user_email, user_password, role FROM users WHERE user_email = :user_email";

    $stmt = $pdo->prepare($sql);
 
    
    //Bind value.
    $stmt->bindValue(':user_email', $userEmail);

    //Execute.
    $stmt->execute();
    
    //Fetch row.
    $user = $stmt->fetch(PDO::FETCH_ASSOC);
    
    //If $row is FALSE.
    if($user === false){
        //Could not find a user with that user email!
        //PS: You might want to handle this error in a more user-friendly manner!
        $errorMessage = 'Onjuiste email/wachtwoord combinatie!';
        $showLoginError = true;   
        // header ('Refresh: 1 ; url=login_form.php');
                
    }else {
        //User account found. Check to see if the given password matches the
        //password hash that we stored in our users table.

        //Compare the passwords.
        $validPassword = password_verify($passwordAttempt, $user['user_password']);
        
        //If $validPassword is TRUE, the login has been successful.
        if($validPassword ){
            
            //Provide the user with a login session.
            $_SESSION['user_id'] = $user['user_id'];
            $_SESSION['logged_in'] = time();
            $_SESSION['user_email'] = $user['user_email'];
            $_SESSION['role'] = $user['role'];
           
            //Redirect to our protected page, which we called home.php
            header('Location: user.home.php');
           // exit;
            
        } else{
            //$validPassword was FALSE. Passwords do not match.
            // die('Incorrect username / password combination!, Please try Again');
            $passwordMessage = 'Onjuiste email/wachtwoord combinatie!';
            $showPasswordMessage = true; 
            header ('Refresh: 1 ; url=login_form.php'); 
        }
    }
  
}
// die('Incorrect username / password combination!'); To implement: kill connection 24/1-2019
 
?>