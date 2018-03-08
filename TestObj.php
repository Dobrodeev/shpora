<?php
/**
 * Created by PhpStorm.
 * User: Я
 * Date: 08.03.2018
 * Time: 14:23
 */

class TestObj
{
    var $name;

    function TestObj($name)
    {
        $this->name = $name;
    }

    /* Это статическая функция сравнения: */
    static function cmp_obj($a, $b)
    {
        $al = strtolower($a->name);
        $bl = strtolower($b->name);
        if ($al == $bl) {
            return 0;
        }
        return ($al > $bl) ? +1 : -1;
    }
}