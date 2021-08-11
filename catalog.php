<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ГПМ-Центр</title>

    <link rel="stylesheet" href="/css/common.css">
</head>
<body>
    
    <?php include 'modules/header.php'; ?>

    <div class="container">
        <div class="breadcrumb">
            <a href="/">Главная</a>
            <a href="/catalog/podemniki">Ножничные подъемники</a>
        </div>
        <div class="filters">
            <div class="search">
                <input type="text" placeholder="Поиск">
                <button><span class="iconify" data-inline="false" data-icon="bytesize:search" style="font-size: 18px;"></span></button>
            </div>
            <div class="filter">
                <p>Порядок:</p>
                <select id="">
                    <option selected>по умолчанию</option>
                    <option value="price_up">по возрастанию цены</option>
                    <option value="price_down">по уменьшению цены</option>
                </select>
            </div>
        </div>

        <div class="products">
            <div class="product none">
                <img src="/images/catalog/catalog_placeholder.png" alt="">
                <p class="title">Наименование модели продукции</p>
                <p class="description">
                    Питание - <b>Зарядное устройство</b><br>
                    Грузоподьемность - <b>113 кг</b><br>
                    Высота подъема - <b>5 800 мм</b><br>
                    Номинальная мощность - <b>32 кВт</b><br>
                    <b>Автоматическая коробка передач</b>
                </p>
                <p class="option">
                    Опции:<br>
                    Высота подъема - <b>4 500 мм</b><br>
                    Высота подъема - <b>6 000 мм</b>
                </p>
            </div>
            <div class="product">
                <img src="/images/catalog/catalog_placeholder.png" alt="">
                <p class="title">Наименование модели продукции</p>
                <p class="description">
                    Питание - <b>Зарядное устройство</b><br>
                    Грузоподьемность - <b>113 кг</b><br>
                    Высота подъема - <b>5 800 мм</b><br>
                    Номинальная мощность - <b>32 кВт</b><br>
                    <b>Автоматическая коробка передач</b>
                </p>
                <p class="option">
                    Опции:<br>
                    Высота подъема - <b>4 500 мм</b><br>
                    Высота подъема - <b>6 000 мм</b>
                </p>
            </div>
            <div class="product">
                <img src="/images/catalog/catalog_placeholder.png" alt="">
                <p class="title">Наименование модели продукции</p>
                <p class="description">
                    Питание - <b>Зарядное устройство</b><br>
                    Грузоподьемность - <b>113 кг</b><br>
                    Высота подъема - <b>5 800 мм</b><br>
                    Номинальная мощность - <b>32 кВт</b><br>
                    <b>Автоматическая коробка передач</b>
                </p>
                <p class="option">
                    Опции:<br>
                    Высота подъема - <b>4 500 мм</b><br>
                    Высота подъема - <b>6 000 мм</b>
                </p>
            </div>
            <div class="product">
                <img src="/images/catalog/catalog_placeholder.png" alt="">
                <p class="title">Наименование модели продукции</p>
                <p class="description">
                    Питание - <b>Зарядное устройство</b><br>
                    Грузоподьемность - <b>113 кг</b><br>
                    Высота подъема - <b>5 800 мм</b><br>
                    Номинальная мощность - <b>32 кВт</b><br>
                    <b>Автоматическая коробка передач</b>
                </p>
                <p class="option">
                    Опции:<br>
                    Высота подъема - <b>4 500 мм</b><br>
                    Высота подъема - <b>6 000 мм</b>
                </p>
            </div>
        </div>
    </div>

    <?php include 'modules/footer.php'; ?>
</body>
</html>