<?php

namespace Pokemon;

use Attack\ElectricRing;
use Attack\PikaPunch;
use Weakness\Fire;
use EnergyType\Lightning;
use Resistance\Fighting;

class Pikachu extends \Pokemon
{
    function __construct()
    {
        parent::__construct('Pikachu', new Lightning(), 60, [new ElectricRing(), new PikaPunch()], [new Fire()], [new Fighting()]);
    }
}