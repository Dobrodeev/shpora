<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Lection 7 Task</title>
    <link rel="stylesheet" href="assets/css/bootstrap.min.css">
</head>
<body>
<script src="assets/jquery-3.2.1.js"></script>
<script src="assets/js/bootstrap.min.js"></script>
<?php
define('MAX_RAND',20);
function taskArrays()
{
    echo '<br>Массив [1, 100] до сортировки: <br>';
    for ($i = 0; $i < MAX_RAND; $i++)
    {
        $randomArray[$i] = (int)floor (mt_rand(1,100)/10);
    }
    print_r($randomArray);
    sort($randomArray);
    echo ' <br>Сортировка по значению. <br>';
    print_r($randomArray);
    shuffle($randomArray);
    echo ' <br>Перемешали массив. <br>';
    print_r($randomArray);
    /* for ($i = 0; $i < count($randomArray); $i++)
         $randomArray[$i] /= 10;
     }
     echo ' <br>Массив после деления на 10. <br>';
     print_r($randomArray);
     for ($i = 0; $i < count($randomArray); $i++)
     {
         $randomArray[$i] = floor($randomArray[$i]);
     }
     echo ' <br>Массив после округления в меньшую сторону. <br>';
     print_r($randomArray);*/
    $counterZero = 0;
    for ($i = 0; $i < count($randomArray); $i++)
    {
        if ($randomArray[$i] == 0)
            $counterZero ++;
    }
    echo "<br> Всего $counterZero нулевых элементов в массиве <br>";
    for ($i = 0; $i < count($randomArray); $i++)
    {
        if ($randomArray[$i] == 0) {
            unset($randomArray[$i]);
        }
    }
    $deleted=array();
    $deleted=$randomArray;

    echo '<br>Массив после удаления нулевых элементов<br>';
    print_r($deleted);
    echo"<br>";
    sort($deleted);
    print_r($deleted);
    echo '<br>Всего элементов в массиве: '.count($deleted).' Сумма всех элементов: '.array_sum($deleted).'<br>';
    shuffle($deleted);
    echo '<br>Снова перемешали<br>';
    print_r($deleted);
    $newdeleted=array_flip($deleted);
    echo'<br> флип <br>';
    print_r($newdeleted);
    ksort($newdeleted);
    echo '<br>Отсортировали массив по ключам <br>';
    echo '<pre>';
    print_r($newdeleted);
    echo '</pre>';
    echo ' <br>Максимальный элемент массива: '.max($newdeleted).'<br>';
    echo ' <br>Минимальный элемент массива: '.min($newdeleted).'<br>';
    for ($i = 0; $i < count($newdeleted); $i++)
    {
        if ($i%2 != 0)
        unset($newdeleted[$i]);
    }
    echo 'Удалили каждый второй элемент <br>';
    echo '<pre>';
    print_r($newdeleted);
    echo '</pre>';
    function random5()
    {
        $array = array();
        for ($i = 0; $i < 5; $i++)
        {
            $array[$i] = mt_rand(0, 99);
        }
        echo 'Нагенерировали 5 случайных элементов <br>';
        echo '<pre>';
        print_r($array);
        echo '</pre>';
    }
//    random5();
    array_push($newdeleted, 34,35, 5, 67, 98, 21);
    echo 'Добавили 5 случайных элементов в конец массива<br>';
    echo '<pre>';
    print_r($newdeleted);
    echo '</pre>';
    asort($newdeleted);
    echo 'Снова отсортировали массив<br>';
    echo '<pre>';
    print_r($newdeleted);
    echo '</pre>';
    $newArray = [];
    foreach ($newdeleted as $key=>$value)
    {
        $newArray[] = $value;
    }
    for ($i = 0; $i < 5; $i++)
    {
        unset($newArray[$i]);
    }
    echo 'Удалили 5 самых маленьких элементов массива<br>';
    echo '<pre>';
    print_r($newArray);
    echo '</pre>';
    $anotherArray = array_values($newArray);
    echo 'Скопировали $newArray в новый массив <br>';
    print_r($anotherArray);
    echo 'Всего элементов в массиве '.sizeof($anotherArray).'<br>';
    for ($i = 0; $i < count($anotherArray); $i++)
    {
        $anotherArray[$i] *= $anotherArray[$i];
        $anotherArray[$i] /= 10;
        $anotherArray[$i] = ceil($anotherArray[$i]);
    }
    echo '<pre>';
    print_r($anotherArray);
    echo '</pre>';
    $resultArray = array_merge($newArray, $anotherArray);
    echo 'Слили два массива в один <br>';
    print_r($resultArray);
}

taskArrays();

?>
</body>
</html>
