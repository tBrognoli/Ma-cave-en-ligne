<?php include("../include/config.php") ?>
<html>
<head>
	<title>Connexion</title>
	<meta charset="utf-8">
	<link rel="stylesheet" type="text/css" href="../style/style.css">
</head>

<body>
	
	<?php include("../include/entete.php"); ?>
	<div id="conteneur2">
	<?php include("../include/menuverti.php") ?>		
	</div>

		<div id="contenuprincipal" align="center">
				<h1><u>Connexion</u></h1>
				<br />
					
				<form method="POST" action="">
					<table>
						<tr>
							<td>
								<label for="mailconnect"><b>Mail : </b></label>
							</td>
							<td>
								<input type="email" name="mailconnect" id="mailconnect" placeholder="Votre mail" value="<?php if(isset($mailconnect)) { echo $mailconnect; } ?>" />
							</td>
						</tr>
						<tr>
							<td>
								<label for="mdpconnect"><b>Mot de passe : </b></label>
							</td>
							<td>
								<input type="password" name="mdpconnect" id="mdpconnect" placeholder="Votre mdp" />
							</td>
						</tr>
						<tr>
							<td></td>
							<td align="center">
								<br />
								<input type="submit" name="formconnexion2" value=" Se connecter" />
							</td>
						</tr>
					</table>
			</form>
			<?php
				if (isset($erreur2)) 
				{
					echo '<font color="red">'.$erreur2.'</font';
				}
			?>
		</div>

	</div>








</body>