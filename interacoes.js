
const botao_menu = document.getElementById("menu-btn");
const menu = document.getElementById("menu");

const botao_moon_son = document.getElementById("theme-toggle");
const icon = botao_moon_son.querySelector("i");
const html = document.documentElement;


// Menu mobile
botao_menu.addEventListener("click", () => {
    menu.classList.toggle("ativo");
});


// Tema light/dark
botao_moon_son.addEventListener("click", () => {

    html.dataset.theme =
        html.dataset.theme === "light" ? "dark" : "light";

    icon.classList.toggle("fa-sun");
    icon.classList.toggle("fa-moon");

});

