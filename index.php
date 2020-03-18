<?php
    require "Pokemon.php";
    $Enemy1 = new Pokemon("Enemy1", "Lightning", 60, [["Electric Ring", 50], ["Pika punch", 20]], ["Fire", 1.5], ["Resistance", 20]);
    $Enemy2 = new Pokemon("Enemy2", "Fire", 60, [["Head Butt", 10], ["Flare", 30]], ["Water", 2], ["Lightning", 10]);
    $Enemy1->attack($Enemy2, "Electric Ring");
    $Enemy2->attack($Enemy1, "Flare"); 
?>