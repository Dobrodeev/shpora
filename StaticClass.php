<?php
/**
 * Created by PhpStorm.
 * User: Я
 * Date: 15.03.2018
 * Time: 11:27
 */

class StaticClass
{
    public static $staticvar = 100;
    public function setStatic($var)
    {
        $this->staticvar = $val;
    }
}