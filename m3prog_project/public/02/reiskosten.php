<?php 

$afstand = 1082.55;
$literPrijs = 1.89;
$treinkaartje = 60;
$tankinhoud = 50;

$litersNodig = (($afstand / 100) * 5 ); 
$tanken = round($tankinhoud / $litersNodig);
$totaalPrijsAuto = round($literPrijs * $litersNodig);




echo "Dit is hoeveel liter benzine je nodig hebt: ---->  " . $litersNodig;

echo "<br>" . "<br>";

echo "Om je bestemming te bereiken moet je " . $tanken . "x tanken.";

echo "<br>" . "<br>";

echo "Met een lege tank kost het €" . $totaalPrijsAuto . " om met de auto op je bestemming te komen.";

echo "<br>" . "<br>";

echo "Een trein kaartje kost €" . $treinkaartje;

echo "<br>" . "<br>";

if ($totaalPrijsAuto < $treinkaartje) {
    echo "Het is goedkoper om met de auto te gaan, dus ga ik met de auto.";
} else {
    echo "Het is goedkoper om met de trein te gaan, dus ga ik met de trein.";
}
