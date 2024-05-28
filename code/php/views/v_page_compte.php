<!DOCTYPE html>
<html>
	<head>
		<title>info compte</title>
		<link rel="stylesheet" type="text/css" href="v_user_info.css">
		<meta charset="utf-8">
	</head>
<body>	
	<h1>Avent, créez, partagez, profitez !</h1>
	<div class="logo">
		<img src="AVent.png" alt="">
	</div>	
		<div class="info-box">
			<form action="./c_afficher_page_compte.php" method="POST">
				<div class ="titre">
					<h2 class="light">compte</h2>
				</div>
				<!-- <?php if ( isset($error_modif_msg)) echo $error_modif_msg; ?>-->
				<div class="icon">
					<img src="user.svg" alt=""/>
				</div>
                <div class = "box">
                    <input type="text" name="nom" value="">
					<label>nom</label>
                </div>
                <div class = "box">
                    <input type="text" name="prenom" value="">
					<label>prenom</label>
                </div>
                <div class = "box">
                    <input type="text" name="pseudo" value="">
					<label>pseudo</label>
                </div>
				<div class = "box">
					<input type="password" name="password" value="">
					<label>Mot de passe</label>
				</div>
                <div class = "box" >
                    <input type="img" name="pp" value="">
					<label>photo de profil</label>
                </div>
				<div class = "sauvegarder">
					<input type="submit" name="c_modif_compte.php" value="Sauvegarder">
				</div>
			</form>
		</div>
</body>
</html>