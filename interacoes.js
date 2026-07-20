
const botao_menu = document.getElementById("menu-btn");
const menu = document.getElementById("menu");

// Menu mobile
botao_menu.addEventListener("click", () => {
    menu.classList.toggle("ativo");
});
