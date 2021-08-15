let openMenu = document.querySelector('.openMenu')
let linkLine = document.querySelector('.link-line')

let headerLinks = document.querySelectorAll('.link-line .container a')

headerLinks.forEach(element => {
    element.onclick = (e) => {
        e.preventDefault()

        document.querySelectorAll('[header-link]').forEach(el => {
            el.onclick = () => {
                window.location.href = el.getAttribute('header-link')
            }
        });
    }
})

openMenu.onclick = () => {
    openMenu.classList.toggle('active')
    linkLine.classList.toggle('active')

}