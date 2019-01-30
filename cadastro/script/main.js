

function out() {
    let divInputs = document.getElementById('divinputs');
    divInputs.classList.add('hidden');

    let body = document.getElementsByTagName('body');
    body.classList.add('hiddenbody');

    setTimeout(function() {
        divInputs.classList.remove('hidden').add('dsnone');
        body.classList.add('dsnonebody');
    }, 1000);
}
