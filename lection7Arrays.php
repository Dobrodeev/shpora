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

function cardGame()
{
    $card = [];
    $card[2]['heart'] = '2 heart.jpg';
    $card[2]['diamond'] = '2 diamond.jpg';
    $card[2]['club'] = '2 club.jpg';
    $card[2]['spade'] = '2 spade.jpg';
    $card[3]['club'] = '3 club.jpg';
    $card[3]['diamond'] = '3 diamond.jpg';
    $card[3]['heart'] = '3 heart.jpg';
    $card[3]['spade'] = '3 spade.jpg';
    $card[4]['club'] = '4 club.jpg';
    $card[4]['diamond'] = '4 diamond.jpg';
    $card[4]['heart'] = '4 heart.jpg';
    $card[4]['spade'] = '4 spade.jpg';
    $card[5]['club'] = '5 club.jpg';
    $card[5]['diamond'] = '5 diamond.jpg';
    $card[5]['heart'] = '5 heart.jpg';
    $card[5]['spade'] = '5 spade.jpg';
    function randomCards()
    {

    }
    echo ' Игральные карты <br>';
    $randomCard = mt_rand(2, 5);
    $randomCardsuit = mt_rand(1,4);
    echo 'first card '.$randomCard.'<br>';
    echo 'first cardsuit '.$randomCardsuit.'<br>';
    $randomCardsecond = mt_rand(1, 3) + 1;
    $randomCardsuitsecond = mt_rand(0, 3) + 1;
    echo 'second card '.$randomCardsecond.'<br>';
    echo 'second cardsuit '.$randomCardsuitsecond.'<br>';
    function isCanRandom($first, $firstsuit, $second, $secondsuit)
    {
        if ($first == $second && $firstsuit == $secondsuit)
            echo '<b>Collision </b><br>';
    }
    isCanRandom($randomCard, $randomCardsuit, $randomCardsecond, $randomCardsuitsecond);
    if ($randomCard == $randomCardsecond && $randomCardsuit == $randomCardsuitsecond)
    {
        if ($randomCardsuit == 1)
            $randomCardsuitsecond = mt_rand(2, 4);
        elseif ($randomCardsuit == 2)
            $randomCardsuitsecond = mt_rand(3, 4);
        elseif ($randomCardsuit == 3)
            $randomCardsuitsecond = 4;
        else
            $randomCardsuitsecond = mt_rand(1 ,3);
    }
    $suit = null;
    $suitsecond = null;
    switch ($randomCardsuit)
    {
        case 1:
            $suit = 'club';
            break;
        case 2:
            $suit = 'diamond';
            break;
        case 3:
            $suit = 'heart';
            break;
        case 4:
            $suit = 'spade';
            break;
        default:
            echo 'Default <br>';
    }
    switch ($randomCardsuitsecond)
    {
        case 1:
            $suitsecond = 'club';
            break;
        case 2:
            $suitsecond = 'diamond';
            break;
        case 3:
            $suitsecond = 'heart';
            break;
        case 4:
            $suitsecond = 'spade';
            break;
        default:
            echo 'Default <br>';
    }
    echo '<img src="images/'.$card[$randomCard][$suit].'">';
    echo '<img src="images/'.$card[$randomCardsecond][$suitsecond].'">';
    printArray($card);
    $allCards = [];
    echo 'Массив изображений всех карт с 66 по 117 <br>';
    for ($i = 66; $i < 118; $i++)
    {
        $allCards[$i] = $i;
        echo $allCards[$i].' ';
    }
    echo '<br>';
    $pokerCards = [];
    echo 'Колода карт для покера : 52 карты (без джокеров)<br>';
    for ($i = 0; $i < 52; $i++)
    {
        $pokerCards[$i] = $i;
        echo $pokerCards[$i].' ';
    }

    $stack = array("orange", "banana", "apple", "raspberry");
    echo '<br>';
    echo 'Ассоцитивный массив до применения функции array_pop()<br>';
    printArray($stack);
    $fruit = array_pop($stack);
    echo 'Ассоцитивный массив после применения функции array_pop(): мы забрали последний элемент массива:<br>';
    printArray($stack);
    echo ' А теперь забрали первый элемент: <br>';
    $nextFruit = array_shift($stack);
    printArray($stack);

}
cardGame();

function forArrays()
{
    echo '<hr>';
    $stack = array("orange", "banana", "apple", "raspberry");
    printArray($stack);
    $fruit = array_pop($stack);
    echo 'Забрали последний элемент массива: '.$fruit.'<br>';
    printArray($stack);
    $firstElement = array_shift($stack);
    echo 'Забрали первый элемент массива: '.$firstElement.'<br>';
    printArray($stack);
    echo 'добавим элемент в конец массива элементы: <br>';
    array_push($stack, 'мандарин', 'апельсин', 'грейпфрут', 'ананас', 'манго');
    printArray($stack);
    echo ' А теперь добавим в начало массива: <br>';
    array_unshift($stack, 'potate', 'лимон', 'грибы');
    printArray($stack);
    echo 'Просто добамим элементы в массив без применения функций: <br>';
    $stack[] = 'яблоко';
    $stack[] = 'груша';
    $stack[] = 'слива';
    $stack[] = 'хурма';
    printArray($stack);
    echo 'Создадим массив карт: <br>';
    $forPoker = [];
    for ($i = 0; $i < 4; $i++)
    {
        $forPoker[$i] = $i;
        echo $forPoker[$i].' ';
    }
    echo '<br>';
    $forPokerCards = [];
    $forPokerCards[0][2]['heart'] = '2 heart.jpg';
    $forPokerCards[1][2]['diamond'] = '2 diamond.jpg';
    $forPokerCards[2][2]['club'] = '2 club.jpg';
    $forPokerCards[3][2]['spade'] = '2 spade.jpg';
    printArray($forPokerCards);
//    $cardCombine = array_combine($forPoker, $forPokerCards);
//    printArray($cardCombine);
}
forArrays();
function rememberArrays()
{
    $web=array('HTML','CSS','JavaScript','PHP','MySQL');
    echo $web[1].'<br>'; // выведет 'CSS'
    $web[]='еще одно значение с след. индексом';

    $cars = array("Volvo", "BMW", "Toyota");
    echo 'Using for():<br>';
    for($x = 0; $x < count($cars); $x++) {
        echo $cars[$x].' ';
    }
//    foreach($cars as $key=>$value)
//    {
//        echo "$value $key<br>";
//    }
    echo '<br>';
    echo 'Using foreach():<br>';
    foreach ($cars as $car=>$value)
    {
        echo $car.'=>'.$value.'<br>';
    }
    echo 'Assoc arrays: <br>';
    $about=array(
        'name'=>'Nickolay',
        'age'=>34,
	    'gender'>'man'
    );
    echo $about['name'];
}
rememberArrays();

function mathFunctions()
{
    echo '<br>';
    echo 'Математические функции округления <br>';
    echo '|-7.2|='.abs(-7.2).'<br>';
    echo '|5|='.abs(5).'<br>';
    echo '|-4|'.abs(-4).'<br>';
    echo 'round(3.4)='.round(3.4).'<br>';
    echo 'round(3.5)='.round(3.5).'<br>';
    echo 'round(3.6, 0)='.round(3.6, 0).'<br>';
    echo 'round(3.435)='.round(3.435, 2).'<br>';
    echo 'round(5.045, 2)='.round(5.045, 2).'<br>';
    echo 'round(5.055, 2)='.round(5.055, 2).'<br>';
    echo 'Применение функции ceil() - округление в большую сторону: <br>';
    echo 'ceil(5.1)='.ceil(5.1).'<br>';
    echo 'floor(5.8)='.floor(5.8).'<br>';
    /* example from php.net */
    echo ceil(4.3);    // 5
    echo ceil(9.999);  // 10
    echo ceil(-3.14);  // -3
    echo '<br>';
}
mathFunctions();

function alreadyArrays()
{
    $arrayFibonacci = [1, 1, 2, 3, 5, 8, 13, 21, 34, 55, 89, 144];
    echo 'Массив чисел Фибоначчи: <br>';
    printArray($arrayFibonacci);
    $reversFibonacci = array_reverse($arrayFibonacci);
    echo 'Массив в обратном порядке: <br>';
    printArray($reversFibonacci);
    echo 'Поменяли местами ключ-значение: <br>';
    $flipArray = array_flip($arrayFibonacci);
    printArray($flipArray);
    $arrayValues = array_values($flipArray);
    echo 'Переиндексировали массив: <br>';
    printArray($arrayValues);
//    Пример #1 Пример использования array_keys()
    $array = array(0 => 100, "color" => "red");
    printArray(array_keys($array));

    $array = array("blue", "red", "green", "blue", "blue");
    printArray(array_keys($array, "blue"));

    $array = array("color" => array("blue", "red", "green"),
        "size"  => array("small", "medium", "large"));
    printArray(array_keys($array));
    echo 'Массив квадратов: <br>';
    $squaresArray = [];
    $j = 10;
    for ($i = 0; $i < 10; $i++)
    {
        $j++;
        $squaresArray[$i] = $j*$j;
        echo $squaresArray[$i].' ';
    }
    echo '<br>';
    echo 'Массив факториалов: <br>';
    $factorial = 1;
    for ($i = 1; $i < 10; $i++)
    {
        $factorial *= $i;
        echo $factorial.' ';
    }
    echo '<br>';
    function fibonacci($n)
    {
        if ($n < 3) {
            return 1;
        }
        else {
            return fibonacci($n-1) + fibonacci($n-2);
        }
    }
    echo 'Массив чесел Фибоначчи: <br>';
    for ($n = 1; $n <= 16; $n++) {
        echo(fibonacci($n) . ", ");
    }
//    echo("...\n");
    echo '<br>';
    echo 'Массив степеней двойки:<br>';
    $twoArray = [];
    $k = 2;
    for ($i = 0; $i < 10; $i++)
    {
        $twoArray[$i] = $k;
        $k *= 2;
        echo $twoArray[$i].' ';
    }
    echo '<br>';
    $card = [];
    $card[2]['heart'] = '2 heart.jpg';
    $card[2]['diamond'] = '2 diamond.jpg';
    $card[2]['club'] = '2 club.jpg';
    $card[2]['spade'] = '2 spade.jpg';
    $card[3]['club'] = '3 club.jpg';
    $card[3]['diamond'] = '3 diamond.jpg';
    $card[3]['heart'] = '3 heart.jpg';
    $card[3]['spade'] = '3 spade.jpg';
    $card[4]['club'] = '4 club.jpg';
    $card[4]['diamond'] = '4 diamond.jpg';
    $card[4]['heart'] = '4 heart.jpg';
    $card[4]['spade'] = '4 spade.jpg';
    $card[5]['club'] = '5 club.jpg';
    $card[5]['diamond'] = '5 diamond.jpg';
    $card[5]['heart'] = '5 heart.jpg';
    $card[5]['spade'] = '5 spade.jpg';
    echo 'Выведем массив игральных карт: <br>';
    printArray($card);
    $forPokerCards = [];
    $forPokerCards[0][2]['heart'] = '2 heart.jpg';
    $forPokerCards[1][2]['diamond'] = '2 diamond.jpg';
    $forPokerCards[2][2]['club'] = '2 club.jpg';
    $forPokerCards[3][2]['spade'] = '2 spade.jpg';
    echo 'Выведем трехмерный массив игральных карт: <br>';
    printArray($forPokerCards);
    echo $_SERVER['DOCUMENT_ROOT'].'<br>';
    echo $_SERVER['SERVER_NAME'].'<br>';
}
alreadyArrays();
function forServer()
{
    $indicesServer = array('PHP_SELF',
        'argv',
        'argc',
        'GATEWAY_INTERFACE',
        'SERVER_ADDR',
        'SERVER_NAME',
        'SERVER_SOFTWARE',
        'SERVER_PROTOCOL',
        'REQUEST_METHOD',
        'REQUEST_TIME',
        'REQUEST_TIME_FLOAT',
        'QUERY_STRING',
        'DOCUMENT_ROOT',
        'HTTP_ACCEPT',
        'HTTP_ACCEPT_CHARSET',
        'HTTP_ACCEPT_ENCODING',
        'HTTP_ACCEPT_LANGUAGE',
        'HTTP_CONNECTION',
        'HTTP_HOST',
        'HTTP_REFERER',
        'HTTP_USER_AGENT',
        'HTTPS',
        'REMOTE_ADDR',
        'REMOTE_HOST',
        'REMOTE_PORT',
        'REMOTE_USER',
        'REDIRECT_REMOTE_USER',
        'SCRIPT_FILENAME',
        'SERVER_ADMIN',
        'SERVER_PORT',
        'SERVER_SIGNATURE',
        'PATH_TRANSLATED',
        'SCRIPT_NAME',
        'REQUEST_URI',
        'PHP_AUTH_DIGEST',
        'PHP_AUTH_USER',
        'PHP_AUTH_PW',
        'AUTH_TYPE',
        'PATH_INFO',
        'ORIG_PATH_INFO') ;

    echo 'Вывели суперглобальный массив $_SERVER[]<br>';
    echo '<table cellpadding="10">' ;
    $counter = 0;
    foreach ($indicesServer as $arg) {
        if (isset($_SERVER[$arg])) {
            echo '<tr><td>'.$counter++.' - '.$arg.'</td><td>' . $_SERVER[$arg] . '</td></tr>' ;
        }
        else {
            echo '<tr><td>'.$arg.'</td><td>-</td></tr>' ;
        }
    }
    echo '</table>' ;
}
forServer();
?>
</body>
</html>