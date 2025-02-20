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
            <li><a href="./c_accueil.php"><img src="../views/images/home.png" class="nav_image">Home</a></li>
            <li><a href="./c_avent.php"><img src="../views/images/my_avent.png" class="nav_image">Avent</a></li>
            <li><a href="./c_afficher_compte.php"><img src="../views/images/compte.png" class="nav_image">Compte</a></li>
            <li><a href="./c_afficher_create_avent.php"><img src="../views/images/creation.png" class="nav_image">Création</a></li>
            <li><a href="./c_deconnexion.php"><img src="../views/images/deconnexion.png" class="nav_image">deconnexion</a></li>
        </ul>
    </nav>
    <!-- Floating Button -->
    <div class="floating-btn">
        <img src="../views/images/AVent.png" alt="Floating Menu" class="menu_avent">
    </div>
    <form action="c_modif_compte.php" method="POST">
        <div class="container">
            <div class="container_content">
                <div class="container_left">
                    <div class="user">
                        <img src="../views/images/user.svg" alt="">
                    </div>
                    <div class="box_start">
                        <label>pseudo</label>
                        <input type="text" name="pseudo" value="<?php echo $info['pseudo'] ?>">
                                
                                <label>thèmes favoris</label>
                                <?php
                                    foreach ($themelist as $theme)
                                    {
                                        echo '<button class="nav_button" disabled>'.$theme.'</button>';
                                    }    
                                ?> 
                            </div>
                    </div>
                    <div class="container_right">
                        <h2>Votre Profil</h2>
                        <div class="box">
                            <div class="box_one">
                                <!-- <?php if ( isset($error_modif_msg)) echo $error_modif_msg; ?>-->
                                <label>nom</label>
                                <input type="text" name="nom" value=<?php echo $info['nom'] ?>>
                                <label>prenom</label>
                                <input type="text" name="prenom" value="<?php echo $info['prenom'] ?>">
                                <label>Date de Naissance</label>
                                <input type="text" name="date_de_naissance" placeholder="jj/mm/aaaa" value="<?php echo $info['date_naissance']?>">
                            </div>
                            <div class="box_two">
                                <label>email</label>
                                <input type="text" name="email" value="<?php echo $info['email']?>">
                                <label>Mot de passe</label>
                                <input type="password" name="mot_de_passe" value="<?php echo $info['mot_de_passe']?>">
                            </div>
                            <div class="sauvegarder">
                                <input type="submit" value="Sauvegarder">
                            </div>
                        </div>
                    </div>
                </div>
            </div>  
        </div>
    </form>
</body>
</html>
