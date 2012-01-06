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

    /**
     * Battle info
     */

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
        echo (($this->con * $this->str) + ( $this->dex * $dice->r1d20() ) );
       $this->hp = ($this->con * $this->str) + ( $this->dex * $dice->r1d20() );

        echo "\n\nhp: ".$this->hp;
    }

}