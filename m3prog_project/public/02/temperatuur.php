<?php 
// farenheit naar celsius
$fahrenheit = 74;
$celsius = ($fahrenheit - 32) / 1.8;
echo "{$fahrenheit} graden Fahrenheit = {$celsius} graden celsius. <br/>";

// celsius naar fahrenhei
$celsius = 74;
$fahrenheit = ($celsius + 32) * 1.8;
echo "{$celsius} graden celsius = {$fahrenheit} graden fahrenheit. <br/>";

//celius naar kelvin
$celsius = 30;
$kelvin = ($celsius + 273.15);
echo "{$celsius} graden celsius = {$kelvin} graden kelvin. <br/>";

// fahrenheit naar kel
$fahrenheit = 82;
$kelvin = ($fahrenheit - 32) * (55/100) + 273.15;
echo "{$fahrenheit} graden Fahrenheit = {$kelvin} graden kelvin. <br/>";