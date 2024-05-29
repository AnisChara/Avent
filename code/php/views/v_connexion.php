<!DOCTYPE html>
<html>
	<head>
		<title>Accueil</title>
		<link rel="stylesheet" type="text/css" href="../views/css/v_connexion.css">
		<meta charset="utf-8">
	</head>
<body>	
	<h1>Avent, créez, partagez, profitez !</h1>
		<div class="login-box">
			<form action="./c_connexion.php" method="POST">
				<div class ="titre">
					<h2 class="light">connexion</h2>
					<a href="c_afficher_page_inscription.php"><h2 class="underline">s'incrire</h2></a>
				</div>
				<?php if ( isset($error_connexion_msg)) echo $error_connexion_msg; ?>
				<div class="icon">
					<img src="../views/images/user.svg" alt=""/>
				</div>
				<div class = "box">
					<input type="text" name="email" value="">
					<label>Email</label>
				</div>
				<div class = "box">
					<input type="password" name="mot_de_passe" value="">
					<label>Mot de passe</label>
				</div>
				<div class = "connect">
					<input type="submit" name="action" value="Se connecter">
				</div>
				<div class="register">
					<p>Avent, créez, partagez, profitez !</p>
				</div>
			</form>
		</div>
	<div class="logo">
		<img src="../views/images/AVent.png" alt="">
	</div>
</body>
</html>
