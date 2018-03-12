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
<?php
spl_autoload_register(function ($class_name)
{
    include $class_name.'.php';
});
$object = new Constructor2(10, 20);
echo $object->get_x().' '.$object->get_y();
echo '<br>';
$object->print_msg();
echo 'Произвольный текст <br>';
?>
</body>
</html>
