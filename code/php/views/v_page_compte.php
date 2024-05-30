<!DOCTYPE html>
<html>
	<head>
		<title>info compte</title>
		<link rel="stylesheet" type="text/css" href="../views/css/v_user_info.css">
		<meta charset="utf-8">
	</head>
<body>
	<!-- Navigation Bar -->
	<nav class="nav_options">
        <ul>
            <li><a href="./c_accueil.php">Home</a></li>
            <li><a href="#">Avent</a></li>
            <li><a href="#">Compte</a></li>
            <li><a href="#">Création</a></li>
        </ul>
    </nav>
    
    <!-- Search Bar -->
    <div class="navbar">
        <form method="GET" action="">
            <input type="text" placeholder="Mots-clés">
            <input type="submit" value="Rechercher">
        </form>
        <!-- Floating Button -->
        <div class="floating-btn">
            <img src="images/AVent.png" alt="Floating Menu" class="menu_avent">
        </div>
    </div>

<!-- Main Content -->	
	<h1>Avent, créez, partagez, profitez !</h1>
	<div class="logo">
		<img src="../views/images/AVent.png" alt="">
	</div>	
		<div class="info-box">
			<form action="./c_afficher_page_compte.php" method="POST">
				<div class ="titre">
					<h2 class="light">compte</h2>
				</div>
				<!-- <?php if ( isset($error_modif_msg)) echo $error_modif_msg; ?>-->
				<div class="icon">
					<img src="../views/images/user.svg" alt=""/>
				</div>
                <div class = "box">
                    <input type="text" name="nom" value=<?php echo $nom ?>>
					<label>nom</label>
                </div>
                <div class = "box">
                    <input type="text" name="prenom" value="<?php echo $prenom ?>">
					<label>prenom</label>
                </div>
                <div class = "box">
                    <input type="text" name="pseudo" value="<?php echo $pseudo ?>">
					<label>pseudo</label>
                </div>
				<div class = "box">
					<input type="text" name="password" value="<?php echo $mot_de_passe ?>">
					<label>Mot de passe</label>
				</div>
                <div class = "box" >
                    <input type="img" name="pp" value="<?php echo $pp ?>">
					<label>photo de profil</label>
                </div>
				<div class = "sauvegarder">
					<input type="submit" name="c_modif_compte.php" value="Sauvegarder">
				</div>
			</form>
		</div>
</body>
</html>