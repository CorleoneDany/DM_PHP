<!DOCTYPE html>
<html>
	<head>
		<title>DM PHP: Exercice 21</title>
		<meta charset="utf-8">
		<meta name="Author" content="Merwan DAGHOU">
	</head>
	<body>
		<form method="post" action="<?php $_SERVER['PHP_SELF']?>">
			<label for="mot">Mot à chercher :</label>
			<input type="text" id="mot" name="mot"/>
			<input type="submit" value="Chercher">
		</form>
		<?php 
		if(isset($_POST["mot"]))
		{
			$mot=$_POST["mot"];
			require("fonction.php");
			$liste=recherche($mot);
		?>
		<div>
			<p>Les mots susceptibles de correspondre sont les suivants : <?php echo $liste; ?></p>
		</div>
		<?php
		}
		?>
	
	</body>
</html>