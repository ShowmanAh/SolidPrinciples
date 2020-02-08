<?php
/**
 * Created by PhpStorm.
 * User: SHOWMAN
 * Date: 2/7/2020
 * Time: 4:09 AM
 */

namespace Classes;


use Interfaces\PlayerInterface;
use Players\KepperParent;
use Players\KepperChield;
use Interfaces\Keeper;

class KepperPlayer implements Keeper
{
/*
    public function play()
    {
        //sub should return the same behavior
        $kepper = new KepperParent();

        //$kepper = new KepperChield();
        echo $kepper->keeping();

       // echo 'GoalKepper';
    }
**/


    public function keeping()
    {
       echo "keeping";
    }
}