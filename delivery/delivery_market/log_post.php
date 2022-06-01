<?php
session_start();
require_once 'bd.php';

if(isset($_POST['username']) && isset($_POST['password'])) {
    $username = htmlspecialchars($_POST['username']);
    $password = htmlspecialchars($_POST['password']);
    $value = false;


    if(empty($_POST['username']) || empty($_POST['password'])) {
        echo 'veuillez remplir tout les champs !';
    }
    
    $request = $bdd->prepare("SELECT pseudo, password_bd FROM log");
    $request->execute();
    
    while ($rs = $request->fetch()) {
        if ( $rs['pseudo'] == $_POST['username'] AND password_verify($_POST['password'], $rs['password_bd'])) {
            $value = true;
            $_SESSION['username'] = $_POST['username'];
            $_SESSION['id'] = $rs['id'];
        }
    }

    if($value == true) {
        header('Location:index-2.php');
    } else {
        echo 'failed';
    }

}
?>