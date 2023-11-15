<?php 
$tableau1 = [1,2,3,4,5,6,7];
$tableau2 = [1,2,3,4,5,6,7];
$valide = true;
if(count($tableau1) == count($tableau2)){
    while($valide == true){
        for($i=0; $i < count($tableau1); $i++){
             if($tableau1[$i] != $tableau2[$i]){
            
            $valide=false;
             }
        }
        if($valide == true){
            
        }break;
    }
}else{
    $valide=false;
}


if($valide==true){
echo("même tableau");
}else{
    echo("pas même");
}

?>