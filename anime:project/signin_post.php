<?php 
session_start();
require 'bdd.php';
$username = htmlspecialchars($_POST['username']);
$email = htmlspecialchars($_POST['email']);
$password = htmlspecialchars($_POST['password']);
$value = false;
$requet = $bdd->prepare('INSERT INTO connexion (username,email,password) VALUES(:username, :email, :password)');
$requet->execute(array(":username" => $username,
                        ":email" => $email,
                        ":password" => password_hash($password,PASSWORD_DEFAULT),));

if ($requet) {
    $value = true;
    echo'Done';
}else{
echo 'failed';
}

if($value = true) {
    header('Location:signin.php');
    
}?>

