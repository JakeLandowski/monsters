<?php
/**
 * Monsters
 * monsters.php
 * 2/8/2018
 * @author Ryan Marlow
 */

class Monsters {

    protected $name;

    //Default constructor
    public function __construct($name="Dracula") {
        $this->$name = $name;
    }

    /**
     * @return the name saved in the Monster Object.
     */
    function getName() {
        return $this->name;
    }

    function  setName($name) {
        $this->name = $name;
    }

    function attack() {
        echo "$this->name is attacking<br>";
    }
}