<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<link rel="stylesheet" href="css/style0.css" />
	<link rel="stylesheet" href="css/style1.css" />
	<link rel="stylesheet" href="css/font-awesome.css" />
	<title>Presentation</title>
</head>
<body>
	<div id="contenu">
		<!--Navigation-->
		<nav id="nav-bar">

			<ul class="navbar-left">
				<li><a href="index.html">Accueil</a></li> 
				<li><a href="#">Blog</a></li> 
				<li><a href="#">CV</a></li> 
				<li><a href="#">Contact</a></li>
			</ul>

			<ul class="navbar-right">
				<li><a href="#"><i class="fa fa-facebook"></i></a></li>
				<li><a href="#"><i class="fa fa-twitter"></i></a></li>
				<li><a href="#"><i class="fa fa-instagram"></i></a></li>
				<li><a href="#"><i class="fa fa-google-plus"></i></a></li>
			</ul>

		</nav>

			<?php 
				echo "Bonjour"; 
			?><br /><br />

			<?php
				$user = 'root';
				$password = 'root';
				$db = 'bd_blog';
				$host = 'localhost';
				$port = 8889;
				$link = mysqli_connect("$host:$port", $user, $password);
				$db_selected = mysqli_select_db($link, $db);

				if ($link) echo "connexion reusie";
					 
			?>
			<?php
				
				// Récupération du billet
				$v1 = mysqli_query($link, 'SELECT id, titre, contenu, DATE_FORMAT(date_creation, \'%d/%m/%Y à %Hh%imin%ss\') AS date_creation_fr FROM billets WHERE id = \'' . $_GET['billet'] . '\''); 

				$info_article = mysqli_fetch_array($v1);
				if (isset($info_article['id'])){
			?>

				<div class="news">
				<h3>
				<?php echo htmlspecialchars($info_article['titre']); ?> <em>le <?php echo $info_article['date_creation_fr']; ?></em>
				</h3>
				<p>
				<?php echo nl2br(htmlspecialchars($info_article['contenu']));?>
				</p> </div>
				<h2>Commentaires</h2>
				<form action="commentaires_post.php" method="post"> <p>
					<label for="auteur">Auteur</label> : <input type="text" name="auteur" id="auteur" /><br /><br />
					<label for="commentaire">Commentaire</label> : <input type="text" name="commentaire" id="commentaire" /><br />
					<input type="submit" value="Envoyer" /> </p>
				</form>
			<?php
				// Récupération des commentaires
				$v2 = mysqli_query ($link, 'SELECT auteur, commentaire, DATE_FORMAT(date_commentaire, \'%d/%m/%Y à %Hh%imin%ss\') AS date_commentaire_fr FROM commentaires WHERE id_billet = \'' . $_GET['billet'] . '\' ORDER BY id');
				While($info_com = mysqli_fetch_array($v2)) 
				{
			?>
				<p><strong><?php echo htmlspecialchars($info_com['auteur']); ?></strong> le <?php echo $info_com['date_commentaire_fr']; ?> </p> <p><?php echo nl2br(htmlspecialchars($info_com['commentaire'])); ?></p>
			<?php
				}
				}
				else
				{
					echo "Erreur : news non existante";
				}
			?>
	
		

		<footer>
			
			<ul class="navbar-footer">
				<li><a href="#"><i class="fa fa-facebook"></i></a></li>
				<li><a href="#"><i class="fa fa-twitter"></i></a></li>
				<li><a href="#"><i class="fa fa-instagram"></i></a></li>
				<li><a href="#"><i class="fa fa-google-plus"></i></a></li>
			</ul>

			<div class="bottom-footer">
				<i class="fa fa-copyright"></i>
					Copyright 2019. All rights reserved.
			</div>

		</footer>
	</div>
</body>
</html>