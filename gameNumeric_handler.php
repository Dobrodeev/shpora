<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Game Numeric</title>
    <link rel="stylesheet" href="assets/css/bootstrap.min.css">
</head>
<body>
<script src="assets/jquery-3.2.1.js"></script>
<script src="assets/js/bootstrap.min.js"></script>
</body>
</html>
<?php
if (isset($_POST['number']) && is_numeric($_POST['number']))
{
    echo $_POST['number'].'<br>';
    $getNumber = $_POST['number'];
    $rand = mt_rand(5,8);
    if ($getNumber < 5)
        echo 'Small number<br>';
    elseif ($getNumber > 8)
        echo 'Big number<br>';
    elseif ($getNumber == $rand)
        echo 'Вы угадали число<br> <a href="gameNumeric.php">Играть еще</a>';
    elseif ($getNumber != $rand && $getNumber > 5 && $getNumber < 8)
        echo ' Не угадали. Попробуйте еще. <br> <a href="gameNumeric.php">Играть еще</a>';
    else
        echo 'Other variant.<br>';
}
elseif (isset($_POST['number']) && is_string($_POST['number']))
{
    echo 'Введите чило, а не букву. <br>';
}
?>

