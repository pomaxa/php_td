<?php
/**
 * Created by JetBrains PhpStorm.
 * User: pomaxa
 * Date: 1/5/12
 * Time: 10:19 PM
 * To change this template use File | Settings | File Templates.
 */

require_once 'Fight.php';
require_once 'unit.php';

class Game
{
    public $maxUnitCount = 100;


    /**
     * @var mapObject
     */
    public $map;

    function __construct()
    {
        $unit1 = new Unit(1);
        $unit2 = new Unit(2);

        var_dump($unit1);
        echo "\n---------------\n";
        var_dump($unit2);
        echo "\n---------------\n";

        $f = new Fight();

        while($unit1->getHp() && $unit2->getHp())
        {

            $unit1KickPoints = $unit1->getKickPoint();
            $unit2KickPoints = $unit2->getKickPoint();

            $f->kick($unit1, $unit2);
            $f->shot($unit2, $unit1);

            echo " Unit-1: [ ". $unit1->getHp() ." ] kick -> ".$unit1KickPoints . " <- kick ".$unit2KickPoints." [ ".$unit2->getHp()."] \n";

            sleep(1);
        }

    }



}


$game = new Game();