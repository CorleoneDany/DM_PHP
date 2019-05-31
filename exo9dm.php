<?php

 

 function additionner($a, $b) {
 	
 	return $a + $b;
}


function multiplier($a, $b) {
	return $a * $b;
}


?>





<html>
   <body>
   	<form name="form" method="post" align="center">
   		<h2>Calculette</h2>

   		<p>Valeur 1 : </p>
   		<input type="text" name="value1"></input>
   	</br>
   		<p>Valeur 2 : </p>
   		<input type="text" name="value2"></input>
   	</br>


   		<?php



 		if (isset($_POST['sub1']) == 'Additionner') {
       		$resultat = additionner($_POST['value1'], $_POST['value2']);
       		echo "<p>Resultat : $resultat</p>";
       }

       elseif (isset($_POST['sub2']) == 'Multiplier') {
       		$resultat = multiplier($_POST['value1'], $_POST['value2']);
       		echo "<p>Resultat : $resultat</p>";
       }

      

 		?>


       <input value="Additionner" type="submit" name="sub1"></input>
       <input value="Multiplier" type="submit" name="sub2"></input>

      </form>

   </body>
</html>