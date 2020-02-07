<?php

require __DIR__ . '/../vendor/autoload.php';
$players = [];
for ($i=1;$i<=5;$i++){
    array_push($players,new \Classes\AttackPlayer());
}
for ($i=1;$i<=5;$i++){
    array_push($players,new \Classes\DefensePlayer());
}
array_push($players, new \Classes\KepperPlayer());
$match = new \Classes\Match($players);
$match->start();