<?php session_start() 
?>

<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <link rel="stylesheet" href="anime.blog.css"/>
        <title>Anime.blog/sign in</title>
        <div id="titre">
        <h1 id="effect"></h1>
          <div class="log">
            <a href="http://darel.alwaysdata.net/index.php">Connection -</a>
            <a href="http://darel.alwaysdata.net/signin.php">Inscription</a>
        </div>
    </div>
    </head>

<body>


    <div class="container-logo">
    <img src="isset/logo.png" class="logo"/>
    </div>

    <div id="failed">
        <p>Verifiez vos informartions d'inscriptions !</p>
    </div>

    <div id="inscription">
    <div class="contain1">
    <form action="signin_post.php" method="POST" class="form2">
        <label for="username" class="label1">USERNAME</label> <input type="text" name="username" id="username" class="imput1" maxlength="25" required="required"/>
        <label for="email" class="label1">EMAIL</label> <input type="email" name="email" id="email" class="imput1" maxlength="40" required="required"/>/>
        <label for="password" class="label1">PASSWORD</label> <input type="password" name="password" id="password" class="imput1" required="required"/>/>
        <input type="submit" value="Inscription" class="buton2" id="send"/>

        </form>
     </div>

     <script src="https://code.jquery.com/jquery-3.6.0.min.js" integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>
        <script>

            $(document).ready(function(){
                $("#send").click(function(e){
            e.preventDefault();
                $.post(
                    'signin_post.php'
                    {
                        username: $('#username').val(),
                        password: $('#password').val(),
                    }

                    function(data){
                        if(data == 'Done') {
                            alert('Votre inscription a bien été effectuer !');  
                        }
                    }

                    },

                    'text'

                );

                });

            });

        </script>

     <script src="js/inscription_text.js"> </script>
</body>
</html>