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
            <fieldset>
            <div class="liste-produits">
                <form class="produit" action="" method="POST">
                    <div class="message">
                        <?php 
                            if (isset($message)) 
                            {
                                echo $message;
                            }
                        ?>
                    </div>
                    <input type="text" name="nom" value="" placeholder="Nom de l'AVent">
                    <label>Choisissez vos différentes thématiques</label>
                    <select name="theme1">
                        <option></option>
                        <?php foreach ($themelist as $theme) {
                            echo '<option>'.$theme['theme_name'].'</option>';
                        }; ?>
                    </select>
                    <select name="theme2">
                        <option></option>
                        <?php foreach ($themelist as $theme) {
                            echo '<option>'.$theme['theme_name'].'</option>';
                        }; ?>
                    </select>
                    <select name="theme3">
                        <option></option>
                        <?php foreach ($themelist as $theme) {
                            echo '<option>'.$theme['theme_name'].'</option>';
                        }; ?>
                    </select>
                    <label>date de début de l'évènement</label>
                    <input type="date">
                    <label>date de fin de l'évènement</label>
                    <input type="date">
                    <label>date de fin de l'inscription</label>
                    <input type="date">
                    <label><input type="checkbox" name="interest" value="" /> Évènement publique</label>
                    <label>Description :</label>
                    <textarea name="information" cols="30" rows="10"></textarea>
                    <label>Lien de votre site web (facultatif)</label>
                    <input type="text" name="lien" value="" placeholder="url site web">
                    <label><input type="checkbox" name="interest" value="" /> Évènement payant</label>
                    <label>lien de la billeterie</label>
                    <input type="text" name="billeterie" value="" placeholder="url billeterie">
                    <label>Autre Tag :</label>
                    <textarea name="tag" cols="30" rows="10"></textarea>
                    <label>Ajouter une image</label>
                    <input type="file" name="image">
                    <div class="image">
                        <div class="image-prod">
                            <img src="../views/images/fond_oasis.jpg" alt="Affiche d'événement">
                        </div>
                    </div>
                    <div class="ajout">
                        <input type="submit" value="Ajouter" name="btn-ajouter">
                    </div>
                </form>
            </div>
            </fieldset>
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
