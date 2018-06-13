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