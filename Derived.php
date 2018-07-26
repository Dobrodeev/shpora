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
//        echo $this->val;
        $this->protectedVar = 'protected varrable';
//        $this->
        $this->publicVar = 13;
        $this->val = 7;
        echo $this->publicVar;
        echo '<br>';
        echo $this->val;
        echo '<br>';
        echo $this->protectedVar;
    }
}