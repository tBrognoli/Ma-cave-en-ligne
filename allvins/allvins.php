<?php include("../include/config.php");
<html>
<head>
	<title>Tous les vins</title>
	<meta charset="utf-8">
	<link rel="stylesheet" type="text/css" href="../style/style.css">
</head>

<body>
	
		  include("../include/entete.php");
		  
	?>
	<div id="conteneur2">
		<?php include("../include/menuverti.php"); ?>
	</div>

		<div id="contenuprincipal" align="center">
			<h1><b>Tous les vins</b></h1>
			<br />
			
			<?php include("allvins.config.php"); ?>

			<form method="POST" action="">
				<input type="text" name="appellation" id="appellation" placeholder="Appellation" value="<?php if(isset($appellation)) { echo $appellation; } ?>">
				<select name="couleur">
					<option value=""></option>
					<option value="rouge">Rouge</option>
					<option value="blanc">Blanc</option>
					<option value="rosé">Rosé</option>
				</select>
				<select name="volume">
					<option value="default"></option>
					<option value="0.50">0.5L</option>
					<option value="0.75">0.75L</option>
					<option value="1">1L</option>	
				</select>
				<input type="submit" name="selecvins" value="OK">
			</form>
			<form method="POST" action="http://localhost/Projets/Cave1/allvins.php">
				<input type="submit" name="reset" value="Reset">
			</form>
			<br />

			<?php
			if (isset($_POST['selecvins'])) 
			{
			?>
				<table border="1">
					<tr>
						<td>
							<p><b> Type </b></p>
						</td>
						<td>
							<p><b> Domaine </b></p>
						</td>
						<td>
							<p><b> Couleur </b></b></p>
						</td>
							<p><b> Provenance </b></p>
						</td>
					</tr>
					<?php
					while ($resultat = $requete->fetch()) 
					{
					?>
					<tr>
						<td>
							<?php echo $resultat['appellation']; ?>
						</td>
						<td>
							<?php echo $resultat['domaine']; ?>
						</td>
						<td>
							<?php echo $resultat['couleur']; ?>
						</td>
						<td>
							<?php echo $resultat['provenance']; ?>
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
				<table border="1">
					<tr>
						<td>
							<p><b>Type</b></p>
						</td>
						<td>
							<p><b>Domaine</b></p>
						</td>
						<td>
							<p><b>Couleur</b></b></p>
						</td>
						<td>
							<p><b>Provenance</b></p>
						</td>
					</tr>
					<?php
					while ($resultatvins = $requetevins->fetch())
					{
					?>
					<tr>
						<td>
							<?php echo $resultatvins['appellation']; ?>
						</td>
						<td>
							<?php echo $resultatvins['domaine']; ?>
						</td>
						<td>
							<?php echo $resultatvins['couleur']; ?>
						</td>
						<td>
							<?php echo $resultatvins['provenance']; ?>
						</td>
					</tr>
					<?php
					}
					?>
				</table>
			<?php
			}	
			?>
			<br /><br />

			<?php
			if (isset($_SESSION['id'])) 
			{
			?>
				<form method="POST" action="">
					<input type="submit" name="ajout" value="Ajout">
				</form>
			<?php
			}
			?>

			<?php
			if (isset($_POST['ajout'])) 
			{
			?>
				<form method="POST" action="">
					<table border="1">
						<tr>
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
								<input type="text"  size="15" name="newappellation" placeholder="Appellation">
							</td>
							<td>
								<input type="text" size="15" name="newdomaine" placeholder="Domaine">
							</td>
							<td>
								<input type="text" size="15" name="newcouleur" placeholder="Couleur">
							</td>
							<td>
								<input type="text" size="5" name="newvolume" placeholder="Volume">
							</td>
							<td>
								<input type="text" size="15" name="newprovenance" placeholder="Provenance">
							</td>
							<td>
								<input type="text" size="15" name="newmillesime" placeholder="Millesime">
							</td>
						</tr>
					</table>
					<input type="submit" name="ajoutvins" value="Valider !">
				</form>

			<?php
			}
			?>
		</div>









</body>