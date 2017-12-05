<?php

$requetevins=$bdd->query("SELECT * FROM vins ORDER BY id_vins");

if (isset($_POST['selecvins'])) 
{
	$requete = $bdd->prepare("SELECT * FROM vins WHERE appellation = ? AND couleur = ? AND volume = ?");
	$requete->execute(array($_POST["appellation"], $_POST["couleur"], $_POST["volume"]));
}

if (isset($_POST['newappellation']) AND isset($_POST['newdomaine']) AND isset($_POST['newcouleur']) AND isset($_POST['newvolume']) AND isset($_POST['newprovenance']) AND isset($_POST['newmillesime'])) 
{
	$requeteajoutvins = $bdd->prepare("INSERT INTO vins(appellation, domaine, couleur, provenance) VALUES (?, ?, ?, ?)");
	$requeteajoutvins->execute(array($_POST['newappellation'], $_POST['newdomaine'], $_POST['newcouleur'], $_POST['newprovenance']));
}

?>