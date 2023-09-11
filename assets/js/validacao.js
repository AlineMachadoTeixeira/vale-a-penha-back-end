const form = document.querySelector("#form");
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
}   // Remover espaços em branco  trim()

if (nome === ''){
    //mostrar o erro 
    // adicionar a class erro 
    errorValidacao(nome, 'Preenchar esse campo')
}else{
  //adicionar class sucesso
}

function errorValidacao(input, message){
    const comercianteInput = input.parentElement;
    const small = comercianteInput.querySelector('small')

    small.innerText = message

    comercianteInput.classnome = "comerciante__input  erro"
}

