<?php

class Resistances
{
    protected $resistanceFor;
    protected $value;

    public function __construct(EnergyType $resistanceFor, $value)
    {
        $this->resistanceFor = $resistanceFor;
        $this->value = $value;
    }
}