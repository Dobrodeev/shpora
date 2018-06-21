<?php
class BeautyFractionOutput extends Fraction
{

    public function printFraction()
    {
        //need code for printing in view:


        /*
        324532
        ------
        23

        1
        -
        2


        10
        --
        15

        */

        echo $this->numerator.'<br>--<br>'.$this->denominator;
    }
}