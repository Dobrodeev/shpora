<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Foreach</title>
    <link rel="stylesheet" href="">
    <link rel="stylesheet" href="assets/css/bootstrap.min.css">
</head>
<body>
<script src="http://code.jquery.com/jquery-latest.js"></script>
<script src="assets/js/bootstrap.min.js"></script>
<?php
$arr = [];
$arr[] = 'Valera';
$arr[] = 'Igor';
$arr[] = 'Fedor';
$arr[] = 'Vane';
$arr[] = 'Kay';
echo var_dump($arr);
echo '<br><br>';
echo '<ol>';
for($i = 0; $i < count($arr); $i++)
{
    echo '<li>'.$arr[$i].'</li><br>';
}
echo '</ol>';
echo '<hr>';
//print_r($arr);
//echo var_dump($arr);
$students=[];
$students['Valera'] = 'level 4';
$students['Igor'] = 'level 5';
$students['Fedor'] = 'level 3';
$students['Vane'] = 'level 9';
$students['Kay'] = 'level 1';
echo var_dump($students);
echo '<br><br>';
foreach ($students as $key=>$name)
{
    echo $key.' '.$name.'<br>';
}
// Examples
  // Ассоциативный массив
  echo 'Ассоциативный массив';
  echo '<br><br>';
  $names["Иванов"] = "Иван";
  $names["Сидоров"] = "Николай";
  $names["Петров"] = "Петр";
  // В данном примере: фамилии - ключи ассоциативного массива
  // , а имена - элементы массива names
  foreach ($names as $key)
  {
      echo $key.'<br>';
  }
  // Многомерный массив
  $A["Ivanov"] = array("name"=>"Иванов И.И.", "age"=>"25", "email"=>"ivanov@mail.ru");
  $A["Petrov"] = array("name"=>"Петров П.П.", "age"=>"34", "email"=>"petrov@mail.ru");
  $A["Sidorov"] = array("name"=>"Сидоров С.С.", "age"=>"47", "email"=>"sidorov@mail.ru");

  echo $A["Ivanov"]["name"].'<br>'; // Выводит Иванов И.И.
  echo $A["Petrov"]["email"].'<br>'; // Выводит petrov@mail.ru

// Морской бой
$battle = [];
$n = 10;
$m = 3;
$matrica = [];
for($i = 0; $i < $m; $i++)
{
    for($j = 0; $j < $m; $j++)
    {
        $matrica[$i][$j] = rand(-4, 11);
        echo ' '.$matrica[$i][$j];
    }
}
echo '<br><br>';
var_dump($matrica);
echo '<pre>';
print_r($matrica);
echo '</pre>';
for($i = 0; $i < $n; $i++)
{
    for($j = 0; $j < $n; $j++)
    {
       $battle[$i][$j] = 0;
    }
}
echo var_dump($battle);
echo '<br><br>';

foreach ($battle as $row)
{
    foreach ($row as $element)
    {
        echo ' '.$element;
    }
    echo '<br>';
}

echo '<br><br>';
$battle[9][6] = "*";
$battle[9][7] = "*";
$battle[9][8] = "*";
$battle[9][9] = "*";

$battle[0][9] = '*';
$battle[1][9] = '*';
$battle[2][9] = '*';

$battle[7][7] = '*';
$battle[7][8] = '*';
$battle[7][9] = '*';

$battle[5][5] = '*';
$battle[5][6] = '*';

$battle[9][0] = '*';
$battle[9][1] = '*';

$battle[9][3] = '*';
$battle[9][4] = '*';

$battle[4][9] = '*';

$battle[0][7] = '*';

$battle[3][5] = '*';

$battle[7][2] = '*';

foreach ($battle as $row)
{
    foreach ($row as $element)
    {
        echo ' '.$element;
    }
    echo '<br>';
}



// 6.2. Ассоциативные и индексные массивы
// Создание ассоциативного массива. Листинг 6.12.
$number = array('one'=>'1', 'two'=>'2');
echo '<pre>';
print_r($number);
echo '</pre>';
// приобращении к элементам ассоциативного массива вместо индексов указываются соответствующие ключи(например строки: $arr['грязный'])
echo $number['one'];
echo '<br>';
echo $number['two'];
// ряд функций PHP предназначен для создания именно ассоциативных массивов
// array_combine($keys, $values) - создает ассоц. массив из ключей со значениями $values
// массив ключей
$keys = array('green', 'red', 'yellow');
// массив значений
$values = array('avocade', 'apple', 'banana');
$result = array_combine($keys, $values);
echo '<pre>';
print_r($result);
echo '</pre>';
// extract($var_array) - создает из асоц. массива переменные
$arr = array('event'=>'SIGGRAPH', 'city'=>'San Francisco', 'state'=>'CA');
echo '<pre>';
print_r($ship);
echo '</pre>';
extract($arr);
echo $city.'<br>';
echo $state.'<br>';
echo $event.'<br>';
// 6.3 Многомерные массивы. array of ships
$ship = array(
    'Пассажирские корабли' => array('Лайнер', 'Яхта', 'Паром'),
    'Военные корабли' => array('Авианосец', 'Линкор', 'Эсминец'),
    'Грузовые корабли' => array('Сормовский', 'Волго-Дон', 'Окский'),
    
    );
echo '<pre>';
print_r($ship);
echo '</pre>';
// 6.6. Обход массива. Листинг 6.29.
$number = array('1', '2', '3');
for ($i = 0; $i < count($number); $i++)
{ 
    echo $number[$i];
}
// 6.7. Цикл foreach 
// foreach ($array as [$key]=>$value)
echo '<br><br>';
$number = array('first'=>'1', 'second'=>'2', 'third'=>'3');
foreach ($number as $index => $value) {
    echo "$index = $value <br>";
}
// переменная $index для ключа массива необязательна
foreach ($number as $value) {
    echo $value;
}
echo '<br><br>';
// обход многомерных массивов в цикле
foreach ($ship as $key => $type)
{
    // вывод значений основных массивов
    echo "<b>$key</b><br>";
    foreach ($type as $ship) 
    {
        // вывод значений для каждого из мвссивов
        echo "<li>$ship</li><br>";
    }
}
// 7.1. Обьявление и вызов функции
//function get_sum()
//{
//    $sum = 10 + 5;
//    return $sum;
//}
//echo get_sum(10, 5).'<br>';
// 7.4. Условное обьявление функции
//  $variant = rand(1,2);
//if($variant==1)
//  $flag = true;
//else $flag = false;
//echo $variant.'<br>';
//if($flag)
//{
//    function get_sum()
//    {
//        $sum = 10 +5;
//        echo $sum;
//    }
//}
//// вызываем функцию, если переменная $flsg = TRUE
//if($flag) get_sum();
// 7.2. Параметры функции
//  function get_sum($left, $right)
//  {
//      $sum = $left + $right;
//      echo $sum.'<br>';
//  }
//  get_sum(10, 5);
//  Передача параметров по значению и ссылке
echo 'Example function(&var)<br>';
function get_sum(&$var)
{
    $var = $var + 5;
    return $var;
}
$new_var = 20;
echo 'new_var='.$new_var.'<br>';
echo get_sum($new_var).'<br>';
echo $new_var.'<br>';
?>  
</body>
</html>
