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
<script src="assets/jquery-3.2.1.js"></script>
<script src="assets/js/bootstrap.min.js"></script>

<?php
require_once 'OOP1.php';
$simpleObject = new OOP1();
$simpleObject->name = 'Victor';
$simpleObject->surnanme = 'Martines';
$simpleObject->age = 45;

echo $simpleObject->name.' '.$simpleObject->surnanme.' '.$simpleObject->age.'<br>';

$simpleObject->setMoney(1000);
echo 'He has '.$simpleObject->getMoney().' uan <br>';
//echo $simpleObject->name;$simpleObject->getName();
echo $simpleObject->getAllInfo();
?>
</body>
</html>