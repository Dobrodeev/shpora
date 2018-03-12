<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>OOP</title>
</head>
<body>
<?php
spl_autoload_register(function ($class_name)
{
    include $class_name.'.php';
}
);

$obj = new Constructor();
$obj->__construct();
$obj->anarchist();
//echo '<pre>';
//print_r($obj);
//echo '</pre>';
?>
</body>
</html>
