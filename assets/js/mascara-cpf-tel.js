const formulario =document.querySelector("form");

// Criando uma máscara para CPF 
const inputcpf =document.querySelector('#cpf');
cpf.addEventListener('keypress', () => {
    let cpfLength = cpf.value.length

    // MAX LENGHT 14  CPF
    if (cpfLength == 3 || cpfLength == 7) {
        cpf.value += '.'
    }else if (cpfLength == 11) {
        cpf.value += '-'
    }
});

// Criando uma máscara para Telefone 
const inputtelefone =document.querySelector('#telefone');
telefone.addEventListener('keypress', () => {
    let telefoneLength = telefone.value.length

    // MAX LENGHT 14  TELEFONE
    if (telefoneLength == 0 ) {
        telefone.value += '('
    }else if (telefoneLength == 3 ) {
        telefone.value += ')'
    }else if (telefoneLength == 9 ) {
        telefone.value += '-'
    }
});


