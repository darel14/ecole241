<?php 
session_start();
?>

<!DOCTYPE html>
<html>
    <div class="general-nav">
        <head>
            <meta charset="utf-8">
            <link rel="stylesheet" href="admin-log.css"/>


            <title>Administrator</title>
         </head>
    <div>

<body>
    <div id="titre">
        <h1>Administrator</h1>
        <div id="erreur2">
            <p id="wrong">Vueillez remplir tout les champs !</p>
            </div>
    <!--</div>-->
    <div class="container-logo">
    <img src="isset/admin.png" class="logo"/>

    </div>
    <div id="connexion">
        <div class="contain">
            <form action="admin-log_post.php" method="POST" class="form2">
            <label for="username" class="label2">USERNAME</label> <input type="text" name="username" id="username" class="imput1"/>
                <label for="password" class="label2">PASSWORD</label> <input type="password" name="password" id="password" class="imput1"/>
                <input type="submit" value="connection" class="buton" id="send"/>
                
            </form>
        </div>
    </div>


</body>
</html>