<div id="conteneur1">
		<div id="banner1">
		</div>
		<div id="menu1">
			<ul>
			<?php
				if(isset($_SESSION['id'])) 
				{
					echo'<li><a href="../index.php?id='.$_SESSION['id'].'">Accueil</a></li>';
					echo'<li><a href="../macave/macave.php?id='.$_SESSION['id'].'">Ma cave</a></li>';
					echo'<li><a href="../profil/profil.php?id='.$_SESSION['id'].'">Mon profil</a></li>';
					echo'<li><a href="../forum/forum.php?id='.$_SESSION['id'].'">Forum</a></li>';
					echo'<li><a href="../deconnexion/deconnexion">Deconnexion</a></li>';
				}
				else
				{
					echo'<li><a href="../index.php">Accueil</a></li>';
					echo'<li><a href="../inscription/inscription.php">Inscription</a></li>';
					echo'<li><a href="../connexion/connexion.php">Connexion</a></li>';
				}
				?>
			</ul>
		</div>
	</div>