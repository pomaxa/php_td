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

    private $uid;
    private $minAttackPoints = 1;
    private $maxAttackPoints = 15;

    private $name= 'sword';

    /**
     * @var array
     */
    private $specials;



    public function getAttackPoints()
    {
        return rand($this->minAttackPoints, $this->maxAttackPoints);
    }

    public function setMaxAttackPoints($maxAttackPoints)
    {
        $this->maxAttackPoints = $maxAttackPoints;
    }

    public function getMaxAttackPoints()
    {
        return $this->maxAttackPoints;
    }

    public function setMinAttackPoints($minAttackPoints)
    {
        $this->minAttackPoints = $minAttackPoints;
    }

    public function getMinAttackPoints()
    {
        return $this->minAttackPoints;
    }

    public function setName($name)
    {
        $this->name = $name;
    }

    public function getName()
    {
        return $this->name;
    }

    /**
     * @param string $specialAbilityName
     */
    public function addSpecials($specialAbilityName)
    {
        $this->specials[] = $specialAbilityName;
    }

    public function removeSpecials($specialAbilityName)
    {
        if(isset($this->specials[$specialAbilityName]))
        {
            unset($this->specials[$specialAbilityName]);
        }
    }

    public function clearSpecials()
    {
        $this->specials = array();
    }

    /**
     * @return array
     */
    public function getSpecials()
    {
        return $this->specials;
    }

    public function setUid($uid)
    {
        $this->uid = $uid;
    }

    public function getUid()
    {
        return $this->uid;
    }
}
