const ul = document.querySelector('ul');
const li = document.querySelectorAll('li');

li.forEach(elemento => {
    elemento.addEventListener('click', () => {
        ul.querySelector('.ativo').classList.remove('ativo');
        elemento.classList.add('ativo');
    })
})