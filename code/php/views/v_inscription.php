<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Page d'inscription AVent</title>
</head>
<body>
    <div class="login-box">
        <form action="./c_inscription.php" method="POST">
			<h1>inscription</h1>

            <?php if (isset($error_inscription_msg)) echo $error_inscription_msg;?>
            
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
                    <input type="date" name="date_naissance" value="" min="1900-01-01" max="2024-12-31" />
                    <label>Date de naissance</label>
                </div>
                <!-- adresse mail -->
				<div class = "box">
					<input type="text" name="email" value="">
					<label>mail</label>
				</div>
                <!-- case genre -->
                <div class = "box">
                    <input type="radio" name="genre" value="1">
                    <label>Homme</label>
                    <input type="radio" name="genre" value="2">
                    <label>Femme</label>
                    <input type="radio" name="genre" value="3">
                    <label>Autre</label>
                </div>
                <!-- pseudo -->
                <div class = "box">
					<input type="pseudo" name="pseudo" value="">
				    <label>Pseudo</label>
				</div>
                <!-- mot de passe -->
				<div class = "box">
					<input type="password" name="mot_de_passe" value="">
				    <label>Mot de passe</label>
				</div>
                <!-- thème -->
                <div class = "box">
                    <select name="theme2">
                        <option></option>
                        <?php foreach ($themelist as $theme) {
                            echo '<option>'.$theme['theme_name'].'</option>';
                        };
                        ?>
                    </select>
                    <label>Thème</label>
                </div>
                <div class = "box">
                    <select name="theme2">
                        <option></option>
                        <?php foreach ($themelist as $theme) {
                            echo '<option>'.$theme['theme_name'].'</option>';
                        };
                        ?>
                    </select>
                    <label>Thème</label>
                </div> 
                <div class = "box">
                    <select name="theme2">
                        <option></option>
                        <?php foreach ($themelist as $theme) {
                            echo '<option>'.$theme['theme_name'].'</option>';
                        };
                        ?>
                    </select>
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