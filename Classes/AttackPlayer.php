<?php
/**
 * Created by PhpStorm.
 * User: SHOWMAN
 * Date: 2/7/2020
 * Time: 4:09 AM
 */

namespace Classes;


use Interfaces\Attack;
use Interfaces\PlayerInterface;


class AttackPlayer implements Attack, PlayerInterface
{
/*
    public function play()
    {
        echo 'Attack';
    }
**/

    public function attack()
    {
        echo "attack player";
    }

    public function play()
    {
        $this->attack();
    }
}