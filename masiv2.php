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
consoleWritelineVar($universityAll);
?>
</body>
</html>