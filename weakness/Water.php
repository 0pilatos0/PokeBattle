<?php

namespace Weakness;

use EnergyType;

class Water extends \Weakness
{
    public function __construct()
    {
        parent::__construct(new EnergyType\Water(), 2.0);
    }
}