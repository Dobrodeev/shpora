<?php
/**
 * Created by PhpStorm.
 * User: Я
 * Date: 12.03.2018
 * Time: 23:31
 */

class Derived extends Base
{
    public $val;
    public function printVal()
    {
        echo $this->val;
    }
}