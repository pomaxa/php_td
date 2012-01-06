<?php
/**
 * Created by JetBrains PhpStorm.
 * User: pomaxa
 * Date: 1/5/12
 * Time: 9:49 PM
 * To change this template use File | Settings | File Templates.
 */

class Dice
{

    function r1d6()
    {
        return rand(1,6);
    }

    function r3d6()
    {
        return ( rand(1,6) + rand(1,6) + rand(1,6) ) ;
    }

    function r1d20()
    {
        return ( rand(1,20));
    }

    function r4d6k3()
    {
        $tmp[] = $this->r1d6();
        $tmp[] = $this->r1d6();
        $tmp[] = $this->r1d6();
        $tmp[] = $this->r1d6();


        sort($tmp); // first is lowest!

        $blah = array_shift($tmp); //remove first element

        return array_sum($tmp);
    }
}