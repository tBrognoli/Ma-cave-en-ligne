<?php include("../include/config.php") ?>
<html>
<head>
	<title>Edition profil</title>
	<meta charset="utf-8">
	<link rel="stylesheet" type="text/css" href="../style/style.css">
</head>

<body>
	
	<?php include("../include/entete.php"); ?>
	<div id="conteneur2">
	<?php include("../include/menuverti.php") ?>
	</div>

		<div id="contenuprincipal" align="center">
		<?php include("editionprofil.config.php"); ?>
			<h1><u>Edition de mon profil</u></h1>
			<br /><br>

			<form method="POST" action="" enctype="multipart/form-data">
				<table>
					<tr>
						<td align="right">
							<label for="newpseudo">Pseudo :</label>
						</td>
						<td>
							<input type="text" id="newpseudo" name="newpseudo" placeholder="Mon pseudo" value="<?php echo $user['pseudo']; ?>" />
						</td>
					</tr>
					<tr>
						<td><br /></td>
						<td></td>
					</tr>
					<tr>
						<td align="right">
							<label for="newprenom">Prénom :</label>
						</td>
						<td>
							<input type="text" id="newprenom" name="newprenom" placeholder="Mon prenom" value="<?php echo $user['prenom']; ?>" />
						</td>
					</tr>
					<tr>
						<td align="right">
							<label for="newnom">Nom :
							</label>
						</td>
						<td>
							<input type="text" id="newnom" name="newnom" placeholder="Mon nom" value="<?php echo $user['nom']; ?>" />
						</td>
					</tr>
					<tr>
						<td><br /></td>
						<td></td>
					</tr>
					<tr>
						<td align="right">
							<label for="newmail">Mail :
							</label>
						</td>
						<td>
							<input type="email" id="newmail" name="newmail" placeholder="Mon mail" value="<?php echo $user['mail']; ?>" />
						</td>
					</tr>
					<tr>
						<td align="right">
							<label for="newmdp1">Mot de passe :
							</label>
						</td>
						<td>
							<input type="password" id="newmdp1" name="newmdp1" placeholder="Mon mot de passe">
						</td>
					</tr>
					<tr>
						<td align="right">
							<label for="newmdp1">Confirmer le mot de passe :
							</label>
						</td>
						<td>
							<input type="password" id="newmdp2" name="newmdp2" placeholder="Confirmation du mdp">
						</td>
					</tr>
					<tr>
						<td><br /></td>
						<td></td>
					</tr>
					<tr>
						<td align="right">
							<label for="newbiographie">Biographie :
							</label>
						</td>
						<td>
							<textarea id="newbiographie" name="newbiographie" placeholder="Ma biographie"></textarea value="<?php echo $user['biographie']; ?>" />
						</td>
					</tr>
					<tr>
						<td><br /></td>
						<td></td>
					</tr>
					<tr>
						<td align="right">
							<label for="avatar">Avatar :
							</label>
						</td>
						<td>
							<input type="file" name="avatar">
						</td>
					</tr>
					<tr>
						<td></td>
						<td align="center">
							<br /><br>
							<input type="submit" value="Mettre à jour mon profil" />
						</td>
					</tr>
				</table>
			</form>
			<?php 
			if (isset($msg)) 
			{
				echo $msg;
			}
			?>
		</div>
	</div>
</body>