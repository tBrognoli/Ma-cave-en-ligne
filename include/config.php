<?php
session_start();

$bdd = new PDO("mysql:host=db665478216.db.1and1.com;dbname=db665478216;charset=utf8", "*******", "********");

if (!isset($_SESSION['id']) AND isset($_POST['formconnexion2'])) 
{
	$mailconnect = htmlspecialchars($_POST['mailconnect']);
	$mdpconnect = sha1($_POST['mdpconnect']);
	if (!empty($mailconnect) AND !empty($mdpconnect))
	{
		$requser = $bdd->prepare("SELECT * FROM membres WHERE mail = ? AND motdepasse = ?");
		$requser->execute(array($mailconnect, $mdpconnect));
		$userexist = $requser->rowCount();
		if ($userexist == 1)
		{
			$userinfo = $requser->fetch();
			$_SESSION['id'] = $userinfo['id_membres'];
			$_SESSION['pseudo'] = $userinfo['pseudo'];
			$_SESSION['mail'] = $userinfo['mail'];
			header("location: ../index.php?id=".$_SESSION['id']);
		}
		else
		{
			$erreur2 = "Mauvais mail ou mot de passe";
		}
	}
	else
	{
		$erreur2 = "Tous les champs doivent être complétés";
	}
}

if(isset($_SESSION['id']))
{
	$requser = $bdd->prepare('SELECT * FROM membres WHERE id_membres = ?');
	$requser->execute(array($_SESSION['id']));
	$userinfo = $requser-> fetch(); 
}



?>
