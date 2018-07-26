<?php
/**
 * Created by PhpStorm.
 * User: Я
 * Date: 12.03.2018
 * Time: 23:30
 */

class Base
{
    public $publicVar;
    private $privateVar;
    protected $protectedVar;
    public function printVar()
    {
        echo $this->publicVar;
    }
}