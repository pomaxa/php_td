<?php
/**
 * Created by JetBrains PhpStorm.
 * User: pomaxa
 * Date: 1/6/12
 * Time: 12:05 AM
 * To change this template use File | Settings | File Templates.
 */
abstract class baseUnit
{

    protected $id;//unique identifier
    /**
     * @var
     */
    protected $baseMeleeDefence;
    protected $baseCloseRangeDefence;
    protected $baseLongRangeDefence;

    /**
     * @var
     */
    protected $baseMeleeOffence;
    protected $baseCloseRangeOffence;
    protected $baseLongRangeOffence;

    /**
     * Base points;
     */
    protected $str;
    protected $dex;
    protected $con;
    protected $int;
    protected $wis;
    protected $cha;


    protected $speed; // 0 if not able to move;

    /**
     * @var ArmObject... ?
     */
    protected $arm;

    /**
     * @var int
     */
    protected $hp;



    /**
     * Current point on map
     */
    protected $currentDisposition;
    /**
     * Place to go... ?
     */
    protected $currentDestination;



    /**
     * currently aiming at - unitId;
     */
    protected $targetedObject;


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
            return false; //TODO:: check this moment with someone;
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
        if($this->getArm())
        {
            //TODO:: implement weapon support
            return $this->baseAttackPoints();
        }
        else
        {

            $bap = $this->baseAttackPoints();
            if( $bap < $this->baseMeleeDefence )
            {
                return $this->baseMeleeDefence;
            }
            else
            {
                return $bap;
            }
        }
    }

    protected function baseAttackPoints()
    {
        $max = $this->dex * $this->str;


        $d = new Dice();

        $luck = $d->r4d6k3();


        if($luck >=10)
        {
            $bonus = 18 - $luck;
            if($bonus > 1)
            {
                return $this->str * $bonus;
            }
            else
            {
                return $this->str;
            }

        }
        else
        {
            echo "\n * * * miss [luck = {$luck}]\n";
            return 0;
        }

    }


    /**
     * debug methods
     */

    public function unitInfo()
    {
        echo "\n";
        echo "--------------------------------------------------------\n";
        echo "-  base stats                                          -\n";
        echo "- str: {$this->str}                                    -\n";
        echo "- dex: {$this->dex}                                    -\n";
        echo "- con: {$this->con}                                    -\n";
        echo "- int: {$this->int}                                    -\n";
        echo "- wis: {$this->wis}                                    -\n";
        echo "- cha: {$this->cha}                                    -\n";
        echo "--------------------------------------------------------\n";
        echo "--------------------------------------------------------\n";
        echo "--------------------------------------------------------\n";
        echo "--------------------------------------------------------\n";
        echo "--------------------------------------------------------\n";
    }
}
