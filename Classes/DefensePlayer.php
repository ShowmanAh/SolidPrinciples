<?php
/**
 * Created by PhpStorm.
 * User: SHOWMAN
 * Date: 2/7/2020
 * Time: 4:10 AM
 */

namespace Classes;
use Interfaces\Defense;
use Interfaces\PlayerInterface;

class DefensePlayer implements Defense, PlayerInterface
{
public function play(){
    $this->defense();
}


    public function defense()
    {
        echo "defense player";
    }
}