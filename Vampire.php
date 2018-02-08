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

    /**
     *  Constructs a vampire
     * 
     *  @param String   name  Name of the vampire
     *  @param int      the number of victims to start
     */
    public function __construct($name)
    {
        parent::__construct($name);
        $_victims = 0;
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