<?php
/**
 * Created by JetBrains PhpStorm.
 * User: pomaxa
 * Date: 1/5/12
 * Time: 9:44 PM
 * To change this template use File | Settings | File Templates.
 */
require_once 'dice.php';




class Unit extends baseUnit
{

    private $id;
    /**
     * Base points;
     */
    private $str;
    private $dex;
    private $con;
    private $int;
    private $wis;
    private $cha;

    /**
     * calculated values;
     */
    private $hp;


    /**
     * Battle info
     */


    function getHp()
    {
        if($this->hp > 0 )
            return $this->hp;

        else
            return 0;
    }
    function changeHp( $points)
    {
        //Logic for supper power resistence; :)? or not
        $this->hp = $this->hp - (int)$points;
    }

    function __construct($unitId)
    {
       $this->id=$unitId;
       $dice = new Dice();
        /**
         * generate random char by DnD rules;
         */
       $this->cha = $dice->r4d6k3();
       $this->con = $dice->r4d6k3();
       $this->dex = $dice->r4d6k3();
       $this->str = $dice->r4d6k3();
       $this->wis = $dice->r4d6k3();
       $this->int = $dice->r4d6k3();
       /**
        * calculate exp
        */
       //TODO:: race/class param
       $this->hp = ($this->con * $this->str) + ( $this->dex * $dice->r1d20() );
    }

}