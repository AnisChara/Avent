<!DOCTYPE html>
<html>
	<head>
		<title>Accueil</title>
		<link href='https://fonts.googleapis.com/css?family=League Spartan' rel='stylesheet'>
		<link rel="stylesheet" type="text/css" href="../views/css/v_connexion.css">
		<meta charset="utf-8">
	</head>
<body>
	<div class="logo-container">
	<img src="../views/images/logo_avent.png" class="logo">
	</div>
	
	<div class="slogan">
		<h2>Créez, partagez, profitez !</h2>
	</div>
	
	<form action="c_connexion.php" method="POST" class="form">
		<input type="text" name="email" class="box" placeholder="adresse mail">
		<input type="password" name="mot_de_passe" class="box" placeholder="mot de passe">
		<input type="submit" name="action" value="Se connecter">
	</form>
</body>
</html>
