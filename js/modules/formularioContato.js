let formularioContato = document.querySelector('.formulario');
let faleConosco = document.querySelector('.fale-conosco');

faleConosco.addEventListener('click', () => {
    if (formularioContato.style.display === "block") {
        formularioContato.style.display = "none";
    } else {
        formularioContato.style.display = "block";
    }
})