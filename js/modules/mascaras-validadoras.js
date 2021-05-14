const mascaras = {
    nome(value) {
        return value
            .replace(/[0-9]/, '')
    },

    celular(value) {
        return value
            .replace(/\D/g, '') //Aceita apenas numeros no form
            .replace(/(\d{2})(\d)/, '($1) $2')
            .replace(/(\d{5})(\d)/, '$1-$2')
            .replace(/(-\d{4})\d+?$/, '$1');
    }
}

const verificador = {
    email(input) {
        const email = input;
        const regex = /^(([^<>()[\]\\.,;:\s@"]+(\.[^<>()[\]\\.,;:\s@"]+)*)|(".+"))@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\])|(([a-zA-Z\-0-9]+\.)+[a-zA-Z]{2,}))$/;

        if (!regex.test(email.value) && email.value !== '') {
            email.classList.add('invalido');
        }
    }
}

document.querySelectorAll('input').forEach(($input) => {
    const campo = $input.dataset.js;

    $input.addEventListener('input', (e) => {
        e.target.value = mascaras[campo](e.target.value)
    })

    $input.addEventListener('blur', (e) => {
        e.target = verificador[campo](e.target);
    })
})