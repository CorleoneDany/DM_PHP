<?php 
function recherche($mot)
{
	$lenght = strlen($mot)+2; //longueur du mot + longueur de la chaîne "/n"
	var_dump($lenght);
	$dico=fopen('liste_francais.txt','r');
	var_dump($mot);
	$liste="";
	
	// Debug
		// $ligne=fgets($dico);
		// if($lenght==strlen($ligne)){
		// echo $ligne;
		// $i = 0;
		// var_dump($i);
		// while($i<=$lenght-3){
			// echo $i;
			// echo $mot{$i};
			// echo $ligne{$i};
			// $i+=1;
		// }
	
		// }
		
	//Fin debug
	
	
	
	While(!feof($dico))
	{
//		--------- Lit la prochaine ligne
		$ligne=fgets($dico);
		$bIdentique=true;
		// echo $ligne." ".$bIdentique ;
//		--------- Si les mots font la même taille
		if($lenght==strlen($ligne))
		{
			$i=0;
			while($i<=$lenght-3 && $bIdentique==true)
			{
				if($mot{$i}!="?")
					{
					if($mot[$i]!=$ligne{$i}){
						$bIdentique=false;
						}
					}
				$i=$i+1;
			}
			
			if($bIdentique==true)
				{
					$liste.=$ligne." ";
				}
		}	
	}
	fclose($dico);
	return $liste;
	
}
?>