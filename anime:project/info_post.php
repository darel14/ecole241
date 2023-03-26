<?php 
session_start();

$send= false;
$bdd = new PDO('mysql:host=localhost;dbname=anime', 'root', '');
$username = $_POST['username'];
$email = $_POST['email'];
$message = $_POST['message'];
$req = $bdd->prepare('INSERT INTO info (username,email,message) VALUE(:username,:email,:message)');
$req->execute(array(
    ":username" => $_SESSION['username'],
    ":email" => $email,
    ":message" => $message,

 ));

    if($req){
        $send = true;
        echo 'Okay';
    }

header('location: info.php');
?>