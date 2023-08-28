const botao = document.querySelector("#botao-menu");
const menu = document.querySelector(" .menu__camada__dois ");

botao.addEventListener("click", function(event) {
    event.preventDefault();
    menu.classList.toggle("menu-aberto");
    if(menu.classList.contains("menu-aberto")) {
        botao.innerHTML = "Fechar &times;";
    } else {
        botao.innerHTML = "Menu &equiv;"
    }
});