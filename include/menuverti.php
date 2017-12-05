<div id="menuverti">
			<?php
			if(isset($_SESSION['id']))
			{
			?>
				<div id="dejaconnect" align="center">
					<h3>Bonjour <?php echo $userinfo['pseudo']?></h3>
					<?php
					if (!empty($userinfo['avatar'])) 
					{
					?>
						<img src="../images/membres/avatars/<?php echo $userinfo['avatar']; ?>" width="150">
						<br><br>
					<?php
			}
			?>
				</div>
			<?php
			}
			else
			{
			?>
				<div id="menuconnect" align="center">
					<p><u>Connexion</u></p>
					<form method="POST" action="">
						<input class="input" type="email" name="mailconnect" id="mailconnect" placeholder="Votre adresse mail" value="<?php if(isset($mailconnect)) { echo $mailconnect; } ?>">
						<input class="input" type="password" name="mdpconnect" id="mdpconnect" placeholder="Votre mot de passe">
						<input type="submit" name="formconnexion2" value="Je me connecte" />
					</form>
					<?php
					if (isset($erreur2)) 
					{
						echo '<font color="red">' .$erreur2. "</font> <br />";
					}
					?>
					<p>Pas encore de compte ?</p><a href="../inscription/inscription.php"><b>Inscrivez vous !</font></b></a>
				</div>
			<?php
			}
			?>

			<div id="menu2">
				<ul>
					<li><a href="#">Recherche</a></li><br /><br /><br />
					<li><a href="../allvins/allvins.php"><u>Tous les vins</u></a></li><br />
					<li><a href="#">Mes vins rouges</a></li><br />
					<li><a href="#">Mes vins blancs</a></li><br />
					<li><a href="#">Mes vins rosés</a></li><br />
					<li><a href="#">Mes autres vins</a></li><br /><br />
					<li><a href="../membres/membres.php">Nos membres</a></li>
				</ul>	
			</div>