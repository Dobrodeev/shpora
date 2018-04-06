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
<script src="http://code.jquery.com/jquery-latest.js"></script>
<script src="assets/js/bootstrap.min.js"></script>
<?php
/**
 * Created by PhpStorm.
 * User: Я
 * Date: 23.03.2018
 * Time: 17:28
 */
define('ROOT', $_SERVER['DOCUMENT_ROOT']);
echo ROOT . '<br>';
$masiv = array('M', 'K', 'Git', 27);
#
echo '<pre>';
var_dump($masiv);
echo '</pre>';
#
echo '<pre>';
print_r($masiv);
echo '</pre>';
#
echo '<pre>';
var_export($masiv);
echo '</pre>';
#
$masiv[] = 17;
$masiv[] = 'Vue.js';
$x = '25.3';
$masiv[] = $x;
$masiv[] = 'const';
$masiv[] = 1995;
print_r($masiv);
echo '<br>';
$arr = array('PHP', 'MySQL', 'Apache');
for ($i = 0; $i <= count($arr); $i++) {
	echo $arr[$i] . " ";
}
echo '<br>';
$arr["first"] = "PHP";
$arr["second"] = "MySQL";
$arr["third"] = "Apache";
foreach ($arr as $key => $value) {
	echo "$key = $value <br>";
}
echo 'А теперь массив без ключей: <br>';
foreach ($arr as $value) {
	echo $value . '<br>';
}
$unsetArray = [1, 2, 3, 4, 5, 6, 7, 8, 9, 10, 11, 12, 13];
$countArray = count($unsetArray);
echo 'Массив до удаления четных элементов <br>';
echo '<pre>';
print_r($unsetArray);
echo '</pre>';
for ($i = 0; $i < count($unsetArray); $i++) {
	if ($unsetArray[$i] % 2 == 0) {
		unset($unsetArray[$i]);
	}
}
echo '<br>Удалили четные элементы из массива <br>';
echo '<pre>';
print_r($unsetArray);
echo '</pre>';
// foreach ($unsetArray as $key => $value) {
//   if (isset($unsetArray[$i])) {
//     echo "Элемент $unsetArray[$i] не определен <br>";
//   }
//   else {
//     echo $value.'<br>';
//   }

for ($i = 0; $i < $countArray; $i++) {
	if (isset($unsetArray[$i])) {
		echo "Элемент $unsetArray[$i] нечетный <br>";
	} else {
		echo $unsetArray[$i] . '<br>';
	}

}
echo '<br>Пример использования функции print_r()<br>';
$a = array('a' => 'apple', 'b' => 'banana', 'c' => array('x', 'y', 'z'));
print_r($a);
echo '<br>';
$b = array('m' => 'monkey', 'foo' => 'bar', 'x' => array('x', 'y', 'z'));
$results = print_r($b, true); // $results теперь содержит вывод print_r
echo '<pre>';
echo $results;
echo '</pre>';
echo '<br>';
define("D_Day", '1 May');
define('SOME_CONST', 'Some_const');
define('YEAR_BORN', 1991);
echo D_Day . ' ' . SOME_CONST . ' ' . YEAR_BORN . '<br>';
echo 'Постоянная Эйлера: ' . M_EULER . '<br>';
$varExample = 10;
$result = $varExample % 2;
echo "После %2: $result<br>";
echo 'приводим к типу переменную $x = ' . $x . '<br>';
echo floatval($x) . '<br>';
if (is_float($x)) {
	echo $x . ' теперь float<br>';
} else {
	echo 'не float<br>';
}

$x = '25.3';
echo intval($x) . '<br>';
$x = '25.3';
settype($x, float);
echo $x . '<br>';
echo '<br>';
settype($x, string);
if (is_string($x)) {
	echo '$x теперь string<br>';
}

// переменная переменной
$name = 'Misha';
echo $name . '<br>';
$$name = 'a';
echo $$name . '<br>';

echo 'Это просто строка <br>';
$stroca = 'Это просто строка';
echo $stroca . '<br>';
$url = 'http://www.malibu-sport.com.ua/kyiv/';
print_r(parse_url($url));
echo '<hr>';
echo '<br>Константы <br>';
echo __FILE__ . '<br>';
echo __LINE__ . '<br>';

function forExample() {
	echo __FUNCTION__ . '<br>';
}
echo PHP_VERSION . '<br>';
echo PHP_OS . '<br>';
echo '<hr>';
$x = rand(0, 18);
echo 'x = ' . $x . '<br>';
echo $x % 2 == 0 ? 'четнное число' : 'нечетное';
echo '<br>';
echo __DIR__ . ' Это наша директория <br>';
$str1 = 20;
$str2 = 10;
$str3 = 'in this case';
$str4 = 0.707;
$str5 = 'input & something';
$str6 = '20';
$str7 = '10';
$result1 = $str1 + $str2;
$result2 = $str1 + $str3;
$result3 = $str3 + $str5;
$result4 = $str1 + $str6;
$result5 = $str6 + $str7;
echo $str1 . ' ' . $str2 . ' ' . $str3 . ' ' . $str4 . ' ' . $str5 . '<br>';
echo $result1 . ' ' . $result2 . '<br>';
echo $result3 . ' ' . $result4 . ' ' . $result5 . '<br>';
function consoleWriteline($arr) {
	echo '<pre>';
	print_r($arr);
	echo '</pre>';
}
$strArray = [$str1, $str2, $str3, $str4, $str5, $str6, $str7];
$strKeys = ['красный', 'оранжевый', 'желтый', 'зеленый', 'голубой', 'синий', 'фиолетовый'];
$assocArray = array_combine($strKeys, $strArray);
$exampleArray = ['Gold diggin whole', 'I want your tits', 18, 'true', 'false'];
consoleWriteline($strKeys);
echo '<pre>';
print_r($strArray);
echo '</pre>';
echo '<pre>';
print_r($assocArray);
echo '</pre>';
$a = array('a' => 'apple', 'b' => 'banana', 'c' => array('x', 'y', 'z'));
print_r($a);
consoleWriteline($a);
function whatType($strArray) {
	$rand = rand(0, 6);
	if (is_double($strArray[$rand])) {
		echo $strArray[$rand] . ' is double<br>';
	} elseif (is_int($strArray[$rand])) {
		echo $strArray[$rand] . ' is int<br>';
	} elseif (is_string($strArray[$rand])) {
		echo $strArray[$rand] . ' is string<br>';
	} else {
		echo 'something else type<br>';
	}
}
whatType($strArray);
echo $exampleArray[4] . '<br>';
if (is_bool($exampleArray[4])) {
	echo 'varrable is true or false<br>';
}
?>
<form action="#" method="post" class="form-horizontal">
    <fieldset>
        <legend>Наша форма</legend>
<!--        <label>Описание поля</label>-->
        <input type="text" placeholder="Введите имя…" required name=arr['reg']['firstName']><br>
        <input type="text" placeholder="Введите фамилию…" required name=arr['reg']['lastName']><br>
        <input type="password" placeholder="Введите пароль..." required name=arr['reg']['pass']><br>
<!--        <span class="help-block">Подсказка или доп. информация.</span><br>-->
<!--        <label class="checkbox">-->
<!--            <input type="checkbox"> Нажми здесь и выдели checkbox-->
<!--        </label><br>-->
        <label for="">Выбираем пол</label> <br>
        <label class="radio">
            <input type="radio" name="optionsRadios" id="optionsRadios1" value="male" checked name="arr['reg']['sex']">
            Мужской
        </label><br>
        <label class="radio">
            <input type="radio" name="optionsRadios" id="optionsRadios2" value="female" name="arr['reg']['sex']">
            Женский
        </label><br>
<!--        -->
        <label for="">Ставим галочки</label><br>
        <label class="checkbox inline">
            <input type="checkbox" id="inlineCheckbox1" value="option1"> 1-я галочка
        </label>
        <label class="checkbox inline">
            <input type="checkbox" id="inlineCheckbox2" value="option2"> 2-я галочка
        </label>
        <label class="checkbox inline">
            <input type="checkbox" id="inlineCheckbox3" value="option3"> 3-я галочка
        </label><br>
        <label for="">Ваш город</label><br>
        <select name="arr['city'][]" id="">
            <option value="Kiev">Kiev</option>
            <option value="Kharcov">Kharcov</option>
            <option value="Lvov">Lvov</option>
            <option value="Lutsk">Lutsc</option>
            <option value="Sloviansc">Sloviansc</option>
            <option value="Donetsc">Donetsc</option>
        </select><br><br>
        <div class="form-actions">
            <input type="submit" value="Регистрация" name="go" class="btn btn-primary">
            <input type="reset" value="Сброс" name="Сброс" class="btn">
        </div>
    </fieldset>
</form>
<?php
if (isset($_POST['go'])) {
    echo '<pre>';
    print_r($_POST['arr']);
    echo '</pre>';
}
echo '<br>';
echo '<h4>Таблица умножения</h4>';
echo '<table border="1" width="50%" rules="all">';
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
echo '<br>';
$b = 0;
$c = 0;
echo '<h4>Палитра цветов</h4>';
echo "<table border='1'";
for ($a=0; $a<256; $a+=51){
    echo "<tr>";
    for ($b=0; $b<256; $b+=51){
        for ($c=0; $c<256; $c+=51)
        {
            echo "<td style=background-color:rgb($a,$b,$c);>&nbsp</td>";
        }
    }
}
echo "</tr>";
echo "</table>";
?>
</body>
</html>
