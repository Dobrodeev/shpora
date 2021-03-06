<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Lection 2</title>
    <link rel="stylesheet" href="assets/css/bootstrap.min.css">
</head>
<body>
<script src="assets/jquery-3.2.1.js"></script>
<script src="assets/js/bootstrap.min.js"></script>
<?php
define('MAX_RAND',20);
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
    function typesVars()
    {
        $user = null;
        $bool = true;
        $name = 'Someone';
        $number = 196;
        $array[] = $user;
        $array[] = $bool;
        $array[] = $name;
        $array[] = $number;
        printArray($array);

        $str = '';
        if (isset($str))
            echo 'переменная $str существует. <br>';
        $str = null;
        if (isset($str))
            echo 'переменная $str сущуствует. <br>';
        if (empty($str))
            echo 'переменная $str пустая. <br>';
        $arrayEmpty  = [];
        printArray($arrayEmpty);
        if (empty($arrayEmpty))
            echo '$arrayEmpty пустой. <br>';
        $emtyVar1 = '';
        $emtyVar2 = 0;
        $emptyVar3 = 0.0;
        $emptyVar4 = '0';
        $emptyVar5 = null;
        $emptyVar6 = false;
        $emptyVar7 = $arrayEmpty;
        $emptyVars = [$emptyVar1, $emptyVar2, $emptyVar3, $emptyVar4, $emptyVar5, $emptyVar6, $emptyVar7];
        printArray($emptyVars);
        echo count($arrayEmpty).'<br>';
        for ($i = 0; $i < count($arrayEmpty); $i++)
        {
            if (empty($arrayEmpty[$i]))
                echo 'Переменная пустая. <br>';
        }
        $exampleArray = [1, 1, 2, 3, 5, 8, 13, 21, 34, 55, 89, 144, 233, 377, 610, 987, 1597];
        echo 'count($exampleArray) = '.count($exampleArray).'<br>';
//        printArray($exampleArray);
        $exampleArray[] = '';
        $exampleArray[] = 0;
//        vardumpArray($exampleArray);
        printArray($exampleArray);
        for ($i = 0; $i < count($exampleArray); $i++)
        {
//            if (empty($exampleArray[$i]))
                echo $exampleArray[$i].' ';
        }

    }
typesVars();
    echo '<br>';
    function squareTable()
    {
        for ($i = 11; $i <21; $i++)
        {
            echo $i.'<br>';
            for ($j = 11; $j < 21; $j++)
            {
                echo $i*$j.' ';
            }
        }
    }
    squareTable();
    echo '<br>';

    function numericTable()
    {
        for ($i = 1; $i < 10; $i++)
        {
            echo $i.' ';
            for ($j = 1; $j < 10; $j++)
            {
                echo $j.' ';
            }
        }

    }
//    numericTable();

    function mulTable()
    {
        echo '<table class="table table-striped table-bordered">';
        for ($i = 1; $i < 10; $i++)
        {
            echo '<tr>';
            for ($j = 1; $j < 10; $j++)
            {
                echo '<td>'.$i*$j.'</td>';
            }
            echo '</tr>';
        }
        echo '</table>';
    }
    mulTable();
    function writelineArray($array)
{
    for ($i = 0; $i < count($array); $i++)
        echo $array[$i].' ';
}

function generRandom($array)
{
    $array = [];
    for ($i = 0; $i < MAX_RAND; $i++)
    {
        $array = mt_rand(0, 177);
        echo $array.' ';
    }
}
    function randomArray()
    {
        echo '<br>Массив до сортировки: <br>';
        for ($i = 0; $i < MAX_RAND; $i++)
        {
            $randomArray[] = mt_rand(0,177);
        }
        printArray($randomArray);
        writelineArray($randomArray);
        echo '<br>Массив после сортировки: <br>';
        sort($randomArray);
        writelineArray($randomArray);
        shuffle($randomArray);
        echo '<br>Перемешали массив:<br>';
        writelineArray($randomArray);
        rsort($randomArray);
        echo '<br>Отсортировали массив в обратном порядке: <br>';
        writelineArray($randomArray);
        echo '<br>Снова перемешали массив:<br>';
        shuffle($randomArray);
        writelineArray($randomArray);
        printArray($randomArray);
    }
    randomArray();

function asortingArrays()
{
    echo '<br>Используем asort():<br>';
    for ($i = 0; $i < MAX_RAND; $i++)
    {
        $array[$i] = mt_rand(1, 19);
    }
    writelineArray($array);
    printArray($array);
    echo '<br>После asort():<br>';
    asort($array);
    writelineArray($array);
    printArray($array);
}
//asortingArrays();

function asortingArraysAssoc()
{
    $arr = ['a'=>'one', 'b'=>'two', 'c'=>'three', 'd'=>'four'];
    printArray($arr);
    asort($arr);
    printArray($arr);
    arsort($arr);
    echo ' А теперь по убыванию: <br>';
    printArray($arr);
    $array = ['а'=>'первый','б'=>'второй', 'в'=>'третий', 'г'=>'четвертый', 'д'=>'пятый', 'е'=>'акробат', 'ж'=>'гимнаст',
        'з'=>'боксер', 'и'=>'кикбоксер', 'й'=>'футболист'];
    printArray($array);
    echo 'Сортируем массив сохраняя связь ключ-значение<br>';
    asort($array);
    printArray($array);
    echo 'А теперь в обратном порядке<br>';
    arsort($array);
    printArray($array);
    echo 'Сортируем по ключам спомощью ksort()<br>';
    ksort($array);
    printArray($array);
    echo 'Массив $arr: <br>';
    foreach ($arr as $key=>$value)
        echo $key.'=>'.$value.' ';
    echo '<br>';
    krsort($arr);
    echo 'Массив $arr в обратном порядке по ключам: <br>';
    foreach ($arr as $key=>$value)
        echo $key.'=>'.$value.' ';
    echo '<br>';
}
asortingArraysAssoc();

function generatorRandomArrays() //подходит только для индексных массивов, индексы которых начинаются с 0
{
    $j = 0;
    for ($i = 0; $i < 10; $i++)
    {
        $arr[$i] = $j++;
        echo $arr[$i].' ';
    }
    //получаем случайный индекс массива
    $index = mt_rand(0, count($arr)-1);
    echo ' <br>Случайный елемент массива $arr: '.$arr[$index].'<br>';
}
generatorRandomArrays();

function generatorRandomAssociated()
{
    $arr = ['красный', 'оранжевый', 'желтый', 'зеленый', 'голубой', 'синий', 'фиолетовый'];
    foreach ($arr as $key=>$value)
        echo $key.'->'.$value.'<br>';
    $rand_keys = array_rand($arr, 2);
    printArray($rand_keys);
    echo $arr[$rand_keys[0]].' '.$arr[$rand_keys[1]].'<br>';
    $keysArray = ['футбол', 'баскетбол', 'волейбол', 'гандбол', 'регби', 'тенис', 'хокей'];
    $valuesArray = ['футболист', 'баскетболист', 'волейболист', 'гандболист', 'американский футболист', 'тенисист', 'хокеист'];
    $sportArray = array_combine($keysArray, $valuesArray);
    echo '<b>Виды спорта и спортсмены:</b> <br>';
    foreach ($sportArray as $key=>$value)
        echo $key.'=>'.$value.'<br>';
    echo '<br>';
    $ship = ['Пассажирские корабли'=>['Лайнер', 'Яхта', 'Паром'],
        'Военные корабли'=>['Авианосец', 'Линкор', 'Эсминеу'],
        'Грузовые корабли'=>['Сормовский', 'Волго-Дон', 'Окский']];
    foreach ($ship as $key=>$type)
    {
        // вывод основных значений массивов
        echo "<b>$key</b><br>";
        foreach ($type as $value)
            // вывод значений для каждого из массивов
            echo "<li>$value</li>";
    }
}
generatorRandomAssociated();

function taskArrays()
{
    echo '<br>Массив [1, 100] до сортировки: <br>';
    for ($i = 0; $i < MAX_RAND; $i++)
    {
        $randomArray[] = mt_rand(1,100);
    }
    writelineArray($randomArray);
    sort($randomArray);
    echo ' <br>Сортировка по значению. <br>';
    writelineArray($randomArray);
    shuffle($randomArray);
    echo ' <br>Перемешали массив. <br>';
    writelineArray($randomArray);
    for ($i = 0; $i < count($randomArray); $i++)
    {
        $randomArray[$i] /= 10;
    }
    echo ' <br>Массив после деления на 10. <br>';
    writelineArray($randomArray);
    for ($i = 0; $i < count($randomArray); $i++)
    {
        $randomArray[$i] = floor($randomArray[$i]);
    }
    echo ' <br>Массив после округления в меньшую сторону. <br>';
    writelineArray($randomArray);
    $counterZero = 0;
    for ($i = 0; $i < count($randomArray); $i++)
    {
        if ($randomArray[$i] == 0)
            $counterZero ++;
    }
    echo "<br> Всего $counterZero нулевых элементов в массиве <br>";
    for ($i = 0; $i < count($randomArray); $i++)
    {
        if ($randomArray[$i] != 0)
//            unset($randomArray[$i]);
            $deleted[] = $randomArray[$i];
    }
    echo '<br>Массив после удаления нулевых элементов<br>';
//    printArray($deleted);
    sort($deleted);
    writelineArray($deleted);
    echo '<br>Всего элементов в массиве: '.count($deleted).' Сумма всех элементов: '.array_sum($deleted).'<br>';
    shuffle($deleted);
    echo '<br>Снова перемешали<br>';
    writelineArray($deleted);
    $keys = [];
    $values = [];
    for ($i = 0; $i < count($deleted); $i++)
    {
        $keys[$i] = $i;
        $values[$i] = $deleted[$i];
    }
    $combineArray = array_combine($values, $keys);
//    $combineArray = array_combine($keys, $values);
//    echo '<br>Поменяли местами ключ-значение с помощью array_flip()<br>';
//    $combineArray = array_flip($combineArray);
    printArray($combineArray);
//    writelineArray($combineArray);
//    $combineArray = array_flip($combineArray);
//    echo '<br>array_flip()<br>';
//    writelineArray($combineArray);
    ksort($combineArray);
    echo 'Отсортировали массив по ключам <br>';
    printArray($combineArray);
    echo 'Максимальный элемент массива: '.max($combineArray).'<br>';
    echo 'Минимальный элемент массива: '.min($combineArray).'<br>';
//    for ($i = 0; $i < count($combineArray); $i + 2)
//    {
//        $secondArray[] = $combineArray[$i];
//    }
//    printArray($secondArray);
}

taskArrays();
?>
</body>
</html>