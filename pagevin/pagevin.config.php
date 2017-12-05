<?php  

if (isset($_GET['id_vins']) AND $_GET['id_vins'] > 0) 
{
	$getid_vins = intval($_GET['id_vins']);
	$reqvins = $bdd->prepare('SELECT * FROM vins WHERE id_vins = ?');
	$reqvins->execute(array($getid_vins));
	$vinsinfo = $reqvins-> fetch();
}

?>