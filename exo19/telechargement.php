<?php
	if(!empty($_GET['nom'])){
	echo $_GET['nom'];
	$fichier = "test.zip";
	
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
