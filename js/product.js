let swiper = new Swiper('.imageSwiper', {
    slidesPerView: 1,
    // freeMode: true,
    navigation: {
        nextEl: ".next_slide",
        prevEl: ".prev_slide"
    }
})

// document.querySelectorAll('tr td').forEach(element => {
//     if (element.contains(document.querySelector('img'))) console.log(true)

//     if (document.querySelector(`${element.lastChild.tagName} img`)) {
//         console.log(1)
//     }

//     // console.log(
//     // document.querySelector(`${element.lastChild.tagName} img`) ? (document.querySelector(`${element.lastChild.tagName}`).style.width = '100%', document.querySelector(`${element.lastChild.tagName} img`).style.width = '100%') : false)
// })

if (document.querySelector(`${document.querySelectorAll('tr td')[3].tagName} img`)) {
    document.querySelector(`${document.querySelectorAll('tr td')[3].tagName} img`).parentElement.style.width = '100%';
    document.querySelector(`${document.querySelectorAll('tr td')[3].tagName} img`).style.width = '100%'
}