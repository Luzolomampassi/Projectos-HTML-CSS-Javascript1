const btn_menu = document.getElementById('btn-menu')
const menu = document.getElementById('menu')
const btn_dark = document.getElementById('btn-dark')

btn_menu.addEventListener('click', () => {
    console.log("clicou")
    menu.classList.toggle('ativo')
})
btn_dark.addEventListener('click', () => {
    document.body.classList.toggle('dark-theme')
})