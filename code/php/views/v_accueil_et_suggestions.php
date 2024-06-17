<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Accueil et Suggestions</title>
    <link rel="stylesheet" href="../views/css/v_accueil_et_suggestions.css">
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
    <div class="main-content">
        <!-- Suggestions Section -->
        <div class="container_sug">
            <div class="suggestion">
            <?php
                if($_COOKIE['suggestion'] > COUNT(get_suggestion(get_userID($_COOKIE['email']))) || $AventDisplay == null)
                {
                    echo'
                        <p class ="endsuggestion">Vous avez vu tous les avents disponibles !</p>
                        <div class="nav-buttons right">
                        <form action="./c_change_suggestion.php" method="post">
                            <button type="submit" name="action" value="plus" class="nav-link">up</button>
                        </form>
                        </div>
                    ';
                }
                else
                {
                    echo'
                        <div class="card">
                        <form action ="./c_afficher_full_avent.php" method ="post">
                            <button type="submit" name="avent_id" value ="'.$AventDisplay['avent_id'].'" class = "image">
                        </form>
                            <div class="image">
                                <img src=data:image/jpg;base64,'.img_avent($AventDisplay['avent_id']).' alt="" class="suggestion-image">
                            </div>
                            <div class="contente">
                                <div class="content">
                                    <h2 class="titre">'.$AventDisplay['nom'].'</h2>
                                    <p class="description">'.$AventDisplay['information'].'</p>
                                </div>
                            </div>
                        </div>
            
                            <!-- Ajout d"autres cartes si nécessaire -->
                        </div>
                        <!-- Boutons de navigation -->
                        <div class="nav-buttons left">
                            <button class="nav-button">theme_1</button>
                            <button class="nav-button">theme_2</button>
                            <button class="nav-button">theme_3</button>
                        </div>
                        <div class="nav-buttons right">
                            <form action="./c_change_suggestion.php" method="post">
                                <button type="submit" name="action" value="plus" class="nav-link">up</button>
                            </form>
                            <form action="./c_change_suggestion.php" method="post">
                                <button type="submit" name="action" value="like" class=';if($like == true){echo "nav-link";}else{echo "nav-link";} echo '>like</button>
                            </form>
                            <form action="./c_change_suggestion.php" method="post">
                                <button type="submit" name="action" value="minus" class="nav-link">down</button>
                            </form>
                        </div>
                        ';
                }
                        ?>
                </div>
        </div>
    </div>
</body>
</html>
