<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Наследование</title>
</head>
<body>
<?php
/**
 * Created by PhpStorm.
 * User: Я
 * Date: 12.03.2018
 * Time: 23:33
 */
spl_autoload_register(function ($class_name)
{
    include $class_name.'.php';
});
$baseObject = new Base();
echo '<pre>';
print_r($baseObject);
print_r(get_class_methods($baseObject));
echo '</pre>';

$derivedObject = new Derived();
echo '<pre>';
print_r($derivedObject);
print_r(get_class_methods($derivedObject));
echo '</pre>';

?>
</body>
</html>
