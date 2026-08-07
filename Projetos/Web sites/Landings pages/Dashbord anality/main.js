const btn_menu = document.getElementById('btn-menu')
const menu = document.getElementById('menu')

console.log(btn_menu)
console.log(menu)

btn_menu.addEventListener('click', () => {
    console.log("clicou")
    menu.classList.toggle('ativo')
})