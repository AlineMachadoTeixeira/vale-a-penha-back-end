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
    if (!checkInputs()) {
        e.preventDefault(); // Impede o envio do formulário se as validações falharem
    }
});

function checkInputs(){
    //e.preventDefault();

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
        return false;
    } else {
        // adicionar a classe de sucesso
        sucesso(nome)
    }

    //Sobrenome
    if(sobrenomeValue === '') {
        // mostrar erro
        // add classe
        erro(sobrenome, 'Preencha esse campo')
        return false;
    } else {
        // adicionar a classe de sucesso
        sucesso(sobrenome)
    }

   
    if (cpfValue === '') {
        // mostrar erro
        // add classe
        erro(cpf, 'Preencha esse campo')
        return false;
    
    } else {
        // adicionar a classe de sucesso
        sucesso(cpf)
    }

    //Telefone
    if (telefoneValue === '') {
        // mostrar erro
        // add classe
        erro(telefone, 'Preencha esse campo')
        return false;
    
    } else {
        // adicionar a classe de sucesso
        sucesso(telefone)
    }

   


    //Email
    if (emailValue === '') {
        // mostrar erro
        // add classe
        erro(email, 'Preencha esse campo')
        return false;
    } else if (!validarEmail(emailValue)) {
        erro(email, 'Email inválido')
        return false;
    } else {
        // adicionar a classe de sucesso
        sucesso(email)
    }

      
    //Confirme Email
    if(confimaremailValue === '') {
        // mostrar erro
        // add classe
        erro(confimaremail, 'Preencha esse campo')
        return false;

    } else if(emailValue !== confimaremailValue) { 
        erro(confimaremail, 'Senhas não são iguais')
        return false;
    } else {
        // adicionar a classe de sucesso
        sucesso(confimaremail)
    }  

    

    //Senha
    if(senhaValue === '') {
        // mostrar erro
        // add classe
        erro(senha, 'Preencha esse campo')
        return false;

    } else if(senhaValue.length < 8) { 
        erro(senha, 'Senha deve ter mais que 8 caracteres')
        return false;
    } else {
        // adicionar a classe de sucesso
        sucesso(senha)
    }
    
    //Confirme Senha
    if(confirmesenhaValue === '') {
        // mostrar erro
        // add classe
        erro(confirmesenha, 'Preencha esse campo')
        return false;

    } else if(senhaValue !== confirmesenhaValue) { 
        erro(confirmesenha, 'Senhas não são iguais')
        return false;
    } else {
        // adicionar a classe de sucesso
        sucesso(confirmesenha)
    }

   
    //Data
    if (dataValue === '') {
        // mostrar erro
        // add classe
        erro(data, 'Preencha esse campo')
        return false;
    } else if (!formatarMaiorIdade(dataValue)) {
        erro(data, 'Você é menor de idade')
        return false;
    } else {
        // adicionar a classe de sucesso
        sucesso(data)
    }

    return true;
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



//Função para maior de idade 
function formatarMaiorIdade(dataNascimento) {
    // Verifique se a data de nascimento foi fornecida e é uma string
    if (typeof dataNascimento !== 'string') {
        return false;
    }

    // Converta a string da data de nascimento em um objeto Date
    const dataNascimentoObj = new Date(dataNascimento);

    // Verifique se a conversão da data é válida
    if (isNaN(dataNascimentoObj.getTime())) {
        return false;
    }

    // Calcule a data atual menos 18 anos (idade de maioridade)
    const dataMaioridade = new Date();
    dataMaioridade.setFullYear(dataMaioridade.getFullYear() - 18);

    // Compare a data de nascimento com a data de maioridade
    return dataNascimentoObj <= dataMaioridade;
}




// Adicionar um ouvinte de evento para a entrada de teclado
telefone.addEventListener("keydown", function (event) {
    // Obter o código da tecla pressionada
    const key = event.key;
    

    // Verificar se a tecla pressionada é um número ou teclas especiais (como Backspace, Delete, setas, etc.)
    if (!/^\d$/.test(key) && !["Backspace", "Delete", "ArrowLeft", "ArrowRight", "Home", "End"].includes(key)) {
        event.preventDefault(); // Impedir a entrada de caracteres não numéricos
    }
});

// Adicionar um ouvinte de evento para a entrada de teclado
cpf.addEventListener("keydown", function (event) {
    // Obter o código da tecla pressionada
    const key = event.key;
    

    // Verificar se a tecla pressionada é um número ou teclas especiais (como Backspace, Delete, setas, etc.)
    if (!/^\d$/.test(key) && !["Backspace", "Delete", "ArrowLeft", "ArrowRight", "Home", "End"].includes(key)) {
        event.preventDefault(); // Impedir a entrada de caracteres não numéricos
    }
});




