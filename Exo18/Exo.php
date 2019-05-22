<form method="post">
    <label>Veuillez rentrer le nom de votre fichier : </label>
    <input name="Fichier" type="text">
    <input type="submit">
</form>

<?php
function AfficherArb()
{
    if (isset($_POST["Fichier"]))
    {
        echo (realpath($_POST["Fichier"]));
    }
}

AfficherArb();
?>