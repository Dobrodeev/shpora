<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Lection 2</title>
</head>
<body>
<?php
/**
 * Created by PhpStorm.
 * User: Я
 * Date: 23.03.2018
 * Time: 17:28
 */
define('ROOT', $_SERVER['DOCUMENT_ROOT']);
echo ROOT.'<br>';
$masiv = array('M', 'K', 'Git', 27);
var_dump($masiv);
$x = '25.3';
floatval($x);
settype($x, int);
echo '<br>';
// переменная переменной
$name = 'Misha';
$$name = 'a';
echo $$name.'<br>';
?>

</body>
</html>
