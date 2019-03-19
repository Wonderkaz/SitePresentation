<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Conexion PDO a une base de donnees</title>
</head>
<body>
	<h3> PDO : Connexion a une base de données mySql</h3>
	<?php
		$serveur='localhost';
		$bd='pdoBase';
		$utilisateur='root';
		$mot_passe='root';
		$connexion = new PDO ("mySql:host=$serveur;dbname=$bd", $utilisateur, $mot_passe);
		if ($connexion) echo 'Connexion reusie';
	?>
</body>
</html>