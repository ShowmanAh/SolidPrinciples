<?php
/**
 * Created by PhpStorm.
 * User: SHOWMAN
 * Date: 2/7/2020
 * Time: 4:10 AM
 */

namespace Classes;
use Interfaces\PlayerInterface;

class DefensePlayer implements PlayerInterface
{
public function play(){
    echo 'Defense';
}

    public function attack()
    {
        // TODO: Implement attack() method.
    }

    public function defense()
    {
        // TODO: Implement defense() method.
    }

    public function keeping()
    {
        // TODO: Implement keeping() method.
    }
}