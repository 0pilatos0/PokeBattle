<?php

namespace Resistance;

use EnergyType;

class Lightning extends \Resistances
{
    public function __construct()
    {
        parent::__construct(new EnergyType\Lightning(), 10);
    }
}