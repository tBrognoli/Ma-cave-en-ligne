<?php

$requetevins=$bdd->query("SELECT * FROM vins ORDER BY id_vins");


if (isset($_POST['ajoutvins']))
{
	$requajtvins = $bdd->prepare("INSERT INTO vins(nombre, appellation, domaine, couleur,  volume, provenance, millesime, lien) VALUES (?, ?, ?, ?, ?, ?, ?, http://../pagevin/pagevin.php?id_vins=)");
	$requajtvins->execute(array($_POST['ajtnombre'], $_POST['ajtappellation'], $_POST['ajtdomaine'], $_POST['ajtcouleur'], $_POST['ajtvolume'], $_POST['ajtprovenance'], $_POST['ajtmillesime']));
	header('location: ../macave/macave.php?id='.$_SESSION['id']);

}
?>