
const botao_menu = document.getElementById("menu-btn");
const menu = document.getElementById("menu");

// Menu mobile
botao_menu.addEventListener("click", () => {
    menu.classList.toggle("ativo");
});

// Modo light
const btn_light = document.querySelector('#btn_light')
btn_light.addEventListener('click', () =>{
    document.body.classList.toggle('light-theme')
})
