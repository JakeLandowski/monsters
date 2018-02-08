<?php

include ('Vampire.php');
include ('Dragon.php');

echo '<pre>';

echo 'Made made new Monster';
$monster = new Monster();

echo 'Monster\'s name: ' . $monster->getName();
echo 'Monster\'s attacking: ' . $monster->attack();


echo 'Made made new Vampire';
$monster2 = new Vampire("Sparkles");

echo 'Vampire\'s name: ' . $monster2->getName() . '<br />';
echo 'Vampire\'s attacking: ' . $monster2->attack() . '<br />';
echo 'Vampire\'s victims before: ' . $monster2->getVictims() . '<br />';
echo 'Vampire\'s attacking again: ' . $monster2->attack() . '<br />';
echo 'Vampire\'s victims after: ' . $monster2->getVictims() . '<br />';

echo 'Made made new Monster';
$monster3 = new Dragon("Charmander");

echo 'Dragon\'s name: ' . $monster3->getName() . '<br />';
echo 'Dragon\'s attacking: ' . $monster3->attack() . '<br />';
echo 'Dragon\'s victims before: ' . $monster3->getVictims() . '<br />';
echo 'Dragon\'s attacking again: ' . $monster3->attack() . '<br />';
echo 'Dragon\'s victims after: ' . $monster3->getVictims() . '<br />';


echo '</pre>';
