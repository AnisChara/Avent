<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/v_afficher_full_avent.css">
    <title>AVent display</title>
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
<div class="main_content">
    <div class="avent_container">
        <div class="avent">
            <div class="card_avent">
                <div class="image">
                    <img src="images/fond_oasis.jpg" alt="Fond Oasis" class="suggestion-image">
                </div>
                <div class="full_content">
                    <div class="full">
                        <?php echo '
                        <strong><p class="titre">titre:'. $avent[0]["title"] . '</p></strong>
                        <p class="createur">Créateur:' .  $avent[0]["creator"] .'</p>
                        <p class="description">description:' .  $avent[0]["information"].'</p>
                        <p class="debut">date_debut:' .  $avent[0]["date_debut"].'</p>
                        <p class="fin">date_fin:' .  $avent[0]["date_fin"].'</p>
                        <p class="deadline">fin_inscription:'  . $avent[0]["fin_inscription"].'</p>
                        <p class="site">lien_site:'  . $avent[0]["lien_site"].'</p>
                        <p class="billeterie">lien_billeterie:'  . $avent[0]["lien_billeterie"].'</p>
                        <p class="lieu">lieu:'  . $avent[0]["lieu"].'</p>
                        <p class="capacity">capacity:'  . $avent[0]["capacity"].'</p>
                        <p class="prix">is_payant:'  . $avent[0]["is_payant"].'</p>
                        <p class="creation">date_creation:'  . $avent[0]["date_creation"].'</p>
                        <p class="age">age_minimum :'  . $avent[0]["age_minimum"].'</p>
                        <p class="stheme">sous_theme :' . $avent[0]["sous_theme"].'</p> '
                        ?>
                        </div>
                </div>
            </div>
        </div>
    </div>
</div>
</body>
</html>
