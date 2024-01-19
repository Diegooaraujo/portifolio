let btnMenu = document.getElementById('btn-menu')
let menuMobile = document.getElementById('menu-mobile')
let overlay = document.getElementById('overlay-menu')

btnMenu.addEventListener('click',()=>{
    menuMobile.classList.add('abrir-menu')//criar uma classe no css
})

menuMobile.addEventListener('click', ()=>{
    menuMobile.classList.remove('abrir-menu')
})
overlay.addEventListener('click', ()=>{
    menuMobile.classList.remove('abrir-menu')
})