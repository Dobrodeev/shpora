<?php
/**
 * Created by PhpStorm.
 * User: Я
 * Date: 16.03.2018
 * Time: 19:12
 */
define("NAME", "cls");
class ConstClass
{
//    const NAME = "cls";

    public function method()
    {
        echo self::NAME;
        echo '<br>';
        echo ConstClass::NAME;
        echo '<br>';
    }

    public function getPoint()
    {
        return 'call method '.__METHOD__.
            '<br>class name: '.__CLASS__.
            '<br>in file: '.__FILE__.
            '<br>in strocke '.__LINE__;
    }
//    echo ConstClass::NAME;
}
//echo ConstClass::NAME;
echo ConstClass::getPoint();