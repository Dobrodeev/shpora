<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="stylesheet" href="assets/css/bootstrap.min.css">
</head>
<body>
<script src="assets/jquery-3.2.1.js"></script>
<script src="assets/js/bootstrap.min.js"></script>
<?php
function printArray($arr)
{
    echo '<pre>';
    print_r($arr);
    echo '</pre>';
}

function vardumpArray($arr)
{
    echo '<pre>';
    var_dump($arr);
    echo '</pre>';
}
$array = array(
    "foo" => "bar",
    "bar" => "foo",
);
$arrayFib = [1, 1, 2, 3, 5, 8, 13, 21, 34, 55, 89, 144];
$arraySquares = [121, 144, 169, 196, 225, 256, 289, 361];
$arrayTwo = [2, 4, 8, 16, 32, 64, 128, 256, 512, 1024, 2048, 4096];
//printArray($array);
//printArray($arrayFib);
//printArray($arraySquares);
//vardumpArray($arrayTwo);
$j = 10;
for ($i = 0; $i < 10; $i++)
{
    $arr[$i] = $j*$j;
    $j++;
}
printArray($arr);
// смешанные ключи массива
$array = array(
    "foo" => "bar",
    "bar" => "foo",
    100   => -100,
    -100  => 100,
);
var_dump($array);
$arr1 = array(3, 4, 2, 7, 1, 5);
$arr2 = array('world', 'Hello', 'yes', 'no', 'apple', 'wet');
printArray($arr1);
printArray($arr2);
echo ' Использование функции array_multisort() <br>';
array_multisort($arr1, $arr2);
printArray($arr1);
printArray($arr2);
echo 'Применили константы array_multisort()<br>';
array_multisort($arr1, SORT_DESC, SORT_NUMERIC, $arr2);
printArray($arr1);
printArray($arr2);
$array3 = [0, 1, 2, 3, 4, 5, 6, 7, 8, 9];
$array4 = [20, 21, 22, 23, 24, 25, 26, 27, 28, 29];
array_multisort($array3, SORT_DESC, $array4, SORT_DESC);
echo 'Сортируем массивы $array3 & $array4 <br>';
printArray($array3);
printArray($array4);
$ar1 = [1, 2, 3, 4, 5];
$ar2 = [11, 12, 13, 14, 15];
$combinedArray = array_combine($ar1, $ar2);
echo 'combined array: array_combine() <br>';
printArray($combinedArray);
$ar = [[1, 2, 3, 4, 5],
    [11, 12, 13, 14, 15]
    ];
array_multisort($ar[0], SORT_DESC, $ar[1], SORT_DESC);
echo 'Сортируем многомерный массив <br>';
printArray($ar);
?>
</body>
</html>