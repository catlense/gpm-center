<?php include 'modules/all_products.php'; ?>
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

    <?php
    $c = [];
    foreach($categories as $category) {
        if($category['link'] == $_GET['link']) {
            $c = $category;
        }
    }

    $p = [];
    foreach($products as $product) {
        if($product['category'] == $c['link'] || empty(trim($_GET['link']))) {
            array_push($p, $product);
        }
    }
    ?>

    <div class="container">
        <div class="breadcrumb">
            <a href="/">Главная</a>
            <a href="/catalog/podemniki"><?=$c['title'] ? $c['title'] : 'Каталог продукции';?></a>
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
            <?php
            
            foreach($p as $product) {
                $desc = '';
                foreach($product['description'] as $key=>$value) {
                    $desc .= "$key <b>$value</b><br>";
                }
                echo "
                    <div class='product' onclick='window.location.href = `/product/".$product['link']."`;'>
                        <img src='".$product['main_img']."' alt=''>
                        <p class='title'>".$product['title']."</p>
                        <p class='description'>$desc</p>
                    </div>
                ";
            }
            
            ?>
        </div>
    </div>

    <?php include 'modules/footer.php'; ?>
</body>
</html>