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
$x = '25.3';
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
?>

</body>
</html>
