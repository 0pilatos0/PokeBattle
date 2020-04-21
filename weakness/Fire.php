<?php

namespace Weakness;

use EnergyType;

class Fire extends \Weakness
{
    public function __construct()
    {
        parent::__construct(new EnergyType\Fire(), 1.5);
    }
}