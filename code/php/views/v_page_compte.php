<!DOCTYPE html>
<html>
	<head>
		<title>info compte</title>
		<link rel="stylesheet" type="text/css" href="../views/css/v_page_compte.css">
		<meta charset="utf-8">
	</head>
<body>
	<!-- Navigation Bar -->
	<nav class="nav_options">
        <ul>
            <li><a href="./c_accueil.php">Home</a></li>
            <li><a href="./c_avent.php">Avent</a></li>
            <li><a href="./c_afficher_compte.php">Compte</a></li>
            <li><a href="./c_afficher_create_avent.php">Création</a></li>
			<li><a href="./c_deconnexion.php">deco</a></li>
        </ul>
    </nav>

<!-- Main Content -->
	<div class="container">
		<h1>Avent, créez, partagez, profitez !</h1>
		<div class="logo">
			<img src="../views/images/AVent.png" alt="">
		</div>


			<form action="c_modif_compte.php" method="POST">
				<div class ="titre">
					<h2 class="light">compte</h2>
				</div>
				<!-- <?php if ( isset($error_modif_msg)) echo $error_modif_msg; ?>-->
				
                <div class = "box">
                    <input type="text" name="nom" value=<?php echo $info['nom'] ?>>
					<label>nom</label>
                </div>
                <div class = "box">
                    <input type="text" name="prenom" value="<?php echo $info['prenom'] ?>">
					<label>prenom</label>
                </div>
                <div class = "box">
                    <input type="text" name="pseudo" value="<?php echo $info['pseudo'] ?>">
					<label>pseudo</label>
                </div>
				<div class = "box">
					<input type="text" name="mot_de_passe" value="<?php echo $info['mot_de_passe'] ?>">
					<label>Mot de passe</label>
				</div>
				<div class = "box">
					<input type="text" name="email" value="<?php echo $info['email'] ?>">
					<label>email</label>
				</div>
                <div class = "box" >
				<input type="file" name="image">
					<label>photo de profil</label>
                </div>
				<div class = "sauvegarder">
					<input type="submit" value="Sauvegarder">
				</div>
			</form>
		</div>
	</div>
</body>
</html>