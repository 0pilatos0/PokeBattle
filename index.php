<?php

require 'Pokemon.php';
require 'EnergyType.php';
require 'Attack.php';
require 'Weakness.php';
require 'Resistances.php';

require 'pokemon/Pikachu.php';
require 'pokemon/Charmeleon.php';

require 'energyType/Fighting.php';
require 'energyType/Fire.php';
require 'energyType/Lightning.php';
require 'energyType/Water.php';

require 'attacks/ElectricRing.php';
require 'attacks/Flare.php';
require 'attacks/HeadButt.php';
require 'attacks/PikaPunch.php';

require 'resistances/Fighting.php';
require 'resistances/Lightning.php';

require 'weakness/Fire.php';
require 'weakness/Water.php';

$pikachu = new \Pokemon\Pikachu();
$charmeleon = new \Pokemon\Charmeleon();

// Print health of both pikachu's
print($pikachu . ' health: ' . $pikachu->getHealth() . '<br>');
print($charmeleon . ' health: ' . $charmeleon->getHealth() . '<br>');

$pikachu->doAttack(new \Attack\ElectricRing(), $charmeleon);
$charmeleon->doAttack(new \Attack\Flare(), $pikachu);

// Print health of both pikachu's
print($pikachu . ' health: ' . $pikachu->getHealth() . '<br>');
print($charmeleon . ' health: ' . $charmeleon->getHealth() . '<br>');