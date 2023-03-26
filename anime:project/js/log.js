let x =0;
    let textEffect = "Anime.blog/login";
    let container = document.getElementById('effect');
    
    function animate() {
        if(x < textEffect.length) {
            container.innerHTML += textEffect.charAt(x);
            x++;
            setTimeout(animate, 150);
        }
    }
animate();

    let $erreur = $("#erreur");
    let user = $("#user");
    let pwd = $("#pwd");



    function validation(input){
     if(input.val()== "") {
         $erreur.show();
     } if(input.val() != "") {
        $("form").unbind("submit").submit();
     }
    }


    $("form").on("submit", (e)=>{

        e.preventDefault();
        validation($("#user"));
        validation($("#pwd"));

    })

   
