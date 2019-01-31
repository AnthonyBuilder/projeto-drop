let divInputs = document.querySelector('.card');
let body = document.querySelector(".body-background");
let text = document.getElementById("text");

function out() {

    divInputs.classList.add('hidden');
    body.classList.add('hiddenbody');
    body.classList.add("dsnonebody");
    setTimeout(function() {
        divInputs.classList.add('dsnone');
        body.classList.remove("body-background");
        body.classList.add("dsnone");
        text.classList.add('dsdone');
    }, 800);
}
