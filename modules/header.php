<header>
    <div class="container main_container">
        <a href="/" class="logo"></a>
        <div class="addresses">
            <p><span class="iconify" data-inline="false" data-icon="bytesize:location" style="font-size: 25px;"></span> г. Москва, ул. Бутлерова, д 17 Б</p>
            <p>info@gpm-centr.ru / sales@gpm-centr.ru</p>
        </div>
        <p class="number" onclick="window.location.href = 'tel:88001016423'">8 800 101 64 23</p>
        <button class="callback">Заказать звонок</button>
        <div class="openMenu">
            <span class="fl"></span>
            <span class="sl"></span>
            <span class="tl"></span>
        </div>
    </div>
</header>
<div class="link-line">
    <div class="container">
        <span class="link"><a href="/#about">О компании</a></span>
        <span class="link"><a href="/#sertificates">Сертификаты</a></span>
        <span class="link">
            <div><a href="/#catalog">Каталог продукции</a></div>
            <ul>
                <li><a href="/catalog/ekskavatory">Экскаваторы</a></li>
                <li class="more">
                    Автокраны
                    <ul>
                        <li><a href="/catalog/avtokrany">Автокраны Zoomlion</a></li>
                        <li><a href="/catalog/avtokrany-maz">Автокраны Zoomlion-МАЗ</a></li>
                    </ul>
                </li>
                <li class="more">
                    <a href="/catalog/vp">Вилочные погрузчики</a>
                    <ul>
                        <li><a href="/catalog/vp-diz">Дизельные погрузчики</a></li>
                        <li><a href="/catalog/vp-el">Электрические погрузчики</a></li>
                    </ul>
                </li>
                <li><a href="/catalog/es">Электроштабелеры</a></li>
                <li><a href="/catalog/palet">Погрузчики для палет</a></li>
                <li class="more">
                    Подъёмники
                    <ul>
                        <li><a href="/catalog/nozhnichnye-pod-jomniki">Ножничные</a></li>
                        <li><a href="/catalog/kolenchatye-pod-jomniki">Коленчатые</a></li>
                        <li><a href="/catalog/teleskopicheskie-pod-jomniki">Телескопические</a></li>
                    </ul>
                </li>
            </ul>
        </span>
        <span class="link"><a href="/news">Новости</a></span>
        <span class="link"><a href="/contacts">Контакты</a></span>
    </div>
</div>

<div class="backcall">
    <div class="content">
        <div class="close-popup">&times;</div>
        <p>Заполните форму и мы свяжемся с Вами в ближайшее время</p>
        <form method="POST">
            <input type="text" placeholder="Ваше имя" class="backcall_name">
            <input type="text" placeholder="Ваш телефон *" required class="backcall_phone">
            <input type="email" placeholder="Ваша почта" class="backcall_mail">
            <input type="text" placeholder="Ваш вопрос" class="backcall_quest">
            <button class="backcall_send">Отправить</button>
        </form>
        <span class="status"></span>
    </div>
</div>
<style>
.status {
    color: rgb(59, 162, 46);
    text-align: center;
    display: block;
    margin-top: 15px;
}
</style>
<script>
    let callback = document.querySelector('.callback')
    let name = document.querySelector('.backcall_name')
    let phone = document.querySelector('.backcall_phone')
    let mail = document.querySelector('.backcall_mail')
    let quest = document.querySelector('.backcall_quest')
    callback.onclick = () => {
        document.querySelector('.backcall').classList.add('active')
        document.body.style.overflow = 'hidden'
    }
    document.querySelector('.close-popup').onclick = () => {
        document.querySelector('.backcall').classList.remove('active')
        document.body.style.overflow = 'auto'
    }
    document.querySelector('.backcall_send').onclick = () => {
        if(phone.value == '') return
        if(name.value == '') name.value = '-'
        if(quest.value == '') quest.value = '-'
        if(mail.value == '') mail.value = '-'
        fetch(`/modules/tg.php?name=${name.value}&phone=${phone.value}&mail=${mail.value}&quest=${quest.value}`)
        document.querySelector('.status').innerText = 'Звонок заказан, мы Вам скоро перезвоним'
        return false
    }
</script>