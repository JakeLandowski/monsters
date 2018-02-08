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
     */
    public function __construct($name)
    {
        parent::__construct($name);
        $_victims = 0;
    }

    /**
     *  Makes the Dragon attack someone and increase victim count
     */
    public function attack()
    {
        $_victims++;
        echo "Vampire took his shirt off and burned a victim to death!";
    }

    /**
     *  Get the number of victims so far.
     * 
     *  @return int $_victims   The number of victims so far
     */
    public function getVictims()
    {
        return $_victims;
    }
}