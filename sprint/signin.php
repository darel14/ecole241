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
          <div class="log">
            <a href="http://localhost/bloganime/login.php">Connection -</a>
            <a href="http://localhost/bloganime/signin.php">Inscription</a>
        </div>
    </div>

    <div class="container-logo">
    <img src="isset/logo.png" class="logo"/>

    </div>

    <div id="inscription">
    <div class="contain1">
    <form action="signin_post.php" method="POST" class="form2">
        <label for="username" class="label1">USERNAME</label> <input type="text" name="username" id="username" class="imput1"/>
        <label for="email" class="label1">EMAIL</label> <input type="text" name="email" id="email" class="imput1"/>
        <label for="password" class="label1">PASSWORD</label> <input type="password" name="password" id="password" class="imput1"/>
        <input type="submit" value="Inscription" class="buton2"/>
      
        </form>
     </div>
</body>
</html>