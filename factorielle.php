<?php 

echo("factorielle : \r\n");

$nombre = 7;
$resultat = 1;

for ($i=1;$i <= $nombre; $i++){
    $resultat = $i*$resultat;
}

print_r($resultat);

?>