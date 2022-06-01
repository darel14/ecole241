let serv = document.getElementById('hm_service');
let loc = document.getElementById('cs_location');
let place = document.getElementById('mk_place');
let picture = document.getElementById('block');
let text = document.getElementById('texte');

place.addEventListener('mouseover', function(){
    picture.style.backgroundImage = "url('assets/market.jpg')";
    picture.style.transition = "1s";
    text.innerHTML = "<b><p class='legend'>Faites vos courses en ligne !</p></b>";
})

place.addEventListener('mouseleave', function(){
    picture.style.backgroundImage = "url('assets/seller1.jpg')";
    picture.style.transition = "0,2s";
    text.innerHTML = "<p class='titre'>Selectionnez un service !</p>";

})

serv.addEventListener('mouseover', function(){
    picture.style.backgroundImage = "url('assets/nanny.jpg')";
    text.innerHTML = "<b><p class='legend'>Vous recherchez une nounou, femme de menage ?</p></b>";
})

serv.addEventListener('mouseleave', function(){
    picture.style.backgroundImage = "url('assets/seller1.jpg')";
    text.innerHTML = "<p class='titre'>Selectionnez un service !</p>";
})

loc.addEventListener('mouseover', function(){
    picture.style.backgroundImage = "url('assets/cars1.jpg')";
    text.innerHTML = "<b><p class='legend'>Louer nos véhicules !</p></b>";
})

loc.addEventListener('mouseleave', function(){
    picture.style.backgroundImage = "url('assets/seller1.jpg')";
    picture.style.transition = "0,2s";
    text.innerHTML = "<p class='titre'>Selectionnez un service !</p>";
})