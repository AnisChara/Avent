<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../views/css/v_avent_search.css">
    <title>Result Search</title>
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
            // mettre dans un controller
            $avent_page = 6;
            $page_affiche = isset($_GET['page']) ? (int)$_GET['page'] : 1;
            $debut = ($page_affiche - 1) * $avent_page;

            for ($n = $debut; $n < min($debut + $avent_page, count($AventList)); $n++) {
                $Avent = get_info_avent_full_display($AventList[$n][0]);
                if ($Avent[0]['createur'] !== null) {
                    $createur = recuperer_info_user($Avent[0]['createur'])['pseudo'];
                } else {
                    $createur = 'inconnu';
                }
                echo '
                    <form action="./c_add_search.php" method="post">
                        <button type="submit" name="avent_id" value="' . $Avent[0]['avent_id'] . '" class="">
                            <fieldset>
                                <div class="avent">
                                    <div class="image">
                                        <img src="data:image/jpg;base64,' . $Avent[1] . '" class="suggestion-image">
                                    </div>
                                    <div class="content">
                                        <strong><p class="titre">' . $Avent[0]['nom'] . '</p></strong>
                                        <p class="createur">' . $createur . '</p>
                                    </div>
                                </div>
                            </fieldset>
                        </button>
                    </form>
                ';
            }
            ?>
            </div>
            <!-- Pagination -->
            <div class="pagination">
                <?php
                // a mettre dans le controller 
                $total_page = ceil(count($AventList) / $avent_page);
                
                // view 
                for ($i = 1; $i <= $total_page; $i++) {
                    echo '<a href="?page=' . $i . '" class="' . ($i === $page_affiche ? 'active' : '') . '">' . $i . '</a>';
                }
                ?>
            </div>
        </div>
    </div>
</body>
</html>
