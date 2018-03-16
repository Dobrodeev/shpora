<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Const</title>
</head>
<body>
<?php
spl_autoload_register(function ($class)
{
    include $class.'.php';
});
$constObject = new ConstClass();
if (defined('NAME')) echo 'we have const<br>';
else echo 'we have not const<br>';

if (defined('POSITION')) echo 'we have const<br>';
else echo 'we have not const';

//echo StaticClass::getPoint();
//$constObject->getPoint();
?>
</body>
</html>
