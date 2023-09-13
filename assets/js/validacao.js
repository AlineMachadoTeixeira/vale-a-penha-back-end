const form = document.querySelector("form");
const nome = document.querySelector("#nome");
const sobrenome = document.querySelector("#sobrenome");
const cpf = document.querySelector("#cpf");
const telefone = document.querySelector("#telefone");
const email = document.querySelector("#email");
const confimaremail = document.querySelector("#confimaremail");
const senha = document.querySelector("#senha");
const confirmesenha = document.querySelector("#confirmesenha");
const data = document.querySelector("#data");


form.addEventListener('submit', (e) => {
    e.preventDefault()

    checkInputs()
})

function checkInputs(){
    const nomeValue = nome.value.trim()
    const sobrenomeValue = sobrenome.value.trim()
    const cpfValue = cpf.value.trim()
    const telefoneValue = telefone.value.trim()
    const emailValue = email.value.trim()
    const confimaremailValue = confimaremail.value.trim()
    const senhaValue = senha.value.trim()
    const confirmesenhaValue = confirmesenha.value.trim()
    const dataValue = data.value.trim()
      // Remover espaços em branco  trim()

    //Nome   
    if(nomeValue === '') {
        // mostrar erro
        // add classe
        erro(nome, 'Preencha esse campo')
    } else {
        // adicionar a classe de sucesso
        sucesso(nome)
    }

    //Sobrenome
    if(sobrenomeValue === '') {
        // mostrar erro
        // add classe
        erro(sobrenome, 'Preencha esse campo')
    } else {
        // adicionar a classe de sucesso
        sucesso(sobrenome)
    }
     
    //Email
    // if(emailValue === '') {
    //     // mostrar erro
    //     // add classe
    //     erro(email, 'Preencha esse campo')
    // } else if (!validacaoEmail(emailValue)) {
    //     erro(email, 'Email inválido')
    // } else {
    //     // adicionar a classe de sucesso
    //     sucesso(email)
    // }


    //Senha
    if(senhaValue === '') {
        // mostrar erro
        // add classe
        erro(senha, 'Preencha esse campo')

    } else if(senhaValue.length < 8) { 
        erro(senha, 'Senha deve ter mais que 8 caracteres')
    } else {
        // adicionar a classe de sucesso
        sucesso(senha)
    }
    
    //Confirme Senha
    if(confirmesenhaValue === '') {
        // mostrar erro
        // add classe
        erro(confirmesenha, 'Preencha esse campo')

    } else if(senhaValue !== confirmesenhaValue) { 
        erro(confirmesenha, 'Senhas não são iguais')
    } else {
        // adicionar a classe de sucesso
        sucesso(confirmesenha)
    }
     



}   



function erro(input, message) {
    const comercianteinput = input.parentElement;
    const small = comercianteinput.querySelector('small')

    small.innerText = message

    comercianteinput.className = 'comerciante__input erro'
}

function sucesso(input) {
    const comercianteinput = input.parentElement;

    comercianteinput.className = 'comerciante__input sucesso'
}



// function isEmail(email) {
//     return /^(?:[a-z0-9!#$%&'*+/=?^_`{|}~-]+(?:\.[a-z0-9!#$%&'*+/=?^_`{|}~-]+)*|"(?:[\x01-\x08\x0b\x0c\x0e-\x1f\x21\x23-\x5b\x5d-\x7f]|\\[\x01-\x09\x0b\x0c\x0e-\x7f])*")@(?:(?:[a-z0-9](?:[a-z0-9-]*[a-z0-9])?\.)+[a-z0-9](?:[a-z0-9-]*[a-z0-9])?|\[(?:(?:25[0-5]|2[0-4][0-9]|[01]?[0-9][0-9]?)\.){3}(?:25[0-5]|2[0-4][0-9]|[01]?[0-9][0-9]?|[a-z0-9-]*[a-z0-9]:(?:[\x01-\x08\x0b\x0c\x0e-\x1f\x21-\x5a\x53-\x7f]|\\[\x01-\x09\x0b\x0c\x0e-\x7f])+)\])/.test(email)
// }







