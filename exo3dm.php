<?php


$array1 = array("carré"=>"rouge", "cercle"=>"bleu", "triangle"=>"vert", "rectangle"=>"orange");
$array2 = array("triangle", "losange", "cercle", "octogone");


function analyser($strA, $strB) {


   $myList=[];


   for ($i=0; $i<=sizeof($strB)-1; $i++) {
       foreach ($strA as $key => $value) {
           if ($strB[$i] == $key) {
               array_push($myList, $value);
           }
       }
   }

   sort($myList);
   for ($j=0; $j<=sizeof($myList)-1; $j++) {
       echo $myList[$j] . "\n";
   }

}


analyser($array1, $array2);

?>