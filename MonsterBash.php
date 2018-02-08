<?php

include ('Vampire.php');
include ('Dragon.php');


$monster = new Monster();
$monster->getName();
$monster->attack();

$monster2 = new Vampire("Sparkles");
$monster2->attack();

$monster3 = new Dragon("Charmander");
$monster3->attack();
