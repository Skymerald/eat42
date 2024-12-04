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


function transitionIn(title, icon){
    title.style = "display : flex; transition : 0.5s; top : 3vh; opacity : 100;";
    icon.style = "font-size : 100%; transition : 0.5s; top : 2vh";
}
function transitionOut(title, icon){
    title.style = "transition : 0.5s; top : 5vh; opacity : 0;";
    icon.style = "font-size : 180%; transition : 0.5s; top : 2.6vh";
}
function transition(title, icon, btn){
    btn.addEventListener('mouserover', transitionIn(title, icon));
    btn.addEventListener('mouseout', transitionOut(title, icon));
}
transition(navTitle1, navIcon1, navBtn1);
transition(navTitle2, navIcon2, navBtn2);
transition(navTitle3, navIcon3, navBtn3);