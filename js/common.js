let openMenu = document.querySelector('.openMenu')
let linkLine = document.querySelector('.link-line')

openMenu.onclick = () => {
    openMenu.classList.toggle('active')
    linkLine.classList.toggle('active')

}