$(document).ready(function(){

    function validation(input){
        if(input.val() != "") {
           $("form").unbind("submit").submit();
           alert('Merci pour votre message nous tacherons de répondre au plus vite 3 !');
        }
       }
   
       //verification du formulaire
       $("form").on("submit", (e)=>{
   
           e.preventDefault();
           validation($('#email'));
           validation($('#message'));
   
       })
   

})