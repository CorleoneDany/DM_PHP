<?php

$sondage = array("question"=>"Êtes-vous d'accord ?", "reponse"=>array("oui", "non"));

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



?>

<html>
   <body>

       <form method="post" action="sondage.php">

       <?php
       genererSondage($sondage);
       ?>
           <input value="répondre" type="submit" name="repondre"></input>
       </form>
   </body>
</html>