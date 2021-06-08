<?php 
session_start();
?>

<!DOCTYPE html>
<html>
    <div class="general-nav">
        <head>
            <meta charset="utf-8">
            <link rel="stylesheet" href="anime.blog.css"/>
            <link rel="stylesheet" media="screen and (max-width: 1000px)" href="low.blog.css"/>


            <title>Anime.blog/login</title>
         </head>
    <div>

<body>
    <div id="titre">
        <h1>Anime.blog/login</h1>
        <div class="log">
            <a href="http://localhost/bloganime/login.php">Connection -</a>
            <a href="http://localhost/bloganime/signin.php">Inscription</a>
        </div>
    </div>

    <div class="container-logo">
    <img src="isset/logo.png" class="logo"/>

    </div>
    <div id="connexion">
        <div class="contain">
            <form action="login_post.php" method="POST" class="form2">
                <label for="username" class="label2">USERNAME</label> <input type="text" name="username" id="username" class="imput1"/>
                <label for="password" class="label2">PASSWORD</label> <input type="password" name="password" id="password" class="imput1"/>
                <input type="submit" value="connection" class="buton"/>
                
            </form>
        </div>
     </div>
<?php 
?>
</body>
</html>