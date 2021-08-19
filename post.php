<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Новости</title>
    
    <link rel="stylesheet" href="/css/common.css">
</head>
<body>
    <?php include 'modules/header.php'; ?>
    <div class="container post">
        <div class="title">
            <span>10.08.2021</span>
            На московском складе в Химках большое количество кранов и экскаваторов. Так же ожидаются новые поступления в ближайшее время.
        </div>
        <div class="swiper-container">
            <div class="swiper-wrapper">
            <?
                $dir_scan = scandir($_SERVER['DOCUMENT_ROOT']."/images/news_catalog", 1);
                unset($dir_scan[count($dir_scan) - 1]);
                unset($dir_scan[count($dir_scan) - 1]);
                foreach($dir_scan as $photo) {
                    echo "
                    <div class='swiper-slide'>
                        <img src='/images/news_catalog/$photo'><br>
                    </div>
                    ";
                }
            ?>  
            </div>
            <div class="swiper-controller">
                <div class="first_slider-button _prev">&#10095;</div>
                <div class="first_slider-button _next">&#10095;</div>
            </div>
        </div>
    </div>
    <?php include 'modules/footer.php'; ?>
    <script src="/js/post.js"></script>
</body>
</html>