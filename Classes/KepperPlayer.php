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

class KepperPlayer implements PlayerInterface
{

    public function play()
    {
       // $kepper = new KepperParent();

        $kepper = new KepperChield();
        echo $kepper->keeping();

       // echo 'GoalKepper';
    }
}