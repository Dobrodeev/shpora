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
    /*function fibonacci($n)
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
    }*/
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
    echo 'Гармонический ряд: <br>';
    $S = 0;
    $n = 100;
    for ($i = 1; $i < $n; $i++)
    {
        echo round(1/$i, 3).' ';
        $S += 1/$i;
    }
    echo '<br>';
    echo 'Сумма первых '.$n.' членов гармонического ряда S = '.$S.'<br>';
    echo 'Создадим массив содержащий диапазон значений:<br>';
    foreach (range(0, 12) as $number) {
        echo $number.' ';
    }
    echo '<br>';
    echo 'Создадим массив содержащий диапазон значений с определенным шагом:<br>';
    foreach (range(0, 100, 10) as $number) {
        echo $number.' ';
    }
    // Использование последовательности знаков
// array('a', 'b', 'c', 'd', 'e', 'f', 'g', 'h', 'i');
    echo '<br>Выведем последовательность знаков:<br>';
    foreach (range('a', 'i') as $letter) {
        echo $letter.' ';
    }
// array('c', 'b', 'a');
    echo '<br>А теперь в обратном порядке:<br>';
    foreach (range('c', 'a') as $letter) {
        echo $letter.' ';
    }
    echo '<br>';
    $arrayRange = array_combine(range(11,14),range(1,4));
    printArray($arrayRange);
    $prepend = array('00','01','02','03','04','05','06','07','08','09');
    $hours     = array_merge($prepend,range(10, 23));
    $minutes     = array_merge($prepend,range(10, 59));
    $seconds     = $minutes;
    printArray($prepend);
    printArray(range(10,59));
    printArray($seconds);
    printArray($minutes);
    printArray($hours);
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
<?php
    /*
    ** Quick HTML menus with minimum and maximum sets of years.
    ** @author Chris Charlton <chris@laflash.org>
    ** @license FREE!
    */

    // Years range setup
    $year_built_min = 1900;
    $year_built_max = date("Y");
?>
<select id="yearBuiltMin" size="1">
    <?php // Generate minimum years

    foreach (range($year_built_min, $year_built_max) as $year) { ?>
        <option value="<?php echo($year); ?>"><?php echo($year); ?></option>
    <?php } ?>
</select>

<select id="yearBuiltMax" size="1">
    <?php // Generate max years

    foreach (range($year_built_max, $year_built_min) as $year) { ?>
        <option value="<?php echo($year); ?>"><?php echo($year); ?></option>
    <?php } ?>
</select>
<?php
function createColumnsArray($end_column, $first_letters = '')
{
$columns = array();
$length = strlen($end_column);
$letters = range('A', 'Z');

// Iterate over 26 letters.
foreach ($letters as $letter) {
// Paste the $first_letters before the next.
$column = $first_letters . $letter;

// Add the column to the final array.
$columns[] = $column;

// If it was the end column that was added, return the columns.
if ($column == $end_column)
return $columns;
}

// Add the column children.
foreach ($columns as $column) {
// Don't itterate if the $end_column was already set in a previous itteration.
// Stop iterating if you've reached the maximum character length.
if (!in_array($end_column, $columns) && strlen($column) < $length) {
$new_columns = createColumnsArray($end_column, $column);
// Merge the new columns which were created with the final columns array.
$columns = array_merge($columns, $new_columns);
}
}

return $columns;
}
// Return an array with all column names from A until and with BI.
createColumnsArray('BI');
$arrAssoc = [0, 1, 2, 'you'=>'my', 'black'=>'friday', 'lucky'=>7];
$arrNoAssoc = [0, 1, 2, 3, 4, 5, 6, 7];
function isAssocArray($arr)
{
    echo '<br>If associated array<br>';
    printArray($arr);
    if (array_keys($arr)===range(0, sizeof($arr)-1)) {
// not associative array
        echo 'not associative array<br>';
    } else {
// associative array
        echo 'associative array<br>';
    }
}
isAssocArray($arrAssoc);
isAssocArray($arrNoAssoc);

function forRangeExasmples()
{
//    $arr = range('A',  'Z');
    $arr = range('AA', 'ZZ');
    printArray($arr);
    $arrLow = range('a', 'z');
    printArray($arrLow);
}
forRangeExasmples();

function listExample1()
{
    $info = array('кофе', 'коричневый', 'кофеин');

// Составить список всех переменных
    list($drink, $color, $power) = $info;
    echo "$drink - $color, а $power делает его особенным.\n";
    echo '<br>';
// Составить список только некоторых из них
    list($drink, , $power) = $info;
    echo "В $drink есть $power.\n";
    echo '<br>';
// Или пропустить все, кроме третьей
    list( , , $power) = $info;
    echo "Мне нужен $power!\n";
    echo '<br>';
// list() не работает со строками
    list($bar) = "abcde";
    var_dump($bar); // NULL
    echo '<br>';
}
listExample1();

function listExample2()
{
    $array = array(1, array(2, 3));
    printArray($array);
    list($a, list($b, $c)) = $array;
    echo 'list() с индексами массива<br>';
    var_dump($a, $b, $c);
    echo '<br>';
}
listExample2();

function listExample3()
{
    $info = array('кофе', 'коричневый', 'кофеин');

    list($a[0], $a[1], $a[2]) = $info;
    echo '<pre>';
    var_dump($a);
    echo '</pre>';
}
listExample3();

function listExample5()
{
    echo 'Указываем порядок , в котором индексы массива будут использоваться функцией list(): <br>';
    $foo = array(2 => 'a', 'foo' => 'b', 0 => 'c');
    $foo[1] = 'd';
    list($x, $y, $z) = $foo;
    vardumpArray($foo, $x, $y, $z);
}
listExample5();
echo '<hr>';
function someArrays()
{
    echo 'Массив квадратов: <br>';
    $squaresArray = [];
    $j = 10;
    for ($i = 0; $i < 10; $i++) {
        $j++;
        $squaresArray[$i] = $j * $j;
        echo $squaresArray[$i] . ' ';
    }
    echo '<br>';
    echo 'Массив кубов:<br>';
    $cubesArray = [];
    $k = 0;
    for ($i = 0; $i < 10; $i++) {
        $k++;
        $cubesArray[$i] = $k * $k * $k;
        echo $cubesArray[$i] . ' ';
    }
    echo '<br>';
    echo 'Массив факториалов: <br>';
    $factorial = 1;
    for ($i = 1; $i < 10; $i++) {
        $factorial *= $i;
        echo $factorial . ' ';
    }
    echo '<br>';
    function fibonacci($n)
    {
        if ($n < 3) {
            return 1;
        } else {
            return fibonacci($n - 1) + fibonacci($n - 2);
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
    for ($i = 0; $i < 10; $i++) {
        $twoArray[$i] = $k;
        $k *= 2;
        echo $twoArray[$i] . ' ';
    }
    echo '<br>';
    echo 'Гармонический ряд: <br>';
    $S = 0;
    $n = 100;
    for ($i = 1; $i < $n; $i++) {
        echo round(1 / $i, 3) . ' ';
        $S += 1 / $i;
    }
    echo '<br>';
    echo 'Сумма первых ' . $n . ' членов гармонического ряда S = ' . $S . '<br>';
    echo 'Массив простых чисел: <br>';
    $simpleNumbers = [1, 3, 5];
    for ($i = 7; $i < 100; $i++) {
        if (($i % 2 != 0) && ($i % 3 != 0) && ($i % 5 != 0))
            $simpleNumbers[] = $i;
    }
    printArray($simpleNumbers);
    echo 'Массив нечетных чисел: <br>';
    for ($i = 0; $i < 100; $i++) {
        if ($i % 2 != 0)
            $nechetArray[] = $i;
    }
    printArray($nechetArray);
    echo 'Массив четных чисел: <br>';
    for ($i = 0; $i < 100; $i++) {
        if ($i % 2 == 0)
            $chetArray[] = $i;
    }
    printArray($chetArray);
    echo '<br>';
    echo 'Создадим массив содержащий диапазон значений:<br>';
    foreach (range(0, 12) as $number) {
        echo $number . ' ';
    }
    echo '<br>';
    $catallanArray = [1, 1, 2, 5, 14, 42, 132, 429, 1430, 4862, 16796, 58786, 208012, 742900, 2674440, 9694845, 35357670, 129644790, 477638700, 1767263190, 6564120420, 24466267020, 91482563640, 343059613650, 1289904147324, 4861946401452];
    echo 'Числа Каталлана: <br>';
//    printArray($catallanArray);
//    print_r($catallanArray);
    for ($i = 0; $i < count($catallanArray); $i++) {
        echo $catallanArray[$i] . ' ';
    }
    echo '<br>';
    echo 'Создадим массив содержащий диапазон значений с определенным шагом:<br>';
    foreach (range(0, 100, 10) as $number) {
        echo $number . ' ';
    }
    // Использование последовательности знаков
// array('a', 'b', 'c', 'd', 'e', 'f', 'g', 'h', 'i');
    echo '<br>Выведем последовательность знаков:<br>';
    foreach (range('a', 'i') as $letter) {
        echo $letter . ' ';
    }
// array('c', 'b', 'a');
    echo '<br>А теперь в обратном порядке:<br>';
    foreach (range('c', 'a') as $letter) {
        echo $letter . ' ';
    }
    echo '<br>';
    $arrayRange = array_combine(range(11, 14), range(1, 4));
    printArray($arrayRange);
    echo 'Создами имитацию бросания двух игральных костей: <br>';
    $firstZara = mt_rand(1, 6);
    $secondZara = rand(1, 6);
    echo 'Выбросили игральные кости: ' . $firstZara . ' ' . $secondZara . '<br>';
    echo 'Теперь максимум и минимум: <br>';
    $arrayFirst = [1, 2, 3, 4, 5, 6, 7];
    $arraySecond = [324, 443, 894];
    printArray($arrayFirst);
    printArray($arraySecond);
    echo 'Max array: <br>';
    $maxArray = max($arrayFirst, $arraySecond);
    printArray($maxArray);
    echo 'min array: <br>';
    $minArray = min($arrayFirst, $arraySecond);
    printArray($minArray);
    // array_splice()
    $input = array("red", "green", "blue", "yellow");
    echo '$input до применения array_splice():<br>';
    printArray($input);
    array_splice($input, 2);
    echo '$input after применения array_splice():<br>';
// $input теперь array("red", "green")
    printArray($input);
    $input = array("red", "green", "blue", "yellow");
    array_splice($input, 1, -1);
// $input теперь array("red", "yellow")
    echo '$input after применения array_splice($input, 1, -1):<br>';
    printArray($input);
    $input = array("red", "green", "blue", "yellow");
    array_splice($input, 1, count($input), "orange");
    echo '$input after применения array_splice($input, 1, count($input), "orange"):<br>';
    printArray($input);
// $input теперь array("red", "orange")

    $input = array("red", "green", "blue", "yellow");
    array_splice($input, -1, 1, array("black", "maroon"));
    echo '$input after применения array_splice($input, -1, 1, array("black", "maroon")):<br>';
    printArray($input);
// $input теперь array("red", "green", "blue", "black", "maroon")

    $input = array("red", "green", "blue", "yellow");
    array_splice($input, 3, 0, "purple");
    echo '$input after применения array_splice($input, 3, 0, "purple"):<br>';
    printArray($input);
// $input теперь array("red", "green", "blue", "purple", "yellow");
//    Пример #1 Пример использования shuffle()
    echo 'Example shuffle(range(1,20)):<br>';
    $numbers = range(1, 20);
    shuffle($numbers);
    foreach ($numbers as $number) {
        echo "$number ";
    }
    echo '<br>';
    printArray($numbers);
    echo 'Выберем 3 случайных элемента массива $numbers: <br>';
    $keyFromNumbers = array_rand($numbers, 3);
    printArray($keyFromNumbers);
//    echo $numbers[$keyFromNumbers[0]].' '.$keyFromNumbers[$keyFromNumbers[1]].' '.$numbers[$keyFromNumbers[2]].'<br>';
    echo $numbers[$keyFromNumbers[0]] . '<br>';
    echo $numbers[$keyFromNumbers[1]] . '<br>';
    echo $numbers[$keyFromNumbers[2]] . '<br>';
//    echo $numbers[$keyFromNumbers[0]].'<br>';
//    Пример #1 Пример использования key()
    echo 'Example key(): <br>';
    $array = array(
        'fruit1' => 'apple',
        'fruit2' => 'orange',
        'fruit3' => 'grape',
        'fruit4' => 'apple',
        'fruit5' => 'apple');

// этот цикл выведет все ключи ассоциативного массива,
// значения которых равны "apple"
    while ($fruit_name = current($array)) {
        if ($fruit_name == 'apple') {
            echo key($array) . '<br />';
        }
        next($array);
    }
    //Пример #1 Пример использования current() и дружественных функций
    echo 'current() example <br>';
    $transport = array('foot', 'bike', 'car', 'plane');
    printArray($transport);
    $mode = current($transport); // $mode = 'foot';
    echo 'current() = ' . $mode . '<br>';
    $mode = next($transport);    // $mode = 'bike';
    echo 'next() = ' . $mode . '<br>';
    $mode = current($transport); // $mode = 'bike';
    echo 'current() = ' . $mode . '<br>';
    $mode = prev($transport);    // $mode = 'foot';
    echo 'prev() = ' . $mode . '<br>';
    $mode = end($transport);     // $mode = 'plane';
    echo 'end() = ' . $mode . '<br>';
    $mode = current($transport); // $mode = 'plane';
    echo 'current() = ' . $mode . '<br>';
    $mode = reset($transport);
    echo 'reset() = ' . $mode . '<br>'; // $mode = 'foot';
//    Пример #1 Примеры использования each()
    echo 'Применение функции each():<br>';
    $foo = array("bob", "fred", "jussi", "jouni", "egon", "marliese");
    printArray($foo);
    $bar = each($foo);
    printArray($bar);
    echo 'Next example for each() with associated array: <br>';
    $foo = array("Robert" => "Bob", "Seppo" => "Sepi");
    $bar = each($foo);
    printArray($foo);
    printArray($bar);
//    Пример #2 Обход массива функцией each()
    $fruit = array('a' => 'apple', 'b' => 'banana', 'c' => 'cranberry');
    printArray($fruit);
//    reset($fruit);
    end($fruit);
    while (list($key, $val) = each($fruit)) {
        echo "$key => $val\n";
    }
//    Пример #1 Пример использования reset()
    echo 'reset() example <br>';
    $array = array('первый шаг', 'второй шаг', 'третий шаг', 'четвертый шаг');
    printArray($array);
// по умолчанию указатель указывает на первый элемент
    echo 'current($array)<br>';
    echo current($array) . "<br />\n"; // "первый шаг"

// пропускаем два шага
    next($array);
    next($array);
    echo 'next($array); next($array)<br>';
    echo 'current($array)<br>';
    echo current($array) . "<br />\n"; // "третий шаг"

// сбрасываем указатель, тем самым возвращаемся к первому шагу
    reset($array);
    echo 'reset($array)<br>';
    echo 'current($array)<br>';
    echo current($array) . "<br />\n"; // "первый шаг"
    echo 'prev($array)<br>';
    echo 'pos($array)<br>';
    prev($array);
    echo pos($array) . '<br>';
    echo 'pos() example pos()===each() <br>';
    $countries = array("Brazil", "England", "Japan", "France");
    printArray($countries);
    // Get the current position
    echo 'pos($countries) = ' . pos($countries) . '<br>'; // print Brazil

    // Go to next position
    echo 'next() = ' . next($countries) . '<br>'; // print England

    // Current position
    echo 'pos() = ' . pos($countries) . '<br>'; //  print England

    // Previous position
    echo 'prev() = ' . prev($countries) . '<br>'; // print Brazil

    // End Position
    echo 'end() = ' . end($countries) . '<br>'; // print France

    // Current position
    echo 'pos() = ' . pos($countries) . '<br>'; // print France
//    compact — Создает массив, содержащий названия переменных и их значения
    $var1 = 'первая переменная';
    $var2 = 'вторая';
    $var3 = 'третья';
    $var4 = 'fourth';
    $var5 = 'fifth';
    $var6 = 'six';
    $var7 = 'sevens';
    $var8 = 'some var';
    echo 'Example for compact() function: <br>';
    $result = compact('var1', 'var2', 'var3', 'var4', 'var5', 'var6', 'var7', 'var8');
    printArray($result);
    echo 'Example for compact() from documentation php.net <br>';
    $city  = "San Francisco";
    $state = "CA";
    $event = "SIGGRAPH";

    $location_vars = array("city", "state");

    $result = compact("event", "nothing_here", $location_vars);
    printArray($result);
    $forExtract = extract($result);
    echo $event.' in '.$city.'<br>';
//    extract — Импортирует переменные из массива в текущую таблицу символов
    /* Предположим, что $var_array - это массив, полученный в результате
   wddx_deserialize */

    $size = "large";
    $var_array = array("color" => "blue",
        "size"  => "medium",
        "shape" => "sphere");
    extract($var_array, EXTR_PREFIX_SAME, "wddx");

    echo "$color, $size, $shape, $wddx_size\n";
}

someArrays();
?>

</body>
</html>