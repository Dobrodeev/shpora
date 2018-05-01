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
rsort($combinedArray);
echo 'combined array отсортировали в обратном порядке <br>';
printArray($combinedArray);
shuffle($combinedArray);
echo 'Перемешали массив <br>';
printArray($combinedArray);
sort($combinedArray);
echo 'Снова отсортировали <br>';
printArray($combinedArray);
echo 'Снова перемешали массив <br>';
shuffle($combinedArray);
printArray($combinedArray);
echo 'Сортируем сохраняя связь ключ-значение <br>';
asort($combinedArray);
printArray($combinedArray);
echo 'Сортируем ключи массива <br>';
ksort($combinedArray);
printArray($combinedArray);
echo 'Сортируем ключи массива в обратном порядке<br>';
krsort($combinedArray);
printArray($combinedArray);
echo 'Снова перемешали массив <br>';
shuffle($combinedArray);
printArray($combinedArray);
$arrayTest = [2008, 2014, 2016, 2018];
echo 'Массив arrayTest <br>';
printArray($arrayTest);
$lastElement = array_pop($arrayTest);
echo 'Последний элемент массива arrayTest: '.$lastElement.'<br>';
printArray($arrayTest);
$firstElement = array_shift($arrayTest);
echo 'Первый элемент массива arrayTest: '.$firstElement.'<br>';
printArray($arrayTest);
$ar = [[1, 2, 3, 4, 5],
    [11, 12, 13, 14, 15]
    ];
array_multisort($ar[0], SORT_DESC, $ar[1], SORT_DESC);
echo 'Сортируем многомерный массив <br>';
printArray($ar);
echo 'Применение функции array_values() <br>';
$array = array("size" => "XL", "color" => "gold");
printArray($array);
//print_r(array_values($array));
$valuesArray = array_values($array);
printArray($valuesArray);
echo 'Сравнение обычной и естественной сортировок. <br>';
$arr_first = $arr_second = ['file12.txt', 'file10txt', 'file2.txt', 'file1.txt'];
sort($arr_first);
echo 'Обычная сортировка <br>';
printArray($arr_first);
echo 'Естественная сортировка <br>';
natsort($arr_second);
printArray($arr_second);
$arr_second[15] = 526;
$arr_second[16] = 'zara.jpg11';
echo 'Добавили несколько элементов в массив <br>';
printArray($arr_second);
echo 'Переиндексировали массив <br>';
$afterArrayValues = array_values($arr_second);
printArray($afterArrayValues);
$neebleElement = 529;
if (in_array($neebleElement, $afterArrayValues))
    echo 'Элемент '.$neebleElement.' есть в массиве <br>';
else
    echo 'Элемента '.$neebleElement.' нету в массиве <br>';
$afterArrayValues['back'] = 'in black';
$afterArrayValues['highwey'] = 'to hell';
$afterArrayValues[2003] = 'heaven or hell';
echo 'Добавили несколько элементов в массив <br>';
printArray($afterArrayValues);
$afterArrayValuesNext = array_values($afterArrayValues);
echo 'Переиндексировали массив <br>';
printArray($afterArrayValuesNext);
echo 'Снова перемешали массив <br>';
shuffle($afterArrayValuesNext);
printArray($afterArrayValuesNext);
echo 'Применили естественную сортировку <br>';
natsort($afterArrayValuesNext);
printArray($afterArrayValuesNext);
echo 'Сортируем по ключам <br>';
ksort($afterArrayValuesNext);
printArray($afterArrayValuesNext);
$keyArray = 10;
if (array_key_exists($keyArray, $afterArrayValuesNext))
    echo " Ключ $keyArray есть в массиве <br>";
else echo " Ключа $keyArray нету в массиве <br>";
$afterArrayValuesNext[] = 'Hellyeah';
$afterArrayValuesNext[] = 'Pantera';
$afterArrayValuesNext[] = 'Kreator';
$afterArrayValuesNext[] = 'Sepultura';
$afterArrayValuesNext[] = 'Megadeth';
echo 'Добавили в массив несколько элементов <br>';
printArray($afterArrayValuesNext);
echo array_key_exists($keyArray, $afterArrayValuesNext) ? " Ключ $keyArray есть в массиве <br>" : " Ключа $keyArray нету в массиве <br>";
$a = array(
    3 => 11,
    1 => 22,
    2 => 33,
);
$a[0] = 44;
echo 'До переиндексации <br>';
printArray($a);
echo 'Массив после переиндексации <br>';
printArray( array_values( $a ));
$arrayColors = [0=>'blue', 1=>'red', 2=>'green', 3=>'red'];
echo 'Массив цветов <br>';
printArray($arrayColors);
$key = array_search('green', $arrayColors);
echo 'Нашли ключ для элемента массива: '.$arrayColors[2].'->'.$key.'<br>';
$key = array_search('red', $arrayColors);
echo 'Нашли ключ для элемента массива: '.$arrayColors[3].'->'.$key.'<br>';
// проверка существования элементов массива
function exampleArrays()
{
    $arr = [5=>1, 2, 3];
    echo 'Проверяем существуют ли элементы в массиве <br>';
    printArray($arr);
    for ($i = 0; $i < 10; $i++)
        if (isset($arr[$i]))
            echo " Элемент \$arr[$i] существует <br>";
    else
        echo " Элемент \$arr[$i] не существует <br>";
    if (is_array($arr))
        echo '$arr - массив<br>';
    if (is_array($arr[7]))
        echo 'это массив <br>';
    else
        echo 'Это не массив <br>';
}
exampleArrays();
?>
</body>
</html>