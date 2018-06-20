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

$fr1 = new Fraction(1,2);
$fr2 = new Fraction(3,5);

$fr1->addFraction($fr1);
$fr1->addFraction($fr2);
$fraction = new BeautyFractionOutput();
$fraction->simplify();
echo $fr1->toString();
?>
</body>
</html>
