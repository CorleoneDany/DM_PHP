<?php

$sondage = array("question"=>"Êtes-vous d'accord ?", "reponse"=>array("oui", "non",));

function genererSondage($mySondage) {

           $i=0;
           foreach ($mySondage as $key => $value) {
               if ($i == 0) {
                   echo "<p>$value</p>";
               }
               else {
                   for ($j=0; $j<=sizeof($value)-1; $j++) {
                       echo "<input type=\"radio\" />$value[$j]</input>";
                       echo "</br>";
                   }
               }
               $i++;
           }
       }

$vote = array(360, 40);

function genererResultat($mySondage, $arrayVal) {
   $i=0;
   $voteNumber = $arrayVal[0] + $arrayVal[1];
   //var_dump($voteNumber);
   $percentYes = $arrayVal[0] * 100 / $voteNumber;
   $percentNo = $arrayVal[1] * 100 / $voteNumber;
   $newArray=[];
   $displayCSSYes = "$percentYes" . "px";
   $displayCSSNo = "$percentNo" . "px";
   $arrayCSS=[];
   array_push($arrayCSS, $displayCSSYes);
   array_push($arrayCSS, $displayCSSNo);
   array_push($newArray, $percentYes);
   array_push($newArray, $percentNo);
   foreach ($mySondage as $key => $value) {
       if ($i == 0) {
           echo "<p>$value</p>";
       }
       else {
           for ($j=0; $j<=sizeof($value)-1; $j++) {
               echo "<div style=\"display:flex; flex-direction:row\">";
               echo "<input type=\"radio\" />$value[$j] </input>";
               echo "<div style=\"width:$arrayCSS[$j]; background-color:blue\"></div>";
               echo "<div> $newArray[$j]%</div>";
               echo "</div>";
               echo "</br>";

           }
       }
       $i++;
   }
   echo "<div>Nombre de votants : $voteNumber </div>";
}

genererResultat($sondage,$vote);

?>