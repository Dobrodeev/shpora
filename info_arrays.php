<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Arrays</title>
    <link rel="stylesheet" href="assets/css/bootstrap.min.css">
</head>
<body>
<script src="http://code.jquery.com/jquery-latest.js"></script>
<script src="assets/js/bootstrap.min.js"></script>
<?php
$array1 = [13, 'кабель', true];
$array2 = ['city'=>'Kiev', 'institute'=>'KPI'];
$array3 = array(
    array('строчка1', 'strochka2', 'strochka3'),
    array('something1', 'textures', 'poliglot'),
    array('poligon', '3D Max', 'cebab')
);
$edu = 'institute';
// нумерация массива начяинается с нуля 0 zero: 0, 1, 2, 3,...
echo $array1[1].'<br>'; // кабель
echo $array2['institute'].'<br>'; //KPI
echo $array3[2][1].'<br>'; //3D Max
echo $array2[$edu].'<br>'; //KPI
var_dump($array1);
echo '<br><br>';
//each - каждый
// первая итерация
foreach ($array1 as $st)
{
    echo $st.'<br>';//13
}
echo '<br><br>';
// втрорая итерация
foreach ($array2 as $st)
{
    echo $st.'<br>';//кабель
}
echo '<br>';
echo ' Двумерный ассоциативный массив <br>';
foreach ($array3 as $key=>$value)
{
    foreach ($value as $row)
    echo $key.' '.$row.'<br>';
}
$array1[] = 'еще елемент';
$array2['somewhere'] = 'outside';
$array3[2][] = 'retro';// вместо $array3[2] подставляется array('poligon', '3D Max', 'cebab') работаем теперь с array
//Пример использования in_array()
echo '<br>';
echo 'in_array() example<br>';
$os = array("Mac", "NT", "Irix", "Linux");
if (in_array("Irix", $os)) {
    echo "Нашел Irix";
}
if (in_array("mac", $os)) {
    echo "Нашел mac";
}
echo '<pre>';
print_r($os);
echo '</pre>';

echo '<hr>';
// Начиная с PHP 5.4
$array = [
    "foo" => "bar",
    "bar" => "foo",
];
echo '<pre>';
var_dump($array);
echo '</pre>';
// Кузнецов PHP listing 6.43
$car = ['жигули', 'волга', 'запорожец', 'ока'];
echo count($car).'<br>';
$arr = [
        [1, 2, 3, 4],
    [5, 6, 7, 8, 9, 10, 11, 12, 13, 14, 15, 16, 17, 18, 19, 20, 21, 22, 23, 24, 25, 26, 27]
];
echo 'многомерный массив (массив массивов) <br>';
echo '<pre>';
echo var_dump($arr);
echo '</pre>';
echo 'количество элементов в массиве <br>';
echo count($arr).'<br>';
echo count($arr[0]).'<br>';
echo count($arr[1]).'<br>';
echo count($arr, COUNT_RECURSIVE).'<br>';
$array = [1, 'fuck', 1, 'fuck', 'you'];
$new = array_count_values($array);
echo 'повторяющиеся элементы массива. <br>';
echo '<pre>';
print_r($new);
echo '</pre>';
// сумма элементов массива
$arr = [1, 2, 3, 4, 5];
$sum = array_sum($arr);
echo $sum.'<br>';
// случайные элементы массива
$arr = [1, 2, 3, 4, 5, 6, 7, 8, 9, 10];
$index = rand(0, count($arr) - 1);
echo $arr[$index].'<br>';
$arr_colors = ['blue', 'yellow', 'green', 'red', 'orange'];
$rand_keys = array_rand($arr_colors, 2);
echo 'случайные элементы массива. <br>';
echo '<pre>';
print_r($rand_keys);
echo '</pre>';
shuffle($arr);
echo 'перемешаный массив.<br>';
echo '<pre>';
print_r($arr);
echo '</pre>';
// сортировка массивов
$number = [2, 1, 4, 3, 5];
echo 'до сортировки: <br>';
for ($i = 0; $i < count($number); $i++)
{
    echo $number[$i].' ';
}
sort($number);
echo '<br>';
echo 'после сортировки: <br>';
for ($i = 0; $i < count($number); $i++)
{
    echo $number[$i].' ';
}
// смешанные ключи массива
$array_different = [
    "foo" => "bar",
    "bar" => "foo",
    100   => -100,
    -100  => 100,
];
echo '<pre>';
var_dump($array_different);
echo '</pre>';
// индексированный массив бес ключа
$array = array("foo", "bar", "hallo", "world");
var_dump($array);
// доступ к элементам массива
$array = array(
    "foo" => "bar",
    42    => 24,
    "multi" => array(
        "dimensional" => array(
            "array" => "foo"
        )
    )
);
echo '<pre>';
var_dump($array);
echo '</pre>';
//echo '<br>';
var_dump($array["foo"]);
echo '<br>';
var_dump($array[42]);
echo '<br>';
var_dump($array["multi"]["dimensional"]["array"]);
echo '<br>';
function array_writeln($arr)
{
    echo '<pre>';
    print_r($arr);
    echo '</pre>';
}

$arr = array(5 => 1, 12 => 2);
//echo '<pre>';
//print_r($arr);
//echo '</pre>';
array_writeln($arr);
$arr[] = 56;    // В этом месте скрипта это
// то же самое, что и $arr[13] = 56;
$arr["x"] = 42; // Это добавляет к массиву новый
// элемент с ключом "x"
unset($arr[5]); // Это удаляет элемент из массива
unset($arr);    // Это удаляет массив полностью

// Создаем простой массив.
$array = array(1, 2, 3, 4, 5);
print_r($array);
echo '<br>';
// Теперь удаляем каждый элемент, но сам массив оставляем нетронутым:
foreach ($array as $i => $value) {
    unset($array[$i]);
}
echo 'array after delete. <br>';
print_r($array);
echo '<br>';
// Добавляем элемент (обратите внимание, что новым ключом будет 5, вместо 0).
echo 'нумерация массива началась с 5.<br>';
$array[] = 6;
print_r($array);
echo '<br>';
// Переиндексация:
$array = array_values($array);
$array[] = 7;
echo 'array after переиндексации array_values()<br>';
print_r($array);
echo '<br>';
$array = array("size" => "XL", "color" => "gold");
print_r($array);
echo '<br>';
print_r(array_values($array));
echo '<br>';
//Функция unset() позволяет удалять ключи массива.
$a = array(1 => 'один', 2 => 'два', 3 => 'три');
unset($a[2]);
/* даст массив, представленный так:
   $a = array(1 => 'один', 3 => 'три');
   а НЕ так:
   $a = array(1 => 'один', 2 => 'три');
*/
//массив НЕ будет переиндексирован. Если вы действительно хотите поведения в
// стиле "удалить и сдвинуть", можно переиндексировать массив используя array_values().
$b = array_values($a);
// Теперь $b это array(0 => 'один', 1 => 'три')
echo '<br>';
// foreach examples
$arr = array("one", "two", "three");
array_writeln($arr);
echo 'use foreach($arr as $value): <br>';
foreach ($arr as $value) {
    echo "Значение: $value<br />\n";
}
echo 'use foreach($arr as $key=>$value)<br>';
foreach ($arr as $key => $value) {
    echo "Ключ: $key; Значение: $value<br />\n";
}
echo 'Многомерные массивы.<br>';
/* Пример 4: многомерные массивы */
$a = array();
$a[0][0] = "a";
$a[0][1] = "b";
$a[1][0] = "y";
$a[1][1] = "z";
//print_r($a);
array_writeln($a);
foreach ($a as $v1) {
    foreach ($v1 as $v2) {
        echo "$v2\n";
    }
}
?>
</body>
</html>
