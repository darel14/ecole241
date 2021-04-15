<?php 
session_start();
$bdd = new PDO('mysql:host=localhost;dbname=anime', 'root', '');
?>

<?php 
// initialisation des variables
if(isset($_POST['username']) && isset($_POST['password'])) {
    $username = htmlspecialchars($_POST['username']);
    $password = htmlspecialchars($_POST['password']);
}
// verification des identifiants entré par l'utilisateur et ceux present en bdd
$request = $bdd->prepare("SELECT * FROM connexion WHERE username = :username AND password= :password ");
$request->execute([
    'username' => $username,
    'password' => $password,
]);
$resultat = $request->fetch(PDO::FETCH_ASSOC);
var_dump($resultat);

if (!$resultat) {
    echo 'Erreur !';
} if(empty($_POST['username'])) {
    echo 'verifier le mot de passe ou le username';
}

if(empty($_POST['password'])) {
    echo 'verifier le mot de passe ou le username';
} else {
    if($request) {
        session_start();
        $_SESSION['id'] = $resultat['id'];
        $_SESSION['username'] = $username;
        header('Location:index.php');
    } 
}
?>