/*===== Dropdown =====*/

const btn_drop = document.querySelector('#btn-drop');
const menu_drop = document.querySelector('#menu-drop');

btn_drop.addEventListener('click', () => {
    menu_drop.classList.toggle('show');
});


/*===== Menu hamburguer =====*/

const btn_burguer = document.querySelector('#btn_burguer');
const menu = document.querySelector('.nav__container');

btn_burguer.addEventListener('click', () => {
    menu.classList.toggle('toggle');
});


/*===== Tema escuro =====*/

const btn_dark = document.querySelector('#btn-dark');

btn_dark.addEventListener('click', () => {
    document.body.classList.toggle('dark-theme');
    
});