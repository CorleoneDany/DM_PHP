<html>
<?php
define('CSS_PATH', './css/');

if(!empty($_POST))
{
$Couleur = $_POST["Couleur"];
$Taille = $_POST["Taille"];
setcookie("Couleur", $_POST["Couleur"]);
setcookie("Taille", $_POST['Taille']);
}
?>

<link rel="stylesheet" type="text/css" href="<?php echo CSS_PATH . $Couleur?> ">
<link rel="stylesheet" type="text/css" href="<?php echo CSS_PATH . $Taille?> ">
<form action="Exo.php" method="post">
<label>Couleur</label><br>
<select name="Couleur" size="1">
<option>Rouge
<option>Bleu
<option>Noir
</select><br><br>

<label>Taille</label><br>
<select name="Taille" size="1">
<option>Petit
<option>Moyen
<option>Grand
</select><br><br>

<input type="submit" value="Sauvegarder"><br><br>

<?php echo "<p>Visiblement, vous aimez le " . $Couleur . "</p>"; ?>
</form>
</html>