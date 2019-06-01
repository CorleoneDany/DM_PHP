<?php

$p1 = array(
   "Prénom"=>"Victor",
   "Nom"=>"Hugo",
   "Photo"=>'http://upload.wikimedia.org/wikipedia/commons/5/5a/Bonnat_Hugo001z.jpg');
$p2 = array(
   "Prénom"=>"Jean",
   "Nom"=>"De La Fontaine",
   "Photo"=>'http://upload.wikimedia.org/wikipedia/commons/e/e1/La_Fontaine_par_Rigaud.jpg');
$p3 = array(
   "Prénom"=>"Pierre",
   "Nom"=>"Corneille",
   "Photo"=>'http://upload.wikimedia.org/wikipedia/commons/2/2a/Pierre_Corneille_2.jpg');
$p4 = array(
   "Prenom"=>"Jean",
   "Nom"=>"Racine",
   "Photo"=>'http://upload.wikimedia.org/wikipedia/commons/d/d5/Jean_racine.jpg');

   $finalArray = array($p1, $p2, $p3, $p4);
  

   $mySortArray = array(
       "1"=>"A",
       "2"=>"B",
       "3"=>"C",
       "4"=>"D",
       "5"=>"E",
       "6"=>"F",
       "7"=>"G",
       "8"=>"H",
       "9"=>"I",
       "10"=>"J",
       "11"=>"K",
       "12"=>"L",
       "13"=>"M",
       "14"=>"N",
       "15"=>"O",
       "16"=>"P",
       "17"=>"Q",
       "18"=>"R",
       "19"=>"S",
       "20"=>"T",
       "21"=>"U",
       "22"=>"V",
       "23"=>"W",
       "24"=>"X",
       "25"=>"Y",
       "26"=>"Z",
       
   );

function triAlpha($infos) {
  for($i = 0; $i < count($infos) - 1; $i++) {
    for($j = count($infos) - 2; $j >= $i; $j--) {
      if(strtoupper($infos[$j+1]["Nom"]) < strtoupper($infos[$j]["Nom"]) ||
         (strtoupper($infos[$j+1]["Nom"]) === strtoupper($infos[$j]["Nom"]) &&
         strtoupper($infos[$j+1]["Prenom"]) < strtoupper($infos[$j]["Prenom"]))) {
          $temp = $infos[$j+1];
          $infos[$j+1] = $infos[$j];
          $infos[$j] = $temp;
      }
    }
  }
  return $infos;
}



function genererGalerie($tab)
{
   echo "<table>";
   foreach($tab[0] as $k=>$v)
   {
       echo "<th>$k</th>";
   }
   foreach($tab as $v)
   {
       echo "<tr>";
       foreach($v as $k=>$val)
       {
           if($k==="Photo"){
               echo "<td><img class=\"photo\" src=\"".$val."\" alt=\"photo de ".$k."\"</td>";
           }else
           echo "<td>$val</td><br/>";
       }
       echo "</tr>";
   }
   echo "</table>";
}
?>

<!DOCTYPE html>

<html lang="fr">
<head>
   <meta charset="UTF-8">
   <meta name="Author" content="DESHAIRS Nicolas">
   <meta name="Keywords" content="php, html, css">"
   <link rel="stylesheet" href="table.css" />
</head>
<body>
<?php
genererGalerie(triAlpha($finalArray));
?>
</body>
</html>
