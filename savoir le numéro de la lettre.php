<?php 

echo("comparaison lettres");

$lettres=["A","B","C","D","E"];

$lettreauhasard = "A";
$lettrepareil = true;

for ($i = 0; $i < count($lettres); $i++)
{
    
    if($lettreauhasard == $lettres[$i])
    {
        $refi = $i+1;
        print_r("la lettre entrée est la numéro {$refi} \r\n");
        $lettrepareil = false;
    }
    
}

if($lettrepareil == true){
    print_r("Pas la même lettre !");
}
?>