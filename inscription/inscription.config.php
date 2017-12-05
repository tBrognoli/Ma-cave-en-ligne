<?php

if (isset($_POST['forminscription'])) 
{
	$pseudo = htmlspecialchars($_POST['pseudo']);
	$mail = htmlspecialchars($_POST['mail']);
	$mail2 = htmlspecialchars($_POST['mail2']);
	$mdp = sha1($_POST['mdp']);
	$mdp2 = sha1($_POST['mdp2']);
	$prenom = htmlspecialchars($_POST['prenom']);
	$nom = htmlspecialchars($_POST['nom']);
	$biographie = htmlspecialchars($_POST['biographie']);

	if (!empty($_POST['pseudo']) AND !empty($_POST['mail']) AND !empty($_POST['mail2']) AND !empty($_POST['mdp']) AND !empty($_POST['mdp2'])) 
	{
		$pseudolength = strlen($pseudo);
		if ($pseudolength <= 30)
		{
			$reqpseudo = $bdd->prepare("SELECT * FROM membres WHERE pseudo = ?");
			$reqpseudo->execute(array($pseudo));
			$pseudoexist = $reqpseudo->rowcount();
			if ($pseudoexist == 0) 
			{
				if (filter_var($mail, FILTER_VALIDATE_EMAIL)) 
				{
					$reqmail = $bdd->prepare("SELECT * FROM membres WHERE mail = ?");
					$reqmail->execute(array($mail));
					$mailexist = $reqmail->rowCount();
					if($mailexist == 0)
					{
						if ($mail == $mail2) 
						{
							if ($mdp == $mdp2) 
							{
								$insertmbr = $bdd->prepare("INSERT INTO membres(pseudo, mail, motdepasse, prenom, nom, biographie, avatar) VALUES(?, ?, ?, ?, ?, ?, ?)");
								$insertmbr->execute(array($pseudo, $mail, $mdp, $prenom, $nom, $biographie, "default.jpg"));
								$erreur = "Votre compte a bien été créé !";
								header('location: ../connexion/connexion.php');
							}
							else
							{
								$erreur = "Vos mots de passe ne correspondent pas";
							}
						}
						else
						{
							$erreur = "Vos adresses mails ne correspondent pas";
						}
					}
					else
					{
						$erreur = "Adresse mail déjà utilisée";
					}
				}
				else
				{
					$erreur = "Adresse mail non valide !";
				}
			}
			else
			{
				$erreur = "Pseudo déjà utilisé !";
			}
		}
		else
		{
			$erreur = "Votre pseudo ne doit pas dépasser 30 caractères !";
		}
	}
	else
	{
		$erreur = "Tous les champs avec une * doivent être complétés !";
	}
}

?>