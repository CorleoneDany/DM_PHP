<?php

function lireNombre($nomFichier){
	if(file_exists($nomFichier)){
		$fichierOuvert=fopen($nomFichier,'r');
		$value=fgets($fichierOuvert);
		echo var_dump($value);
		fclose($fichierOuvert);	
	}
	else{
		$value=0;
	}
	return $value;
}

// $resfonct= lireNombre('test.txt');
// echo $resfonct;

function ecrireNombre($nomFichier,$nombre){
	$fichierOuvert=fopen($nomFichier,'w+');
	$v=fgets($fichierOuvert);
	echo var_dump($v);
	fputs($fichierOuvert,$nombre);
	fclose($fichierOuvert);	
}

// ecrireNombre('test.txt',100);
// $resfonct= lireNombre('test.txt');
// echo $resfonct;

function compterVisites(){
	if(file_exists('compteur.txt')){
		$fichierOuvert=fopen('compteur.txt','r'); //w+ ne me permet pas de lire la première ligne et renvoi 'false'
		$v=fgets($fichierOuvert);
		// echo var_dump($v);
		fclose($fichierOuvert);
		$fichierOuvert=fopen('compteur.txt','w');
		$nombreVisite=strval($v)+1;
		fputs($fichierOuvert,$nombreVisite);
		fclose($fichierOuvert);
	}
	else{
		$fichierOuvert=fopen('compteur.txt','w+');
		fputs($fichierOuvert,0);
		fclose($fichierOuvert);
	}
}

function afficherVisites(){
		if(file_exists('compteur.txt')){
		$fichierOuvert=fopen('compteur.txt','r');
		$value=fgets($fichierOuvert);
		// var_dump($value);
		fclose($fichierOuvert);	
	}
	else{
		$value='Le fichier \'compteur.txt\' n\'existe pas !';
	}
	return $value;

}

compterVisites();
$resFonct=afficherVisites();
echo $resFonct;
?>