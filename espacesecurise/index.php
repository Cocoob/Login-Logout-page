<?php session_start(); /* Starts the session */
if(!isset($_SESSION['UserData']['Username'])){
header("location:login.php");
exit;
}
?>

<!DOCTYPE html>
<html lang="fr">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="stylesheet" href="style.css">
	<title>Page d'accueil</title>
</head>
<body>
	<h1>
		Félicitation ! Vous avez réussi à vous connecter à cette page. <a href="logout.php">Cliquez ici</a> pour vous déconnecter.

	</h1>
	

	
</body>
</html>
