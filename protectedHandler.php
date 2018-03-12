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

</body>
</html>
<?php
/**
 * Created by PhpStorm.
 * User: Я
 * Date: 12.03.2018
 * Time: 23:55
 */
spl_autoload_register(function ($class)
{
    include $class.'.php';
});
//$protectedObject = new BaseProtected(20);
$protectedObject = new DerivedProtected(20);
echo '<pre>';
print_r($protectedObject);
echo '</pre>';
?>