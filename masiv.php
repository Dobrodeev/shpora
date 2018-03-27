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
  for ($i = 0; $i <= count($arr); $i++)
  {
    echo $arr[$i]." ";
  }
echo '<br>';
  $arr["first"] = "PHP";
  $arr["second"] = "MySQL";
  $arr["third"] = "Apache";
  foreach($arr as $key=>$value) {
    echo "$key = $value <br>";
  }
  echo 'А теперь массив без ключей: <br>';
  foreach($arr as $value) {
      echo $value.'<br>';
  }
$unsetArray = [1, 2, 3, 4, 5, 6, 7, 8, 9, 10, 11, 12, 13];
$countArray = count($unsetArray);
echo 'Массив до удаления четных элементов <br>';
echo '<pre>';
print_r($unsetArray);
echo '</pre>';
for ($i=0; $i < count($unsetArray); $i++) {
  if ($unsetArray[$i]%2 == 0) {
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

for ($i=0; $i < $countArray ; $i++)
{
  if (isset($unsetArray[$i])) {
    echo "Элемент $unsetArray[$i] нечетный <br>";
  }
  else echo $unsetArray[$i].'<br>';
}
echo '<br>Пример использования функции print_r()<br>';
$a = array ('a' => 'apple', 'b' => 'banana', 'c' => array ('x', 'y', 'z'));
print_r ($a);
echo '<br>';
$b = array ('m' => 'monkey', 'foo' => 'bar', 'x' => array ('x', 'y', 'z'));
$results = print_r($b, true); // $results теперь содержит вывод print_r
echo '<pre>';
echo $results;
echo '</pre>';
echo '<br>';
$varExample = 10;
$result = $varExample%2;
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
echo __FILE__.'<br>';
echo __LINE__.'<br>';

function forExample()
{
    echo __FUNCTION__.'<br>';
}
echo PHP_VERSION.'<br>';
echo PHP_OS.'<br>';
echo '<hr>';
$x = rand(0,18);
echo 'x = '.$x.'<br>';
echo $x%2 == 0 ? 'четнное число' : 'нечетное';
echo '<br>';
echo __DIR__.' Это наша директория <br>';
?>
<form>
    <fieldset>
        <legend>Наша форма</legend>
<!--        <label>Описание поля</label>-->
        <input type="text" placeholder="Введите имя…"><br>
        <input type="text" placeholder="Введите фамилию…"><br>
        <input type="password" placeholder="Введите пароль..."><br>
<!--        <span class="help-block">Подсказка или доп. информация.</span><br>-->
        <label class="checkbox">
            <input type="checkbox"> Нажми здесь и выдели checkbox
        </label><br>
        <label for="">Выбираем пол</label> <br>
        <label class="radio">
            <input type="radio" name="optionsRadios" id="optionsRadios1" value="option1" checked>
            Мужской
        </label><br>
        <label class="radio">
            <input type="radio" name="optionsRadios" id="optionsRadios2" value="option2">
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
        <select name="cityes" id="">
            <option value="Kiev">Kiev</option>
            <option value="Kharcov">Kharcov</option>
            <option value="Lvov">Lvov</option>
            <option value="Lutsk">Lutsc</option>
            <option value="Sloviansc">Sloviansc</option>
            <option value="Donetsc">Donetsc</option>
        </select><br><br>
        <button type="submit" class="btn">Отправить</button>
    </fieldset>
</form>
</body>
</html>
