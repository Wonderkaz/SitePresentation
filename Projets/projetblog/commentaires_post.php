<?php
	ob_start();
?>

<?php
	// Connexion à la base de données
	$user = 'root';
	$password = 'root';
	$db = 'bd_blog';
	$host = 'localhost';
	$port = 8889;
	$link = mysqli_connect("$host:$port", $user, $password);
	$db_selected = mysqli_select_db($link, $db);

	if ($link) echo "connexion reusie";				
	// Verification et protection des donnees
	if (isset($_POST['auteur']) AND isset($_POST['commentaire'])){
		$auteur=mysqli_escape_string($link,$_POST['auteur']);
		$commentaire=mysqli_escape_string($link, $_POST['commentaire']);
	
	// Insertion dans la base de donnees
	mysqli_query($link, 'INSERT INTO commentaires VALUES("", "\'' . $_GET['billet'] . '\'", "'.$auteur.'", "'.$commentaire.'", "")');
	// Redirection du visiteur vers la page du commentaires
	header('Location: commentaires.php');
	ob_end_flush(); 
	}
?>