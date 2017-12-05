<?php include("../include/config.php") ?>
<html>
<head>
	<title>Accueil</title>
	<meta charset="utf-8">
	<link rel="stylesheet" type="text/css" href="../style/style.css">
</head>

<body>
	
	<?php include("../include/entete.php"); ?>
	<div id="conteneur2">
	<?php include("../include/menuverti.php") ?>		
	</div>

		<div id="contenuprincipal" align="center">
			<?php include("../pagevin/pagevin.config.php"); ?>

			<h1><b>Edition</b></h1>
			<br />
		    	<form method="POST" action="" enctype="multipart/form-data">
					<table>
						<tr>
							<td rowspan="5">
								<img src="../images/photovins/defaultvin.png" height="30%">
							</td>
							<td>
								<p>J'en ai :
								<input type="text" size="10" id="newnombre" name="newnombre" placeholder="<?php echo $vinsinfo['nombre']; ?>"><p>
							</td>
						</tr>
						<tr>
							<td>
								<p>Domaine :
								<input type="text" size="10" id="newdomaine" name="newdomaine" placeholder="<?php echo $vinsinfo['domaine']; ?>"><p>
							</td>
						</tr>
						<tr>
							<td>
								<p>Provenance :
								<input type="text" size="10" id="newprovenance" name="newprovenance" placeholder="<?php echo $vinsinfo['provenance']; ?>"><p>
							</td>
						</tr>
						<tr>
							<td>
								<p>Couleur :
								<input type="text" size="10" id="newcouleur" name="newcouleur" placeholder="<?php echo $vinsinfo['couleur']; ?>"><p>
							</td>
						</tr>
						<tr>
							<td>
								<p>Volume :
								<input type="text" size="10" id="newvolume" name="newvolume" placeholder="<?php echo $vinsinfo['volume']; ?>"><p>
							</td>
						</tr>
						<tr>
							<td>
								<input type="file" name="photovins" value="aller mec">
							</td>
							<td>
								<p>Millesime :
								<input type="text" size="10" id="newmillesime" name="newmillesime" placeholder="<?php echo $vinsinfo['millesime']; ?>"><p>
							</td>
						</tr>
					</table>
					<br><br>
					<input type="submit" value="Mettre à jour !">
				</form>

		</div>

	








</body>