<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Sort arrays</title>
    <link rel="stylesheet" href="assets/css/bootstrap.min.css">
</head>
<body>
<script src="http://code.jquery.com/jquery-latest.js"></script>
<script src="assets/js/bootstrap.min.js"></script>
<?php
# listing 6.51 from Кузнецов, Симдянов - PHP & MySQL
$number = [2, 1, 4, 3, 5];
echo 'до сортировки: <br>';
for ($i = 0; $i < count($number); $i++)
{
    echo $number[$i].' ';
}
sort($number);
echo '<br> после сортировки: <br>';
for ($i = 0; $i < count($number); $i++)
{
    echo $number[$i].' ';
}
$nabor_slov = ['one', 'two', 'three', 'abs', 'four', 'five', 'apocalyptica', 'tree.js', 'dimension', 'rot', 'div', 'grad',
    'bessel function', 'white noize', 'neman function', 'laplas', 'hevisaid', 'dimension', 'nonlinear systems',
    'nonlinear stohastical dynamics', 'ricci flows'];
#
function array_writeln($arr)
{
    echo '<pre>';
    print_r($arr);
    echo '</pre>';
}
#
array_writeln($nabor_slov);
sort($nabor_slov);
echo 'after sort()<br>';
array_writeln($nabor_slov);
#
function array_write($arr)
{
    for ($i = 0; $i < count($arr); $i++)
    {
        echo $arr[$i].' ';
    }
    echo '<br>';
}
#
$number = [2 ,1, 4, 3, 5];
echo 'до сортировки: <br>';
array_write($number);
rsort($number);
echo '<br> после сортировки: <br>';
array_write($number);
$array = ['a'=>'one',
        'b'=>'two',
        'c'=>'three',
        'd'=>'five'
        ];
array_write_assoc($array);
asort($array);
#
function array_write_assoc($arr)
{
    foreach ($arr as $key=>$value)
    {
        echo "$key=>$value".' ';
    }
    echo '<br>';
}
#
array_write_assoc($array);
arsort($array);
array_write_assoc($array);
$arr = ['a'=>'one', 'd'=>'four', 'c'=>'three', 'b'=>'two'];
array_write_assoc($arr);
echo 'array after ksort():<br>';
ksort($arr);
array_write_assoc($arr);
echo 'array after krsort():<br>';
krsort($arr);
array_write_assoc($arr);
$arr_first = $arr_second = ['file12.txt', 'file10.txt', 'file2.txt', 'file1.txt'];
echo 'Массив для сортировки: <br>';
array_writeln($arr_second);
sort($arr_first);
echo 'Обычная сортировка: <br>';
array_writeln($arr_first);
natsort($arr_second);
echo 'Естественная сортировка: <br>';
array_writeln($arr_second);
$arr1 = [3, 4, 2, 7, 1, 5];
$arr2 = ['world', 'Hello', 'yes', 'no', 'apple', 'wet'];
array_writeln($arr1);
array_writeln($arr2);
echo 'After array_multisort();<br>';
array_multisort($arr1, $arr2);
array_writeln($arr1);
array_writeln($arr2);
echo 'Модифицированный вариант сортировки в обратном порядке: <br>';
$arr1 = [3, 4, 2, 7, 1, 5];
$arr2 = ['world', 'Hello', 'yes', 'no', 'apple', 'wet'];
array_multisort($arr1, SORT_DESC, SORT_NUMERIC, $arr2);
array_writeln($arr1);
array_writeln($arr2);
# Пример #1 Пример использования usort()
echo 'Пример #1 Пример использования usort():<br>';
function cmp($a, $b)
{
    if ($a == $b) {
        return 0;
    }
    return ($a < $b) ? -1 : 1;
}

$a = array(3, 2, 5, 6, 1);

usort($a, "cmp");

foreach ($a as $key => $value) {
    echo "$key: $value\n";
}
echo '<br>Пример #2 Пример использования функции usort() с многомерными массивами <br>';
function cmp2($a, $b)
{
    return strcmp($a["fruit"], $b["fruit"]);
}

$fruits[0]["fruit"] = "lemons";
$fruits[1]["fruit"] = "apples";
$fruits[2]["fruit"] = "grapes";

usort($fruits, "cmp2");

while (list($key, $value) = each($fruits)) {
    echo "\$fruits[$key]: " . $value["fruit"] . "\n";
}
echo '<br>Пример #4 Пример использования функции usort() с применением анонимной функции для сортировки многомерного массива';
$array[0] = array('key_a' => 'z', 'key_b' => 'c');
$array[1] = array('key_a' => 'x', 'key_b' => 'b');
$array[2] = array('key_a' => 'y', 'key_b' => 'a');
array_writeln($array[0]);
array_writeln($array[1]);
array_writeln($array[2]);
function build_sorter($key) {
    return function ($a, $b) use ($key) {
        return strnatcmp($a[$key], $b[$key]);
    };
}

usort($array, build_sorter('key_b'));

foreach ($array as $item) {
    echo $item['key_a'] . ', ' . $item['key_b'] . "\n";
}
?>
</body>
</html>
