<?php

namespace Pokemon;

use \EnergyType;
use \Attack;
use Weakness\Fire;
use Resistance\Fighting;

class Pikachu extends \Pokemon
{
    function __construct()
    {
        //parent::__construct('Pikachu', new Lightning(), 60, [new ElectricRing(), new PikaPunch()], [new Fire()], [new Fighting()]);
        parent::__construct('Pikachu', new EnergyType("Lightning"), 60, [new Attack("ElectricRing", 10), new Attack("PikaPunch", 20)], [new Fire()], [new Fighting()]);
    }
}