<?php
/**
 * Created by PhpStorm.
 * User: SHOWMAN
 * Date: 2/7/2020
 * Time: 4:09 AM
 */

namespace Classes;


use Interfaces\PlayerInterface;

class AttackPlayer implements PlayerInterface
{

    public function play()
    {
        echo 'Attack';
    }

    public function attack()
    {
        echo 'Attack';
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