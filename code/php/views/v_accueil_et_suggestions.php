<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Accueil et Suggestions</title>
    <link rel="stylesheet" href="../views/css/v_accueil_et_suggestions.css">
</head>
<body>
    <!-- Menu Toggle Button -->
    <div class="menu-toggle">
        <div class="circle-btn">
            <p class="color">></p>
        </div>
    </div>

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
    <div class="main-content">
        <!-- Suggestions Section -->
        <div class="container_sug">
            <div class="suggestion">
                <?php
                    if ($_COOKIE['suggestion'] > COUNT(get_suggestion(get_userID($_COOKIE['email']))) || $AventDisplay == null) {
                        echo '
                            <p class="endsuggestion">Vous avez vu tous les avents disponibles !</p>
                            <div class="nav-buttons right">
                                <form action="./c_change_suggestion.php" method="post">
                                    <button type="submit" name="action" value="plus" class="nav-link">up</button>
                                </form>
                            </div>
                        ';
                    } else {
                        echo '
                            <div class="card">
                                <form action="./c_afficher_full_avent.php" method="post">
                                    <button type="submit" name="avent_id" value="'.$AventDisplay['avent_id'].'" class="card">
                                        <div class="image">
                                            <img src="data:image/jpg;base64,'.img_avent($AventDisplay['avent_id']).'" alt="" class="suggestion-image">
                                        </div>
                                        <div class="contente">
                                            <div class="content">
                                                <h2 class="titre">'.$AventDisplay['nom'].'</h2>
                                                <p class="description">'.$AventDisplay['information'].'</p>
                                            </div>
                                        </div>
                                    </button>
                                </form>
                                <!-- Boutons de navigation -->
                            <div class="nav-buttons left">';
                        foreach ($themelist as $theme)
                        {
                            if ($theme !== 'Aucune') echo '<button  class="nav-link-image" disbaled><img src="../views/images/'.$theme.'.png" class="image"></button>';
                        }

                        if ($like === false) $like_image = "like";
                        else $like_image = "unlike";

                        echo' 
                            </div>
                            <div class="nav-buttons right">
                                <form action="./c_change_suggestion.php" method="post">
                                    <button type="submit" name="action" value="plus" class="nav-link"><img src="../views/images/up.png" class="image"></button>
                                </form>
                                <form action="./c_change_suggestion.php" method="post">
                                    <button type="submit" name="action" value="like" class="nav-link"><img src="../views/images/'.$like_image.'.png" class="image"></button>
                                </form>
                                <form action="./c_change_suggestion.php" method="post">
                                    <button type="submit" name="action" value="minus" class="nav-link"><img src="../views/images/down.png" class="image"></button>
                                </form>
                            </div>
                            </div>
                        ';
                    }
                ?>
            </div>
        </div>
    </div>
    <script>
        document.addEventListener('DOMContentLoaded', function() {
            const menuToggle = document.querySelector('.menu-toggle');
            const navOptions = document.querySelector('.nav_options');
            const circleBtn = document.querySelector('.circle-btn');

            circleBtn.addEventListener('click', function() {
                navOptions.classList.toggle('show');
            });
        });
    </script>
</body>
</html>