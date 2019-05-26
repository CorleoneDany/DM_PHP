<?php

if(!empty($_FILES)){
	if(!is_dir('image')){
		mkdir('image');
	}
	$img = $_FILES['image'];
	move_uploaded_file($img['tmp_name'],"image/".$img['name']);
}


?>

<!DOCTYPE html>
<html>
	<head>
		<title>DM PHP: Exercice 20</title>
		<meta charset="utf-8">
		<meta name="Author" content="Merwan DAGHOU">
	</head>
	<body>
		<form method="get" action="galerie.php">
			<label for="image">Ajouter une image : </label>
			<input type="text" name="nom" id="nom"/><br/>
			<input type="file" name="image" id="image"/><br/>
			<input type="submit" value="Ajouter l'image"/>
		</form>
	</body>
</html>