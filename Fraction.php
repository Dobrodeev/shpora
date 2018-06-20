<?php
/**
 * Created by PhpStorm.
 * User: dobrodeev
 * Date: 20.06.2018
 * Time: 16:20
 */

class Fraction
{
    private $numerator;
    private $denominator;

    public function addFraction (Fraction $fraction)
    {
        $this->numerator = $this->numerator * $fraction->denominator + $this->denominator * $fraction->numerator;
        $this->denominator = $this->denominator * $fraction->denominator;
    }

    public function __construct($num = 1, $denom = 1)
    {
        $this->numerator = $num;
        if ($denom == 0)
        {
            echo "Incorrect data";
            $this->denominator = 1;
        }
        else
        {
            $this->denominator = $denom;
        }
    }

    public function toString()
    {
        return $this->numerator . "/" . $this->denominator;
    }
}