<?php
/**
 * Created by PhpStorm.
 * User: Я
 * Date: 15.03.2018
 * Time: 11:41
 */

class StaticCounter
{
    public static $count = 0;
    public function __construct()
    {
        StaticCounter::$count++;
    }

    public function __destruct()
    {
        StaticCounter::$count--;
    }
}