let formularioContato = document.querySelector('#formulario-contato');
let faleConosco = document.querySelector('.fale-conosco');

faleConosco.addEventListener('click', () => {
    if(formularioContato.style.display === "flex"){
        formularioContato.style.display = "none";
    } else {
        formularioContato.style.display = "flex";
    }
})