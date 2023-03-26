    let $erreur = $("#erreur2");




    function validation(input){
     if(input.val()== "") {
         $erreur.show();
     } if(input.val() != "") {
        $("form").unbind("submit").submit();
     }
    }

    $("form").on("submit", (e)=>{

        e.preventDefault();
        validation($("#username"));
        validation($("#password"));

    })
