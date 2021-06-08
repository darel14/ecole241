<?php 
session_start();
require 'bdd.php';
$username = htmlspecialchars($_POST['username']);
$email = htmlspecialchars($_POST['email']);
$password = htmlspecialchars($_POST['password']);
$requet = $bdd->prepare('INSERT INTO connexion (username,email,password) VALUES(:username, :email, :password)');
$requet->execute(array(":username" => $username,
                        ":email" => $email,
                        ":password" => password_hash($password,PASSWORD_DEFAULT),));
header('Location:login.php')

?>