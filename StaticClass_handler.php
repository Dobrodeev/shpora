<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Static var</title>
</head>
<body>

</body>
</html>
<?php
spl_autoload_register(function ($class)
{
    include $class.'.php';
});
$staticObject = new StaticClass();
echo '<pre>';
print_r($staticObject);
echo '</pre>';

$staticObject->setStatic(20);
echo StaticClass::$staticvar;

echo '<pre>';
print_r($staticObject);
echo '</pre>';
?>