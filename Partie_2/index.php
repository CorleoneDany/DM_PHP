<?php

$mysqli = new Mysqli("localhost", "root", "", "bibliotheque");

$livre = $mysqli->query("SELECT * FROM livre");
foreach($livre as $clé=>$valeur){
    echo $clé['valeur'] . ' ' . $valeur['id_livre'] . ' ';
    echo $clé['auteur'] . ' ' . $valeur['auteur'] . ' ';
    echo $clé['titre'] . ' ' . $valeur['titre'] . '<br><br>';
}

$emprunt = $mysqli->query("SELECT * FROM emprunt");
foreach($emprunt as $clé=>$valeur){
    echo ' ';
}

$abonne = $mysqli->query("SELECT * FROM abonne");
foreach($abonne as $clé=>$valeur){
    echo ' ';
}

?>