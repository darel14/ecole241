const titre = document.querySelector('#title1'),
       container = document.querySelector('#container');

fetch("https://ghibliapi.herokuapp.com/films")
.then((res) => res.json())
.then((data) => {
    for(i = 0; i < data.length; i++) {
        let    general = document.createElement('div'),
               contain = document.createElement('h1'),
               contain_1 = document.createElement('p'),
                     img = document.createElement('img');
        container.appendChild(general).prepend();
       general.appendChild(contain);
       general.appendChild(img);
       general.appendChild(contain_1);
       contain_1.style.fontSize = "25px";
       contain.innerHTML = data[i].title;
       contain_1.innerHTML = data[i].description;

       general.style.textAlign = "center";
        img.src = "asset/latour.jpg";
    }
});