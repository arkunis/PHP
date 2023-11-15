<?php 

$a = array(
    
"19001" => array("Centre", "Centre", "Centre", "Centre", "Centre", "Centre",
"", "", "Centre", "Centre", "Stage", "Stage", "Stage", "Stage", "Stage", "Stage", "Stage",
"Stage", "Stage", "Stage", "Stage", "Stage", "Validation", "Validation"), 

"19002" => array("Centre", "Centre", "Centre", "Centre", "Centre", "Centre", "Centre",
"Centre", "Centre", "Centre", "Centre", "Centre", "Stage", "Stage", "Stage", "Stage",
"Stage", "Stage", "Stage", "Stage", "Stage", "Stage", "Stage", "Stage", "Validation", ""), 

"19003" => array("", "", "Centre", "Centre", "Centre", "Centre", "Centre", "Centre",
"Centre", "Centre", "Centre", "Stage", "Stage", "Stage", "Stage", "Stage", "Stage",
"Stage", "Stage", "Stage", "Stage", "Stage", "Stage", "", "", "Validation") );



$value ='19001';

    // echo implode(" ", $a["19003"]);
    $index;
    $index1;

    for ($i = 0; $i < count($a[$value]); $i++){

        echo $a[$value][$i]."\n";

        if ( $a[$value][$i]=="Validation"){
            $index=$i;
        }

    }
    echo $index."\r\n";

// foreach($a as $b => $c){

//     $tab=[$b];
//     echo implode(" ", $tab);
// }

echo count($a['19003']);