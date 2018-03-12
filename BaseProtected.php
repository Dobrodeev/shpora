<?php
/**
 * Created by PhpStorm.
 * User: Я
 * Date: 12.03.2018
 * Time: 23:52
 */

class BaseProtected
{
    private $var;
    protected function __construct($var)
    {
        $this->var = $var;
    }
}