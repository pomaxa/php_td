<?php
/**
 * Created by JetBrains PhpStorm.
 * User: pomaxa
 * Date: 1/5/12
 * Time: 10:26 PM
 * To change this template use File | Settings | File Templates.
 */

class Fight
{

    function action(baseUnit $atacker, baseUnit $defender)
    {
        if($atacker->getDistanceTillTargetObject())
        {
            $this->longRange($atacker, $defender);
        }
        else
        {
            $this->closeRange($atacker, $defender);
        }
    }



    function closeRange(baseUnit $atacker, baseUnit $defender)
    {
        $defender->changeHp($atacker->getAttackPoints());
    }

    function longRange(baseUnit $atacker, baseUnit $defender)
    {
        $defender->changeHp($atacker->getAttackPoints());
    }
}