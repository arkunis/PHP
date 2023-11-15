<?php

$tableau1 = ["carnaval", "boisson", "total", "ok"];
$tableau2 = ["carnaval", "arbre", "totaux","ko"];

function TriMots($tableau1, $tableau2){
for($i=0; $i < count($tableau1); $i++){
$compare = strcmp($tableau1[$i],$tableau2[$i]);
if($compare == 0){
    echo("Ce sont les mêmes mots pas d'odre possible !\r\n");
}elseif($compare == 1){
    echo("{$tableau2[$i]} est avant {$tableau1[$i]} \r\n");
} elseif($compare == -1){
    echo("{$tableau1[$i]} est avant {$tableau2[$i]} \r\n");
}else{
    echo("trop de mot chelou");
}

}
}

echo TriMots($tableau1, $tableau2);


?>