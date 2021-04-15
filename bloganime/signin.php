<?php session_start() 
?>

<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <link rel="stylesheet" href="anime.blog.css"/>
        <title>Anime.blog/sign in</title>

    </head>

<body>
    <div id="titre">
        <h1>Anime.blog/Sign in</h1>
    </div>

    <div id="inscription">
    <div>
    <form action="signin_post.php" method="POST">
        <label for="username">username</label> : <input type="text" name="username" id="username"/>
        <label for="password">password</label> : <input type="text" name="password" id="password"/>
        <input type="submit" value="Sign in"/>
      
        </form>
     </div>
    
<?php 
$bdd = new PDO('mysql:host=localhost;dbname=anime', 'root', '');


?>
</body>
</html>