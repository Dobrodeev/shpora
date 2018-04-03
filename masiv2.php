<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>for Consts</title>
	<link rel="stylesheet" href="assets/css/bootstrap.min.css">
</head>
<body>
<script src="http://code.jquery.com/jquery-latest.js"></script>
<script src="assets/js/bootstrap.min.js"></script>
<?php
define('WHAT_MAKE', 'Fucking my heart');
define('WHERE_CITY', 'Kiev');
define('WHEN_BACHELOUR', 'in 2014');
define('WHEN_EXPERT', 'in 2018');

$universityFirst = 'KPI';
$universitySecond = 'NAU';
$universityThird = 'KNU';
$universityFourth = 'Dragomanova';
$universityFifth = 'Ukraine';
$universitySix = 'Technicum';
$universityArray = [$universityFirst, $universitySecond, $universityThird, $universityFourth, $universityFirst, $universitySix];
$universityAccredetation = [4, 4, 4, 4, 4, 3];
$universityAll = array_combine($universityArray, $universityAccredetation);

function consoleWriteline($arr) {
	echo '<pre>';
	print_r($arr);
	echo '</pre>';
}

function consoleWritelineVar($arr) {
	echo '<pre>';
	var_dump($arr);
	echo '</pre>';
}

// $universityAll['Училище'] = 'Медицинское';
$universityAll['Училище'] = ['Медицинское', 'Энергетическое', 'Механическое'];
consoleWriteline($universityAll);
// consoleWritelineVar($universityAll);
echo __LINE__ . '<br>';
echo __FILE__ . '<br>';
// echo __FUNCTION__ . '<br>';
// echo __global__ . '<br>';
echo PHP_VERSION . '<br>';
echo PHP_OS . '<br>';

$exampleVar1 = '1991';
if (is_string($exampleVar1)) {
	echo 'is string<br>';
}
$intVar = (int) $exampleVar1;
if (is_int($intVar)) {
	echo 'is int<br>';
}

$lectionVar1 = '0219';
$lectionVar2 = 11;
echo (string) $lectionVar1 + (string) $lectionVar2 . '<br>';
// echo (int) $lectionVar1 + $lectionVar2 . '<br>';
$stringVar1 = ' is my mail index';
$stringVar2 = 'Maybe Kiev';
echo $lectionVar1 + $stringVar1 . '<br>';
echo $stringVar1 . ' ' . $stringVar2 . '<br>';
echo $stringVar2 + $stringVar1 . '<br>';
$url = 'https://www.kpu.ua/ru/89528/narushenye_prav_y_svobod_cheloveka_v_ukrayne_vystuplenye_petra_symonenko_v_ramkah_37j_sessyy_soveta_oon_po_pravam_cheloveka_zheneva_21_marta_2018_goda';
print_r(parse_url($url));
$url2 = "http://php.net/manual/ru/reserved.variables.server.php";
echo '<br>';
print_r(parse_url($url2));
echo '<hr>';
?>
<form action="#" method="post" name="reg">
  <input type="text" placeholder="Vase Imya"  required name="username"><br>
    <input type="text" placeholder="Vasha Familia"  required name="secondname"><br>
    <input type="password" placeholder="Parol" required name="userpass"><br>
    <input type="file" name="filename"><br>
    <span>Vash pol</span>
   <label for="m">M</label> <input type='radio' name="pol" value="m"  id="m">
   <label for="z">Z</label> <input type='radio' name="pol" value="z"  id="z"><br>
    <select name="gorod">
         <option value="Kiev">Kiev</option>
        <option value="Kharkov">Kharkiv</option>
        <option value="Lviv">Lviv</option>
    </select><br>
    <input type="submit" value="Регистрация" name="go">
</form>
<!--  -->
<form action="#" method="get" name="reg">
  <input type="text" placeholder="Vase Imya"  required name=arr['reg']['firstname']><br>
    <input type="text" placeholder="Vasha Familia"  required name=arr['reg']['lastname']><br>
    <input type="password" placeholder="Parol" required name=arr['reg']['password'] formmethod="post" ><br>
    <input type="file" name="arr[picture][filename]"><br>
    <span>Vash pol</span>
   <label for="m">M</label> <input type='radio' name="arr['reg'][pol]" value="m"  id="m">
   <label for="z">Z</label> <input type='radio' name="arr['reg'][pol]" value="z"  id="z"><br>
    <select name="arr[gorod][]">
         <option value="Kiev">Kiev</option>
        <option value="Kharkov">Kharkiv</option>
        <option value="Lviv">Lviv</option>
    </select><br>
    <input type="submit" value="Регистрация" name="go">
</form>
<?php
if (isset($_POST['go'])) {
	print_r($_POST);
}
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
	'ORIG_PATH_INFO');

echo '<table cellpadding="10">';
foreach ($indicesServer as $arg) {
	if (isset($_SERVER[$arg])) {
		echo '<tr><td>' . $arg . '</td><td>' . $_SERVER[$arg] . '</td></tr>';
	} else {
		echo '<tr><td>' . $arg . '</td><td>-</td></tr>';
	}
}
echo '</table>';

?>
</body>
</html>