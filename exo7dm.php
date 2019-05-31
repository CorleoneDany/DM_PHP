<?php

function ConvertirEnEntier($n, $baseFrom) {

   $valueRankIterate = 0;
   $myValueList = [];
   $theInt = "";
   $realInt = 0;
   $finalNumber = 0;

   for ($k=0; $k<=sizeof($n); $k++) {
       $theInt = substr($n, $k, 1);
       $realInt = (int)$theInt;
       //var_dump($realInt);
       $valueRankIterate = $realInt * ($baseFrom ** $k);
       var_dump($valueRankIterate);
       array_push($myValueList, $valueRankIterate);
       //var_dump($myValueList);
   }

   for ($i=0; $i<=sizeof($myValueList)-1; $i++) {
       $finalNumber += $myValueList[$i];
       //var_dump($myValueList[$i]);
      
   }

   //var_dump($finalNumber);
   return $finalNumber;
}


ConvertirEnEntier('1110', 2);


$str = "3";
$int = (integer) $str;

//var_dump($int + 1);


?>