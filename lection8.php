<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Lection 8</title>
    <link rel="stylesheet" href="assets/css/bootstrap.min.css">
</head>
<body>
<script src="assets/jquery-3.2.1.js"></script>
<script src="assets/js/bootstrap.min.js"></script>
<?php
//Считываем текущее время
$mtime = microtime();
//Разделяем секунды и миллисекунды
$mtime = explode(" ",$mtime);
// Составляем одно число из секунд и миллисекунд
// и записываем стартовое время в переменную
$tstart = $mtime[1] + $mtime[0];

/*echo 'Поработаем с файлами: <br>';
$new_file=fopen("C:\xampp\htdocs\shpora\files\mytext.txt","a");
//Переменная new_file получает указатель на файл name_file.

fwrite($new_file,"Это первая строка");
//в файл name_file записывается строка: «Это первая строка файла»

fclose($new_file);
//закрываем файл name_file
*/
echo date("Y-m-d H:i:s").'<br>';
echo 'Теперешний месяц: '.date("m").'<br>';
echo 'Теперешний день: '.date("d").'<br>';
echo 'текущая метка времени Unix: '.time().'<br>';
//mktime — Возвращает метку времени Unix для заданной даты
echo mktime().'<br>';
echo 'Сегодня '.date("z").' день '.date("o").' года <br>';
echo date("Y-M-D").'<br>';
echo date("Y-M-D", mktime(0, 0, 0, 1, 10, 1991)).'<br>';
$lastday = mktime(0, 0, 0, 6, 0, 2018);
echo strftime("Последний день мая 2018 г.: %d", $lastday).'<br>';
// Делаем все то же самое, чтобы получить текущее время
$mtime = microtime();
$mtime = explode(" ",$mtime);
$mtime = $mtime[1] + $mtime[0];
//Вычисляем разницу
$totaltime = ($mtime - $tstart);
// Выводим не экран
printf ("Страница сгенерирована за %f секунд !", $totaltime);

?>
</body>
</html>