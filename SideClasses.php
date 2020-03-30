<?php 
class EnergyType{
    public $type;

    public function __construct($type){
       $this->type = $type;
    }
}
class Attack{
    public $name, $damage;

    public function __construct($name, $damage){
        $this->name = $name;
        $this->damage = $damage;
    }
}
class Weakness{
    public $energyType, $multiplier;

    public function __construct($energyType, $multiplier){
        $this->energyType = new EnergyType($energyType);
        $this->multiplier = $multiplier;
    }
}
class Resistance{
    public $energyType, $value;

    public function __construct($energyType, $value){
        $this->energyType = new EnergyType($energyType);
        $this->value = $value;
    }
}
class RequestDataFromAllPokemons{
    public static $pokemons = array();
    public static function getPopulation(){
        for ($i=0; $i < count(self::$pokemons); $i++) { 
            if(self::$pokemons[$i]->health <= 0){
                unset(self::$pokemons[$i]);
            }
        }
        echo count(self::$pokemons) . " Pokemons left <br>";
    }
}
?>