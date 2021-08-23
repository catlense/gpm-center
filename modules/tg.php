<?php

$name = $_GET['name'];
$phone = $_GET['phone'];
$quest = $_GET['quest'];
$mail = $_GET['mail'];

file_get_contents("https://api.telegram.org/bot1976808376:AAFZ5JCjHLEzp6wdZIQTQf1l0zrCWDrPVc8/sendMessage?chat_id=-468182015&text=*Имя*:%20%0A$name%0A%0A*Телефон*:%20%0A$phone%0A%0A*Почта*:%20%0A$mail%0A%0A*Вопрос*:%20%0A$quest&parse_mode=Markdown");

?>