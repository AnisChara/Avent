<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../views/css/v_afficher_full_avent.css">
    <title>AVent display</title>
</head>
<body>
    <!-- Navigation Bar -->
    <nav class="nav_options">
        <ul>
            <li><a href="./c_accueil.php">Home</a></li>
            <li><a href="./c_avent.php">Avent</a></li>
            <li><a href="./c_afficher_compte.php">Compte</a></li>
            <li><a href="./c_afficher_create_avent.php">Création</a></li>
        </ul>
    </nav>
    
    <!-- Search Bar -->
    <div class="navbar">
        <form method="GET" action="">
            <input type="text" name="search" placeholder="Mots-clés">
            <input type="submit" name="res" value="Rechercher">
        </form>
        <!-- Floating Button -->
        <div class="floating-btn">
            <img src="../views/images/AVent.png" alt="Floating Menu" class="menu_avent">
        </div>
    </div>

<!-- Main Content -->
 <?php echo '
<div class="main_content">
    <div class="avent_container">
        <div class="avent">
            <div class="card_avent">
                <div class="image">
                    <img src=data:image/jpg;base64,'.$avent[1].' alt="" class="suggestion-image">
                </div>
                <div class="full_content">
                    <div class="full">
                        <strong><p class="titre">titre:'. $avent[0]["nom"] . '</p></strong>
                        <p class="createur">Créateur:' .  $avent[0]["createur"] .'</p>
                        <p class="description">description:'; if($avent[0]["information"] == null){echo 'Le créateur n'."'".'a pas fourni d'."'".'information';}else{echo $avent[0]["information"];} echo'</p>
                        <p class="debut">date_debut:' .  $avent[0]["date_debut"].'</p>
                        <p class="fin">date_fin:' .  $avent[0]["date_fin"].'</p>
                        <p class="deadline">fin_inscription:'  . $avent[0]["fin_inscription"].'</p>
                        <p class="site">lien_site:'  . $avent[0]["lien_site"].'</p>
                        <p class="billeterie">lien_billeterie:'  . $avent[0]["lien_billeterie"].'</p>
                        <p class="Lieu">lieu:'  . $avent[0]["lieu"].'</p>
                        <p class="capacity">capacité d'."'".'accueil :'  . $avent[0]["capacity"].'</p>
                        <p class="prix">payant:'; if($avent[0]["is_payant"] == 1){echo 'oui';}else{echo 'non';};echo '</p>
                        <p class="creation">date de création:'  . $avent[0]["date_creation"].'</p>
                        <p class="age">Âge minimum :'  . $avent[0]["age_minimum"].'</p>
                        <p class="stheme">Sous thèmatiques :'; if(COUNT($avent[5]) == 0){echo 'Aucune sous thèmatiques données';}else{foreach($avent[4] as $theme){echo $theme.', ';}};echo '</p> ';
                        if($_COOKIE['email'] == $emailCreator)
                        {
                            echo '
                            <p class="inscrit">nombre d'."'".'inscrit :'  . $avent[2].'</p>
                            <p class="favoris">nombre de favoris:'  . $avent[3].'</p>
                            <form action ="./c_afficher_full_avent.php" method ="post">
                            <button type="submit" name="edit" value ="true" class = "edit">
                            </form>
                            ';
                        }
                        ?>
                        </div>
                </div>
                <a href=<?php echo '"'.$_COOKIE['MotherURL'].'"'?>>Retour</a>
                <form action="./c_afficher_tache.php" method="POST">
                    <button type="submit" name="avent_id" value='<?php echo $_POST['avent_id']?>' class = "tache">Tâche</button>
                </form>
            </div>
        </div>
    </div>
</div>
</body>
</html>
