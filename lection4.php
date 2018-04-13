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
for ($x = 0; $x < 10; $x++)
    echo $x.' ';
echo '<br>';
//echo '<table border="1" width="50%" rules="all" class="table table-striped">';
echo '<table class="table table-striped table-bordered">';
for ($i = 1; $i < 10; $i++)
{
    echo '<tr>';
    for ($j = 1; $j < 10; $j++)
    {
        echo '<td>'.$i*$j.'</td>';
    }
    echo '</tr>';
}
echo '</table>';
?>
</body>
</html>