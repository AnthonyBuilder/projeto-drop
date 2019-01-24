/**
 * canvas arc
 * 
 * var c = document.getElementById("mCanvas");
 * var ctx = c.getContext("2d");
 * ctx.beginPath();
 * ctx.arc(100, 75, 50, 0, 2 * Math.PI);
 * ctx.fill();
 */

 //instancias
div = document.getElementById("splash");
text = document.getElementById("splash-title")
cardsView = document.getElementById("wrapper-main");
header = document.getElementById("header");
divHeader = document.getElementById("wrapper-header");
containerLeft = document.getElementById("container-right");
textSync = document.getElementById("textSync");


card = document.getElementById("card");
cardBefore = document.getElementById("card-before");

card2 = document.getElementById("card2");
cardBefore2 = document.getElementById("card-before2");

function hoverChild(){ 
    cardBefore.classList.toggle("card-before-blur");
}

card.addEventListener("mouseover", hoverChild, false);
card.addEventListener('mouseout',hoverChild,false);

function hoverChild2(){ 
    cardBefore2.classList.toggle("card-before-blur");
}

card2.addEventListener("mouseover", hoverChild2, false);
card2.addEventListener('mouseout',hoverChild2,false);
//Quando a animação terminar ele inicia o escurecimento
setTimeout(function(){
    div.classList.add("splash-fadeOut");  
}, 7000);

//Elimina os elementos nao usados mais na tela e deixa os outros visiveis
setTimeout(function(){
    div.classList.add("splash-none");
    header.classList.add("header-show");
    header.classList.add("header-transition");
    cardsView.classList.add("wrapper-main-fadeIn");
    cardsView.classList.add("wrapper-main-show");
    containerLeft.classList.add("container-show");
    containerLeft.classList.add("container-fade");
    textSync.classList.add("sync-fadeIn");
}, 9000);

setTimeout(function(){  header.classList.remove("header-show");  }, 9900);
