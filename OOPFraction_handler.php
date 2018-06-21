<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>OOP</title>
    <link rel="stylesheet" href="assets/css/bootstrap.min.css">
</head>
<body>
<script src="assets/jquery-3.2.1.js"></script>
<script src="assets/js/bootstrap.min.js"></script>
<?php
//$fr4 = new Animal();
//$fr3 = new FractionOutput(5,5);
//require_once 'Fraction.php';
spl_autoload_register(function ($class) {
    include $class . '.php';
});
$fr1 = new Fraction(1,2);
$fr2 = new Fraction(3,5);

$fr1->addFraction($fr2);
$fr1->addFraction($fr2);

echo $fr1->toString();
echo '<br>После упрощения: <br>';
$fr1->simplify();
echo $fr1->toString();
echo '<hr>';
$fr3 = new Fraction(16000, 800);
echo $fr3->toString();
echo '<br>После упрощения: <br>';
$fr3->simplify();
echo $fr3->toString();
//$fraction = new BeautyFractionOutput();
//$fraction->printFraction($fr1);
//$fraction->simplify();

?>
</body>
</html>
