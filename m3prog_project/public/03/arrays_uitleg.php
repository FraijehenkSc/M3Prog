<?php

$games = ["Belatro","Sts","Wildfrost","Hades","Gnorp",];

//print_r($games);

print_r($games[2]);

echo "<br>";

print_r($games[4]);
echo "<br>";

print_r($games);
//var_dump($games);

echo count($games);
echo "<br>";
array_push($games, "Voidigo");
echo implode(' >> ', $games);
