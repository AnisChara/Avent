<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>page de connexion AVent</title>
</head>
<body>
    <div class="login-box">
        <form action="/c_connexion.php" method="POSTs">
			<h1>login</h1>
				<div class = "box">
					<input type="text" name="adresse_mail" value="">
					<label>Identifiant</label>
				</div>
				<div class = "box">
					<input type="password" name="password" value="">
				    <label>Mot de passe</label>
				</div>
				<div class = "connect">
					<input type="submit" name="action" value="Se connecter">
				</div>
				<div class="register">
					<p>pas encore de compte ? <a href="./c_afficher_page_inscription.php">Créer compte</a></p>
				</div>
		</form>
    </div>
</body>
</html>