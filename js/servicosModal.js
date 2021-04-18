
let selectAssunto = document.querySelector('#select-assunto');

const servicos = [
    {
        nome: "Serviço 1",
        id: 1
    },

    {
        nome: "Serviço 2",
        id: 2
    },

    {
        nome: "Serviço 3",
        id: 3
    },

    {
        nome: "Serviço 4",
        id: 4
    },

    {
        nome: "Serviço 5",
        id: 5
    },

    {
        nome: "Serviço 6",
        id: 6
    },

    {
        nome: "Outro",
        id: 7
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



