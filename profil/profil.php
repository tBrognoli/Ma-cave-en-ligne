<?php include("../include/config.php") ?>
<html>
<head>
	<title>Mon Profil</title>
	<meta charset="utf-8">
	<link rel="stylesheet" type="text/css" href="../style/style.css">
</head>

<body>
	
	<?php include("../include/entete.php"); ?>
	<div id="conteneur2">
	<?php include("../include/menuverti.php") ?>		
	</div>

		<div id="contenuprincipal" align="center">
			<?php include("profil.config.php"); ?>

			<h1><u>Profil de <?php echo $userinfo['pseudo'] ?></u></h1>
			<br /><br>
			<?php
			if (!empty($userinfo['avatar'])) 
			{
			?>
				<img src="../images/membres/avatars/<?php echo $userinfo['avatar']; ?>" width="150">
				<br><br>
			<?php
			}
			
			if (isset($userinfo['prenom']) AND !empty($userinfo['prenom'])) 
			{
				echo "<b>Prenom : </b>". $userinfo['prenom'] . "<br />";
			}
			if (isset($userinfo['nom']) AND !empty($userinfo['nom'])) 
			{
				echo "<b>Nom : </b>". $userinfo['nom'] . "<br /><br />";
			}
			if (isset($userinfo['mail']) AND !empty($userinfo['mail'])) 
			{
				echo "<b>Mail : </b>". $userinfo['mail'] . "<br /><br />";
			}
			if (isset($userinfo['biographie']) AND !empty($userinfo['biographie'])) 
			{
				echo "<b>Biographie : </b>". $userinfo['biographie']. "<br />";
			}
			?>
			<br />
			<?php 
			if(isset($_SESSION['id']) AND $userinfo['id_membres'] == $_SESSION['id'])
			{
			?>
				<a href="../editionprofil/editionprofil.php">Editer mon profil</a><br />
				<a href="../deconnexion/deconnexion.php">Se déconnecter</a>
			<?php
			}
			?>
		</div>
	</div>
</body>