<?php

include ('Vampire.php');
include ('Dragon.php');


$monster = new Monster();
$monster->getName();
$monster->attack();

$monster2 = new Vampire("Sparkles");
echo "$monster2->getVictims()";
$monster2->attack();
echo "$monster2->getVictims()";

$monster3 = new Dragon("Charmander");
$monster3->attack();

