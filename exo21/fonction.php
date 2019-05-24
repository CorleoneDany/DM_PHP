<?php 
function recherche($mot)
{
	$lenght = strlen($mot);
	$dico=fopen('liste_francais.txt','r');
	$liste="";
	$i=1;
	While(!feof($dico))
	{
		//--------- Lit la prochaine ligne
		$ligne=fgets($dico);
		$bIdentique=true;
		//--------- Si les mots font la même taille
		if($lenght==strlen($ligne))
		{
			while($i<=$lenght && $bIdentique==True)
			{
				if($mot{$i}!="?")
					{
					if($mot{$i}!=$ligne{$i})
						$bIdentique=false;
					}
			}
			
			if($bIdentique==true)
				{
					$liste=$liste.$ligne." ";
				}
		}	
	}
	fclose($dico);
	return $liste;
	
}
?>