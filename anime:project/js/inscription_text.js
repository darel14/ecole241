let x =0;
    let textEffect = "Anime.blog/sign in";
    let container = document.getElementById('effect');
    
    function animate() {
        if(x < textEffect.length) {
            container.innerHTML += textEffect.charAt(x);
            x++;
            setTimeout(animate, 150);
        }
    }
animate();

//initilisation des variables
    let $erreur = $("#failed");
    let mail = $("#email");
    let user = $('#username');
    let password = $('#password');



    //verification des champs
$(document).ready(function(){

    function validation(input){
        if(input.val() != "") {
           $("form").unbind("submit").submit();
           alert('Votre inscription a bien été effectuer !');  
        }
       }
   
       //verification du formulaire
       $("form").on("submit", (e)=>{
   
           e.preventDefault();
           validation(user);
           validation(mail);
           validation(password);
   
       })
   

})
   
   
