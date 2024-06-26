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
            <li><a href="./c_deconnexion.php">deco</a></li>
        </ul>
    </div>
    <!-- partie de la création -->
        <div class="container">

            <div class="header">
                <h1>Créez votre AVent !</h1>
                <img src="../views/images/AVent.png" alt="menu" class="menu_avent">
            </div>

            <form action="./c_create_avent.php" class="formulaire" method="POST" enctype="multipart/form-data">
                <div class="info">
                    <p>Les champs obligatoires sont marqués par un *</p><br/>
                    <div class="message">
                        <?php 
                            if (isset($message)) 
                            {
                                echo $message;
                            }
                        ?>
                    </div><br/>
                    <!-- titre de l'évènement -->
                    <label>Nom de votre évènement *</label>
                    <input type="text" name="nom" value="<?php if(isset($_POST["nom"])) echo $_POST['nom'];?>" placeholder="Nom de l'AVent" class="input-text">
                    <!-- Sélection des thèmes -->
                    <label>Choisissez vos différentes thématiques ( Au moins 1 thématique )</label>
                    <div class="themes">
                        <select name="theme1" class="input-text" value="<?php if(isset($_POST["theme1"])) echo $_POST['theme1'];?>">
                            <?php foreach ($themelist as $theme) {
                                echo '<option>'.$theme['theme_name'].'</option>';
                            }; ?>
                        </select>
                        <select name="theme2" class="input-text" value="<?php if(isset($_POST["theme2"])) echo $_POST['theme2'];?>">
                            <?php foreach ($themelist as $theme) {
                                echo '<option>'.$theme['theme_name'].'</option>';
                            }; ?>
                        </select>
                        <select name="theme3" class="input-text" value="<?php if(isset($_POST["theme3"])) echo $_POST['theme3'];?>">
                            <?php foreach ($themelist as $theme) {
                                echo '<option>'.$theme['theme_name'].'</option>';
                            }; ?>
                        </select>
                    </div>
                    <!-- les trois dates (fin, debut, inscription) -->
                    <label>date de début de l'évènement *</label>
                    <input type="date" name="date_debut" class="input-text" value="<?php if(isset($_POST["date_debut"])) echo $_POST['date_debut'];?>">
                    <label>date de fin de l'évènement *</label>
                    <input type="date" name="date_fin" min=<?php echo $date['year'].'-'.$date['mon'].'-'.$date['mday']?> class="input-text" value="<?php if(isset($_POST["date_fin"])) echo $_POST['date_fin'];?>">
                    <label>date de fin de l'inscription</label>
                    <input type="date" name="fin_inscription" min=<?php echo $date['year'].'-'.$date['mon'].'-'.$date['mday']?> class="input-text" value="<?php if(isset($_POST["fin_inscription"])) echo $_POST['fin_inscription'];?>">
                    <!-- description -->
                    <label>Type d'evenement * <br><input type="radio" name="is_public" value="false" /> privé
                    <input type="radio" name="is_public" value="true" /> public</label>
                    <label>Description *</label>
                    <textarea name="information" cols="30" rows="10"  class="input-text-area" ><?php if(isset($_POST["information"])) echo $_POST['information'];?></textarea>
                    <!-- évènement payant + lien billeterie -->
                    <label>Lien de votre site web</label>
                    <input type="text" name="lien_site" value="" placeholder="url site web" class="input-text" value="<?php if(isset($_POST["lien_site"])) echo $_POST['lien_site'];?>">
                    <label>Evenement payant * <br><input type="radio" name="is_payant" value="false" onclick="hide_billeterie(this)"/> Non
                        <input type="radio" name="is_payant" value="true" onclick="show_billeterie(this)"/> Oui</label>
                    <div id='billeterie' style='display:none'>
                    <label>lien de la billeterie *</label>
                    <input type="text" name="lien_billeterie" id="link" value="" placeholder="url billeterie" class="input-text" value="<?php if(isset($_POST["lien_billeterie"])) echo $_POST['lien_billeterie'];?>">
                    </div>
                    <!-- Sous thème -->
                    <label>Vos sous themes ( des mots clés par lesquels les utilisateurs pourront rechercher votre AVent )</label>
                    <div class="sous-theme">
                        <input type="text" name="sous_theme1" class="input-text" value="<?php if(isset($_POST["sous_theme1"])) echo $_POST['sous_theme1'];?>">
                        <input type="text" name="sous_theme2" class="input-text" value="<?php if(isset($_POST["sous_theme2"])) echo $_POST['sous_theme2'];?>">
                        <input type="text" name="sous_theme3" class="input-text" value="<?php if(isset($_POST["sous_theme3"])) echo $_POST['sous_theme3'];?>">
                    </div>
                    <!-- lieu -->
                    <label>Votre lieu</label>
                    <input type="text" name="lieu" placeholder="lieu" class="input-text" value="<?php if(isset($_POST["lieu"])) echo $_POST['lieu'];?>">
                    <label>Capacité</label>
                    <input type="number" name="capacity" class="input-text" value="<?php if(isset($_POST["capacity"])) echo $_POST['capacity'];?>">
                    <label>age minimum</label>
                    <input type="number" name="age_minimum" class="input-text" value="<?php if(isset($_POST["age_minimum"])) echo $_POST['age_minimum'];?>">
                </div>
                    <div class="photo"><!-- Ajout d'une image -->
                    <label>Ajouter/choisissez une image *</label>
                    <input type="file" name="image">
                    <div class="ajout">
                        <input type="submit" value="Ajouter" name="btn-ajouter">
                    </div>
                </div>
                <!-- ajout de l'évènement -->
                
            </form>
            </div>
    </div>
    <!-- logo -->
    
    <script>

        let lien = document.getElementById('billeterie')
        function show_billeterie(checkbox)
        {
            if (checkbox.checked)
            {
                lien.style.display = '';
            }
        }
        function hide_billeterie(checkbox)
        {
            if (checkbox.checked)
            {
                lien.style.display = 'none';
            }
        }
    </script>
</body>
</html>
