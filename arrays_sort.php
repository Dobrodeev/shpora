<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Sort arrays</title>
    <link rel="stylesheet" href="assets/css/bootstrap.min.css">
</head>
<body>
<script src="http://code.jquery.com/jquery-latest.js"></script>
<script src="assets/js/bootstrap.min.js"></script>
<?php
# listing 6.51 from Кузнецов, Симдянов - PHP & MySQL
$number = [2, 1, 4, 3, 5];
echo 'до сортировки: <br>';
for ($i = 0; $i < count($number); $i++)
{
    echo $number[$i].' ';
}
sort($number);
echo '<br> после сортировки: <br>';
for ($i = 0; $i < count($number); $i++)
{
    echo $number[$i].' ';
}
$nabor_slov = ['one', 'two', 'three', 'abs', 'four', 'five', 'apocalyptica', 'tree.js', 'dimension', 'rot', 'div', 'grad'];
function array_writeln($arr)
{
    echo '<pre>';
    print_r($arr);
    echo '</pre>';
}
array_writeln($nabor_slov);
sort($nabor_slov);
echo 'after sort()<br>';
array_writeln($nabor_slov);
?>
</body>
</html>
