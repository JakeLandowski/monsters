<?php
/**
 *  Vampire.php
 *  Author: Jake Landowski
 *  Date: 2-8-18
 */

/**
 *  Vampire.php
 *  Date: 2-8-18
 * 
 *  @author Jake Landowski
 */
class Vampire extends Monster
{
    private $_victims;

    public function __construct($name, $victims)
    {
        $this->_victims = $victims;
    }

    public function attack()
    {
        $_victims++;
        echo "Vampire attacked someone!";
    }

    public function getVictims()
    {
        return $_victims;
    }
}