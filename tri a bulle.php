<?php 
// $tableau = [999,540,60,10,666,88,10,101,4];

$tableau = ["non", "super","banane", "arrico"];

$longueur = count($tableau);

do{
    $swap = false;

    for($i=0; $i < $longueur-1; $i++){

        $refi = $i+1;

        if($tableau[$i]>$tableau[$refi]){
            $temp = $tableau[$i];
            $tableau[$i] = $tableau[$refi];
            $tableau[$refi] = $temp;

            $swap = true;

        }
    }
} while($swap);

echo(implode(" ",$tableau));

?>