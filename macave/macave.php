<?php include("../include/config.php") ?>
<html>
<head>
	<title>Ma Cave</title>
	<meta charset="utf-8">
	<link rel="stylesheet" type="text/css" href="../style/style.css">
</head>

<body>
	
	<?php include("../include/entete.php"); ?>
	<div id="conteneur2">
	<?php include("../include/menuverti.php") ?>		
	</div>

		<div id="contenuprincipal" align="center">
		<?php include("macave.config.php"); ?>
			<h1><b>Ma Cave</b></h1>
			<br />

			<?php 
			if (isset($_SESSION['id'])) 
			{
			?>
				<form method="POST" action="">
					<table border="1">
						<tr>
							<td>
								<p><b> J'en ai </b></p>
							</td>
							<td>
								<p><b> Appellation </b></p>
							</td>
							<td>
								<p><b> Domaine </b></p>
							</td>
							<td>
								<p><b> Couleur </b></b></p>
							</td>
							<td>
								<p><b> Volume </b></b></p>
							</td>
							<td>
								<p><b> Provenance </b></p>
							</td>
							<td>
								<p><b> Millesime </b></p>
							</td>
						</tr>
						<tr>
							<td>
								<input type="text"  size="15" name="ajtnombre" placeholder="Nombre">
							</td>
							<td>
								<input type="text"  size="15" name="ajtappellation" placeholder="Appellation">
							</td>
							<td>
								<input type="text" size="15" name="ajtdomaine" placeholder="Domaine">
							</td>
							<td>
								<input type="text" size="15" name="ajtcouleur" placeholder="Couleur">
							</td>
							<td>
								<input type="text" size="5" name="ajtvolume" placeholder="Volume">
							</td>
							<td>
								<input type="text" size="15" name="ajtprovenance" placeholder="Provenance">
							</td>
							<td>
								<input type="text" size="15" name="ajtmillesime" placeholder="Millesime">
							</td>
						</tr>
					</table>
					<input type="submit" name="ajoutvins" value="Valider !">
				</form>

				<table border ="1">
					
					<tr style="text-align: center;">
							<td>
								<p><b>Nb</b></p>
							</td>
							<td>
								<p><b> Appellation </b></p>
							</td>
							<td>
								<p><b> Domaine </b></p>
							</td>
							<td>
								<p><b> Couleur </b></b></p>
							</td>
							<td>
								<p><b> L </b></b></p>
							</td>
							<td>
								<p><b> Provenance </b></p>
							</td>
							<td>
								<p><b> Millesime </b></p>
							</td>
					</tr>
					<?php

					while ($resultatvins = $requetevins ->fetch()) 
					{
					?>
					<tr style="text-align: center;">
						<td style="width: 30px;">
							<a href="../pagevin/pagevin.php?id_vins=<?php echo $resultatvins['id_vins']; ?>"> <?php echo $resultatvins['nombre']; ?></a>
						</td>
						<td style="width: 150px;">
							<?php echo $resultatvins['appellation']; ?>
						</td>
						<td style="width: 150px;">
							<?php echo $resultatvins['domaine']; ?>
						</td>
						<td style="width: 100px;">
							<?php echo $resultatvins['couleur']; ?>
						</td>
						<td style="width: 30px;">
							<?php echo $resultatvins['volume']; ?>
						</td>
						<td style="width: 150px;">
							<?php echo $resultatvins['provenance']; ?>
						</td>
						<td style="width: 100px;">
							<?php echo $resultatvins['millesime']; ?>
						</td>
					</tr>
					<?php
					}
					?>
				</table>

			<?php
			}
			else
			{
			?>
				<br/ ><br/ ><br/ ><a href="../connexion/connexion.php">Veuillez vous connecter</a>
			<?php
			}
			?>





		</div>








</body>