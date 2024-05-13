<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Page d'inscription AVent</title>
</head>
<body>
    <div class="login-box">
        <form action="/c_inscription" method="GET">
			<h1>inscription</h1>
            <div class = "box">
					<input type="pseudo" name="pseudo" value="">
				    <label>Pseudo</label>
				</div>
				<div class = "box">
					<input type="text" name="adresse_mail" value="">
					<label>Identifiant</label>
				</div>
				<div class = "box">
					<input type="password" name="password" value="">
				    <label>Mot de passe</label>
				</div>
				<div class = "connect">
					<input type="submit" name="action" value="inscription">
				</div>
		</form>
    </div>
</body>
</html>