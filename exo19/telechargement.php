<?php
	if(!empty($_GET['nom'])){
		echo $_GET['nom'];
		$fichier = "document.docx";
		if(file_exists($fichier)){
			echo "existe";
			$header = "Content-Disposition: attachement; fileneame=$fichier;";
			header("Content-Type:application/msWord");
			readfile($fichier);

		}
	}
?>

<!DOCTYPE html>
<html lang="fr">
	<head>
		<title>Exo 19</title>
		<meta charset="utf-8"/>
	</head>
	<body>
		<form method="get" action="<?php echo $_SERVER['PHP_SELF'] ?>">
			<label for="nom">Saisissez votre nom pour obtenir le fichier : </label>
			<input type="text" name="nom" id="nom" placeholder="Votre nom"/>
			<input type="submit" value="Envoyer">
			
		</form>
	</body>
</html>
