<?php

class Attack
{
    protected $name;
    protected $damage;

    function __construct($name, $damage)
    {
        $this->name = $name;
        $this->damage = $damage;
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

    public function getDamage()
    {
        return $this->damage;
    }

    public function setDamage($damage)
    {
        $this->damage = $damage;
    }
}