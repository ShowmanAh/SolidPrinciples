<?php
/**
 * Created by PhpStorm.
 * User: SHOWMAN
 * Date: 2/7/2020
 * Time: 2:45 AM
 */
namespace Classes;
class Match
{
    private $attack;
    private $defense;
    private $keeper;
    public function __construct()
    {
        $this->attack = new Attack();
        $this->defense = new Defense();
        $this->keeper = new Keeper();
    }
    public function start(){
        echo 'Match start play';
    }

}