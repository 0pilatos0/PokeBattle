<?php

namespace Pokemon;

use Attack\Flare;
use Attack\HeadButt;
use EnergyType\Fire;
use Resistance\Lightning;
use Weakness\Water;

class Charmeleon extends \Pokemon
{
    function __construct()
    {
        parent::__construct('Charmeleon', new Fire(), 60, [new HeadButt(), new Flare()], [new Water()], [new Lightning()]);
    }
}