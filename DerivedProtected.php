<?php
/**
 * Created by PhpStorm.
 * User: Я
 * Date: 12.03.2018
 * Time: 23:54
 */

class DerivedProtected extends BaseProtected
{
    public function __construct($var)
    {
        parent::__construct($var);
    }
}