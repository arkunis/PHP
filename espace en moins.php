<?php

echo("espace : ");

$tableau = ["oui ", "non"];

for($i=0; $i<count($tableau); $i++){
$tableau[$i] = str_replace(" ", "", $tableau[$i]);
}

echo(implode(" ", $tableau));

?>