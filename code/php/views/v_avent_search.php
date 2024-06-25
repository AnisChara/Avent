<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../views/css/v_avent_search.css">
    <title>result search</title>
</head>
<body>
    <!-- Navigation Bar -->
    <nav class="nav_options">
        <ul>
            <li><a href="./c_accueil.php">Home</a></li>
            <li><a href="./c_avent.php">Avent</a></li>
            <li><a href="./c_afficher_compte.php">Compte</a></li>
            <li><a href="./c_afficher_create_avent.php">Création</a></li>
            <li><a href="./c_deconnexion.php">deco</a></li>
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
    <div class="list_avent_container">
        <!-- Suggestions Section -->
        <div class="list_avent_content">
            <div class="list_avent">
            <?php

                for($n = 0; $n < COUNT($AventList) && $n < 10; $n++)
                {
                    $Avent = get_info_avent_full_display($AventList[$n][0]);
                    if($Avent[0]['createur'] !== null)
                    {
                        $createur = recuperer_info_user($Avent[0]['createur'])['pseudo'];
                    }
                    else
                    {
                        $createur = 'inconnu';
                    }
                    echo'
                        <div class="avent">
                            <form action="./c_afficher_full_avent.php" method="post">
                                <button type="submit" name="avent_id" value="'.$Avent[0]['avent_id'].'" class="">
                                    <div class="image">
                                        <img src=data:image/jpg;base64,'.$Avent[1].' alt="Fond Oasis" class="suggestion-image">
                                        <div class="content">
                                            <strong><p class="titre">'.$Avent[0]['nom'].'</p></strong>
                                            <p class="createur">'.$createur.'</p>
                                        </div>
                                    </div>
                                </button>
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
</body>
</html>