<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href='https://fonts.googleapis.com/css?family=League Spartan' rel='stylesheet'>
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
            <li><a href="./c_deconnexion.php">deconnexion</a></li>
        </ul>
    </div>
    <!-- Floating Button -->
    <div class="floating-btn">
        <img src="../views/images/AVent.png" alt="">
    </div>
    <!-- partie de la création -->
    <form action="./c_create_avent.php" class="formulaire" method="POST" enctype="multipart/form-data">
        <div class="container">
            <div class="header">
                <h2>Créer votre AVent !</h2>
                <p>Les champs obligatoires sont marqués par un *</p><br/>
                <div class="message">
                    <?php 
                    if (isset($message)) 
                    {
                        echo $message;
                    }
                    ?>
                </div>
            </div>
            <div class="container_content">
                <div class="containers">
                    <div class="container_left">
                        <!-- titre de l'évènement -->
                        <label>Nom de votre évènement *</label>
                        <input type="text" name="nom" value="<?php if(isset($_POST["nom"])) echo $_POST['nom'];?>" placeholder="Nom de l'AVent" class="input-text">
                        <!-- les trois dates (fin, debut, inscription) -->
                        <label>Date de début de l'évènement *</label>
                        <input type="date" name="date_debut" class="input-text" value="<?php if(isset($_POST["date_debut"])) echo $_POST['date_debut'];?>">
                        <label>Date de fin de l'évènement *</label>
                        <input type="date" name="date_fin" min=<?php echo $date['year'].'-'.$date['mon'].'-'.$date['mday']?> class="input-text" value="<?php if(isset($_POST["date_fin"])) echo $_POST['date_fin'];?>">
                        <label>Date de fin de l'inscription</label>
                        <input type="date" name="fin_inscription" min=<?php echo $date['year'].'-'.$date['mon'].'-'.$date['mday']?> class="input-text" value="<?php if(isset($_POST["fin_inscription"])) echo $_POST['fin_inscription'];?>">
                        <!-- lieu -->
                        <label>Votre lieu</label>
                        <input type="text" name="lieu" placeholder="Lieu" class="input-text" value="<?php if(isset($_POST["lieu"])) echo $_POST['lieu'];?>">
                        <label>Ajouter/choisissez une image *</label>
                        <div class="image_upload">
                            <input type="file" name="image" onchange="previewPicture(this)" accept=".jpg, .png">
                            <img src="#" alt="" id="image" class="preview_image">
                        </div>
                        <label>Type d'événement * <br><input type="radio" name="is_public" value="false" /> privé
                        <input type="radio" name="is_public" value="true" /> public</label>
                        <!-- évènement payant + lien billeterie -->
                        <label>Lien de votre site web</label>
                        <input type="text" name="lien_site" value="" placeholder="URL site web" class="input-text">
                        <label>Évènement payant * <br><input type="radio" name="is_payant" value="false" onclick="hide_billeterie(this)"/> Non
                            <input type="radio" name="is_payant" value="true" onclick="show_billeterie(this)"/> Oui</label>
                        <div id='billeterie' style='display:none'>
                            <label>Lien de la billeterie *</label>
                            <input type="text" name="lien_billeterie" id="link" value="" placeholder="URL billeterie" class="input-text">
                        </div>
                    </div>
                    <div class="container_right">
                        <!-- description -->
                        <label>Description *</label>
                        <textarea name="information" cols="30" rows="10"  class="input-text-area"><?php if(isset($_POST["information"])) echo $_POST['information'];?></textarea>
                        <!-- Sélection des thèmes -->
                        <label>Choisissez vos différentes thématiques ( Au moins 1 thématique )</label>
                        <div class="themes">
                            <select name="theme1" class="input-text">
                                <?php foreach ($themelist as $theme) {
                                    echo '<option>'.$theme['theme_name'].'</option>';
                                }; ?>
                            </select>
                            <select name="theme2" class="input-text">
                                <?php foreach ($themelist as $theme) {
                                    echo '<option>'.$theme['theme_name'].'</option>';
                                }; ?>
                            </select>
                            <select name="theme3" class="input-text">
                                <?php foreach ($themelist as $theme) {
                                    echo '<option>'.$theme['theme_name'].'</option>';
                                }; ?>
                            </select>
                        </div>
                        <!-- Sous thème -->
                        <label>Vos sous thèmes (des mots clés par lesquels les utilisateurs pourront rechercher votre AVent)</label>
                        <div class="sous-theme">
                            <input type="text" name="sous_theme1" class="input-text">
                            <input type="text" name="sous_theme2" class="input-text">
                            <input type="text" name="sous_theme3" class="input-text">
                        </div>
                        <!-- Capacité -->
                        <label>Capacité</label>
                        <input type="number" name="capacity" class="input-text">
                        <label>Age minimum</label>
                        <input type="number" name="age_minimum" class="input-text">      
                    </div>
                </div>
                <div class="ajout">
                    <input type="submit" value="Ajouter" name="btn-ajouter" class="btn-ajouter">
                </div>
            </div>
        </div>
    </form>
    <script>
        let lien = document.getElementById('billeterie');
        function show_billeterie(checkbox) {
            if (checkbox.checked) {
                lien.style.display = '';
            }
        }
        function hide_billeterie(checkbox) {
            if (checkbox.checked) {
                lien.style.display = 'none';
            }
        }

        let image = document.getElementById("image");
        let previewPicture = function (e) {
            const [picture] = e.files;
            if (picture) {
                let reader = new FileReader();
                reader.onload = function (e) {
                    image.src = e.target.result;
                }
                reader.readAsDataURL(picture);
            }
        } 
    </script>
</body>
</html>
