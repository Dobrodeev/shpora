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
/**
 * Created by PhpStorm.
 * User: dobrodeev
 * Date: 11.06.2018
 * Time: 16:17
 */

class OOP1
{
    public $name;
    public $surnanme;
    public $age;
    public $country;
    private $money;
    private $cryptoMoney;

    public function getName()
    {
        return $this->name;
    }

    public function getSurname()
    {
        return $this->surnanme;
    }

    public function getAge()
    {
        return $this->age;
    }

    public function getAllInfo()
    {
        return $this->name.' '.$this->surnanme.' '.$this->age;
    }

    public function setMoney($money)
    {
        $this->money = $money;
    }

    public function getMoney()
    {
        return $this->money;
    }
}
?>
</body>
</html>