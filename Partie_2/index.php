<?php

$mysqli = new Mysqli("localhost", "root", "", "bibliotheque");

$livre = $mysqli->query("SELECT * FROM livre");

$emprunt = $mysqli->query("SELECT * FROM emprunt");

$abonne = $mysqli->query("SELECT * FROM abonne");

?>