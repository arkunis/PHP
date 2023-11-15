<?php 
// Un tableau de moutons
$moutons = [['Danny', 75], ['Richard',60]];

// J'ajoute un mouton
array_push($moutons, ['Gérard',120]);

// Je calcule la moyenne de la valeur de mes moutons
function calculeMouton($param1){
    $i=0;
$nbMoutons=0;
$sumValMoutons=0;
foreach ($param1 as $mouton) {
	$sumValMoutons = $sumValMoutons + $mouton[1];
	$nbMoutons++;
	$i++;
} $moyValMoutons = $sumValMoutons/$i;echo "Moyenne de la valeur de mes ". count($param1)." moutons : ".$sumValMoutons/$i;
}
$var = calculeMouton($moutons);
echo $var;
// Ajout de 100 moutons aléatoires
for ($j=0; $j < 100; $j++) { 
	$randNameMouton = "";
	$nbCharsNameMouton=rand(3,15);
    $chaine = "abcdefghijklmnpqrstuvwxyABCDEFGHIJKLMNOPQRSUTVWXYZ";
    $nbChars = strlen($chaine);
	$randValMoutons = rand(10,200);
	for($k=0; $k<$nbCharsNameMouton; $k++)
    {
        $randNameMouton .= $chaine[rand(0, ($nbChars-1))];
    }
	array_push($moutons, [$randNameMouton, $randValMoutons]);
}
echo PHP_EOL;
// Je calcule à nouveau la moyenne
$var = calculeMouton($moutons);
echo $var;
?>