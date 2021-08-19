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

    <?php
    $p = [];
    foreach($products as $product) {
        if($product['link'] == $_GET['link']) {
            $p = $product;
        }
    }
    ?>
    
    <?php include 'modules/header.php'; ?>
    <div class="product_container">
        <div class="left_images">
            <div class="swiper-container imageSwiper">
                <div class="swiper-wrapper">
                    <?php
                    foreach($p['images'] as $img) {
                        echo "
                        <div class='swiper-slide'>
                            <img src='$img' alt=''>
                        </div>
                        ";
                    }
                    ?>
                </div>
            </div>
            <div class="controllers">
                <div class="prev_slide">&#10095;</div>
                <div class="next_slide">&#10095;</div>
            </div>
        </div>
        <div class="texts">
            <h1><?=$p['title']; ?></h1>
            <p class="description">
                <?php
                foreach($p['description'] as $key=>$value) {
                    echo "$key <b>$value</b><br>";
                }
                ?>
            </p>
            <?php
            if($p['ost_description']) {
                foreach($p['ost_description'] as $ostd) {
    
                    echo '
                    <p class="description">
                        '.$ostd.'
                    </p>
                    ';
                }
            }
            
            ?>
        </div>
    </div>
    <table class="params">
        <tr>
            <td><b>Параметры машины</b></td>
            <td><b><?=$p['title'];?></b></td>
        </tr>
        <?php
        foreach($p['params'] as $key=>$value) {
            echo "
            <tr>
                <td>$key</td>
                <td>$value</td>
            </tr>
            ";
        }
        ?>
    </table>
    <?php include 'modules/footer.php'; ?>
    <script src="/js/product.js"></script>
</body>
</html>