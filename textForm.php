<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="stylesheet" href="assets/css/bootstrap.min.css">
</head>
<body>
<script src="http://code.jquery.com/jquery-latest.js"></script>
<script src="assets/js/bootstrap.min.js"></script>
<?php
echo '<h3>Тестовая форма</h3>';
echo "<p>Имя: <b>".$_POST['textfield']."</b></p>";
echo "<p>Пароль: <b>".$_POST['pswfield']."</b></p>";
echo "<p>Переданное значение скрытого поля hidden: <b>".$_POST['hidden']."</b></p>";
echo '<hr size="1">';
echo '<p>Были включены следующие независимые переключатели: </p>';
if (isset($_POST['checkbox1'])) echo "<p><b>Первый</b></p>";
if (isset($_POST['checkbox2'])) echo "<p><b>Второй</b></p>";
if (isset($_POST['checkbox3'])) echo "<p><b>Третий</b></p>";
echo '<hr size="1">';

if (isset($_POST['radiobutton']))
{
    echo '<p>Был выбран независимый переключатель со следующим значением: ';
    if ($_POST['radiobutton']==='Красная гвардия') echo '<b>'.$_POST['radiobutton'].'</b>';
    if ($_POST['radiobutton']==='Белая гвардия') echo '<b>'.$_POST['radiobutton'].'</b>';
    echo '</p>';
}
else echo '<p>Ни один из независимых переключателей не был выбран</p>';
echo '<hr size="1">';
echo '<p>Значение многострочного текстового поля :</p>';
echo "<p><b>".$_POST['textarea']."</b></p>";
echo '<hr size="1">';
echo "<p>Значение списка с единственным выбором: <b>".$_POST['day_s']."</b></p>";
echo '<hr size="1">';
echo '<p>Значения списка с множественным выбором: </p>';
foreach ($_POST['day_m'] as $keys=>$values) echo "<b>$values</b><br>";
echo '<hr size="1">';
?>
</body>
</html>