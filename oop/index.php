<?php
require_once 'frog.php';
require_once 'ape.php';

// Instance of Animal
echo "<span style='font-size:25px; text-align:center; font-weight:bold;'>ANIMAL INFORMATION</span>" . "<br>" . "<br>";
$sheep = new Animal("shaun");
echo "Name : " . $sheep->name . PHP_EOL . "<br>"; // "shaun"
echo "legs : " . $sheep->legs . PHP_EOL . "<br>"; // 4
echo "cold blooded : " . $sheep->cold_blooded . PHP_EOL . "<br>"; // "no"
echo PHP_EOL . "<br>" . "<br>";

// Instance of Frog
$kodok = new Frog("buduk");
echo "Name : " . $kodok->name . PHP_EOL . "<br>"; // "buduk"
echo "legs : " . $kodok->legs . PHP_EOL . "<br>"; // 4
echo "cold blooded : " . $kodok->cold_blooded . PHP_EOL . "<br>" . "Jump : "; // "no"
$kodok->jump() . "<br>"; // "hop hop"
echo PHP_EOL . "<br>" . "<br>";

// Instance of Ape
$sungokong = new Ape("kera sakti");
echo "Name : " . $sungokong->name . PHP_EOL . "<br>"; // "kera sakti"
echo "legs : " . $sungokong->legs . PHP_EOL . "<br>"; // 2
echo "cold blooded : " . $sungokong->cold_blooded . PHP_EOL . "<br>" . "Yell : "; // "no"
$sungokong->yell(); // "Auooo"
?>
