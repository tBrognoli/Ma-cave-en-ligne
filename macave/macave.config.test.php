<?php

if (isset($_POST['ajoutvins']))
{
	$requajtvins = $bdd->prepare("INSERT INTO vins(appellation, couleur, domaine, provenance) VALUES (?, ?, ?, ?)");
	$requajtvins->execute(array($_POST['ajtappellation'], $_POST['ajtdomaine'], $_POST['ajtcouleur'], $_POST['ajtprovenance'])) or die(print_r($requajtvins->errorInfo(), TRUE));;
	
	$lastid_vins = $bdd->lastInsertId();
	echo $lastid_vins."<br />";

	$reqajtbout = $bdd -> prepare("INSERT INTO bouteilles(id_membres, id_vins, volume, millesime, nombre) VALUES (?, ?, ?, ?, ?)");
	$reqajtbout->execute(array($_SESSION['id'], '$lastid_vins', $_POST['ajtvolume'], $_POST['ajtmillesime'], $_POST['ajtnombre'])) or die(print_r($reqajtbout->errorInfo(), TRUE));;
	echo "gg";
	
}

?>