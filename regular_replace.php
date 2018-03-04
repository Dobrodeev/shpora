<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>regular_replace</title>
</head>
<body>
<?php
$content = file_get_contents('foreach.php');
// удаляем HTML теги
$content = strip_tags($content);
// заменяем несколько пробельных символов одним
echo preg_replace("|[\s]+s", " ", $content);
?>
</body>
</html>
