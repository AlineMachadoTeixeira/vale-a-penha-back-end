const formulario =document.querySelector("form");
 const senha =document.querySelector('#senha');
 const confirmesenha =document.querySelector('#confirmesenha');
 const email =document.querySelector('#email');
 const confimaremail =document.querySelector('#confimaremail');


 function validate(item){
     item.setCustomValidity('');
     item.checkValidity();
     if(item == confirmesenha ) {
         if(item.value === senha.value) item.setCustomValidity('');
         else item.setCustomValidity()('As senhas digitadas não são iguais. Verifique e corrija.')
     }
}


senha.addEventListener('input', function() {validate(senha)})

confirmesenha.addEventListener('input', function() {validate(confirmesenha)})

email.addEventListener('input', function() {validate(email)})

confimaremail.addEventListener('input', function() {validate(confimaremail)})




// function confereSenha() {
//     const senha =document.querySelector('#senha');
//     const confirmesenha =document.querySelector('#confirmesenha');

//     if (confirmesenha.value === senha.value){
//         confirmesenha.setCustomValidity()('');
//     }else{
//         confirmesenha.setCustomValidity()('As senhas não conferem');

//     }

// }

// function senhaOk(){
//     alert("senhas confererm!")
// }
