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
<!-- <form action="#" method="post" name="reg">
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
    <input type="reset" value="Сброс" name="Сброс">
</form> -->
<!--  -->
<h4>Пример формы</h4>
<form action="#" method="post" name="reg" class="form-horizontal" enctype="multipart/form-data">
	<div class="control-group">
  <input type="text" placeholder="Vase Imya"  required name=arr['reg']['firstname']><br>
    <input type="text" placeholder="Vasha Familia"  required name=arr['reg']['lastname']><br>
    <input type="password" placeholder="Parol" required name=arr['reg']['password'] formmethod="post" ><br>
    <input type="file" name="userfile"><br><br>
    <span>Vash pol</span>
   <label for="m">M</label> <input type='radio' name="arr['reg'][pol]" value="m"  id="m">
   <label for="z">Z</label> <input type='radio' name="arr['reg'][pol]" value="z"  id="z"><br>
    <select name="arr[gorod][]">
         <option value="Kiev">Kiev</option>
        <option value="Kharkov">Kharkiv</option>
        <option value="Lviv">Lviv</option>
    </select><br><br>
    <div class="form-actions">
    <input type="submit" value="Регистрация" name="go" class="btn btn-primary">
    <input type="reset" value="Сброс" name="Сброс" class="btn">
    </div>
    </div>
</form>

<?php
$br = getenv("HTTP_USER_AGENT");
$infoLocal = getenv("HTTP_HOST");
echo $br.'<br>';
echo $infoLocal.'<br>';
if (isset($_POST['go']))
{
    echo '<pre>';
	print_r($_POST['arr']);
    echo '</pre>';
	if(isset($_FILES['userfile']))
	{
		if(is_uploaded_file($_FILES['userfile']['tmp_name']))
		{
			$filename = basename($_FILES['userfile']['name']);
			$uploaddir = 'files/';
			$uploadfile = $uploaddir.$filename;
			move_uploaded_file($_FILES['userfile']['tmp_name'], $uploadfile);
			echo "<img src='$uploadfile' alt='$filename'>";
		}
	}
}
// сделать чтобы загружалась только картинка .jpg и ограничить размер картинки
$max_image_width = 1280;
$max_image_height =960;
$max_image_size = 960 * 1280;
$valid_types = array("gif","jpg", "png", "jpeg");

if (isset($_FILES["userfile"])) {
if (is_uploaded_file($_FILES['userfile']['tmp_name'])) {
    $filename = basename($_FILES['userfile']['name']);
    $ext = substr($_FILES['userfile']['name'], 1 + strrpos($_FILES['userfile']['name'], "."));
// strpos --  Возвращает позицию первого вхождения подстроки

// получим массив свойств файла
    $size = GetImageSize($_FILES['userfile']['tmp_name']);

//проверим размер фото
    if (filesize($_FILES['userfile']['tmp_name']) > $max_image_size) {
        echo "Error: File size > " . $max_image_size;
    } elseif (!in_array($ext, $valid_types)) {
        echo 'Error: Invalid file type.';
    }
elseif(($size) && ($size[0] < $max_image_width) && ($size[1] < $max_image_height)){
                    $uploaddir = 'uploads/';
                    $uploadfile = $uploaddir.$filename;
                    move_uploaded_file($_FILES['userfile']['tmp_name'], $uploadfile);
                    echo "<img src='$uploadfile' alt='$filename' title='$filename' />";
                }
                else{
                    echo 'Error: invalid image properties.';
                }

        }
        else { echo "Error: empty file.";}
} else {
echo '
<form enctype="multipart/form-data" method="post">
Send this file: <input name="userfile" type="file">
<input type="submit" value="Send File">
</form>';
}
?>
</body>
</html>