<?php

//L'exercice ne fonctionne pas, peut-être a cause de ma fonction substr qui sera négative lors de la première execution de ma boucle ?

$str ="21";
$strRetour ="";

for ($i = 0; $i < strlen($str); $i++)
{
    if ($i == 0)
    {
        $nombre=1;
    }
    else if (substr($str, $i, 1) == substr($str, $i-1, 1))
    {
        $nombre=+1;
    }
    else
    {
        $strRetour .= $nombre . substr($str, $i-1, 1);
        $nombre=1;
    }
}
$strRetour .= $nombre . "";
echo $strRetour;
?>

