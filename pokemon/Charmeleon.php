<?php

namespace Pokemon;

use \EnergyType;
use \Attack;
use Resistance\Lightning;
use Weakness\Water;

class Charmeleon extends \Pokemon
{
    function __construct()
    {
        //parent::__construct('Charmeleon', new Fire(), 60, [new HeadButt(), new Flare()], [new Water()], [new Lightning()]);
        parent::__construct('Charmeleon', new EnergyType("Fire"), 60, [new Attack("HeadButt", 50), new Attack("Flare", 30)], [new Water()], [new Lightning()]);
    }
}