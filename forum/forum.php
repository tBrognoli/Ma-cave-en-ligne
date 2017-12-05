<?php include("../include/config.php"); ?>
<html>
<head>
	<title>Forum</title>
	<meta charset="utf-8">
	<link rel="stylesheet" type="text/css" href="../style/style.css">
	<link rel="stylesheet" type="text/css" href="forum.style.css">
</head>

<body>
	<?php include("../include/entete.php"); ?>
	<div id="conteneur2">
	<?php include("../include/menuverti.php"); ?>		
	</div>

		<div id="contenuprincipal" align="center">
			<?php include("forum.config.php"); ?>
			<h1><b>Forum</b></h1>

			<table class="forum">
				<tr class="header">
					<th class="main">Catégories</th>
					<th class="sub-info">Messages</th>
					<th class="sub-info">Dernier message</th>
				</tr>
				<?php 
				while($c = $categories->fetch()) 
				{ 
					$subcat->execute(array($c['id']));
					$sc = '';
					while($sc .= $subcat-> fetch()) 
								{
									$sc.=  $sc['nom'] .' | ';
								}
				?>
					<tr>
						<td class="main">
							<h4><?=$c['nom'] ?><h4> <!-- < ?=  == < ?php echo </!-->
							<p>
								<?= $sc
								?>
							</p>
						</td>
						<td class="sub-info">4856984</td>
						<td class="sub-info">04.11.2016<br>de Past3ak</td>
					</tr>
				<?php
				}
				?>
			</table>


		</div>

	</div>








</body>