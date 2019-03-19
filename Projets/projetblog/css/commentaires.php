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