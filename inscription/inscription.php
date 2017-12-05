<?php include("../include/config.php") ?>
<html>
<head>
	<title>Inscription</title>
	<meta charset="utf-8">
	<link rel="stylesheet" type="text/css" href="../style/style.css">
</head>

<body>
	
	<?php include("../include/entete.php"); ?>
	<div id="conteneur2">
	<?php include("../include/menuverti.php") ?>		
	</div>
	
		<div id="contenuprincipal" align="center">
			<?php include("inscription.config.php"); ?>
			<h1><u>Inscription</u></h1>
			<br />

			<form method="POST" action="">
				<table>
					<tr>
						<td align="right">
							<label for="pseudo"><b><font color="red">*</font>Pseudo : </b>
							</label>
						</td>
						<td>
							<input type="text" name="pseudo" placeholder="Votre Pseudo" id="pseudo" value="<?php if(isset($pseudo)) { echo $pseudo; } ?>" />
						</td>
					</tr>
					<tr>
						<td align="right">
							<label for="prenom"><b></font>Prenom : </b>
							</label>
						</td>
						<td>
							<input type="text" name="prenom" placeholder="Votre Prenom" id="prenom" value="<?php if(isset($prenom)) { echo $prenom; } ?>" />
						</td>
					</tr>
					<tr>
						<td align="right">
							<label for="nom"><b></font>Nom : </b>
							</label>
						</td>
						<td>
							<input type="text" name="nom" placeholder="Votre Nom" id="nom" value="<?php if(isset($nom)) { echo $nom; } ?>" />
						</td>
					</tr>
					<tr>
						<td>
							<br />
						</td>
					</tr>
					<tr>
						<td align="right">
							<label for="mail"><b><font color="red">*</font>Adresse mail : </b>
							</label>
						</td>
						<td>
							<input type="email" name="mail" placeholder="Votre mail" id="mail" value="<?php if(isset($mail)) { echo $mail; } ?>" />
						</td>
					</tr>
					<tr>
						<td align="right">
							<label for="mail2"><b><font color="red">*</font>Confirmation de l'Adresse mail : </b>
							</label>
						</td>
						<td>
							<input type="email" name="mail2" placeholder="Confirmer votre mail" id="mail2" value="<?php if(isset($mail2)) { echo $mail2; } ?>" />
						</td>
					<tr>
						<td>
							<br />
						</td>
					</tr>
					<tr>
						<td align="right">
							<label for="mdp"><b><font color="red">*</font>Mot de passe: </b>
							</label>
						</td>
						<td>
							<input type="password" name="mdp" placeholder="Votre mot de passe" id="mdp" />
						</td>
					</tr>
					<tr>
						<td align="right">
							<label for="mdp2"><b><font color="red">*</font>Confimation du Mot de passe : </b>
							</label>
						</td>
						<td>
							<input type="password" name="mdp2" placeholder="Confirmer votre mdp" id="mdp2" />
						</td>
					</tr>
					<tr>
						<td align="right">
							<label for="biographie"><b>Biographie : </b>
							</label>
						</td>
						<td>
							<textarea id="biographie" name="biographie" placeholder="Votre biographie"></textarea>
						</td>
					</tr>
					<tr>
						<td></td>
						<td align="center">
							<br />
							<input type="submit" name="forminscription" value="Je m'inscris" />
						</td>
					</tr>
				</table>
			</form>
			<?php 
				if (isset($erreur)) 
				{
					echo "<font color='red'>".$erreur."</font";
				}		
			?>
		</div>

	</div>








</body>