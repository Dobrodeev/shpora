<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Static counter</title>
</head>
<body>

</body>
</html>
<?php
spl_autoload_register(function ($class)
{
    include $class.'.php';
});
$counterObject = new StaticCounter();
echo ' Значение переменной $count:<br>';
echo StaticCounter::$count.'<br>';
echo 'Массив обьектов:<br>';
for ($i = 0; $i < 3; $i++)
{
    $arr[] = new StaticCounter();
    echo StaticCounter::$count.'<br>';
}
// уничтожаем массив обьектов
unset($arr);
echo 'После уничтожения массива обьектов: <br>';
echo StaticCounter::$count.'<br>';
?>