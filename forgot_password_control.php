<?php

require '/lib/password.php';

require 'connect.php';

$passwordMessage;
$showmessage= false;

if(isset($_POST['newPassword'])){
 $email = !empty($_POST['userEmail']) ? trim($_POST['userEmail']) : null;

 $passwordAttempt = !empty($_POST['password']) ? trim($_POST['password']) : null;

  $sql = "SELECT user_email, user_password AS num FROM users WHERE user_email = :user_email";
  $stmt = $pdo->prepare($sql); 

 $stmt->bindValue(':user_email', $userEmail);
 
 $stmt->execute();  
 
 $user = $stmt->fetch(PDO::FETCH_ASSOC);

 $validEmail = $user; // correct? how to do correct check

if($validEmail === false){
        //Could not find a user with that user email!
        //PS: You might want to handle this error in a more user-friendly manner!
        die('Kan deze gebruiker niet vinden');
}
else {

$passwordHash = password_hash($pass, PASSWORD_BCRYPT, array("cost" => 12));
 
 $sql = "UPDATE  users (user_password) SET (/*:user_email,*/ :user_password) WHERE user_email =$user)";
 $stmt = $pdo->prepare($sql);

 $stmt->bindValue(':user_email',$email);
 $stmt->bindValue(':user_password',$passwordHash)

 $result = $stmt->execute();

 if ($result){
     $passwordMessage = 'Uw wachtwoord is succesvol gewijzigd!';
     $showMessage = true;
    }

}

}

?>