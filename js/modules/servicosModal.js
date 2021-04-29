
let selectAssunto = document.querySelector('#select-assunto');

const servicos = [
    {
        nome: "Formigas",
        id: 1
    },

    {
        nome: "Escorpião",
        id: 2
    },

    {
        nome: "Desratização",
        id: 3
    },

    {
        nome: "Descupinização",
        id: 4
    },

    {
        nome: "Lavagem Caixa d´agua",
        id: 5
    },

];

let ultimaPosicaoArray = servicos.slice(servicos.length - 1, servicos.length) // deixar a opção outra na ultima posição

servicos
.slice(0, servicos.length-1) 
.sort((a, b) => Intl.Collator().compare(a.nome, b.nome)) // ordenar em ordem alfabética os serviços
.concat(ultimaPosicaoArray) // concatenar aquela última posição do vetor
.map((elem) => {
    let option = document.createElement("OPTION"); // criando os elementos dinamicamente
    let textoOption = document.createTextNode(`${elem.nome}`);
    option.appendChild(textoOption);
    option.setAttribute("chave", `${elem.id}`)
    selectAssunto.appendChild(option);
})



