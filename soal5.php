<?php

$nilai = [
    ["Susi",92],
    ["Andi",80],
    ["Toto",75],
    ["Made",65],
    ["Dewi",60]

];

for ($i=0; $i<count($nilai); $i++){
   if($nilai[$i][1] >= 90){
       echo $nilai[$i][0]." gardenya : A+\n";
    
   }else if($nilai[$i][1] >= 80){
       echo $nilai[$i][0]." gradenya : A\n";

   }else if($nilai[$i][1] >= 70){
       echo $nilai[$i][0]." gradenya : B\n";

   }else if($nilai[$i][1] >= 60){
       echo $nilai[$i][0]." gradenya : C\n";
 
   }else {
       echo $nilai[$i][0]." gradenya : D\n";

   }
}


?>