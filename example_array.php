<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <?php
    /**
     * Created by PhpStorm.
     * User: Я
     * Date: 27.12.2017
     * Time: 17:03
     */
    $names["Иванов"] = "Андрей";
    $names["Петров"] = "Борис";
    $names["Волков"] = "Сергей";
    $names["Макаров"] = "Федор";
    foreach ($names as $key => $value) {
        echo "<b>$value $key</b><br>";
    }
    print("<br>");
    $names[] = "Андрей";
    $names[] = "Борис";
    $names[] = "Сергей";
    $names[] = "Федор";
    foreach ($names as $value) {
        echo "<b>$value</b><br>";
    }
//    continue
    $x=0;
    while ($x++<5) {
        if ($x==3) continue;
        echo "<b>Итерация $x</b><br>";
    }
    ?>
</body>
</html>
