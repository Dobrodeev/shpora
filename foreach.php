<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="assets/css/bootstrap.min.css">
    <title>Document</title>
</head>
<body>
<script src="http://code.jquery.com/jquery-latest.js"></script>
<script src="assets/js/bootstrap.min.js"></script>
    <?php
//    foreach (массив as $ключ=>$значение)
//    команды;
    $names["Иванов"] = "Андрей";
    $names["Петров"] = "Борис";
    $names["Волков"] = "Сергей";
    $names["Макаров"] = "Федор";
    foreach ($names as $key => $value) {
        echo "<b>$value $key</b><br>";
    }
    print ('<br>');
//    foreach (массив as $значение)
    // команды;
    $names[] = "Андрей";
    $names[] = "Борис";
    $names[] = "Сергей";
    $names[] = "Федор";
    foreach ($names as $value) {
        echo "<b>$value</b><br>";
    }
    $arr=array('M_PI'=>'число пи', 'M_E'=>'число Эйлера');
    print_r($arr);
    ?>


</body>
</html>
