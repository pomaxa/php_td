<?php
/**
 * Created by JetBrains PhpStorm.
 * User: pomaxa
 * Date: 1/6/12
 * Time: 5:31 PM
 * To change this template use File | Settings | File Templates.
 */
class Arm
{

    private $minAttackPoints = 1;
    private $maxAttackPoints = 15;



    public function getName()
    {
        return 'blah';
    }

    public function getAttackPoints()
    {
        return rand($this->minAttackPoints, $this->maxAttackPoints);
    }
}
