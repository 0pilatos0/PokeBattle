<?php
    require "Pokemon.php";
    $pokemon1 = new Pokemon("pikachu", "Lightning", 60, [["Electric Ring", 50], ["Pika punch", 20]], ["Fire", 1.5], ["Resistance", 20]);
    $pokemon2 = new Pokemon("charmeleon", "Fire", 60, [["Head Butt", 10], ["Flare", 30]], ["Water", 2], ["Lightning", 10]);

    $pokemon1->attack($pokemon2, "Electric Ring");
    $pokemon2->attack($pokemon1, "Flare");
?>