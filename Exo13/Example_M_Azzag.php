<?php

function genererFicheProduit($produit) {
    echo "<ul>";
    foreach($produit as $cle=>$val) {
        if($cle === "numero") continue;
        echo "<li><strong>" . ucfirst($cle) . " :</strong> " . $val . "</li>";
    }
    echo "</ul>";

}

function genererListeProduits($produits) {
    echo "<ul>";
    foreach($produits as $produit) {
        echo "<li><a href=\"?produit=".$produit["numero"]."\" >".$produit["nom"]."</a></li>"; //création du lien avec paramètres
    }
    echo "</ul>";
}

$produit1 = array("numero"=>1,"nom"=>"Montre", "prix"=>"100 euros", "descriptif"=>"Une jolie montre.");
$produit2 = array("numero"=>2,"nom"=>"Souris", "prix"=>"10 euros", "descriptif"=>"Une jolie souris.");
$produit3 = array("numero"=>3,"nom"=>"Clavier", "prix"=>"20 euros", "descriptif"=>"Un joli clavier.");
$produits = array($produit1, $produit2, $produit3);

if(!isset($_GET["produit"])) { //si le paramètre produit de l'url n'est pas initialisé avec une valeur (c'est à dire que l'on a pas cliqué sur le lien de la liste, mais qu'il faut afficher la liste des produits)
    echo "Liste des produits : ";
    genererListeProduits($produits);
} else { // si on a cliqué sur un lien, le paramètre produit de l'url est initialisé avec le numéro de produit $_GET["produit"] = 1, ou 2... en fonction du lien cliqué
    foreach($produits as $produit) {
        if($produit["numero"] == $_GET["produit"]) genererFicheProduit($produit);
    }
    echo "<a href=\"".$_SERVER["PHP_SELF"]."\" >Retour vers la liste des produits</a>";
}
?>