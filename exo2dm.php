<?php

$p1 = array(
    "Prénom"=>"Victor", 
    "Nom"=>"Hugo",
    "Photo"=>'http://upload.wikimedia.org/wikipedia/commons/5/5a/Bonnat_Hugo001z.jpg');
$p2 = array(
    "Prénom"=>"Jean", 
    "Nom"=>"de La Fontaine",
    "Photo"=>'http://upload.wikimedia.org/wikipedia/commons/e/e1/La_Fontaine_par_Rigaud.jpg');
$p3 = array(
    "Prénom"=>"Pierre", 
    "Nom"=>"Corneille",
    "Photo"=>'http://upload.wikimedia.org/wikipedia/commons/2/2a/Pierre_Corneille_2.jpg');
$p4 = array(
    "Prenom"=>"Jean",
    "Nom"=>"Racine",
    "Photo"=>'http://upload.wikimedia.org/wikipedia/commons/d/d5/Jean_racine.jpg');

    $informations = array($p1, $p2, $p3, $p4);

function genererGalerie($tab)
{
    echo "<table>";
    foreach($tab[0] as $k=>$v)
    {
        echo "<th>$k</th>";
    }
    foreach($tab as $v)
    {
        echo "<tr>";
        foreach($v as $k=>$val)
        {
            if($k==="Photo"){
                echo "<td><img class=\"photo\" src=\"".$val."\" alt=\"photo de ".$k."\"</td>";
            }else
            echo "<td>$val</td><br/>";
        }
        echo "</tr>";
    }
    echo "</table>";
}
?>

<!DOCTYPE html>

<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="Author" content="DESHAIRS Nicolas">
    <meta name="Description" content="Pas de connexion">
    <meta name="Keywords" content="php, html, css, formulaire, connexion, login">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Formulaire</title>
    <link rel="stylesheet" href="table.css" />
</head>
<body>
<?php
genererGalerie($informations)
?>
</body>
</html>

