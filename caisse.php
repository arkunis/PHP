<?php 

// echo("caisse : \r\n");

// $monnaie = 66;
// $apayer = 20;
// $billets = [50,20,10,5,2,1];
// $quantite = [2,1,0,2,1,20];
// $nombrearendre;

// $rendu = $monnaie-$apayer;

// echo($rendu." <- somme à rendre\r\n");

// if($rendu > 0){

//     for($i=0; $i < count($billets); $i++){
//         $refi = $i;

//         if($rendu >= $billets[$i] && $quantite[$i] >= 1){

            

//             $nombrearendre = intdiv($rendu,$billets[$i]);
            
            
//             if($nombrearendre <= $quantite[$i]){

//                 $rendu = $rendu-($nombrearendre*$billets[$i]);
//                 echo($rendu." <- nouvelle somme à rendre\r\n Billets de {$billets[$i]} rendu {$nombrearendre}\r\n");
//                 $quantite[$i] = $nombrearendre-$quantite[$i];
                
                
//             }else{
//                 $rendu = $rendu-($quantite[$i]*$billets[$i]);
//                 echo($rendu." <- nouvelle somme à rendre\r\n Billets de {$billets[$i]} rendu {$quantite[$i]}\r\n");
//             }
//         }else{
//             echo("Pas de billet {$billets[$i]} à rendre \r\n");
//         }
        
        
//     }
// }else {
//     echo("pas de monnaie à rendre");
// }
?>