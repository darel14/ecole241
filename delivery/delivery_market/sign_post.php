<?php
require_once 'bd.php';

$email = htmlspecialchars($_POST['email_address2']);
$pseudo = htmlspecialchars($_POST['username']);
$psw = htmlspecialchars($_POST['password']);
$value = false;

if(empty($pseudo) || empty($psw)) {
    echo 'Veuillez remplir tout les champs !';
    $value = false;
}

$request = $bdd->prepare('INSERT INTO log (email,pseudo,password_bd) VALUES(:email,:pseudo,:password_bd)');
$request->execute(array(":email" => $email,
                        ":pseudo" => $pseudo,
                        ":password_bd" => password_hash($psw,PASSWORD_DEFAULT),
));

if($request) {
   $value = true;
   echo 'valide';
} else{
    echo 'wrong';
}

if($value = true) {
    header('Location:http://localhost/delivery/delivery_market/form_log.html');
}

?>