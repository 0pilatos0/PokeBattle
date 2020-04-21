<?php

namespace Resistance;

use EnergyType;

class Fighting extends \Resistances
{
    public function __construct()
    {
        parent::__construct(new EnergyType\Fighting(), 20);
    }
}