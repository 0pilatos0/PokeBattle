<?php

class EnergyType
{
    protected $name;

    function __construct($name)
    {
        $this->name = $name;
    }

    function __toString()
    {
        return $this->name;
    }

    public function getName()
    {
        return $this->name;
    }

    public function setName($name)
    {
        $this->name = $name;
    }
}