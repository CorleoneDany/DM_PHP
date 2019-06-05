<?php

// L'exercice fonctionne désormais, une erreur de syntaxe était la cause du non fonctionnement ("nombre =+ 1" au lieu de "nombre += 1")

$str ="145588266";
$strRetour ="";

for ($i = 0; $i < strlen($str-1); $i++)
{
    if ($i == 0)
    {
        $nombre=1;
    }
    else if (substr($str, $i, 1) == substr($str, $i-1, 1))
    {
        $nombre+=1;
    }
    else
    {
        $strRetour .= $nombre . substr($str, $i-1, 1);
        $nombre=1;
    }
}
$strRetour .= $nombre . $str[strlen($str)-1];
echo $strRetour;
?>

