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
    <div class="news">
        <h1>Новости</h1>

        <div class="newsList">
            <div class="newsBlock" onclick="window.location.href = '/post?id=1'">
                <div class="img">
                    <img src="https://thumb.tildacdn.com/tild3964-3831-4536-a661-323734666264/-/cover/190x150/center/center/-/format/webp/IMG_2572.jpg" alt="">
                </div>
                <div class="text">
                    <p class="title">На московском складе в Химках большое количество кранов и экскаваторов.</p>
                    <p class="description">Так же ожидаются новые поступления в ближайшее время.</p>
                    <p class="date">10.08.2021</p>
                </div>
            </div>
        </div>
    </div>
    <?php include 'modules/footer.php'; ?>
</body>
</html>