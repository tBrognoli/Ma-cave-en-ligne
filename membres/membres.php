<?php include("../include/config.php") ?>
<html>
<head>
	<title>Inscription1</title>
	<meta charset="utf-8">
	<link rel="stylesheet" type="text/css" href="../style/style.css">
</head>

<body>
	
	<?php include("../include/entete.php"); ?>
	<div id="conteneur2">
	<?php include("../include/menuverti.php") ?>		
	</div>

		<div id="contenuprincipal" align="center">
			<?php include("membres.config.php"); ?>
			<h1>Nos membres</h1>
			<br />
			<table border="1">	
				<tr>
					<td>
						<p><b>ID</b></p>
					</td>
					<td>
						<p><b>Pseudo</b></p>
					</td>
					<td>
						<p><b>Nom</b></b></p>
					</td>
					<td>
						<p><b>Prenom</b></b></p>
					</td>
				</tr>
				<?php
				while ($resultatmembres = $requetemembres->fetch())
				{
				?>
				<tr>
					<td>
						<?php echo $resultatmembres['id_membres']; ?>
					</td>
					<td>
						<?php echo $resultatmembres['pseudo']; ?>
					</td>
					<td>
						<?php echo $resultatmembres['nom']; ?>
					</td>
					<td>
						<?php echo $resultatmembres['prenom']; ?>
					</td>
				</tr>
				<?php
				}
				?>
			</table>
		</div>

	</div>
</body>