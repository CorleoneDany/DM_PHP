<?php
if(!empty($_FILES)){
	$dossier = 'galerie';
	if(!is_dir($dossier)){
		echo is_dir($dossier);
		mkdir($dossier);
	}
	$img = $_FILES['image'];
	$extension = substr($img['name'],-3);
	$tabext = array('tif','jpg','gif','png');
	$bBonFormat=false;
	foreach($tabext as $v){
		if($extension==$v){
			$bBonFormat=true;
			break;
		}
	}
	
	if($bBonFormat){
		move_uploaded_file($img['tmp_name'],$dossier."/".$img['name']);
	}
	else{
		echo "Le fichier sélectionné n'est pas au format d'image";
	}
}
?>

<!DOCTYPE html>
<html lang="fr">
	<head>
		<title>DM PHP: Exercice 20</title>
		<meta charset="utf-8">
		<meta name="Author" content="Merwan DAGHOU">
		<link rel="stylesheet" href="style.css"/>
	</head>
	<body>
		<form method="post" action="galerie.php" enctype="multipart/form-data">
			<label for="image">Ajouter une image : </label>
			<input type="file" name="image" id="image"/><br/>
			<input type="submit" value="Ajouter l'image"/><br/><br/>
		</form>

<?php
	$dossier= 'galerie';
if(is_dir($dossier)){

	$resdos=opendir($dossier);
	$i=0;
		while(false !== ($fichier = readdir($resdos)) && $i<300){
			$i+=1;
			if($fichier!='.' && $fichier!= '..'){
				$fichier=$dossier."/".$fichier;
?>

		<div>
			<img src="<?php echo $fichier; ?>"></br>
			<p>Chemin du fichier : <?php echo $fichier; ?></p>
		</div>
<?php
			}
		}
	}
?>	
		

	</body>
</html> 
