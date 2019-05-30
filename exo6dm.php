<?php

//$sondage = array("question"=>"Êtes-vous d'accord ?", "reponse"=>array("oui", "non",));

function genererSondage($mySondage) {
       for ($k=1; $k<=sizeof($mySondage); $k++)
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
         echo "<button type=\"submit\">Repondre</button>";
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

//genererResultat($sondage,$vote);


function rechercheSondage($sondages, $motcle) {
  for($i=0; $i<=sizeof($sondages); $i++) {
      $k=0;
      foreach ($sondages[$i] as $key => $value) {
          if ($k == 0) {
              if (!strstr($value, $motcle)) {
                  unset($sondages[$i]);
              }
          }
      $k++;
      }
  }
  return $sondages;
}


$s1 = array("question"=>"Êtes-vous heureux ?", "reponse"=>array("oui", "non", "peut-être"));
$s2 = array("question"=>"Êtes-vous triste ?", "reponse"=>array("oui", "non"));
$s3 = array("question"=>"Existe-t-il des gens heureux ?", "reponse"=>array("oui", "non"));
$sondages = array($s1, $s2, $s3);
$t = rechercheSondage($sondages, "heureux");
foreach ($t as $sondages) genererSondage($sondages);




?>