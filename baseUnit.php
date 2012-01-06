<?php
/**
 * Created by JetBrains PhpStorm.
 * User: pomaxa
 * Date: 1/6/12
 * Time: 12:05 AM
 * To change this template use File | Settings | File Templates.
 */
class baseUnit
{

    private $id;//unique identifier
    /**
     * @var
     */
    private $baseMeleeDefence;
    private $baseCloseRangeDefence;
    private $baseLongRangeDefence;

    /**
     * @var
     */
    private $baseMeleeOffence;
    private $baseCloseRangeOffence;
    private $baseLongRangeOffence;

    /**
     * Base points;
     */
    private $str;
    private $dex;
    private $con;
    private $int;
    private $wis;
    private $cha;


    private $speed; // 0 if not able to move;

    /**
     * @var ArmObject... ?
     */
    private $arm;

    /**
     * @var int
     */
    private $hp;



    /**
     * Current point on map
     */
    private $currentDisposition;
    /**
     * Place to go... ?
     */
    private $currentDestination;



    /**
     * currently aiming at - unitId;
     */
    private $targetedObject;


    public function getDistanceTillTargetObject()
    {
        //TODO:: calc range between $currentDisposition and targetObject

        return rand(0,1);
    }


    public function getHp()
    {
        if($this->hp > 0 )
            return $this->hp;

        else
            return 0;
    }

    public function getArm()
    {
        if(empty($this->arm))
            return null; //TODO:: check this moment with someone;
        return $this->arm;
    }

    public function setArm($armObject)
    {
        $this->arm = $armObject;
    }

    public function changeHp( $points)
    {
        //Logic for supper power resistence; :)? or not
        $this->hp = $this->hp - (int)$points;
    }

    public function getSpeed()
    {
        return $this->speed;
    }

    public function changeSpeed($points)
    {
        $this->speed = $this->speed + $points;
    }

    /**
     * Override it for every unit;
     * @return int
     */
    public function getAttackPoints()
    {
        return 1;
    }

}
