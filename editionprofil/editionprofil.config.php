<?php

if (isset($_SESSION['id'])) 
{
	$requser = $bdd->prepare("SELECT * FROM membres WHERE id_membres = ?");
	$requser->execute(array($_SESSION['id']));
	$user = $requser->fetch();

	if(isset($_POST['newpseudo']) AND !empty($_POST['newpseudo']) AND $_POST['newpseudo'] != $user['pseudo'])
	{
		$newpseudo = htmlspecialchars($_POST['newpseudo']);
		$newpseudolength = strlen($newpseudo);
		if ($newpseudolength <= 30)
		{
			$newreqpseudo = $bdd->prepare("SELECT * FROM membres WHERE pseudo = ?");
			$newreqpseudo->execute(array($newpseudo));
			$newpseudoexist = $newreqpseudo->rowcount();
			if ($newpseudoexist == 0) 
			{
				$newinsertpseudo = $bdd->prepare("UPDATE membres SET pseudo = ? WHERE id_membres = ?");
				$newinsertpseudo->execute(array($newpseudo, $_SESSION['id']));
				header('location: ../profil/profil.php?id='.$_SESSION['id']);
			}
			else
			{
				$msg = "Pseudo déjà utilisé";
			}
		}
		else
		{
			$msg = "Votre pseudo ne doit pas contenir plus de 30 caractères";
		}
	}

	if(isset($_POST['newmail']) AND !empty($_POST['newmail']) AND $_POST['newmail'] != $user['mail'])
	{
		$newmail = htmlspecialchars($_POST['newmail']);
		if (filter_var($newmail, FILTER_VALIDATE_EMAIL))
		{
			$newreqmail = $bdd->prepare("SELECT * FROM membres WHERE mail = ?");
			$newreqmail->execute(array($newmail));
			$newmailexist = $newreqmail->rowcount();
			if ($newmailexist == 0) 
			{
				$newinsertmail = $bdd->prepare("UPDATE membres SET mail = ? WHERE id_membres = ?");
				$newinsertmail->execute(array($newmail, $_SESSION['id']));
				header('location: ../profil/profil.php?id='.$_SESSION['id']);
			}
			else
			{
				$msg = "Mail déjà utilisé";
			}
		}
		else
		{
			$msg = "Votre mail ne doit pas contenir plus de 30 caractères";
		}
	}

	if(isset($_POST['newmdp1']) AND !empty($_POST['newmdp1']) AND isset($_POST['newmdp2']) AND !empty($_POST['newmdp2'])) 
	{
		$mdp1 = sha1($_POST['newmdp1']);
		$mdp2 = sha1($_POST['newmdp2']);

		if($mdp1 == $mdp2)
		{
			$insertmdp = $bdd->prepare("UPDATE membres SET motdepasse = ? WHERE id_membres = ?");
			$insertmdp->execute(array($mdp1, $_SESSION['id']));
			header('location: ../profil/profil.php?id='.$_SESSION['id']);
		}	
		else
		{
			$msg = "Vos deux mdp ne correspondents pas !";
		}
	}

	if(isset($_POST['newprenom']) AND $_POST['newprenom'] != $user['prenom'])
	{
		$newprenom = htmlspecialchars($_POST['newprenom']);
		$newinsertprenom = $bdd->prepare("UPDATE membres SET prenom = ? WHERE id_membres = ?");
		$newinsertprenom->execute(array($newprenom, $_SESSION['id']));
		header('location: ../profil/profil.php?id='.$_SESSION['id']);
	}
	if(isset($_POST['newnom']) AND $_POST['newnom'] != $user['nom'])
	{
		$newnom = htmlspecialchars($_POST['newnom']);
		$newinsertnom = $bdd->prepare("UPDATE membres SET nom = ? WHERE id_membres = ?");
		$newinsertnom->execute(array($newnom, $_SESSION['id']));
		header('location: ../profil/profil.php?id='.$_SESSION['id']);
	}
	if(isset($_POST['newbiographie']) AND $_POST['newbiographie'] != $user['biographie'])
	{
		$newbiographie = htmlspecialchars($_POST['newbiographie']);
		$newinsertbiographie = $bdd->prepare("UPDATE membres SET biographie = ? WHERE id_membres = ?");
		$newinsertbiographie->execute(array($newbiographie, $_SESSION['id']));
		header('location: ../profil/profil.php?id='.$_SESSION['id']);
	}
	if (isset($_FILES['avatar']) AND !empty($_FILES['avatar']['name'])) 
	{
		$tailleMax = 2097152;
		$extensionValides = array('jpg', 'jpeg', 'gif', 'png');
		if ($_FILES['avatar']['size'] <= $tailleMax) 
		{
			$extensionUpload = strtolower(substr(strchr($_FILES['avatar']['name'], '.'), 1));
			if (in_array($extensionUpload, $extensionValides)) 
			{
				$chemin = "../images/membres/avatars/".$_SESSION['id'].".".$extensionUpload;
				$resultat = move_uploaded_file($_FILES['avatar']['tmp_name'], $chemin);
				if ($resultat) 
				{
					$updateavatar = $bdd->prepare('UPDATE membres SET avatar = :avatar WHERE id_membres = :id');
					$updateavatar->execute(array(
						'avatar' => $_SESSION['id'].".".$extensionUpload, 
						'id' => $_SESSION['id']
						));
					header('location: ../profil/profil.php?id='.$_SESSION['id']);
				}
				else
				{
					$msg = "Erreur pendant l'importation de votre photo de profil";
				}
			}
			else
				{
					$msg = "Votre photo de profil doit être au format jpg, jpeg, gif ou png";
				}
		}
		else
		{
			$msg = "Votre photo de profil ne doit pas dépasser 2Mo";
		}
	}
}

?>