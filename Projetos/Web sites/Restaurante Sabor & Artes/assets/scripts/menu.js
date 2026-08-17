const btn_menu = document.getElementById("btn-menu")
const menu = document.getElementById("menu")

btn_menu.addEventListener('click', () =>{
    menu.classList.toggle('drop')
})


const btnFavorito = document.querySelector('#btn-favorito');
const icone = document.querySelector('#icone-favorito');

btnFavorito.addEventListener('click', () => {
    icone.classList.toggle('favoritado');
});

const btnPrevious = document.querySelector('#btn-prev');
const btnNext = document.querySelector('#btn-next');
btnPrevious.addEventListener('click', () => {
    
});
btnNext.addEventListener('click', () => {
    
});


const header = document.querySelector('header');

window.addEventListener('scroll', () => {
    if (window.scrollY >= 100) {
        header.classList.add('header-fixo');
    } else {
        header.classList.remove('header-fixo');
    }
});