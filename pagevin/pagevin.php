<?php include("../include/config.php") ?>
<html>
<head>
	<title>Page Vin</title>
	<meta charset="utf-8">
	<link rel="stylesheet" type="text/css" href="../style/style.css">
</head>

<body>
	
	<?php include("../include/entete.php"); ?>
	<div id="conteneur2">
	<?php include("../include/menuverti.php") ?>		
	</div>

	<div id="contenuprincipal" align="center">
		<?php include("pagevin.config.php"); ?>
		
		<h1><u><?php echo $vinsinfo['appellation']; ?></u></h1>
		<br><br><br>

				<div id="detailvin">
					<table align="center">
						<tr>
							<td rowspan="7">
								<img src="../images/photovins/defaultvin.png" height="40%">
							</td>
							<td>
								<p>Combien qu'il m'en reste ? <?php echo $vinsinfo['nombre']; ?></p>
							</td>
						</tr>
						<tr>
							<td>
								<p>Domaine : <?php echo $vinsinfo['domaine']; ?></p>
							</td>
						</tr>
						<tr>
							<td>
								<p>Provenance : <?php echo $vinsinfo['provenance']; ?></p>
							</td>
						</tr>
						<tr>
							<td>
								<p>Couleur : <?php echo $vinsinfo['couleur']; ?></p>
							</td>
						</tr>
						<tr>
							<td>
								<p>Volume : <?php echo $vinsinfo['volume']; ?> L</p>
							</td>
						</tr>
						<tr>
							<td>
								<p>Millesime : <?php echo $vinsinfo['millesime']; ?></p>
							</td>
						</tr>
					</table>
				<br><br>
				</div>
				<a href="../editionvin/editionvin.php?id_vins=<?php echo $vinsinfo['id_vins']; ?>"><button type="button">Modifier</button></a>
				</form>

	</div>

</body>