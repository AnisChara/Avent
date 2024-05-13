<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Page d'inscription AVent</title>
</head>
<body>
    <div class="login-box">
        <form action="/c_inscription" method="POST">
			<h1>inscription</h1>
                <!-- nom -->
                <div class = "box">
					<input type="nom" name="nom" value="">
				    <label>Nom</label>
				</div>
                <!-- prénom -->
                <div class = "box">
					<input type="prenom" name="prenom" value="">
				    <label>Prénom</label>
				</div>
                <!-- date de naissance -->
                <div class = "box">
                    <input type="date" name="date_de_naissance" value="" min="1900-01-01" max="2024-12-31" />
                    <label>Date de naissance</label>
                </div>
                <!-- adresse mail -->
				<div class = "box">
					<input type="text" name="adresse_mail" value="">
					<label>mail</label>
				</div>
                <!-- case genre -->
                <div class = "box">
                    <input type="radio" name="genre" value="homme">
                    <label>Homme</label>
                    <input type="radio" name="genre" value="femme">
                    <label>Femme</label>
                    <input type="radio" name="genre" value="autre">
                    <label>Autre</label>
                </div>
                <!-- pseudo -->
                <div class = "box">
					<input type="pseudo" name="pseudo" value="">
				    <label>Pseudo</label>
				</div>
                <!-- mot de passe -->
				<div class = "box">
					<input type="password" name="password" value="">
				    <label>Mot de passe</label>
				</div>
                <!-- thème -->
                <div class = "box">
                    <input type="text" name="theme1" value="">
                    <label>Thème</label>
                </div>
                <div class = "box">
                    <input type="text" name="theme2" value="">
                    <label>Thème</label>
                </div> 
                <div class = "box">
                    <input type="text" name="theme3" value="">
                    <label>Thème</label>
                </div>   
                <!-- inscription -->
				<div class = "connect">
					<input type="submit" name="action" value="inscription">
				</div>
		</form>
    </div>
</body>
</html>