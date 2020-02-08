<?php
/**
 * Created by PhpStorm.
 * User: SHOWMAN
 * Date: 2/7/2020
 * Time: 4:10 AM
 */

namespace Classes;
use Interfaces\Defense;

class DefensePlayer implements Defense
{
public function play(){
    echo 'Defense';
}


    public function defense()
    {
        echo "defense player";
    }
}