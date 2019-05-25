<?php

function lireNombre($nomFichier){
	if(file_exists($nomFichier)){
		$resultat=fopen($nomFichier,'r');
		$value=fgets($resultat);
	}
	else{
		$value=0;
	}
	return $value;
}


?>