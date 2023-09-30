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

    //CPF
    if (cpfValue === '') {
        // mostrar erro
        // add classe
        erro(cpf, 'Preencha esse campo')
        //}else if (!validarCPF(cpfValue)) { erro(cpf, 'Email inválido')
    } else {
        // adicionar a classe de sucesso
        sucesso(cpf)
    }

    //Telefone
    if(telefoneValue === '') {
        // mostrar erro
        // add classe
        erro(telefone, 'Preencha esse campo')
    } else {
        // adicionar a classe de sucesso
        sucesso(telefone)
    }

    //Email
    if (emailValue === '') {
        // mostrar erro
        // add classe
        erro(email, 'Preencha esse campo')
    } else if (!validarEmail(emailValue)) {
        erro(email, 'Email inválido')
    } else {
        // adicionar a classe de sucesso
        sucesso(email)
    }

      
    //Confirme Email
    if(confimaremailValue === '') {
        // mostrar erro
        // add classe
        erro(confimaremail, 'Preencha esse campo')

    } else if(emailValue !== confimaremailValue) { 
        erro(confimaremail, 'Senhas não são iguais')
    } else {
        // adicionar a classe de sucesso
        sucesso(confimaremail)
    }  

    

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

    dataValue
    //Data Nascimento
    if (dataValue === '') {
        // mostrar erro
        // add classe
        erro(data, 'Preencha esse campo')
    
    } else {
        // adicionar a classe de sucesso
        sucesso(data)
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

// Função para validar email
function validarEmail(email){
    const emailValidaçao = new RegExp(
        //usuario12@gamil.com.br
        /^[a-zA-Z0-9._-]+@[a-zA-Z0-9._-]+\.[a-zA-Z]{2,}$/
    );
    if(emailValidaçao.test(email)){
        return true
    }
    return false;
}









