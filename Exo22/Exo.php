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

<input type="submit" value="Sauvegarder">
</form>

<?php

if(isset($_POST))
{
setcookie("Couleur", $_POST["Couleur"]);
setcookie("Taille", $_POST['Taille']);
}
?>