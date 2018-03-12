<?php
/**
 * Created by PhpStorm.
 * User: Я
 * Date: 10.03.2018
 * Time: 19:07
 */

class Constructor
{
    private $var;
    public function __construct()
    {
        echo 'Вызов конструктора <br>';
        $this->var = 100;
    }

    public function anarchist()
    {
        $this->__construct();
    }
}