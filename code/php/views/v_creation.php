<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../views/css/v_creation.css">
    <title>Création AVent</title>
</head>
<body>
    <!-- partie de redirection vers différentes pages -->
    <div class="nav_options">
        <ul>
            <li><a href="./c_accueil.php">Home</a></li>
            <li><a href="./c_avent.php">Avent</a></li>
            <li><a href="./c_afficher_compte.php">Compte</a></li>
            <li><a href="./c_afficher_create_avent.php">Création</a></li>
        </ul>
    </div>
    <!-- partie de la création -->
    <section class="result">
        <div class="result-content">
            <h3>Créer votre AVent !</h3>
            <div class="liste-produits">
                <form class="produit" action="" method="POST">
                    <!-- message d'erreur -->
                <form class="produit" action="c_create_avent.php" method="POST" enctype="multipart/form-data">
                    <div class="info">
                        <p>Les champs obligatoires sont marqués par un *</p><br/>
                        <div class="message">
                            <?php 
                                if (isset($message)) 
                                {
                                    echo $message;
                                }
                            ?>
                        </div>
                        <!-- titre de l'évènement -->
                        <label>Nom de votre évènement *</label>
                        <input type="text" name="nom" value="" placeholder="Nom de l'AVent" class="input-text">
                        <!-- Sélection des thèmes -->
                        <label>Choisissez vos différentes thématiques ( Au moins 1 thématique )</label>
                        <select name="theme1" class="input-text">
                            <option>Aucune</option>
                            <?php foreach ($themelist as $theme) {
                                echo '<option>'.$theme['theme_name'].'</option>';
                            }; ?>
                        </select>
                        <select name="theme2" class="input-text">
                            <option>Aucune</option>
                            <?php foreach ($themelist as $theme) {
                                echo '<option>'.$theme['theme_name'].'</option>';
                            }; ?>
                        </select>
                        <select name="theme3" class="input-text">
                            <option>Aucune</option>
                            <?php foreach ($themelist as $theme) {
                                echo '<option>'.$theme['theme_name'].'</option>';
                            }; ?>
                        </select>
                        <!-- les trois dates (fin, debut, inscription) -->
                        <label>date de début de l'évènement *</label>
                        <input type="date" name="date_debut" class="input-text">
                        <label>date de fin de l'évènement *</label>
                        <input type="date" name="date_fin" min=<?php echo $date['year'].'-'.$date['mon'].'-'.$date['mday']?> class="input-text">
                        <label>date de fin de l'inscription</label>
                        <input type="date" name="fin_inscription" min=<?php echo $date['year'].'-'.$date['mon'].'-'.$date['mday']?> class="input-text">
                        <!-- description -->
                        <label>Type d'evenement * <br><input type="radio" name="is_public" value="false" />privé
                        <input type="radio" name="is_public" value="true" />public</label>
                        <label>Description *</label>
                        <textarea name="information" cols="30" rows="10"  class="input-text-area"></textarea>
                        <!-- évènement payant + lien billeterie -->
                        <label>Lien de votre site web</label>
                        <input type="text" name="lien_site" value="" placeholder="url site web" class="input-text">
                        <label>Evenement payant * <br><input type="radio" name="is_payant" value="false" />Non
                            <input type="radio" name="is_payant" value="true" id="price"/>Oui</label>
                        <label>lien de la billeterie *</label>
                        <input type="text" name="lien_billeterie" id="link" value="" placeholder="url billeterie" class="input-text">
                        <!-- Sous thème -->
                        <label>Vos sous themes</label>
                        <input type="text" name="sous_theme1" class="input-text">
                        <input type="text" name="sous_theme2" class="input-text">
                        <input type="text" name="sous_theme3" class="input-text">
                        <!-- lieu -->
                        <label>Votre lieu</label>
                        <input type="text" name="lieu" value="" placeholder="lieu" class="input-text">
                        <label>Capacité</label>
                        <input type="number" name="capacity" class="input-text">
                        <label>age minimum</label>
                        <input type="number" name="age_minimum" class="input-text">
                    </div>
                        <div class="photo"><!-- Ajout d'une image -->
                        <label>Ajouter/choisissez une image *</label>
                        <input type="file" name="image">
                        <input type="checkbox" id="imagetest">
                        <div class="image">
                            <div class="image-prod">
                                <img src="../views/images/fond_blanc.jpeg" alt="Affiche d'événement">
                            </div>
                        </div>
                    </div>
                    <!-- ajout de l'évènement -->
                    <div class="ajout">
                        <input type="submit" value="Ajouter" name="btn-ajouter">
                    </div>
                </form>
            </div>
        </div>
    </section>
    <!-- logo -->
    <div class="logo">
        <img src="../views/images/AVent.png" alt="menu" class="menu_avent">
    </div>
    <script>
    </script>
</body>
</html>
