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
    function kick(Unit $atacker, Unit $defender)
    {
        $defender->changeHp($atacker->getKickPoint());
    }

    function shot(Unit $atacker, Unit $defender)
    {
        $defender->changeHp($atacker->getKickPoint());
    }
}