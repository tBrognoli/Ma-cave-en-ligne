<?php  

if (isset($_GET['id']) AND $_GET['id'] > 0) 
{
	$getid = intval($_GET['id']);
	$requser = $bdd->prepare('SELECT * FROM membres WHERE id_membres = ?');
	$requser->execute(array($getid));
	$userinfo = $requser-> fetch();
}

?>