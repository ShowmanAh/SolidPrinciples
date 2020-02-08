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
   private $playerList;
    public function __construct(array $players)
    {
        $this->playerList = $players;


    }
    public function start(){
        echo 'Match start play';
        echo "<pre>";
       foreach ($this->playerList as $player){
           if($player instanceof AttackPlayer){
               $player->attack();
               echo "<pre>";
           }elseif ($player instanceof DefensePlayer){
               $player->defense();
               echo "<pre>";
           }elseif ($player instanceof KepperPlayer){
               $player->keeping();
               echo "<pre>";
           }
          // echo $player->play();


       }
    }

}