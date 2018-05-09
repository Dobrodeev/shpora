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
echo 'Поработаем с файлами: <br>';
$new_file=fopen("C:\xampp\htdocs\shpora\files\mytext.txt","a");
//Переменная new_file получает указатель на файл name_file.

fwrite($new_file,"Это первая строка");
//в файл name_file записывается строка: «Это первая строка файла»

fclose($new_file);
//закрываем файл name_file

?>
</body>
</html>