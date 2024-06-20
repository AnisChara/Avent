<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../views/css/v_inscription.css">
    <title>Page d'inscription AVent</title>
</head>
<body>
    <div class="login-box">
        <div class="login-box_content">
        <form action="./c_inscription.php" method="POST">
			<h1>inscription</h1>
            <div class="liste-produits">
            <?php if (isset($error_inscription_msg)) echo $error_inscription_msg;?>
                <!-- nom -->
                <div class = "box">
                <label>Nom</label>
					<input type="nom" name="nom" value="">
				</div>
                <!-- prénom -->
                <div class = "box">
                <label>Prénom</label>
					<input type="prenom" name="prenom" value="">
				</div>
                <!-- date de naissance -->
                <div class = "box">
                <label>Date de naissance</label>
                    <input type="date" name="date_naissance" value="" min="1900-01-01" max="2024-12-31" />
                </div>
                <!-- adresse mail -->
				<div class = "box">
                <label>Adresse mail</label>
					<input type="text" name="email" value="">
				</div>
                <!-- case genre -->
                <div class = "box genre-box">
                    <input type="radio" name="genre" value="1">
                    <label>Homme</label>
                    <input type="radio" name="genre" value="2">
                    <label>Femme</label>
                    <input type="radio" name="genre" value="3">
                    <label>Autre</label>
                </div>
                <!-- pseudo -->
                <div class = "box">
                <label>Pseudo</label>
                    <input type="pseudo" name="pseudo" value="">
				</div>
                <!-- mot de passe -->
				<div class = "box">
                <label>Mot de passe</label>    
					<input type="password" name="mot_de_passe" value="">
				</div>
                <!-- thème -->
                <div class = "box">
                <label>Thème 1</label>    
                    <select name="theme1">
                        <option></option>
                        <?php foreach ($themelist as $theme) {
                            echo '<option>'.$theme['theme_name'].'</option>';
                        };
                        ?>
                    </select>
                    
                </div>
                <div class = "box">
                <label>Thème 2</label>    
                    <select name="theme2">
                        <option></option>
                        <?php foreach ($themelist as $theme) {
                            echo '<option>'.$theme['theme_name'].'</option>';
                        };
                        ?>
                    </select>
                </div> 
                <div class = "box">
                <label>Thème 3</label>
                    <select name="theme3">
                        <option></option>
                        <?php foreach ($themelist as $theme) {
                            echo '<option>'.$theme['theme_name'].'</option>';
                        };
                        ?>
                    </select>
                </div>   
                <!-- inscription -->
				<div class = "connect">
					<input type="submit" name="action" value="inscription">
				</div>
            </div>
		</form>
        </div>
    </div>
</body>
</html>