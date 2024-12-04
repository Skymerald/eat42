const navBtn1 = document.getElementById("btn-1");
const navBtn2 = document.getElementById("btn-2");
const navBtn3 = document.getElementById("btn-3");
//stocker tout les boutons de la navbar

const navIcon1 = document.getElementById("icon-1");
const navIcon2 = document.getElementById("icon-2");
const navIcon3 = document.getElementById("icon-3");
//stocker tout les icone de la navbar

const navTitle1 = document.getElementById("title-1");
const navTitle2 = document.getElementById("title-2");
const navTitle3 = document.getElementById("title-3");
// stocker tout les titres de la navbar

navBtn1.addEventListener('mouseover',function(){
    navTitle1.style = "display : flex; transition : 0.5s; top : 3vh; opacity : 100;";
    navIcon1.style = "font-size : 100%; transition : 0.5s; top : 2vh";
})
navBtn1.addEventListener('mouseout',function(){
    navTitle1.style = "transition : 0.5s; top : 5vh; opacity : 0;";
    navIcon1.style = "font-size : 180%; transition : 0.5s; top : 2.6vh";
})
navBtn2.addEventListener('mouseover',function(){
    navTitle2.style = "display : flex; transition : 0.5s; top : 3vh; opacity : 100;";
    navIcon2.style = "font-size : 100%; transition : 0.5s; top : 2vh";
})
navBtn2.addEventListener('mouseout',function(){
    navTitle2.style = "transition : 0.5s; top : 5vh; opacity : 0;";
    navIcon2.style = "font-size : 180%; transition : 0.5s; top : 2.6vh";
})
navBtn3.addEventListener('mouseover',function(){
    navTitle3.style = "display : flex; transition : 0.5s; top : 3vh; opacity : 100;";
    navIcon3.style = "font-size : 100%; transition : 0.5s; top : 2vh";
})
navBtn3.addEventListener('mouseout',function(){
    navTitle3.style = "transition : 0.5s; top : 5vh; opacity : 0;";
    navIcon3.style = "font-size : 180%; transition : 0.5s; top : 2.6vh";
})
