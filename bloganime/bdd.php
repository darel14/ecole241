<?php

$hname= "localhost";
$mpasse= "root";
$pass= '';
$dname= "anime";
try{
$log = new PDO('mysql:host:localhost;dbname=anime', $mpasse,$pass);
$log->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);
} catch(PDOException $e) {
    echo "connexion failed :". $e->getMessage();
}
?>
