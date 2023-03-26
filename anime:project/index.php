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
            <link rel="icon" type="image/png" sizes="16x16" src="isset/logo.png">

            <title>Anime.blog/login</title>
            <div id="titre">
        <h1 id="effect"></h1>
        <div class="log">
            <a href="http://darel.alwaysdata.net/index.php">Connection -</a>
            <a href="http://darel.alwaysdata.net/signin.php">Inscription</a>
        </div>
    </div>
         </head>
    <div>

<body>
    <div class="container-logo">
    <img src="isset/logo.png" class="logo" id="logo"/>
    </div>

    <div id="erreur">
        <p>Veuillez Remplir tout les champs !</p>
    </div>
    <div id="erreur2">
        <p>Verifiez vos identifiants !</p>
    </div>
            
    <div id="connexion">
        <div class="contain">
        <form action="login_post.php" method="POST" class="form2">
                <label for="username" class="label2">USERNAME</label> <input type="text" name="username" id="user" class="imput1"  maxlength="25"/>
                <label for="password" class="label2">PASSWORD</label> <input type="password" name="password" id="pwd" class="imput1"/>
                <input type="submit" value="connection" class="buton" id="send"/>

            </form>
        </div>
     </div>
     <script src="https://code.jquery.com/jquery-3.6.0.min.js" integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>     <script>
         //erreur d'identifiant en ajax
    $(document).ready(function(){
 
        $("#send").click(function(e){
            e.preventDefault();

     $.post(
         'login_post.php',
         {
             username : $("#user").val(),
             password : $("#pwd").val()
         },

         function(data){

             if(data == 'echec'){

                  $("#erreur2").show();
             }else{
                $("#send").unbind("submit").submit();
             }
      
         },
         'text'
      );
 });
});
     </script>
     <script src="js/log.js"> </script>
</body>
</html>