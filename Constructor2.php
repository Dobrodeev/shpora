<?php
/**
 * Created by PhpStorm.
 * User: Я
 * Date: 12.03.2018
 * Time: 18:15
 */

class Constructor2
{
    private $X;
    private $Y;

    public function __construct($x, $y)
    {
        $this->X = $x;
        $this->Y = $y;
        echo 'Вызов конструктора <br>';
    }

    public function get_x()
    {
        return $this->X;
    }

    public function get_y()
    {
        return $this->Y;
    }

    public function print_msg()
    {
        echo 'Вызов метода <br>';
    }

    public function __destruct()
    {
        // TODO: Implement __destruct() method.
        echo 'Вызов деструктора <br>';
    }
}