<?php
require_once ('regular.php');
if (isset($_POST['name']))
{
    if (preg_match("|^[-0-9a-z_]+@[-0-9a-z^\.]+\.[a-z]{2,6}$|i", $_POST['name']))
    {
        echo 'email is valid';
    }
    else
    {
        echo 'email is invalid';
    }
}
if (isset($_POST['number']) && isset($_POST['price']))
{
    if (!preg_match("|^[\d]*$|", $_POST['number']))
    {
        echo 'Неверный формат числа товарных позиций';
    }
    if (!preg_match("|^[\d]*[.,]?[\d]*$|", $_POST['price']))
    {
        echo 'Неверный формат цены';
    }
    echo number_format($_POST['number']*$_POST['price'], 2, '.', ' ');
}
$content = file_get_contents('regular.php');
$pattern = "|<title>(.*&?)</title>|si";
// извлекаем мазвание HTML страницы
if (preg_match($pattern, $content, $out))
{
    echo $out[1];
}