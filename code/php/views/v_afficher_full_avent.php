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
            <li><a href="./c_deconnexion.php">deconnexion</a></li>
        </ul>
    </nav>

    <!-- Search Bar -->
    <div class="navbar">
        <form method="POST" action="./c_search.php">
            <input type="text" name="search" placeholder="Mots-clés">
            <input type="submit" name="res" value="Rechercher">
        </form>
        <!-- Floating Button -->
        <div class="floating-btn">
            <img src="../views/images/AVent.png" alt="Floating Menu" class="menu_avent">
        </div>
    </div>

    <!-- Main Content -->
    <div class="main_content">
        <div class="event_presentation">
            <div class="text_section">
                <h1 class="titre"><?php echo $avent[0]["nom"]; ?></h1>
                
                <div class="category">
                    <h2>Informations Générales</h2>
                    <p class="createur"><strong>Créateur:</strong> <?php echo $avent[0]["createur"]; ?></p>
                    <p class="description"><strong>Description:</strong> <?php echo $avent[0]["information"] ?? "Le créateur n'a pas fourni d'information"; ?></p>
                </div>
                
                <div class="category">
                    <h2>Détails de l'Événement</h2>
                    <p class="debut"><strong>Date de début:</strong> <?php echo $avent[0]["date_debut"]; ?></p>
                    <p class="fin"><strong>Date de fin:</strong> <?php echo $avent[0]["date_fin"]; ?></p>
                    <p class="deadline"><strong>Fin des inscriptions:</strong> <?php echo $avent[0]["fin_inscription"]; ?></p>
                    <p class="site"><strong>Site:</strong> <a href="<?php echo $avent[0]["lien_site"]; ?>"><?php echo $avent[0]["lien_site"]; ?></a></p>
                    <p class="billeterie"><strong>Billeterie:</strong> <a href="<?php echo $avent[0]["lien_billeterie"]; ?>"><?php echo $avent[0]["lien_billeterie"]; ?></a></p>
                    <p class="lieu"><strong>Lieu:</strong> <?php echo $avent[0]["lieu"]; ?></p>
                </div>
                
                <div class="category">
                    <h2>Autres Informations</h2>
                    <p class="capacity"><strong>Capacité d'accueil:</strong> <?php echo $avent[0]["capacity"]; ?></p>
                    <p class="prix"><strong>Payant:</strong> <?php echo $avent[0]["is_payant"] == 1 ? 'Oui' : 'Non'; ?></p>
                    <p class="creation"><strong>Date de création:</strong> <?php echo $avent[0]["date_creation"]; ?></p>
                    <p class="age"><strong>Âge minimum:</strong> <?php echo $avent[0]["age_minimum"]; ?></p>
                    <p class="stheme"><strong>Sous thématiques:</strong> <?php echo COUNT($avent[5]) == 0 ? 'Aucune sous thématiques données' : implode(', ', $avent[4]); ?></p>
                </div>
                
                <?php if($_COOKIE['email'] == $emailCreator) { ?>
                    <div class="category">
                        <h2>Informations de l'Organisateur</h2>
                        <p class="inscrit"><strong>Nombre d'inscrits:</strong> <?php echo $avent[2]; ?></p>
                        <p class="favoris"><strong>Nombre de favoris:</strong> <?php echo $avent[3]; ?></p>
                        <div class="buttons">
                            <form action="./c_afficher_full_avent.php" method="post">
                                <button type="submit" name="edit" value="true" class="back-link">Éditer</button>
                            </form>
                            
                            <form action="./c_afficher_tache.php" method="POST">
                                <button type="submit" name="avent_id" value="<?php echo $_POST['avent_id']; ?>" class="back-link">Tâche</button>
                            </form>
                        </div>
                    </div>
                <?php } ?>

                <div class="buttons">
                    <a href="<?php echo $_COOKIE['MotherURL']; ?>" class="back-link">Retour</a>

                    <?php $action = $inscrit === true ? 'se désinscrire' : 's\'inscrire'; ?>
                    <form action="./c_inscription_avent.php" method="POST">
                        <button type="submit" name="avent_id" value="<?php echo $_POST['avent_id']; ?>" class="back-link"><?php echo $action; ?></button>
                    </form>
                    <?php
                    if ($like === false) $like_image = "like";
                        else $like_image = "unlike";

                    echo '
                    <form action="./c_afficher_full_avent.php" method="post" class="form-like">
                        <button type="submit" name="action" value="like" class="like"><img class="like" src="../views/images/'.$like_image.'.png"></button>
                        <input type="hidden" name="avent_id" value="'.$_POST['avent_id'].'"/>
                    </form>
                    '
                    ?>
                </div>
            </div>
            <div class="image_section">
                <img src="data:image/jpg;base64,<?php echo $avent[1]; ?>" alt="Event Poster" class="event-image">
                <!--<div class="buttons">
                    <a href="<?php //echo $_COOKIE['MotherURL']; ?>" class="back-link">Retour</a>

                    <?php //$action = $inscrit === true ? 'se désinscrire' : 's\'inscrire'; ?>
                    <form action="./c_inscription_avent.php" method="POST">
                        <button type="submit" name="avent_id" value="<?php //echo $_POST['avent_id']; ?>" class="back-link"><?php //echo $action; ?></button>
                    </form>
                    <?php /*
                    if ($like === false) $like_image = "like";
                        else $like_image = "unlike";

                    echo '
                    <form action="./c_afficher_full_avent.php" method="post" class="form-like">
                        <button type="submit" name="action" value="like" class="like"><img class="like" src="../views/images/'.$like_image.'.png"></button>
                        <input type="hidden" name="avent_id" value="'.$_POST['avent_id'].'"/>
                    </form>
                    '*/
                    ?>
                </div>-->
            </div>
        </div>
    </div>
</body>
</html>
