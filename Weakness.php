<?php

class Weakness
{
    protected $weaknessFor;
    protected $weaknessMultiplier;

    public function __construct(EnergyType $weaknessFor, $weaknessMultiplier)
    {
        $this->weaknessFor = $weaknessFor;
        $this->weaknessMultiplier = $weaknessMultiplier;
    }
}