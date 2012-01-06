<?php
/**
 * Created by JetBrains PhpStorm.
 * User: pomaxa
 * Date: 1/5/12
 * Time: 11:58 PM
 * To change this template use File | Settings | File Templates.
 */
class Tower
{

    private $id;

    private $baseMeleeDefence;
    private $baseCloseRangeDefence;
    private $baseLongRangeDefence;

    private $baseMeleeOffence;
    private $baseCloseRangeOffence;
    private $baseLongRangeOffence;

    private $hp;

    public function getHp(){
        return $this->getHp();
    }

    public function changeHp( $points)
    {
        //Logic for supper power resistence; :)? or not
        $this->hp = $this->hp - (int)$points;
    }


    function __construct($unitId)
    {
        $this->id=$unitId;
        /**
         * generate random char by DnD rules;
         */


        /**
         * calculate exp
         */
        //TODO:: race/class param
        $this->hp = ($this->con * $this->str) + ( $this->dex * $dice->r1d20() );
    }

}
